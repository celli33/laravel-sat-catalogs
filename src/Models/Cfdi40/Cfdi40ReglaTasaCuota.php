<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\Cfdi40;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

class Cfdi40ReglaTasaCuota extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cfdi_40_reglas_tasa_cuota';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
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
