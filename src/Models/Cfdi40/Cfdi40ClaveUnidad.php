<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\Cfdi40;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

/**
 * @property string $id
 * @property string $texto
 * @property string $descripcion
 * @property string $notas
 * @property string $vigencia_desde
 * @property string $vigencia_hasta
 * @property string $simbolo
 */
class Cfdi40ClaveUnidad extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cfdi_40_claves_unidades';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'texto',
        'descripcion',
        'notas',
        'vigencia_desde',
        'vigencia_hasta',
        'simbolo',
    ];
}
