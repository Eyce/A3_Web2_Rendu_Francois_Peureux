<?php
/**
 * Created by PhpStorm.
 * User: Frnçois Peureux
 * Date: 24/11/2014
 * Time: 11:55
 */

namespace RenduFP\validatorLibrary;


class IntegerValidator {

    const STRICT_INEQUALITY     = 0;
    const NOT_STRICT_INEQUALITY = 1;

    public function __construct()
    {

    }

    public static function equals($intValue, $testValue)
    {
        if ($intValue=$testValue)
            return "True";
        else
            return "False";
    }

    public static function biggerThan($intValue, $testValue)
    {
        if($intValue>$testValue)
            return "True";
        else
            return "False";
    }

    public static function smallerThan($intValue, $testValue)
    {
        if($intValue<$testValue)
            return "True";
        else
            return "False";
    }

    public static function between($intValue, $testValueMin, $testValueMax)
    {
        if($intValue>$testValueMin && $intValue<$testValueMax)
            return "True";
        else
            return "False";
    }

    public static function isPositive($intValue, $strictness = self::STRICT_INEQUALITY)
    {
        if ($strictness = self::STRICT_INEQUALITY)
        {
            if($intValue>0)
                return "True";
            else
                return "False";
        }
        else if($strictness = self::NOT_STRICT_INEQUALITY)
        {
            if($intValue>=0)
                return "True";
            else
                return "False";
        }
    }

    public static function isNegative($intValue, $strictness = self::STRICT_INEQUALITY)
    {
        if ($strictness = self::STRICT_INEQUALITY)
        {
            if($intValue<0)
                return "True";
            else
                return "False";
        }
        else if($strictness = self::NOT_STRICT_INEQUALITY)
        {
            if($intValue<=0)
                return "True";
            else
                return "False";
        }
    }
} 