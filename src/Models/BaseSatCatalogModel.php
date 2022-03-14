<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models;

use Illuminate\Database\Eloquent\Model;

class BaseSatCatalogModel extends Model
{
    /**
     * @var string
     */
    protected $keyType = 'string';
    /**
     * @var string
     */
    protected $connection = 'catalogs';
}
