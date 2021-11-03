<?php


namespace KodeDict\PHPUtil\Traits\RandomGenerator;


use Exception;

trait RandomString
{
    /**
     * @param int $length
     * @return string
     */
    public static function randomString(int $length)
    {
        $keySpace = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $str = '';
        $max = mb_strlen($keySpace, '8bit') - 1;
        for ($i = 0; $i < $length; ++$i) {
            try {
                $str .= $keySpace[random_int(0, $max)];
            } catch (Exception $e) {
                $str .= '';
            }
        }
        return $str;
    }
}
