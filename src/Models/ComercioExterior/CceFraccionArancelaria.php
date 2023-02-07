<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\ComercioExterior;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

/**
 * @property string $fraccion
 * @property string $texto
 * @property string $vigencia_desde
 * @property string $vigencia_hasta
 * @property string $unidad
 */
class CceFraccionArancelaria extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cce_fracciones_arancelarias';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fraccion',
        'texto',
        'vigencia_desde',
        'vigencia_hasta',
        'unidad',
    ];
}
