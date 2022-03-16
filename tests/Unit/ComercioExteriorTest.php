<?php

declare(strict_types=1);

namespace PhpCfdi\LaravelSatCatalogs\Tests\Unit;

use Phpcfdi\LaravelSatCatalogs\Models\ComercioExterior\CceClavePedimento;
use Phpcfdi\LaravelSatCatalogs\Models\ComercioExterior\CceColonia;
use Phpcfdi\LaravelSatCatalogs\Models\ComercioExterior\CceEstado;
use Phpcfdi\LaravelSatCatalogs\Models\ComercioExterior\CceFraccionArancelaria;
use Phpcfdi\LaravelSatCatalogs\Models\ComercioExterior\CceIncoterm;
use Phpcfdi\LaravelSatCatalogs\Models\ComercioExterior\CceLocalidad;
use Phpcfdi\LaravelSatCatalogs\Models\ComercioExterior\CceMotivoTraslado;
use Phpcfdi\LaravelSatCatalogs\Models\ComercioExterior\CceMunicipio;
use Phpcfdi\LaravelSatCatalogs\Models\ComercioExterior\CceTipoOperacion;
use Phpcfdi\LaravelSatCatalogs\Models\ComercioExterior\CceUnidadMedida;
use PhpCfdi\LaravelSatCatalogs\Tests\TestCase;

class ComercioExteriorTest extends TestCase
{
    public function test_claves_pedimentos(): void
    {
        $expectedKeys = [
            'id',
            'texto',
        ];
        $this->assertTableNamePropertiesAndCount(CceClavePedimento::class, 'cce_claves_pedimentos', $expectedKeys, 1);
    }

    public function test_colonias(): void
    {
        $expectedKeys = [
            'colonia',
            'codigo_postal',
            'asentamiento',
        ];
        $this->assertTableNamePropertiesAndCount(CceColonia::class, 'cce_colonias', $expectedKeys, 145366);
    }

    public function test_estados(): void
    {
        $expectedKeys = [
            'estado',
            'pais',
            'texto',
            'vigencia_desde',
            'vigencia_hasta',
        ];
        $this->assertTableNamePropertiesAndCount(CceEstado::class, 'cce_estados', $expectedKeys, 96);
    }

    public function test_fracciones_arancelarias(): void
    {
        $expectedKeys = [
            'fraccion',
            'texto',
            'vigencia_desde',
            'vigencia_hasta',
            'unidad',
        ];
        $this->assertTableNamePropertiesAndCount(CceFraccionArancelaria::class, 'cce_fracciones_arancelarias', $expectedKeys, 2462);
    }

    public function test_incoterms(): void
    {
        $expectedKeys = [
            'id',
            'texto',
            'vigencia_desde',
            'vigencia_hasta',
        ];
        $this->assertTableNamePropertiesAndCount(CceIncoterm::class, 'cce_incoterms', $expectedKeys, 16);
    }

    public function test_localidades(): void
    {
        $expectedKeys = [
            'localidad',
            'estado',
            'texto',
            'vigencia_desde',
            'vigencia_hasta',
        ];
        $this->assertTableNamePropertiesAndCount(CceLocalidad::class, 'cce_localidades', $expectedKeys, 680);
    }

    public function test_motivos_traslados(): void
    {
        $expectedKeys = [
            'id',
            'texto',
        ];
        $this->assertTableNamePropertiesAndCount(CceMotivoTraslado::class, 'cce_motivos_traslado', $expectedKeys, 6);
    }

    public function test_municipios(): void
    {
        $expectedKeys = [
            'municipio',
            'estado',
            'texto',
            'vigencia_desde',
            'vigencia_hasta',
        ];
        $this->assertTableNamePropertiesAndCount(CceMunicipio::class, 'cce_municipios', $expectedKeys, 2479);
    }

    public function test_tipos_operacion(): void
    {
        $expectedKeys = [
            'id',
            'texto',
        ];
        $this->assertTableNamePropertiesAndCount(CceTipoOperacion::class, 'cce_tipos_operacion', $expectedKeys, 1);
    }

    public function test_unidades_medida(): void
    {
        $expectedKeys = [
            'id',
            'texto',
            'vigencia_desde',
            'vigencia_hasta',
        ];
        $this->assertTableNamePropertiesAndCount(CceUnidadMedida::class, 'cce_unidades_medida', $expectedKeys, 23);
    }
}
