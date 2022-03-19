<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\Cfdi40;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

/**
 * @property string $id
 * @property string $texto
 * @property int $aplica_fisica
 * @property int $aplica_moral
 * @property string $vigencia_desde
 * @property string $vigencia_hasta
 */
class Cfdi40RegimenFiscal extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cfdi_40_regimenes_fiscales';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'id',
        'texto',
        'aplica_fisica',
        'aplica_moral',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
