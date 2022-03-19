<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\Cfdi40;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

/**
 * @property string $id
 * @property string $texto
 * @property int $decimales
 * @property int $porcentaje_variacion
 * @property string $vigencia_desde
 * @property string $vigencia_hasta
 */
class Cfdi40Moneda extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cfdi_40_monedas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'id',
        'texto',
        'decimales',
        'porcentaje_variacion',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
