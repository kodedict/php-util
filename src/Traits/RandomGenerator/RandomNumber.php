<?php


namespace KodeDict\PHPUtil\Traits\RandomGenerator;

trait RandomNumber
{

    /**
     * @param int $numberFrom
     * @param int $numberTo
     * @param int $length
     * @return int
     */
    public static function randomNumber(int $numberFrom, int $numberTo, int $length)
    {
        $numbers = range($numberFrom, $numberTo);
        shuffle($numbers);
        $rand = array_slice($numbers, 0, $length);

        return (int) implode("", $rand);
    }
}
