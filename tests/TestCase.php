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
                        'read' => [
                            'database' => realpath(__DIR__ . '/catalogs.db'),
                        ],
                        'write' => [
                            'database' => '',
                        ],
                    ],
                ],
            ],
        ]);
    }

    /**
     * @param array<int, string> $expectedProperties
     */
    public function assertExpectedModelKeys(Model $model, array $expectedProperties): void
    {
        $keys = array_keys($model->toArray());
        $this->assertEquals($expectedProperties, $keys);
    }

    /**
     * Assert tableName is $expectedTableName has $expectedRows count and $expectedKeys in table
     *
     * @param array<int, string> $expectedKeys
     */
    public function assertTableNamePropertiesAndCount(string $modelName, string $expectedTableName, array $expectedKeys): void
    {
        $tableName = $modelName::query()->getQuery()->from;
        $model = $modelName::first();
        $this->assertExpectedModelKeys($model, $expectedKeys);
        $this->assertEquals($expectedTableName, $tableName);
    }
}
