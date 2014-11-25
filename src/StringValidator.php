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
     * @return string
     */
    public static function lengthEquals($strValue, $testValue)
    {
        $strValueLength = mb_strlen($strValue);

        if ($strValueLength == $testValue)
            return "True";
        else
            return "False";
    }

    /**
     * @param string $strValue
     * @param int $testValue
     * @param int $strictness
     *
     * @return string
     */
    public static function lengthBigger($strValue, $testValue, $strictness = self::STRICT_INEQUALITY)
    {
        if ($strictness == self::STRICT_INEQUALITY)
        {
            if (mb_strlen($strValue) > $testValue)
                return "True";
            else
                return "False";
        }
        else if ($strictness == self::NOT_STRICT_INEQUALITY)
        {
            if (mb_strlen($strValue) >= $testValue)
                return "True";
            else
                return "False";
        }
    }

    /**
     * @param string $strValue
     * @param int $testValue
     * @param int $strictness
     *
     * @return string
     */
    public static function lengthSmaller($strValue, $testValue, $strictness = self::STRICT_INEQUALITY)
    {
        if ($strictness == self::STRICT_INEQUALITY)
        {
            if (mb_strlen($strValue) < $testValue)
                return "True";
            else
                return "False";
        }
        else if ($strictness == self::NOT_STRICT_INEQUALITY)
        {
            if (mb_strlen($strValue) <= $testValue)
                return "True";
            else
                return "False";
        }
    }

    /**
     * @param string $strValue
     * @param int $testValueMin
     * @param int $testValueMax
     * @param int $strictness
     *
     * @return string
     */
    public static function lengthBetween($strValue, $testValueMin, $testValueMax, $strictness = self::STRICT_INEQUALITY)
    {
        if ($strictness == self::STRICT_INEQUALITY)
        {
            if (mb_strlen($strValue) > $testValueMin  && mb_strlen($strValue) < $testValueMax)
                return "True";
            else
                return "False";
        }
        else if ($strictness == self::NOT_STRICT_INEQUALITY)
        {
            if (mb_strlen($strValue) >= $testValueMin  && mb_strlen($strValue) <= $testValueMax)
                return "True";
            else
                return "False";
        }
    }

    /**
     * @param string $strValue
     *
     * @return string
     */
    public static function noWhiteSpaceBeginEnd($strValue)
    {
        $strValueArray = str_split($strValue);
        $strValueArrayLength = mb_strlen($strValue);

        if ($strValueArray[0] != " " && $strValueArray[$strValueArrayLength-1] != " ")
            return "True";
        else
            return "False";
    }

    /**
     * @param string $strValue
     *
     * @return string
     */
    public static function noWhiteSpace($strValue)
    {
        $strValueArray = str_split($strValue);

        if(in_array(" ",$strValueArray))
            return "False";
        else
            return "True";
    }
} 