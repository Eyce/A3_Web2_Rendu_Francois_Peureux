<?php
/**
 * Created by PhpStorm.
 * User: François Peureux
 * Date: 24/11/2014
 * Time: 11:57
 */

namespace RenduFP\validatorLibrary;


/**
 * Class ArrayValidator
 * @package RenduFP\validatorLibrary
 */
class ArrayValidator {

    const STRICT_INEQUALITY     = 0;
    const NOT_STRICT_INEQUALITY = 1;

    /**
     * Constructor
     */
    public function __construct()
    {

    }

    /**
     * @param array $arrayValue
     *
     * @return string
     */
    public static function isEmpty($arrayValue)
    {
        if (empty($arrayValue))
            return "True";
        else
            return "False";
    }

    /**
     * @param array $arrayValue
     * @param int $elementNumber
     *
     * @return string
     */
    public static function hasSameElementNumber($arrayValue, $elementNumber)
    {
        $arrayLength = count($arrayValue);

        if ($arrayLength == $elementNumber)
            return "True";
        else
            return "False";
    }

    /**
     * @param array $arrayValue
     * @param int $elementNumber
     * @param int $strictness
     *
     * @return string
     */
    public static function hasMoreElements($arrayValue, $elementNumber, $strictness = self::STRICT_INEQUALITY)
    {
        $arrayLength = count($arrayValue);

        if($strictness == self::STRICT_INEQUALITY)
        {
            if ($arrayLength > $elementNumber)
                return "True";
            else
                return "False";
        }
        else if ($strictness == self::NOT_STRICT_INEQUALITY)
        {
            if ($arrayLength >= $elementNumber)
                return "True";
            else
                return "False";
        }
    }

    /**
     * @param array $arrayValue
     * @param int $elementNumberTest
     * @param int $strictness
     *
     * @return string
     */
    public static function hasLessElements($arrayValue, $elementNumberTest, $strictness = self::STRICT_INEQUALITY)
    {
        $arrayLength = count($arrayValue);

        if($strictness == self::STRICT_INEQUALITY)
        {
            if ($arrayLength < $elementNumberTest)
                return "True";
            else
                return "False";
        }
        else if ($strictness == self::NOT_STRICT_INEQUALITY)
        {
            if ($arrayLength <= $elementNumberTest)
                return "True";
            else
                return "False";
        }
    }

    /**
     * @param array $arrayValue
     * @param int $elementNumberMin
     * @param int $elementNumberMax
     * @param int $strictness
     *
     * @return string
     */
    public static function elementNumberBetween($arrayValue, $elementNumberMin, $elementNumberMax, $strictness = self::STRICT_INEQUALITY)
    {
        $arrayLength = count($arrayValue);

        if($strictness == self::STRICT_INEQUALITY)
        {
            if ($arrayLength > $elementNumberMin && $arrayLength < $elementNumberMax)
                return "True";
            else
                return "False";
        }
        else if ($strictness == self::NOT_STRICT_INEQUALITY)
        {
            if ($arrayLength >= $elementNumberMin && $arrayLength <= $elementNumberMax)
                return "True";
            else
                return "False";
        }
    }

    /**
     * @param array $arrayValue
     * @param mixed $key
     *
     * @return string
     */
    public static function containsKey($arrayValue, $key)
    {
        if(array_key_exists($key,$arrayValue))
            return "True";
        else
            return "False";
    }

    /**
     * @param array $arrayValue
     * @param mixed $value
     *
     * @return string
     */
    public static function containsValue($arrayValue, $value)
    {
        if(in_array($value, $arrayValue))
            return "True";
        else
            return "False";
    }
} 