<?php


namespace KodeDict\PHPUtil;



use KodeDict\PHPUtil\Traits\RandomGenerator\RandomNumber;

class PhpUtil
{
    use RandomNumber;

    public static function returnTrue(): bool
    {
        return true;
    }
}
