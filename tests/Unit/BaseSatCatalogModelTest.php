<?php

declare(strict_types=1);

namespace PhpCfdi\LaravelSatCatalogs\Tests\Unit;

use DateTimeImmutable;
use DateTimeInterface;
use Exception;
use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;
use PhpCfdi\LaravelSatCatalogs\Tests\TestCase;

class BaseSatCatalogModelTest extends TestCase
{
    private function createBaseModel(?string $since, ?string $until): BaseSatCatalogModel
    {
        return new class ($since, $until) extends BaseSatCatalogModel {
            public ?string $vigencia_desde;
            public ?string $vigencia_hasta;

            public function __construct(?string $since, ?string $until)
            {
                parent::__construct();
                $this->vigencia_desde = $since;
                $this->vigencia_hasta = $until;
            }
        };
    }

    /**
     *
     * @return array<string, array{string|null, string|null, string|int|DateTimeImmutable, bool}>
     */
    public function datesProvider(): array
    {
        return [
            'valid date' => ['2019-12-30', '2019-12-30', '2019-12-30', true],
            'valid without until' => ['2019-12-30', '', '2019-12-30', true],
            'valid without dates' => [null, null, '2019-12-30', true],
            'valid int' => ['2019-12-30', '2019-12-30', strtotime('2019-12-30'), true],
            'valid DateTime' => ['2019-12-30', '2019-12-30', new DateTimeImmutable('2019-12-30'), true],
            'valid date with empty value to check' => ['2019-12-30', null, '', true],
             // expected is not valid on
            'invalid until' => ['2019-12-30', '2019-12-30', '2019-12-31', false],
            'invalid since' => ['2019-12-30', '2019-12-30', '2019-12-29', false],
        ];
    }

    /**
     *
     * @param string|int|DateTimeInterface $dateToCheck
     *
     * @dataProvider datesProvider
     *
     */
    public function test_is_valid_on_given_date(?string $since, ?string $until, mixed $dateToCheck, bool $expected): void
    {
        $baseModel = $this->createBaseModel($since, $until);

        $this->assertSame($expected, $baseModel->isValidOn($dateToCheck));
    }

    public function test_invalid_date_to_chech_throws_exception(): void
    {
        $dateToCheck = 'invalide-date';
        $baseModel = $this->createBaseModel('2019-12-30', '2019-12-30');

        $this->expectException(Exception::class);

        $baseModel->isValidOn($dateToCheck);
    }
}
