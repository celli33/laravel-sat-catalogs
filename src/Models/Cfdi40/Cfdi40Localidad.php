<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\Cfdi40;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

/**
 * @property string $localidad
 * @property string $estado
 * @property string $texto
 * @property string $vigencia_desde
 * @property string $vigencia_hasta
 */
class Cfdi40Localidad extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cfdi_40_localidades';

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
