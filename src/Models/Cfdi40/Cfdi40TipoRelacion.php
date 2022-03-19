<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\Cfdi40;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

/**
 * @property string $id
 * @property string $texto
 * @property string $vigencia_desde
 * @property string $vigencia_hasta
 */
class Cfdi40TipoRelacion extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cfdi_40_tipos_relaciones';

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
