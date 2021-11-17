<?php


namespace KodeDict\PHPUtil;



use KodeDict\PHPUtil\Traits\RandomGenerator\RandomNumber;
use KodeDict\PHPUtil\Traits\RandomGenerator\RandomString;
use KodeDict\PHPUtil\Traits\String\NumberToOrdinal;
use KodeDict\PHPUtil\Traits\UniqueGenerator\UniqueReference;
use KodeDict\PHPUtil\Traits\Validate\EmailValidation;

class PhpUtil
{
    use RandomNumber;
    use RandomString;
    use UniqueReference;
    use NumberToOrdinal;
    use EmailValidation;

    public static function returnTrue(): bool
    {
        return true;
    }
}
