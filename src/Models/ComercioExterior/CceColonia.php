<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\ComercioExterior;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

class CceColonia extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cce_colonias';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'colonia',
        'codigo_postal',
        'asentamiento',
    ];
}
