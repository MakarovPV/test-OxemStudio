<?php

namespace Classes\Statistics;

class WeekStat implements Statistic
{
    public static function getStat(array $arr): string
    {
        $str = '';
        foreach ($arr as $product => $count) {
            $str .= 'Количество полученного за неделю товара типа ' . $product . ' : ' . $count . PHP_EOL;
        }
        return $str;
    }
}