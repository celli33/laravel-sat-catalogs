<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\ComercioExterior;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

/**
 * @property string $localidad
 * @property string $estado
 * @property string $texto
 * @property string $vigencia_desde
 * @property string $vigencia_hasta
 */
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
