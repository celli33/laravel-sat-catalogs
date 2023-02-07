<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\Cfdi40;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

/**
 * @property string $id
 * @property string $texto
 * @property int $iva_trasladado
 * @property int $ieps_trasladado
 * @property string $complemento
 * @property string $vigencia_desde
 * @property string $vigencia_hasta
 * @property int $estimulo_frontera
 * @property string $similares
 */
class Cfdi40ProductoServicio extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cfdi_40_productos_servicios';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
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
}
