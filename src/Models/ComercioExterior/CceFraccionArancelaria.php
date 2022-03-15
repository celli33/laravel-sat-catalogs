<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\ComercioExterior;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

class CceFraccionArancelaria extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cce_fracciones_arancelarias';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'fraccion',
        'texto',
        'vigencia_desde',
        'vigencia_hasta',
        'unidad',
    ];
}
