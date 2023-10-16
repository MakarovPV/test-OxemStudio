<?php

namespace Classes\Statistics;

class AnimalStat implements Statistic
{
    public static function getStat(array $arr): string
    {
        $str = '';
        foreach ($arr as $animal => $value) {
            $str .= 'Суммарное количество животных типа ' . $animal . ' : ' . count($arr[$animal]) . PHP_EOL;
        }
        return $str;
    }
}