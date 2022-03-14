<?php

declare(strict_types=1);

namespace PhpCfdi\LaravelSatCatalogs\Tests\Unit;

use Phpcfdi\LaravelSatCatalogs\Models\ComercioExterior\CceClavesPedimentos;
use PhpCfdi\LaravelSatCatalogs\Tests\TestCase;

class ComercioExteriorTest extends TestCase
{
    public function test_claves_pedimentos(): void
    {
        $this->assertEquals([
            [
                'id' => 'A1',
                'texto' => 'IMPORTACION O EXPORTACION DEFINITIVA'
            ]
        ], CceClavesPedimentos::get()->toArray());
    }
}
