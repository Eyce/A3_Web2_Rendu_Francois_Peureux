<?php
/**
 * Created by PhpStorm.
 * User: François Peureux
 * Date: 24/11/2014
 * Time: 11:57
 */
namespace RenduFP\validatorLibrary;
/**
 * Class DateTimeValidator
 * @package RenduFP\validatorLibrary
 */
class DateTimeValidator {
    const STRICT_INEQUALITY     = 0;
    const NOT_STRICT_INEQUALITY = 1;
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * @param \DateTime $dateValue
     * @param int $testYear
     *
     * @throws Exception Item to validate doesn't exist (DateTime)
     * @throws Exception Comparison item doesn't exist (int)
     * @throws Exception Item to validate has the wrong type (must be DateTime)
     * @throws Exception Comparison item has the wrong type (must be int)
     *
     * @return bool
     */
    public static function isYear($dateValue, $testYear)
    {
        if (!isset($dateValue))
            throw new Exception("Item to validate doesn't exist (DateTime)");
        if (!isset($testYear))
            throw new Exception("Comparison item doesn't exist (int)");
        if (!is_a($dateValue, "\DateTime"))
            throw new Exception("Item to validate has the wrong type (must be DateTime)");
        if (!is_int($testYear))
            throw new Exception("Comparison item has the wrong type (must be int)");

        $dateValueYear = $dateValue->format('Y');
        if($dateValueYear == $testYear)
            return true;
        else
            return false;
    }
    /**
     * @param \DateTime $dateValue
     * @param string $testMonth
     *
     * @throws Exception Item to validate doesn't exist (DateTime)
     * @throws Exception Comparison item doesn't exist (int)
     * @throws Exception Item to validate has the wrong type (must be DateTime)
     * @throws Exception Comparison item has the wrong type (must be int)
     *
     * @return bool
     */
    public static function isMonth($dateValue, $testMonth)
    {
        if (!isset($dateValue))
            throw new Exception("Item to validate doesn't exist (DateTime)");
        if (!isset($testMonth))
            throw new Exception("Comparison item doesn't exist (string)");
        if (!is_a($dateValue, "\DateTime"))
            throw new Exception("Item to validate has the wrong type (must be DateTime)");
        if (!is_string($testMonth))
            throw new Exception("Comparison item has the wrong type (must be string)");

        $dateValueMonth = $dateValue->format('M');
        if($dateValueMonth == $testMonth)
            return true;
        else
            return false;
    }
    /**
     * @param \DateTime $dateValue
     * @param string $testDay
     *
     * @throws Exception Item to validate doesn't exist (DateTime)
     * @throws Exception Comparison item doesn't exist (int)
     * @throws Exception Item to validate has the wrong type (must be DateTime)
     * @throws Exception Comparison item has the wrong type (must be int)
     *
     * @return bool
     */
    public static function isDay($dateValue, $testDay)
    {
        if (!isset($dateValue))
            throw new Exception("Item to validate doesn't exist (DateTime)");
        if (!isset($testDay))
            throw new Exception("Comparison item doesn't exist (string)");
        if (!is_a($dateValue, "\DateTime"))
            throw new Exception("Item to validate has the wrong type (must be DateTime)");
        if (!is_string($testDay))
            throw new Exception("Comparison item has the wrong type (must be string)");

        $dateValueDay = $dateValue->format('D');
        if($dateValueDay == $testDay)
            return true;
        else
            return false;
    }
    /**
     * @param \DateTime $dateValue
     * @param \DateTime $dateCompare
     *
     * @throws Exception Item to validate doesn't exist (DateTime)
     * @throws Exception Comparison item doesn't exist (DateTime)
     * @throws Exception Item to validate has the wrong type (must be DateTime)
     * @throws Exception Comparison item has the wrong type (must be DateTime)
     *
     * @return bool
     */
    public static function isSameDay($dateValue, $dateCompare)
    {
        if (!isset($dateValue))
            throw new Exception("Item to validate doesn't exist (DateTime)");
        if (!isset($dateCompare))
            throw new Exception("Comparison item doesn't exist (DateTime)");
        if (!is_a($dateValue, "\DateTime"))
            throw new Exception("Item to validate has the wrong type (must be DateTime)");
        if (!is_a($dateCompare, "\DateTime"))
            throw new Exception("Comparison item has the wrong type (must be DateTime)");

        if(    ($dateValue->format('Y') == $dateCompare->format('Y'))
            && ($dateValue->format('M') == $dateCompare->format('M'))
            && ($dateValue->format('D') == $dateCompare->format('D')))
            return true;
        else
            return false;
    }
    /**
     * @param \DateTime $dateValue
     * @param \DateTime $dateCompare
     * @param int $strictness
     *
     * @throws Exception Item to validate doesn't exist (DateTime)
     * @throws Exception Comparison item doesn't exist (DateTime)
     * @throws Exception Item to validate has the wrong type (must be DateTime)
     * @throws Exception Comparison item has the wrong type (must be DateTime)
     * @throws Exception Strictness argument invalid
     *
     * @return bool
     */
    public static function isAfter($dateValue, $dateCompare, $strictness = self::STRICT_INEQUALITY)
    {
        if (!isset($dateValue))
            throw new Exception("Item to validate doesn't exist (DateTime)");
        if (!isset($dateCompare))
            throw new Exception("Comparison item doesn't exist (DateTime)");
        if (!is_a($dateValue, "\DateTime"))
            throw new Exception("Item to validate has the wrong type (must be DateTime)");
        if (!is_a($dateCompare, "\DateTime"))
            throw new Exception("Comparison item has the wrong type (must be DateTime)");
        if ($strictness != self::STRICT_INEQUALITY && $strictness != self::NOT_STRICT_INEQUALITY)
            throw new Exception("Strictness argument invalid");

        if($strictness == self::STRICT_INEQUALITY)
        {
            if ($dateValue > $dateCompare)
                return true;
            else
                return false;
        }
        else if($strictness == self::NOT_STRICT_INEQUALITY)
        {
            if ($dateValue >= $dateCompare)
                return true;
            else
                return false;
        }
    }
    /**
     * @param \DateTime $dateValue
     * @param \DateTime $dateCompare
     * @param int $strictness
     *
     * @throws Exception Item to validate doesn't exist (DateTime)
     * @throws Exception Comparison item doesn't exist (DateTime)
     * @throws Exception Item to validate has the wrong type (must be DateTime)
     * @throws Exception Comparison item has the wrong type (must be DateTime)
     * @throws Exception Strictness argument invalid
     *
     * @return bool
     */
    public static function isBefore($dateValue, $dateCompare, $strictness = self::STRICT_INEQUALITY)
    {
        if (!isset($dateValue))
            throw new Exception("Item to validate doesn't exist (DateTime)");
        if (!isset($dateCompare))
            throw new Exception("Comparison item doesn't exist (DateTime)");
        if (!is_a($dateValue, "\DateTime"))
            throw new Exception("Item to validate has the wrong type (must be DateTime)");
        if (!is_a($dateCompare, "\DateTime"))
            throw new Exception("Comparison item has the wrong type (must be DateTime)");
        if ($strictness != self::STRICT_INEQUALITY && $strictness != self::NOT_STRICT_INEQUALITY)
            throw new Exception("Strictness argument invalid");

        if($strictness == self::STRICT_INEQUALITY)
        {
            if ($dateValue < $dateCompare)
                return true;
            else
                return false;
        }
        else if($strictness == self::NOT_STRICT_INEQUALITY)
        {
            if ($dateValue <= $dateCompare)
                return true;
            else
                return false;
        }
    }
    /**
     * @param \DateTime $dateValue
     *
     * @throws Exception Item to validate doesn't exist (DateTime)
     * @throws Exception Item to validate has the wrong type (must be DateTime)
     *
     * @return bool
     */
    public static function isToday($dateValue)
    {
        if (!isset($dateValue))
            throw new Exception("Item to validate doesn't exist (DateTime)");
        if (!is_a($dateValue, "\DateTime"))
            throw new Exception("Item to validate has the wrong type (must be DateTime)");

        $dateToday = new \DateTime();
        if(    ($dateValue->format('Y') == $dateToday->format('Y'))
            && ($dateValue->format('M') == $dateToday->format('M'))
            && ($dateValue->format('D') == $dateToday->format('D')))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    /**
     * @param \DateTime $dateValue
     * @param int $strictness
     *
     * @throws Exception Item to validate doesn't exist (DateTime)
     * @throws Exception Item to validate has the wrong type (must be DateTime)
     * @throws Exception Strictness argument invalid
     *
     * @return bool
     */
    public static function isAfterToday($dateValue, $strictness = self::STRICT_INEQUALITY)
    {
        if (!isset($dateValue))
            throw new Exception("Item to validate doesn't exist (DateTime)");
        if (!is_a($dateValue, "\DateTime"))
            throw new Exception("Item to validate has the wrong type (must be DateTime)");
        if ($strictness != self::STRICT_INEQUALITY && $strictness != self::NOT_STRICT_INEQUALITY)
            throw new Exception("Strictness argument invalid");

        $dateToday = new \DateTime();
        if($strictness == self::STRICT_INEQUALITY)
        {
            if ($dateValue > $dateToday)
                return true;
            else
                return false;
        }
        else if($strictness == self::NOT_STRICT_INEQUALITY)
        {
            if ($dateValue >= $dateToday)
                return true;
            else
                return false;
        }
    }
    /**
     * @param \DateTime $dateValue
     * @param int $strictness
     *
     * @throws Exception Item to validate doesn't exist (DateTime)
     * @throws Exception Item to validate has the wrong type (must be DateTime)
     * @throws Exception Strictness argument invalid
     *
     * @return bool
     */
    public static function isBeforeToday($dateValue, $strictness = self::STRICT_INEQUALITY)
    {
        if (!isset($dateValue))
            throw new Exception("Item to validate doesn't exist (DateTime)");
        if (!is_a($dateValue, "\DateTime"))
            throw new Exception("Item to validate has the wrong type (must be DateTime)");
        if ($strictness != self::STRICT_INEQUALITY && $strictness != self::NOT_STRICT_INEQUALITY)
            throw new Exception("Strictness argument invalid");

        $dateToday = new \DateTime();
        if($strictness == self::STRICT_INEQUALITY)
        {
            if ($dateValue < $dateToday)
                return true;
            else
                return false;
        }
        else if($strictness == self::NOT_STRICT_INEQUALITY)
        {
            if ($dateValue <= $dateToday)
                return true;
            else
                return false;
        }
    }

    /**
     * @param $dateValue
     * @param $timeZoneTest
     *
     * @throws Exception Item to validate doesn't exist (DateTime)
     * @throws Exception Item to validate has the wrong type (must be DateTime)
     * @throws Exception Comparison item doesn't exist (DateTimezone)
     * @throws Exception Comparison item has the wrong type (must be DateTimezone)
     *
     * @return bool
     */
    public static function hasSameTimezone($dateValue, $timeZoneTest)
    {
        if (!isset($dateValue))
            throw new Exception("Item to validate doesn't exist (DateTime)");
        if (!is_a($dateValue, "\DateTime"))
            throw new Exception("Item to validate has the wrong type (must be DateTime)");
        if (!isset($timeZoneTest))
            throw new Exception("Comparison item doesn't exist (DateTimezone)");
        if (!is_a($timeZoneTest, "\DateTimeZone"))
            throw new Exception("Comparison item has the wrong type (must be DateTimezone)");

        if($dateValue->getTimezone() == $timeZoneTest)
            return true;
        else
            return false;
    }
} 