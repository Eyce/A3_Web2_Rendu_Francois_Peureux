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
     * @throws Exception Item must be array
     *
     * @return bool
     */
    public static function isEmpty($arrayValue)
    {
        if (!is_array($arrayValue))
            throw new Exception("Item must be array");
        
        return (empty($arrayValue));
    }

    /**
     * @param array $arrayValue
     * @param int $elementNumber
     *
     * @throws Exception Item must be array
     * @throws Exception Item must be int
     *
     * @return bool
     */
    public static function hasSameElementNumber($arrayValue, $elementNumber)
    {
        if (!is_array($arrayValue))
            throw new Exception("Item must be array");
        if (!is_int($elementNumber))
            throw new Exception("Item must be int");

        $arrayLength = count($arrayValue);

        return ($arrayLength == $elementNumber);
    }

    /**
     * @param array $arrayValue
     * @param int $elementNumber
     * @param int $strictness
     *
     * @throws Exception Item must be array
     * @throws Exception Item must be int
     * @throws Exception Strictness argument invalid
     *
     * @return bool
     */
    public static function hasMoreElements($arrayValue, $elementNumber, $strictness = self::STRICT_INEQUALITY)
    {
        if (!is_array($arrayValue))
            throw new Exception("Item must be array");
        if (!is_int($elementNumber))
            throw new Exception("Item must be int");
        if ($strictness != self::STRICT_INEQUALITY && $strictness != self::NOT_STRICT_INEQUALITY)
            throw new Exception("Strictness argument invalid");

        $arrayLength = count($arrayValue);

        if($strictness == self::STRICT_INEQUALITY)
        {
            return ($arrayLength > $elementNumber);
        }
        else if ($strictness == self::NOT_STRICT_INEQUALITY)
        {
            return ($arrayLength >= $elementNumber);
        }
    }

    /**
     * @param array $arrayValue
     * @param int $elementNumberTest
     * @param int $strictness
     *
     * @throws Exception Item must be array
     * @throws Exception Item must be int
     * @throws Exception Strictness argument invalid
     *
     * @return bool
     */
    public static function hasLessElements($arrayValue, $elementNumber, $strictness = self::STRICT_INEQUALITY)
    {
        if (!is_array($arrayValue))
            throw new Exception("Item must be array");
        if (!is_int($elementNumber))
            throw new Exception("Item must be int");
        if ($strictness != self::STRICT_INEQUALITY && $strictness != self::NOT_STRICT_INEQUALITY)
            throw new Exception("Strictness argument invalid");

        $arrayLength = count($arrayValue);

        if($strictness == self::STRICT_INEQUALITY)
        {
            return ($arrayLength < $elementNumber);
        }
        else if ($strictness == self::NOT_STRICT_INEQUALITY)
        {
            return ($arrayLength <= $elementNumber);
        }
    }

    /**
     * @param array $arrayValue
     * @param int $elementNumberMin
     * @param int $elementNumberMax
     * @param int $strictness
     *
     * @throws Exception Item must be array
     * @throws Exception Item must be int
     * @throws Exception Wrong order in items
     * @throws Exception Strictness argument invalid
     *
     * @return bool
     */
    public static function elementNumberBetween($arrayValue, $elementNumberMin, $elementNumberMax, $strictness = self::STRICT_INEQUALITY)
    {

        if (!is_array($arrayValue))
            throw new Exception("Item must be array");
        if (!is_int($elementNumberMin))
            throw new Exception("Item must be int");
        if (!is_int($elementNumberMax))
            throw new Exception("Item must be int");
        if ($elementNumberMin >= $elementNumberMax)
            throw new Exception("Wrong order in items");
        if ($strictness != self::STRICT_INEQUALITY && $strictness != self::NOT_STRICT_INEQUALITY)
            throw new Exception("Strictness argument invalid");

        $arrayLength = count($arrayValue);

        if($strictness == self::STRICT_INEQUALITY)
        {
            return ($arrayLength > $elementNumberMin && $arrayLength < $elementNumberMax);
        }
        else if ($strictness == self::NOT_STRICT_INEQUALITY)
        {
            return ($arrayLength >= $elementNumberMin && $arrayLength <= $elementNumberMax);
        }
    }

    /**
     * @param array $arrayValue
     * @param mixed $key
     *
     * @throws Exception Key doesn't exist
     * @throws Exception Item must be array
     *
     * @return bool
     */
    public static function containsKey($arrayValue, $key)
    {
        if (!isset($key))
            throw new Exception("Key doesn't exist");
        if (!is_array($arrayValue))
            throw new Exception("Item must be array");

        return (array_key_exists($key,$arrayValue));
    }

    /**
     * @param array $arrayValue
     * @param mixed $value
     *
     * @throws Exception Value doesn't exist
     * @throws Exception Item must be array
     *
     * @return bool
     */
    public static function containsValue($arrayValue, $value)
    {
        if (!isset($value))
            throw new Exception("Value doesn't exist");
        if (!is_array($arrayValue))
            throw new Exception("Item must be array");

        return (in_array($value, $arrayValue));
    }
} 