<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\Cfdi40;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

/**
 * @property string $id
 * @property string $vigencia_desde
 * @property string $vigencia_hasta
 */
class Cfdi40TipoFactor extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cfdi_40_tipos_factores';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'id',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
