<?php
/**
 * Created by PhpStorm.
 * User: Frnçois Peureux
 * Date: 24/11/2014
 * Time: 11:55
 */

namespace RenduFP\validatorLibrary;
use SebastianBergmann\Exporter\Exception;


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
     * @param int $intValue Item to validate
     * @param int $testValue Comparative item
     *
     * @throws Item must be int
     *
     * @return bool
     */
    public static function isEqual($intValue, $testValue = 0)
    {
        if (!is_int($intValue))
            throw new Exception("Item must be int");
        if (!is_int($testValue))
            throw new Exception("Item must be int");

        return ($intValue == $testValue);
    }

    /**
     * @param int $intValue Item to validate
     * @param int $testValue Comparative item
     * @param int $strictness Inequality strictness
     *
     * @throws Item must be int
     * @throws Exception Strictness argument invalid
     *
     * @return bool
     */
    public static function isBiggerThan($intValue, $testValue = 0, $strictness = self::STRICT_INEQUALITY)
    {
        if (!is_int($intValue))
            throw new Exception("Item must be int");
        if (!is_int($testValue))
            throw new Exception("Item must be int");
        if ($strictness != self::STRICT_INEQUALITY && $strictness != self::NOT_STRICT_INEQUALITY)
            throw new Exception("Strictness argument invalid");

        if ($strictness == self::STRICT_INEQUALITY)
        {
            return ($intValue > $testValue);
        }
        else if ($strictness == self::NOT_STRICT_INEQUALITY)
        {
            return ($intValue >= $testValue);
        }
    }

    /**
     * @param int $intValue Item to validate
     * @param int $testValue Comparative item
     * @param int $strictness Inequality strictness
     *
     * @throws Item must be int
     * @throws Exception Strictness argument invalid
     *
     * @return bool
     */
    public static function isSmallerThan($intValue, $testValue = 0, $strictness = self::STRICT_INEQUALITY)
    {
        if (!is_int($intValue))
            throw new Exception("Item must be int");
        if (!is_int($testValue))
            throw new Exception("Item must be int");
        if ($strictness != self::STRICT_INEQUALITY && $strictness != self::NOT_STRICT_INEQUALITY)
            throw new Exception("Strictness argument invalid");

        if ($strictness == self::STRICT_INEQUALITY)
        {
            return ($intValue < $testValue);
        }
        else if ($strictness == self::NOT_STRICT_INEQUALITY)
        {
            return ($intValue <= $testValue);
        }
    }

    /**
     * @param int $intValue Item to validate
     * @param int $testValueMin Minimal comparative item
     * @param int $testValueMax Maximal comparative item
     * @param int $strictness Inequality strictness
     *
     * @throws Exception Item must be int
     * @throws Exception Wrong order in items
     * @throws Exception Strictness argument invalid
     *
     * @return bool
     */
    public static function isBetween($intValue, $testValueMin, $testValueMax, $strictness = self::STRICT_INEQUALITY)
    {
        if (!is_int($intValue))
            throw new Exception("Item must be int");
        if (!is_int($testValueMin))
            throw new Exception("Item must be int");
        if (!is_int($testValueMax))
            throw new Exception("Item must be int");
        if ($testValueMin >= $testValueMax)
            throw new Exception("Wrong order in items");
        if ($strictness != self::STRICT_INEQUALITY && $strictness != self::NOT_STRICT_INEQUALITY)
            throw new Exception("Strictness argument invalid");

        if ($strictness == self::STRICT_INEQUALITY)
        {
            return ($intValue>$testValueMin && $intValue<$testValueMax);
        }
        else if ($strictness == self::NOT_STRICT_INEQUALITY)
        {
            return ($intValue>=$testValueMin && $intValue<=$testValueMax);
        }
    }
} 