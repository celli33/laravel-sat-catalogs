<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\ComercioExterior;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

class CceLocalidad extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cce_localidades';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'localidad',
        'estado',
        'texto',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
