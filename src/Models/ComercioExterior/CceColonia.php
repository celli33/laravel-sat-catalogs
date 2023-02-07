<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\ComercioExterior;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

/**
 * @property string $colonia
 * @property string $codigo_postal
 * @property string $asentamiento
 */
class CceColonia extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cce_colonias';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'colonia',
        'codigo_postal',
        'asentamiento',
    ];
}
