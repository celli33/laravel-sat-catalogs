<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\Cfdi40;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

/**
 * @property string $tipo
 * @property string $minimo
 * @property string $valor
 * @property string $impuesto
 * @property string $factor
 * @property int $traslado
 * @property int $retencion
 * @property string $vigencia_desde
 * @property string $vigencia_hasta
 */
class Cfdi40ReglaTasaCuota extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cfdi_40_reglas_tasa_cuota';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
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
}
