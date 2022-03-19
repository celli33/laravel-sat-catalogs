<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\Cfdi40;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

/**
 *
 * @property string $id
 * @property string $texto
 * @property int $retencion
 * @property int $traslado
 * @property string $ambito
 * @property string $vigencia_desde
 * @property string $vigencia_hasta
 */
class Cfdi40Impuesto extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cfdi_40_impuestos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'id',
        'texto',
        'retencion',
        'traslado',
        'ambito',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
