<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models\Cfdi40;

use Phpcfdi\LaravelSatCatalogs\Models\BaseSatCatalogModel;

class Cfdi40FormaPago extends BaseSatCatalogModel
{
    /**
     * @var string
     */
    protected $table = 'cfdi_40_formas_pago';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'id',
        'texto',
        'es_bancarizado',
        'requiere_numero_operacion',
        'permite_banco_ordenante_rfc',
        'permite_cuenta_ordenante',
        'patron_cuenta_ordenante',
        'permite_banco_beneficiario_rfc',
        'permite_cuenta_beneficiario',
        'patron_cuenta_beneficiario',
        'permite_tipo_cadena_pago',
        'requiere_banco_ordenante_nombre_ext',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
