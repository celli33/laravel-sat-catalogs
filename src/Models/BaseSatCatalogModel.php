<?php

declare(strict_types=1);

namespace Phpcfdi\LaravelSatCatalogs\Models;

use DateTimeImmutable;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 *
 * @method static Collection get()
 * @method static int count()
 * @method static Model first()
 */
abstract class BaseSatCatalogModel extends Model
{
    /**
     * @var string
     */
    protected $keyType = 'string';
    /**
     * @var string
     */
    protected $connection = 'catalogs';

    /**
     * @param string|int|DateTimeInterface $dateToCheck
     */
    public function isValidOn($dateToCheck = ''): bool
    {
        $since = $this->getValidSince();
        $until = $this->getValidUntil();
        if (null === $since && null === $until) {
            return true;
        }

        if (is_int($dateToCheck)) {
            $date = DateTimeImmutable::createFromFormat('U', strval($dateToCheck));
        } elseif (is_string($dateToCheck)) {
            $date = new DateTimeImmutable($dateToCheck);
        } else {
            $date = $dateToCheck;
        }

        return ! ((null != $since && $date < $since) || (null !== $until && $date > $until));
    }

    public function getValidSince(): ?DateTimeImmutable
    {
        if (! isset($this->vigencia_desde)) {
            return null;
        }
        try {
            $date = DateTimeImmutable::createFromFormat('Y-m-d', $this->vigencia_desde);
            return $date ? $date->setTime(0, 0, 0) : null;
        } catch (\Throwable) {
            return null;
        }
    }

    public function getValidUntil(): ?DateTimeImmutable
    {
        if (! isset($this->vigencia_hasta)) {
            return null;
        }
        try {
            $date = DateTimeImmutable::createFromFormat('Y-m-d', $this->vigencia_hasta);
            return $date ? $date->setTime(23, 59, 59) : null;
        } catch (\Throwable) {
            return null;
        }
    }
}
