<?php
/**
 * Created by PhpStorm.
 * User: Frnçois Peureux
 * Date: 24/11/2014
 * Time: 11:55
 */

namespace RenduFP\validatorLibrary;


/**
 * Class IntegerValidator
 * @package RenduFP\validatorLibrary
 */
class IntegerValidator {

   const STRICT_INEQUALITY     = 0;
    const NOT_STRICT_INEQUALITY = 1;

    /**
     * Constructor
     */
    public function __construct()
    {

    }

    /**
     * @param int $intValue
     * @param int $testValue
     *
     * @return string
     */
    public static function isEqual($intValue, $testValue = 0)
    {
        if ($intValue == $testValue)
            return "True";
        else
            return "False";
    }

    /**
     * @param int $intValue
     * @param int $testValue
     * @param int $strictness
     *
     * @return string
     */
    public static function isBiggerThan($intValue, $testValue = 0, $strictness = self::STRICT_INEQUALITY)
    {
        if ($strictness == self::STRICT_INEQUALITY)
        {
            if ($intValue > $testValue)
                return "True";
            else
                return "False";
        }
        else if ($strictness == self::NOT_STRICT_INEQUALITY)
        {
            if ($intValue >= $testValue)
                return "True";
            else
                return "False";
        }
    }

    /**
     * @param int $intValue
     * @param int $testValue
     * @param int $strictness
     *
     * @return string
     */
    public static function isSmallerThan($intValue, $testValue = 0, $strictness = self::STRICT_INEQUALITY)
    {
        if ($strictness == self::STRICT_INEQUALITY)
        {
            if ($intValue < $testValue)
                return "True";
            else
                return "False";
        }
        else if ($strictness == self::NOT_STRICT_INEQUALITY)
        {
            if ($intValue <= $testValue)
                return "True";
            else
                return "False";
        }
    }

    /**
     * @param int $intValue
     * @param int $testValueMin
     * @param int $testValueMax
     * @param int $strictness
     *
     * @return string
     */
    public static function isBetween($intValue, $testValueMin, $testValueMax, $strictness = self::STRICT_INEQUALITY)
    {
        if ($strictness == self::STRICT_INEQUALITY)
        {
            if($intValue>$testValueMin && $intValue<$testValueMax)
                return "True";
            else
                return "False";
        }
        else if ($strictness == self::NOT_STRICT_INEQUALITY)
        {
            if($intValue>=$testValueMin && $intValue<=$testValueMax)
                return "True";
            else
                return "False";
        }
    }
} 