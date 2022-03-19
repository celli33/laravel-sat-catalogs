<?php

declare(strict_types=1);

namespace PhpCfdi\LaravelSatCatalogs\Tests\Unit;

use Illuminate\Database\QueryException;
use Phpcfdi\LaravelSatCatalogs\Models\Cfdi40\Cfdi40Aduana;
use Phpcfdi\LaravelSatCatalogs\Models\Cfdi40\Cfdi40ClaveUnidad;
use Phpcfdi\LaravelSatCatalogs\Models\Cfdi40\Cfdi40CodigoPostal;
use Phpcfdi\LaravelSatCatalogs\Models\Cfdi40\Cfdi40Colonia;
use Phpcfdi\LaravelSatCatalogs\Models\Cfdi40\Cfdi40Estado;
use Phpcfdi\LaravelSatCatalogs\Models\Cfdi40\Cfdi40Exportacion;
use Phpcfdi\LaravelSatCatalogs\Models\Cfdi40\Cfdi40FormaPago;
use Phpcfdi\LaravelSatCatalogs\Models\Cfdi40\Cfdi40Impuesto;
use Phpcfdi\LaravelSatCatalogs\Models\Cfdi40\Cfdi40Localidad;
use Phpcfdi\LaravelSatCatalogs\Models\Cfdi40\Cfdi40Mes;
use Phpcfdi\LaravelSatCatalogs\Models\Cfdi40\Cfdi40MetodoPago;
use Phpcfdi\LaravelSatCatalogs\Models\Cfdi40\Cfdi40Moneda;
use Phpcfdi\LaravelSatCatalogs\Models\Cfdi40\Cfdi40Municipio;
use Phpcfdi\LaravelSatCatalogs\Models\Cfdi40\Cfdi40NumeroPedimentoAduana;
use Phpcfdi\LaravelSatCatalogs\Models\Cfdi40\Cfdi40ObjetoImpuesto;
use Phpcfdi\LaravelSatCatalogs\Models\Cfdi40\Cfdi40Pais;
use Phpcfdi\LaravelSatCatalogs\Models\Cfdi40\Cfdi40PatenteAduanal;
use Phpcfdi\LaravelSatCatalogs\Models\Cfdi40\Cfdi40Periodicidad;
use Phpcfdi\LaravelSatCatalogs\Models\Cfdi40\Cfdi40ProductoServicio;
use Phpcfdi\LaravelSatCatalogs\Models\Cfdi40\Cfdi40RegimenFiscal;
use Phpcfdi\LaravelSatCatalogs\Models\Cfdi40\Cfdi40ReglaTasaCuota;
use Phpcfdi\LaravelSatCatalogs\Models\Cfdi40\Cfdi40TipoComprobante;
use Phpcfdi\LaravelSatCatalogs\Models\Cfdi40\Cfdi40TipoFactor;
use Phpcfdi\LaravelSatCatalogs\Models\Cfdi40\Cfdi40TipoRelacion;
use Phpcfdi\LaravelSatCatalogs\Models\Cfdi40\Cfdi40UsoCfdi;
use PhpCfdi\LaravelSatCatalogs\Tests\TestCase;

class Cfdi40Test extends TestCase
{
    public function test_only_read(): void
    {
        /** @var Cfdi40UsoCfdi $usoCfdi */
        $usoCfdi = Cfdi40UsoCfdi::first();
        $usoCfdi->id = 'nuevo id';
        $this->expectException(QueryException::class);
        $usoCfdi->save();
    }

    public function test_aduanas(): void
    {
        $expectedKeys = [
            'id',
            'texto',
            'vigencia_desde',
            'vigencia_hasta',
        ];
        $this->assertTableNamePropertiesAndCount(Cfdi40Aduana::class, 'cfdi_40_aduanas', $expectedKeys, 49);
    }

    public function test_clave_unidades(): void
    {
        $expectedKeys = [
            'id',
            'texto',
            'descripcion',
            'notas',
            'vigencia_desde',
            'vigencia_hasta',
            'simbolo',
        ];
        $this->assertTableNamePropertiesAndCount(Cfdi40ClaveUnidad::class, 'cfdi_40_claves_unidades', $expectedKeys, 2418);
    }

    public function test_codigos_postales(): void
    {
        $expectedKeys = [
            'id',
            'estado',
            'municipio',
            'localidad',
            'estimulo_frontera',
            'vigencia_desde',
            'vigencia_hasta',
            'huso_descripcion',
            'huso_verano_mes_inicio',
            'huso_verano_dia_inicio',
            'huso_verano_hora_inicio',
            'huso_verano_diferencia',
            'huso_invierno_mes_inicio',
            'huso_invierno_dia_inicio',
            'huso_invierno_hora_inicio',
            'huso_invierno_diferencia',
        ];
        $this->assertTableNamePropertiesAndCount(Cfdi40CodigoPostal::class, 'cfdi_40_codigos_postales', $expectedKeys, 95748);
    }

    public function test_colonias(): void
    {
        $expectedKeys = [
            'colonia',
            'codigo_postal',
            'texto',
        ];
        $this->assertTableNamePropertiesAndCount(Cfdi40Colonia::class, 'cfdi_40_colonias', $expectedKeys, 145366);
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
        $this->assertTableNamePropertiesAndCount(Cfdi40Estado::class, 'cfdi_40_estados', $expectedKeys, 95);
    }

    public function test_exportaciones(): void
    {
        $expectedKeys = [
            'id',
            'texto',
            'vigencia_desde',
            'vigencia_hasta',
        ];
        $this->assertTableNamePropertiesAndCount(Cfdi40Exportacion::class, 'cfdi_40_exportaciones', $expectedKeys, 4);
    }

    public function test_formas_pago(): void
    {
        $expectedKeys = [
            'id',
            'texto',
            'es_bancarizado',
            'requiere_numero_operacion',
            'permite_banco_ordenante_rfc',
            'permite_cuenta_ordenante',
            'patron_cuenta_ordenante',
            'permite_banco_beneficiario_rfc',
            'permite_cuenta_beneficiario',
            'patron_cuenta_beneficiario',
            'permite_tipo_cadena_pago',
            'requiere_banco_ordenante_nombre_ext',
            'vigencia_desde',
            'vigencia_hasta',
        ];
        $this->assertTableNamePropertiesAndCount(Cfdi40FormaPago::class, 'cfdi_40_formas_pago', $expectedKeys, 22);
    }

    public function test_impuestos(): void
    {
        $expectedKeys = [
            'id',
            'texto',
            'retencion',
            'traslado',
            'ambito',
            'vigencia_desde',
            'vigencia_hasta',
        ];
        $this->assertTableNamePropertiesAndCount(Cfdi40Impuesto::class, 'cfdi_40_impuestos', $expectedKeys, 3);
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
        $this->assertTableNamePropertiesAndCount(Cfdi40Localidad::class, 'cfdi_40_localidades', $expectedKeys, 664);
    }

    public function test_meses(): void
    {
        $expectedKeys = [
            'id',
            'texto',
            'vigencia_desde',
            'vigencia_hasta',
        ];
        $this->assertTableNamePropertiesAndCount(Cfdi40Mes::class, 'cfdi_40_meses', $expectedKeys, 18);
    }

    public function test_metodo_pago(): void
    {
        $expectedKeys = [
            'id',
            'texto',
            'vigencia_desde',
            'vigencia_hasta',
        ];
        $this->assertTableNamePropertiesAndCount(Cfdi40MetodoPago::class, 'cfdi_40_metodos_pago', $expectedKeys, 2);
    }

    public function test_monedas(): void
    {
        $expectedKeys = [
            'id',
            'texto',
            'decimales',
            'porcentaje_variacion',
            'vigencia_desde',
            'vigencia_hasta',
        ];
        $this->assertTableNamePropertiesAndCount(Cfdi40Moneda::class, 'cfdi_40_monedas', $expectedKeys, 178);
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
        $this->assertTableNamePropertiesAndCount(Cfdi40Municipio::class, 'cfdi_40_municipios', $expectedKeys, 2463);
    }

    public function test_numeros_pedimento_aduana(): void
    {
        $expectedKeys = [
            'aduana',
            'patente',
            'ejercicio',
            'cantidad',
            'vigencia_desde',
            'vigencia_hasta',
        ];
        $this->assertTableNamePropertiesAndCount(Cfdi40NumeroPedimentoAduana::class, 'cfdi_40_numeros_pedimento_aduana', $expectedKeys, 44163);
    }

    public function test_objeto_impuesto(): void
    {
        $expectedKeys = [
            'id',
            'texto',
            'vigencia_desde',
            'vigencia_hasta',
        ];
        $this->assertTableNamePropertiesAndCount(Cfdi40ObjetoImpuesto::class, 'cfdi_40_objetos_impuestos', $expectedKeys, 3);
    }

    public function test_paises(): void
    {
        $expectedKeys = [
            'id',
            'texto',
            'patron_codigo_postal',
            'patron_identidad_tributaria',
            'validacion_identidad_tributaria',
            'agrupaciones',
        ];
        $this->assertTableNamePropertiesAndCount(Cfdi40pais::class, 'cfdi_40_paises', $expectedKeys, 250);
    }

    public function test_patentes_aduanales(): void
    {
        $expectedKeys = [
            'id',
            'vigencia_desde',
            'vigencia_hasta',
        ];
        $this->assertTableNamePropertiesAndCount(Cfdi40PatenteAduanal::class, 'cfdi_40_patentes_aduanales', $expectedKeys, 3311);
    }

    public function test_periodicidades(): void
    {
        $expectedKeys = [
            'id',
            'texto',
            'vigencia_desde',
            'vigencia_hasta',
        ];
        $this->assertTableNamePropertiesAndCount(Cfdi40Periodicidad::class, 'cfdi_40_periodicidades', $expectedKeys, 5);
    }

    public function test_productos_servicios(): void
    {
        $expectedKeys = [
            'id',
            'texto',
            'iva_trasladado',
            'ieps_trasladado',
            'complemento',
            'vigencia_desde',
            'vigencia_hasta',
            'estimulo_frontera',
            'similares',
        ];
        $this->assertTableNamePropertiesAndCount(Cfdi40ProductoServicio::class, 'cfdi_40_productos_servicios', $expectedKeys, 52512);
    }

    public function test_regimenes_fiscales(): void
    {
        $expectedKeys = [
            'id',
            'texto',
            'aplica_fisica',
            'aplica_moral',
            'vigencia_desde',
            'vigencia_hasta',
        ];
        $this->assertTableNamePropertiesAndCount(Cfdi40RegimenFiscal::class, 'cfdi_40_regimenes_fiscales', $expectedKeys, 19);
    }

    public function test_reglas_tasa_cuota(): void
    {
        $expectedKeys = [
            'tipo',
            'minimo',
            'valor',
            'impuesto',
            'factor',
            'traslado',
            'retencion',
            'vigencia_desde',
            'vigencia_hasta',
        ];
        $this->assertTableNamePropertiesAndCount(Cfdi40ReglaTasaCuota::class, 'cfdi_40_reglas_tasa_cuota', $expectedKeys, 19);
    }

    public function test_tipos_comprobantes(): void
    {
        $expectedKeys = [
            'id',
            'texto',
            'valor_maximo',
            'vigencia_desde',
            'vigencia_hasta',
        ];
        $this->assertTableNamePropertiesAndCount(Cfdi40TipoComprobante::class, 'cfdi_40_tipos_comprobantes', $expectedKeys, 5);
    }

    public function test_tipos_factores(): void
    {
        $expectedKeys = [
            'id',
            'vigencia_desde',
            'vigencia_hasta',
        ];
        $this->assertTableNamePropertiesAndCount(Cfdi40TipoFactor::class, 'cfdi_40_tipos_factores', $expectedKeys, 3);
    }

    public function test_tipos_relaciones(): void
    {
        $expectedKeys = [
            'id',
            'texto',
            'vigencia_desde',
            'vigencia_hasta',
        ];
        $this->assertTableNamePropertiesAndCount(Cfdi40TipoRelacion::class, 'cfdi_40_tipos_relaciones', $expectedKeys, 7);
    }

    public function test_usos_cfdi(): void
    {
        $expectedKeys = [
            'id',
            'texto',
            'aplica_fisica',
            'aplica_moral',
            'vigencia_desde',
            'vigencia_hasta',
            'regimenes_fiscales_receptores',
        ];
        $this->assertTableNamePropertiesAndCount(Cfdi40UsoCfdi::class, 'cfdi_40_usos_cfdi', $expectedKeys, 24);
    }
}
