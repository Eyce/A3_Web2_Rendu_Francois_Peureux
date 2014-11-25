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
     * @throws Exception Item to validate doesn't exist (int)
     * @throws Exception Item to validate has the wrong type (must be int)
     * @throws Exception Comparison item has the wrong type (must be int)
     *
     * @return bool
     */
    public static function isEqual($intValue, $testValue = 0)
    {
        if (!isset($intValue))
            throw new Exception("Item to validate doesn't exist (int)");
        if (!is_int($intValue))
            throw new Exception("Item to validate has the wrong type (must be int)");
        if (!is_int($testValue))
            throw new Exception("Comparison item has the wrong type (must be int)");

        if ($intValue == $testValue)
            return true;
        else
            return false;
    }

    /**
     * @param int $intValue Item to validate
     * @param int $testValue Comparative item
     * @param int $strictness Inequality strictness
     *
     * @throws Exception Item to validate doesn't exist (int)
     * @throws Exception Item to validate has the wrong type (must be int)
     * @throws Exception Comparison item has the wrong type (must be int)
     * @throws Exception Strictness argument invalid
     *
     * @return bool
     */
    public static function isBiggerThan($intValue, $testValue = 0, $strictness = self::STRICT_INEQUALITY)
    {
        if (!isset($intValue))
            throw new Exception("Item to validate doesn't exist (int)");
        if (!is_int($intValue))
            throw new Exception("Item to validate has the wrong type (must be int)");
        if (!is_int($testValue))
            throw new Exception("Comparison item has the wrong type (must be int)");
        if ($strictness != self::STRICT_INEQUALITY && $strictness != self::NOT_STRICT_INEQUALITY)
            throw new Exception("Strictness argument invalid");

        if ($strictness == self::STRICT_INEQUALITY)
        {
            if ($intValue > $testValue)
                return true;
            else
                return false;
        }
        else if ($strictness == self::NOT_STRICT_INEQUALITY)
        {
            if ($intValue >= $testValue)
                return true;
            else
                return false;
        }
    }

    /**
     * @param int $intValue Item to validate
     * @param int $testValue Comparative item
     * @param int $strictness Inequality strictness
     *
     * @throws Exception Item to validate doesn't exist (int)
     * @throws Exception Item to validate has the wrong type (must be int)
     * @throws Exception Comparison item has the wrong type (must be int)
     * @throws Exception Strictness argument invalid
     *
     * @return bool
     */
    public static function isSmallerThan($intValue, $testValue = 0, $strictness = self::STRICT_INEQUALITY)
    {
        if (!isset($intValue))
            throw new Exception("Item to validate doesn't exist (int)");
        if (!is_int($intValue))
            throw new Exception("Item to validate has the wrong type (must be int)");
        if (!is_int($testValue))
            throw new Exception("Comparison item has the wrong type (must be int)");
        if ($strictness != self::STRICT_INEQUALITY && $strictness != self::NOT_STRICT_INEQUALITY)
            throw new Exception("Strictness argument invalid");

        if ($strictness == self::STRICT_INEQUALITY)
        {
            if ($intValue < $testValue)
                return true;
            else
                return false;
        }
        else if ($strictness == self::NOT_STRICT_INEQUALITY)
        {
            if ($intValue <= $testValue)
                return true;
            else
                return false;
        }
    }

    /**
     * @param int $intValue Item to validate
     * @param int $testValueMin Minimal comparative item
     * @param int $testValueMax Maximal comparative item
     * @param int $strictness Inequality strictness
     *
     * @throws Exception Item to validate doesn't exist (int)
     * @throws Exception Minimum comparison item doesn't exist (int)
     * @throws Exception Maximum comparison item doesn't exist (int)
     * @throws Exception Item to validate has the wrong type (must be int)
     * @throws Exception Minimum comparison item has the wrong type (must be int)
     * @throws Exception Maximum comparison item has the wrong type (must be int)
     * @throws Exception Minimal comparative item bigger than Maximal comparative item
     * @throws Exception Strictness argument invalid
     *
     * @return bool
     */
    public static function isBetween($intValue, $testValueMin, $testValueMax, $strictness = self::STRICT_INEQUALITY)
    {
        if (!isset($intValue))
            throw new Exception("Item to validate doesn't exist (int)");
        if (!isset($testValueMin))
            throw new Exception("Minimum comparison item doesn't exist (int)");
        if (!isset($testValueMax))
            throw new Exception("Maximum comparison item doesn't exist (int)");
        if (!is_int($intValue))
            throw new Exception("Item to validate has the wrong type (must be int)");
        if (!is_int($testValueMin))
            throw new Exception("Minimum comparison item has the wrong type (must be int)");
        if (!is_int($testValueMax))
            throw new Exception("Maximum comparison item has the wrong type (must be int)");
        if ($testValueMin >= $testValueMax)
            throw new Exception("Minimal comparative item bigger than Maximal comparative item");
        if ($strictness != self::STRICT_INEQUALITY && $strictness != self::NOT_STRICT_INEQUALITY)
            throw new Exception("Strictness argument invalid");

        if ($strictness == self::STRICT_INEQUALITY)
        {
            if($intValue>$testValueMin && $intValue<$testValueMax)
                return true;
            else
                return false;
        }
        else if ($strictness == self::NOT_STRICT_INEQUALITY)
        {
            if($intValue>=$testValueMin && $intValue<=$testValueMax)
                return true;
            else
                return false;
        }
    }
} 