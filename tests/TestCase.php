<?php

declare(strict_types=1);

namespace PhpCfdi\LaravelSatCatalogs\Tests;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
        Config::set([
            'database' => [
                'connections' => [
                    'catalogs' => [
                        'driver' => 'sqlite',
                        'url' => null,
                        'database' => realpath(__DIR__ . '/../catalogs.db'),
                        'prefix' => '',
                        'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
                    ],
                ],
            ],
        ]);
    }

    /**
     * @param array<string> $expectedProperties
     */
    public function assertExpectedModelKeys(Model $model, array $expectedProperties): void
    {
        $keys = array_keys($model->toArray());
        $this->assertEquals($expectedProperties, $keys);
    }

    /**
     * Assert tableName is $expectedTableName has $expectedRows count and $expectedKeys in table
     *
     * @param array<string> $expectedKeys
     */
    public function assertTableNamePropertiesAndCount(string $modelName, string $expectedTableName, array $expectedKeys, int $expectedRows): void
    {
        $tableName = $modelName::query()->getQuery()->from;
        $this->assertEquals($expectedRows, $modelName::count(), "The expected count of ${tableName} table has changed.");
        $model = $modelName::first();
        $this->assertExpectedModelKeys($model, $expectedKeys);
        $this->assertEquals($expectedTableName, $tableName);
    }
}
