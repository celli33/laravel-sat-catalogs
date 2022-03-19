<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\ComercioExterior;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

/**
 * @property string $id
 * @property string $texto
 * @property string $vigencia_desde
 * @property string $vigencia_hasta
 */
class CceUnidadMedida extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cce_unidades_medida';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'id',
        'texto',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
