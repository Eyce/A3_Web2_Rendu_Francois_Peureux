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
     * @throws Exception Item must be DateTime
     * @throws Exception Item must be int
     *
     * @return bool
     */
    public static function isYear($dateValue, $testYear)
    {
        if (!is_a($dateValue, "\DateTime"))
            throw new Exception("Item must be DateTime");
        if (!is_int($testYear))
            throw new Exception("Item must be int");

        $dateValueYear = $dateValue->format('Y');
        return ($dateValueYear == $testYear);
    }
    /**
     * @param \DateTime $dateValue
     * @param string $testMonth
     *
     * @throws Exception Item must be DateTime
     * @throws Exception Item must be string
     *
     * @return bool
     */
    public static function isMonth($dateValue, $testMonth)
    {
        if (!is_a($dateValue, "\DateTime"))
            throw new Exception("Item must be DateTime");
        if (!is_int($testMonth))
            throw new Exception("Item must be string");

        $dateValueMonth = $dateValue->format('M');
        return ($dateValueMonth == $testMonth);
    }
    /**
     * @param \DateTime $dateValue
     * @param string $testDay
     *
     * @throws Exception Item must be DateTime
     * @throws Exception Item must be string
     *
     * @return bool
     */
    public static function isDay($dateValue, $testDay)
    {
        if (!is_a($dateValue, "\DateTime"))
            throw new Exception("Item must be DateTime");
        if (!is_int($testDay))
            throw new Exception("Item must be string");

        $dateValueDay = $dateValue->format('D');
        return ($dateValueDay == $testDay);
    }
    /**
     * @param \DateTime $dateValue
     * @param \DateTime $dateCompare
     *
     * @throws Exception Item must be DateTime
     *
     * @return bool
     */
    public static function isSameDay($dateValue, $dateCompare)
    {
        if (!is_a($dateValue, "\DateTime"))
            throw new Exception("Item must be DateTime");
        if (!is_a($dateCompare, "\DateTime"))
            throw new Exception("Item must be DateTime");

        return (    ($dateValue->format('Y') == $dateCompare->format('Y'))
            && ($dateValue->format('M') == $dateCompare->format('M'))
            && ($dateValue->format('D') == $dateCompare->format('D')));
    }
    /**
     * @param \DateTime $dateValue
     * @param \DateTime $dateCompare
     * @param int $strictness
     *
     * @throws Exception Item must be DateTime
     * @throws Exception Strictness argument invalid
     *
     * @return bool
     */
    public static function isAfter($dateValue, $dateCompare, $strictness = self::STRICT_INEQUALITY)
    {
        if (!is_a($dateValue, "\DateTime"))
            throw new Exception("Item must be DateTime");
        if (!is_a($dateCompare, "\DateTime"))
            throw new Exception("Item must be DateTime");
        if ($strictness != self::STRICT_INEQUALITY && $strictness != self::NOT_STRICT_INEQUALITY)
            throw new Exception("Strictness argument invalid");

        if($strictness == self::STRICT_INEQUALITY)
        {
            return ($dateValue > $dateCompare);
        }
        else if($strictness == self::NOT_STRICT_INEQUALITY)
        {
            return ($dateValue >= $dateCompare);
        }
    }
    /**
     * @param \DateTime $dateValue
     * @param \DateTime $dateCompare
     * @param int $strictness
     *
     * @throws Exception Item must be DateTime
     * @throws Exception Strictness argument invalid
     *
     * @return bool
     */
    public static function isBefore($dateValue, $dateCompare, $strictness = self::STRICT_INEQUALITY)
    {
        if (!is_a($dateValue, "\DateTime"))
            throw new Exception("Item must be DateTime");
        if (!is_a($dateCompare, "\DateTime"))
            throw new Exception("Item must be DateTime");
        if ($strictness != self::STRICT_INEQUALITY && $strictness != self::NOT_STRICT_INEQUALITY)
            throw new Exception("Strictness argument invalid");

        if($strictness == self::STRICT_INEQUALITY)
        {
            return ($dateValue < $dateCompare);
        }
        else if($strictness == self::NOT_STRICT_INEQUALITY)
        {
            return ($dateValue <= $dateCompare);
        }
    }
    /**
     * @param \DateTime $dateValue
     *
     * @throws Exception Item must be DateTime
     *
     * @return bool
     */
    public static function isToday($dateValue)
    {
        if (!is_a($dateValue, "\DateTime"))
            throw new Exception("Item must be DateTime");

        $dateToday = new \DateTime();
        return (    ($dateValue->format('Y') == $dateToday->format('Y'))
            && ($dateValue->format('M') == $dateToday->format('M'))
            && ($dateValue->format('D') == $dateToday->format('D')));
    }
    /**
     * @param \DateTime $dateValue
     * @param int $strictness
     *
     * @throws Exception Item must be DateTime
     * @throws Exception Strictness argument invalid
     *
     * @return bool
     */
    public static function isAfterToday($dateValue, $strictness = self::STRICT_INEQUALITY)
    {
        if (!is_a($dateValue, "\DateTime"))
            throw new Exception("Item must be DateTime");
        if ($strictness != self::STRICT_INEQUALITY && $strictness != self::NOT_STRICT_INEQUALITY)
            throw new Exception("Strictness argument invalid");

        $dateToday = new \DateTime();
        if($strictness == self::STRICT_INEQUALITY)
        {
            return ($dateValue > $dateToday);
        }
        else if($strictness == self::NOT_STRICT_INEQUALITY)
        {
            return ($dateValue >= $dateToday);
        }
    }
    /**
     * @param \DateTime $dateValue
     * @param int $strictness
     *
     * @throws Exception Item must be DateTime
     * @throws Exception Strictness argument invalid
     *
     * @return bool
     */
    public static function isBeforeToday($dateValue, $strictness = self::STRICT_INEQUALITY)
    {
        if (!is_a($dateValue, "\DateTime"))
            throw new Exception("Item must be DateTime");
        if ($strictness != self::STRICT_INEQUALITY && $strictness != self::NOT_STRICT_INEQUALITY)
            throw new Exception("Strictness argument invalid");

        $dateToday = new \DateTime();
        if($strictness == self::STRICT_INEQUALITY)
        {
            return ($dateValue < $dateToday);
        }
        else if($strictness == self::NOT_STRICT_INEQUALITY)
        {
            return ($dateValue <= $dateToday);
        }
    }

    /**
     * @param $dateValue
     * @param $timeZoneTest
     *
     * @throws Exception Item must be DateTime
     * @throws Exception Item must be DateTimeZone
     *
     * @return bool
     */
    public static function hasSameTimezone($dateValue, $timeZoneTest)
    {
        if (!is_a($dateValue, "\DateTime"))
            throw new Exception("Item must be DateTime");
        if (!is_a($timeZoneTest, "\DateTimeZone"))
            throw new Exception("Item must be DateTimeZone");

        return ($dateValue->getTimezone() == $timeZoneTest);
    }
} 