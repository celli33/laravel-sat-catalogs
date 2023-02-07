<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\Cfdi40;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

/**
 * @property string $estado
 * @property string $pais
 * @property string $texto
 * @property string $vigencia_desde
 * @property string $vigencia_hasta
 */
class Cfdi40Estado extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cfdi_40_estados';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'estado',
        'pais',
        'texto',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
