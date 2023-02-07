<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\Cfdi40;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

/**
 * @property string $aduana
 * @property string $patente
 * @property int $ejercicio
 * @property int $cantidad
 * @property string $vigencia_desde
 * @property string $vigencia_hasta
 */
class Cfdi40NumeroPedimentoAduana extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cfdi_40_numeros_pedimento_aduana';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'aduana',
        'patente',
        'ejercicio',
        'cantidad',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
