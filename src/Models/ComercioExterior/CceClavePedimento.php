<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\ComercioExterior;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

/**
 * @property string $id
 * @property string $texto
 */
class CceClavePedimento extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cce_claves_pedimentos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'texto',
    ];
}
