<?php

namespace Classes\Statistics;

interface Statistic
{
    public static function getStat(array $arr): string;
}