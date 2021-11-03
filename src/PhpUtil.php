<?php


namespace KodeDict\PHPUtil;

use KodeDict\PHPUtil\Traits\RandomGenerator\RandomNumber;
use KodeDict\PHPUtil\Traits\RandomGenerator\RandomString;
use KodeDict\PHPUtil\Traits\UniqueGenerator\UniqueReference;

class PhpUtil
{
    use RandomNumber;
    use RandomString;
    use UniqueReference;

    public static function returnTrue(): bool
    {
        return true;
    }
}
