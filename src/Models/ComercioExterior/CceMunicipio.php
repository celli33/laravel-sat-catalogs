<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\ComercioExterior;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

/**
 * @property string $municipio
 * @property string $estado
 * @property string $texto
 * @property string $vigencia_desde
 * @property string $vigencia_hasta
 */
class CceMunicipio extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cce_municipios';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'municipio',
        'estado',
        'texto',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
