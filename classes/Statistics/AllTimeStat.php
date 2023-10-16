<?php

namespace Classes\Statistics;

class AllTimeStat implements Statistic
{
    public static function getStat(array $arr): string
    {
        $str = '';
        foreach ($arr as $product => $count) {
            $str .= 'Суммарное количество товаров типа ' . $product . ' : ' . $count . PHP_EOL;
        }
        return $str;
    }
}