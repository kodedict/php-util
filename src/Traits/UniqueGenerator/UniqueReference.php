<?php

namespace KodeDict\PHPUtil\Traits\UniqueGenerator;

use KodeDict\PHPUtil\Traits\RandomGenerator\RandomString;

trait UniqueReference
{
    /**
     * @param int $length
     * @param string|null $prefix
     * @return string
     */
    public static function generateUniqueReference(int $length = 12, string $prefix = null)
    {
        $randomString = RandomString::randomString($length);

        return $prefix ? $prefix . $randomString : $randomString;
    }
}
