<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\ComercioExterior;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

class CceMunicipio extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cce_municipios';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'municipio',
        'estado',
        'texto',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
