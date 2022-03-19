<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\Cfdi40;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

/**
 *
 * @property string $id
 * @property string $texto
 * @property int $aplica_fisica
 * @property int $aplica_moral
 * @property string $vigencia_desde
 * @property string $vigencia_hasta
 * @property string $regimenes_fiscales_receptores
 */
class Cfdi40UsoCfdi extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cfdi_40_usos_cfdi';

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
        'regimenes_fiscales_receptores',
    ];
}
