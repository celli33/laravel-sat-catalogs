<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\Pago;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

/**
 * @property string $id
 * @property string $texto
 */
class PagoTipoCadenaPago extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'pagos_tipos_cadena_pago';
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
