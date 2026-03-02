<?php

namespace App\Traits;

/**
 * Has enum values class
 *
 * @package App\Traits
 */
trait HasValues
{
    /**
     * Get all values of the enum.
     *
     * @return array
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
