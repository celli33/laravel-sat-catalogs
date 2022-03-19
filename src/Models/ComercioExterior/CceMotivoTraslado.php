<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\ComercioExterior;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

/**
 * @property string $id
 * @property string $texto
 */
class CceMotivoTraslado extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cce_motivos_traslado';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
       'id',
       'texto',
    ];
}
