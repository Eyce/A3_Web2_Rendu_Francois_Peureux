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
     * @throws Exception Item to validate doesn't exist (array)
     * @throws Exception Item to validate has the wrong type (must be array)
     *
     * @return bool
     */
    public static function isEmpty($arrayValue)
    {
        if (!isset($arrayValue))
            throw new Exception("Item to validate doesn't exist (array)");
        if (!is_array($arrayValue))
            throw new Exception("Item to validate has the wrong type (must be array)");
        
        if (empty($arrayValue))
            return true;
        else
            return false;
    }

    /**
     * @param array $arrayValue
     * @param int $elementNumber
     *
     * @throws Exception Item to validate doesn't exist (array)
     * @throws Exception Item to validate doesn't exist (int)
     * @throws Exception Item to validate has the wrong type (must be array)
     * @throws Exception Item to validate has the wrong type (must be int)
     *
     * @return bool
     */
    public static function hasSameElementNumber($arrayValue, $elementNumber)
    {
        if (!isset($arrayValue))
            throw new Exception("Item to validate doesn't exist (array)");
        if (!isset($elementNumber))
            throw new Exception("Comparison item doesn't exist (int)");
        if (!is_array($arrayValue))
            throw new Exception("Item to validate has the wrong type (must be array)");
        if (!is_int($elementNumber))
            throw new Exception("Comparison item has the wrong type (must be int)");

        $arrayLength = count($arrayValue);

        if ($arrayLength == $elementNumber)
            return true;
        else
            return false;
    }

    /**
     * @param array $arrayValue
     * @param int $elementNumber
     * @param int $strictness
     *
     * @throws Exception Item to validate doesn't exist (array)
     * @throws Exception Item to validate doesn't exist (int)
     * @throws Exception Item to validate has the wrong type (must be array)
     * @throws Exception Item to validate has the wrong type (must be int)
     * @throws Exception Strictness argument invalid
     *
     * @return bool
     */
    public static function hasMoreElements($arrayValue, $elementNumber, $strictness = self::STRICT_INEQUALITY)
    {
        if (!isset($arrayValue))
            throw new Exception("Item to validate doesn't exist (array)");
        if (!isset($elementNumber))
            throw new Exception("Comparison item doesn't exist (int)");
        if (!is_array($arrayValue))
            throw new Exception("Item to validate has the wrong type (must be array)");
        if (!is_int($elementNumber))
            throw new Exception("Comparison item has the wrong type (must be int)");
        if ($strictness != self::STRICT_INEQUALITY && $strictness != self::NOT_STRICT_INEQUALITY)
            throw new Exception("Strictness argument invalid");

        $arrayLength = count($arrayValue);

        if($strictness == self::STRICT_INEQUALITY)
        {
            if ($arrayLength > $elementNumber)
                return true;
            else
                return false;
        }
        else if ($strictness == self::NOT_STRICT_INEQUALITY)
        {
            if ($arrayLength >= $elementNumber)
                return true;
            else
                return false;
        }
    }

    /**
     * @param array $arrayValue
     * @param int $elementNumberTest
     * @param int $strictness
     *
     * @throws Exception Item to validate doesn't exist (array)
     * @throws Exception Item to validate doesn't exist (int)
     * @throws Exception Item to validate has the wrong type (must be array)
     * @throws Exception Item to validate has the wrong type (must be int)
     * @throws Exception Strictness argument invalid
     *
     * @return bool
     */
    public static function hasLessElements($arrayValue, $elementNumberTest, $strictness = self::STRICT_INEQUALITY)
    {
        if (!isset($arrayValue))
            throw new Exception("Item to validate doesn't exist (array)");
        if (!isset($elementNumberTest))
            throw new Exception("Comparison item doesn't exist (int)");
        if (!is_array($arrayValue))
            throw new Exception("Item to validate has the wrong type (must be array)");
        if (!is_int($elementNumberTest))
            throw new Exception("Comparison item has the wrong type (must be int)");
        if ($strictness != self::STRICT_INEQUALITY && $strictness != self::NOT_STRICT_INEQUALITY)
            throw new Exception("Strictness argument invalid");

        $arrayLength = count($arrayValue);

        if($strictness == self::STRICT_INEQUALITY)
        {
            if ($arrayLength < $elementNumberTest)
                return true;
            else
                return false;
        }
        else if ($strictness == self::NOT_STRICT_INEQUALITY)
        {
            if ($arrayLength <= $elementNumberTest)
                return true;
            else
                return false;
        }
    }

    /**
     * @param array $arrayValue
     * @param int $elementNumberMin
     * @param int $elementNumberMax
     * @param int $strictness
     *
     * @throws Exception Item to validate doesn't exist (array)
     * @throws Exception Minimum comparison item doesn't exist (int)
     * @throws Exception Maximum comparison item doesn't exist (int)
     * @throws Exception Item to validate has the wrong type (must be array)
     * @throws Exception Minimum comparison item has the wrong type (must be int)
     * @throws Exception Maximum comparison item has the wrong type (must be int)
     * @throws Exception Minimal comparative item bigger than Maximal comparative item
     * @throws Exception Strictness argument invalid
     *
     * @return bool
     */
    public static function elementNumberBetween($arrayValue, $elementNumberMin, $elementNumberMax, $strictness = self::STRICT_INEQUALITY)
    {
        if (!isset($arrayValue))
            throw new Exception("Item to validate doesn't exist (array)");
        if (!isset($elementNumberMin))
            throw new Exception("Minimum comparison item doesn't exist (int)");
        if (!isset($elementNumberMax))
            throw new Exception("Maximum comparison item doesn't exist (int)");
        if (!is_array($arrayValue))
            throw new Exception("Item to validate has the wrong type (must be array)");
        if (!is_int($elementNumberMin))
            throw new Exception("Minimum comparison item has the wrong type (must be int)");
        if (!is_int($elementNumberMax))
            throw new Exception("Maximum comparison item has the wrong type (must be int)");
        if ($elementNumberMin >= $elementNumberMax)
            throw new Exception("Minimal comparative item bigger than Maximal comparative item");
        if ($strictness != self::STRICT_INEQUALITY && $strictness != self::NOT_STRICT_INEQUALITY)
            throw new Exception("Strictness argument invalid");

        $arrayLength = count($arrayValue);

        if($strictness == self::STRICT_INEQUALITY)
        {
            if ($arrayLength > $elementNumberMin && $arrayLength < $elementNumberMax)
                return true;
            else
                return false;
        }
        else if ($strictness == self::NOT_STRICT_INEQUALITY)
        {
            if ($arrayLength >= $elementNumberMin && $arrayLength <= $elementNumberMax)
                return true;
            else
                return false;
        }
    }

    /**
     * @param array $arrayValue
     * @param mixed $key
     *
     * @throws Exception Item to validate doesn't exist (array)
     * @throws Exception Searched item doesn't exist (mixed)
     * @throws Exception Item to validate has the wrong type (must be array)
     *
     * @return bool
     */
    public static function containsKey($arrayValue, $key)
    {
        if (!isset($arrayValue))
            throw new Exception("Item to validate doesn't exist (array)");
        if (!isset($key))
            throw new Exception("Searched item doesn't exist (mixed)");
        if (!is_array($arrayValue))
            throw new Exception("Item to validate has the wrong type (must be array)");

        if(array_key_exists($key,$arrayValue))
            return true;
        else
            return false;
    }

    /**
     * @param array $arrayValue
     * @param mixed $value
     *
     * @throws Exception Item to validate doesn't exist (array)
     * @throws Exception Searched item doesn't exist (mixed)
     * @throws Exception Item to validate has the wrong type (must be array)
     *
     * @return bool
     */
    public static function containsValue($arrayValue, $value)
    {
        if (!isset($arrayValue))
            throw new Exception("Item to validate doesn't exist (array)");
        if (!isset($value))
            throw new Exception("Searched item doesn't exist (mixed)");
        if (!is_array($arrayValue))
            throw new Exception("Item to validate has the wrong type (must be array)");

        if(in_array($value, $arrayValue))
            return true;
        else
            return false;
    }
} 