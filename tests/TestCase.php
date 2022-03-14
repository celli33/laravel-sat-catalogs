<?php

declare(strict_types=1);

namespace PhpCfdi\LaravelSatCatalogs\Tests;

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
                        'database' => __DIR__ . '/../catalogs.db',
                        'prefix' => '',
                        'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
                    ]
                ]
            ]
        ]);
    }
}
