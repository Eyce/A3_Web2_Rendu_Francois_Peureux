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
     * @throws Exception Item must be string
     * @throws Exception Item must be int
     *
     * @return bool
     */
    public static function lengthEquals($strValue, $testValue)
    {
        if (!is_string($strValue))
            throw new Exception("Item must be string");
        if (!is_int($testValue))
            throw new Exception("Item must be int");

        $strValueLength = mb_strlen($strValue);

        return ($strValueLength == $testValue);
    }

    /**
     * @param string $strValue
     * @param int $testValue
     * @param int $strictness
     *
     * @throws Exception Item must be string
     * @throws Exception Item must be int
     * @throws Exception Strictness argument invalid
     *
     * @return bool
     */
    public static function lengthBigger($strValue, $testValue, $strictness = self::STRICT_INEQUALITY)
    {
        if (!is_string($strValue))
            throw new Exception("Item must be string");
        if (!is_int($testValue))
            throw new Exception("Item must be int");
        if ($strictness != self::STRICT_INEQUALITY && $strictness != self::NOT_STRICT_INEQUALITY)
            throw new Exception("Strictness argument invalid");

        if ($strictness == self::STRICT_INEQUALITY)
        {
            return (mb_strlen($strValue) > $testValue);
        }
        else if ($strictness == self::NOT_STRICT_INEQUALITY)
        {
            return (mb_strlen($strValue) >= $testValue);
        }
    }

    /**
     * @param string $strValue
     * @param int $testValue
     * @param int $strictness
     *
     * @throws Exception Item must be string
     * @throws Exception Item must be int
     * @throws Exception Strictness argument invalid
     *
     * @return bool
     */
    public static function lengthSmaller($strValue, $testValue, $strictness = self::STRICT_INEQUALITY)
    {
        if (!is_string($strValue))
            throw new Exception("Item must be string");
        if (!is_int($testValue))
            throw new Exception("Item must be int");
        if ($strictness != self::STRICT_INEQUALITY && $strictness != self::NOT_STRICT_INEQUALITY)
            throw new Exception("Strictness argument invalid");

        if ($strictness == self::STRICT_INEQUALITY)
        {
            return (mb_strlen($strValue) < $testValue);
        }
        else if ($strictness == self::NOT_STRICT_INEQUALITY)
        {
            return (mb_strlen($strValue) <= $testValue);
        }
    }

    /**
     * @param string $strValue
     * @param int $testValueMin
     * @param int $testValueMax
     * @param int $strictness
     *
     * @throws Exception Item must be string
     * @throws Exception Item must be int
     * @throws Exception Wrong order in items
     * @throws Exception Strictness argument invalid
     *
     * @return bool
     */
    public static function lengthBetween($strValue, $testValueMin, $testValueMax, $strictness = self::STRICT_INEQUALITY)
    {
        if (!is_string($strValue))
            throw new Exception("Item must be string");
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
            return (mb_strlen($strValue) > $testValueMin  && mb_strlen($strValue) < $testValueMax);
        }
        else if ($strictness == self::NOT_STRICT_INEQUALITY)
        {
            return (mb_strlen($strValue) >= $testValueMin  && mb_strlen($strValue) <= $testValueMax);
        }
    }

    /**
     * @param string $strValue
     *
     * @throws Exception Item must be string
     *
     * @return bool
     */
    public static function noWhiteSpaceBeginEnd($strValue)
    {
        if (!is_string($strValue))
            throw new Exception("Item must be string");

        $strValueArray = str_split($strValue);
        $strValueArrayLength = mb_strlen($strValue);

        return ($strValueArray[0] != " " && $strValueArray[$strValueArrayLength-1] != " ");
    }

    /**
     * @param string $strValue
     *
     * @throws Exception Item must be string
     *
     * @return bool
     */
    public static function noWhiteSpace($strValue)
    {
        if (!is_string($strValue))
            throw new Exception("Item must be string");

        $strValueArray = str_split($strValue);

        return (in_array(" ",$strValueArray));
    }
} 