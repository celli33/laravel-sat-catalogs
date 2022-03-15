<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\ComercioExterior;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

class CceEstado extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cce_estados';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'estado',
        'pais',
        'texto',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
