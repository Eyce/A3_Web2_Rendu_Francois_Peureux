<?php
/**
 * Created by PhpStorm.
 * User: François Peureux
 * Date: 24/11/2014
 * Time: 11:55
 */

namespace RenduFP\validatorLibrary;


/**
 * Class StringValidator
 * @package RenduFP\validatorLibrary
 */
class StringValidator {

    const STRICT_INEQUALITY     = 0;
    const NOT_STRICT_INEQUALITY = 1;

    /**
     * Constructor
     */
    public function __construct()
    {

    }

    /**
     * @param string $strValue
     * @param int $testValue
     *
     * @throws Exception Item to validate doesn't exist (string)
     * @throws Exception Comparison item doesn't exist (int)
     * @throws Exception Item to validate has the wrong type (must be string)
     * @throws Exception Comparison item has the wrong type (must be int)
     *
     * @return bool
     */
    public static function lengthEquals($strValue, $testValue)
    {
        if (!isset($strValue))
            throw new Exception("Item to validate doesn't exist (string)");
        if (!isset($testValue))
            throw new Exception("Comparison item doesn't exist (int)");
        if (!is_string($strValue))
            throw new Exception("Item to validate has the wrong type (must be string)");
        if (!is_int($testValue))
            throw new Exception("Comparison item has the wrong type (must be int)");

        $strValueLength = mb_strlen($strValue);

        if ($strValueLength == $testValue)
            return true;
        else
            return false;
    }

    /**
     * @param string $strValue
     * @param int $testValue
     * @param int $strictness
     *
     * @throws Exception Item to validate doesn't exist (string)
     * @throws Exception Comparison item doesn't exist (int)
     * @throws Exception Item to validate has the wrong type (must be string)
     * @throws Exception Comparison item has the wrong type (must be int)
     * @throws Exception Strictness argument invalid
     *
     * @return bool
     */
    public static function lengthBigger($strValue, $testValue, $strictness = self::STRICT_INEQUALITY)
    {
        if (!isset($strValue))
            throw new Exception("Item to validate doesn't exist (string)");
        if (!isset($testValue))
            throw new Exception("Comparison item doesn't exist (int)");
        if (!is_string($strValue))
            throw new Exception("Item to validate has the wrong type (must be string)");
        if (!is_int($testValue))
            throw new Exception("Comparison item has the wrong type (must be int)");
        if ($strictness != self::STRICT_INEQUALITY && $strictness != self::NOT_STRICT_INEQUALITY)
            throw new Exception("Strictness argument invalid");

        if ($strictness == self::STRICT_INEQUALITY)
        {
            if (mb_strlen($strValue) > $testValue)
                return true;
            else
                return false;
        }
        else if ($strictness == self::NOT_STRICT_INEQUALITY)
        {
            if (mb_strlen($strValue) >= $testValue)
                return true;
            else
                return false;
        }
    }

    /**
     * @param string $strValue
     * @param int $testValue
     * @param int $strictness
     *
     * @throws Exception Item to validate doesn't exist (string)
     * @throws Exception Comparison item doesn't exist (int)
     * @throws Exception Item to validate has the wrong type (must be string)
     * @throws Exception Comparison item has the wrong type (must be int)
     * @throws Exception Strictness argument invalid
     *
     * @return bool
     */
    public static function lengthSmaller($strValue, $testValue, $strictness = self::STRICT_INEQUALITY)
    {
        if (!isset($strValue))
            throw new Exception("Item to validate doesn't exist (string)");
        if (!isset($testValue))
            throw new Exception("Comparison item doesn't exist (int)");
        if (!is_string($strValue))
            throw new Exception("Item to validate has the wrong type (must be string)");
        if (!is_int($testValue))
            throw new Exception("Comparison item has the wrong type (must be int)");
        if ($strictness != self::STRICT_INEQUALITY && $strictness != self::NOT_STRICT_INEQUALITY)
            throw new Exception("Strictness argument invalid");

        if ($strictness == self::STRICT_INEQUALITY)
        {
            if (mb_strlen($strValue) < $testValue)
                return true;
            else
                return false;
        }
        else if ($strictness == self::NOT_STRICT_INEQUALITY)
        {
            if (mb_strlen($strValue) <= $testValue)
                return true;
            else
                return false;
        }
    }

    /**
     * @param string $strValue
     * @param int $testValueMin
     * @param int $testValueMax
     * @param int $strictness
     *
     * @throws Exception Item to validate doesn't exist (string)
     * @throws Exception Minimum comparison item doesn't exist (int)
     * @throws Exception Maximum comparison item doesn't exist (int)
     * @throws Exception Item to validate has the wrong type (must be string)
     * @throws Exception Minimum comparison item has the wrong type (must be int)
     * @throws Exception Maximum comparison item has the wrong type (must be int)
     * @throws Exception Strictness argument invalid
     *
     * @return bool
     */
    public static function lengthBetween($strValue, $testValueMin, $testValueMax, $strictness = self::STRICT_INEQUALITY)
    {
        if (!isset($strValue))
            throw new Exception("Item to validate doesn't exist (string)");
        if (!isset($testValueMin))
            throw new Exception("Minimum comparison item doesn't exist (int)");
        if (!isset($testValueMax))
            throw new Exception("Maximum comparison item doesn't exist (int)");
        if (!is_string($strValue))
            throw new Exception("Item to validate has the wrong type (must be string)");
        if (!is_int($testValueMin))
            throw new Exception("Minimum comparison item has the wrong type (must be int)");
        if (!is_int($testValueMax))
            throw new Exception("Maximum comparison item has the wrong type (must be int)");
        if ($strictness != self::STRICT_INEQUALITY && $strictness != self::NOT_STRICT_INEQUALITY)
            throw new Exception("Strictness argument invalid");

        if ($strictness == self::STRICT_INEQUALITY)
        {
            if (mb_strlen($strValue) > $testValueMin  && mb_strlen($strValue) < $testValueMax)
                return true;
            else
                return false;
        }
        else if ($strictness == self::NOT_STRICT_INEQUALITY)
        {
            if (mb_strlen($strValue) >= $testValueMin  && mb_strlen($strValue) <= $testValueMax)
                return true;
            else
                return false;
        }
    }

    /**
     * @param string $strValue
     *
     * @throws Exception Item to validate doesn't exist (string)
     * @throws Exception Item to validate has the wrong type (must be string)
     *
     * @return bool
     */
    public static function noWhiteSpaceBeginEnd($strValue)
    {
        if (!isset($strValue))
            throw new Exception("Item to validate doesn't exist (string)");
        if (!is_string($strValue))
            throw new Exception("Item to validate has the wrong type (must be string)");

        $strValueArray = str_split($strValue);
        $strValueArrayLength = mb_strlen($strValue);

        if ($strValueArray[0] != " " && $strValueArray[$strValueArrayLength-1] != " ")
            return true;
        else
            return false;
    }

    /**
     * @param string $strValue
     *
     * @throws Exception Item to validate doesn't exist (string)
     * @throws Exception Item to validate has the wrong type (must be string)
     *
     * @return bool
     */
    public static function noWhiteSpace($strValue)
    {
        if (!isset($strValue))
            throw new Exception("Item to validate doesn't exist (string)");
        if (!is_string($strValue))
            throw new Exception("Item to validate has the wrong type (must be string)");

        $strValueArray = str_split($strValue);

        if(in_array(" ",$strValueArray))
            return false;
        else
            return true;
    }
} 