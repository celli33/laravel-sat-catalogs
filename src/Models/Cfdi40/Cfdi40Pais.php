<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\Cfdi40;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

class Cfdi40Pais extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cfdi_40_paises';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'id',
        'texto',
        'patron_codigo_postal',
        'patron_identidad_tributaria',
        'validacion_identidad_tributaria',
        'agrupaciones',
    ];
}
