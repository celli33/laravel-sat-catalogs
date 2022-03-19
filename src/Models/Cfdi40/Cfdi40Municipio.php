<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\Cfdi40;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

/**
 * @property string $municipio
 * @property string $estado
 * @property string $texto
 * @property string $vigencia_desde
 * @property string $vigencia_hasta
 */
class Cfdi40Municipio extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cfdi_40_municipios';

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
