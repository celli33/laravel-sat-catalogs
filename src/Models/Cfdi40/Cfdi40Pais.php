<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\Cfdi40;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

/**
 * @property string $id
 * @property string $texto
 * @property string $patron_codigo_postal
 * @property string $patron_identidad_tributaria
 * @property string $validacion_identidad_tributaria
 * @property string $agrupaciones
 */
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
