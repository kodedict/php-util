<?php


namespace KodeDict\PHPUtil\Traits\String;

use NumberFormatter;

trait NumberToOrdinal
{
    /**
     * @param int $number
     * @param string $locale
     * @return string
     */
    public static function numberToOrdinal(int $number, string $locale = 'en_us')
    {
        $numberFormat = new NumberFormatter($locale, NumberFormatter::ORDINAL);

        return (string) $numberFormat->format($number);
    }
}
