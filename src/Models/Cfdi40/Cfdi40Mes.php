<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\Cfdi40;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

class Cfdi40Mes extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cfdi_40_meses';

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