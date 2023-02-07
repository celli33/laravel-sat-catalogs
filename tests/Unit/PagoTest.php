<?php

declare(strict_types=1);

namespace PhpCfdi\LaravelSatCatalogs\Tests\Unit;

use Phpcfdi\LaravelSatCatalogs\Models\Pago\PagoTipoCadenaPago;
use PhpCfdi\LaravelSatCatalogs\Tests\TestCase;

class PagoTest extends TestCase
{
    public function test_claves_pedimentos(): void
    {
        $expectedKeys = [
            'id',
            'texto',
        ];
        $this->assertTableNamePropertiesAndCount(PagoTipoCadenaPago::class, 'pagos_tipos_cadena_pago', $expectedKeys);
    }
}
