<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\Cfdi40;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

/**
 * @property string $id
 * @property string $estado
 * @property string $municipio
 * @property string $localidad
 * @property int $estimulo_frontera
 * @property string $vigencia_desde
 * @property string $vigencia_hasta
 * @property string $huso_descripcion
 * @property string $huso_verano_mes_inicio
 * @property string $huso_verano_dia_inicio
 * @property string $huso_verano_hora_inicio
 * @property string $huso_verano_diferencia
 * @property string $huso_invierno_mes_inicio
 * @property string $huso_invierno_dia_inicio
 * @property string $huso_invierno_hora_inicio
 * @property string $huso_invierno_diferencia
 */
class Cfdi40CodigoPostal extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cfdi_40_codigos_postales';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'id',
        'estado',
        'municipio',
        'localidad',
        'estimulo_frontera',
        'vigencia_desde',
        'vigencia_hasta',
        'huso_descripcion',
        'huso_verano_mes_inicio',
        'huso_verano_dia_inicio',
        'huso_verano_hora_inicio',
        'huso_verano_diferencia',
        'huso_invierno_mes_inicio',
        'huso_invierno_dia_inicio',
        'huso_invierno_hora_inicio',
        'huso_invierno_diferencia',
    ];
}
