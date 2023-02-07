<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\Cfdi40;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

/**
 * @property string $id
 * @property string $texto
 * @property string $valor_maximo
 * @property string $vigencia_desde
 * @property string $vigencia_hasta
 */
class Cfdi40TipoComprobante extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cfdi_40_tipos_comprobantes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'texto',
        'valor_maximo',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
