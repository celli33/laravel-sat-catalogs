<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\Cfdi40;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

class Cfdi40Estado extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cfdi_40_estados';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'estado',
        'pais',
        'texto',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
