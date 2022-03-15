<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 *
 * @method static Collection get()
 * @method static int count()
 * @method static Model first()
 */
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
