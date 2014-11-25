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
     * @return string
     */
    public static function isYear($dateValue, $testYear)
    {
        $dateValueYear = $dateValue->format('Y');

        if($dateValueYear == $testYear)
            return "True";
        else
            return "False";
    }

    /**
     * @param \DateTime $dateValue
     * @param string $testMonth
     *
     * @return string
     */
    public static function isMonth($dateValue, $testMonth)
    {
        $dateValueMonth = $dateValue->format('M');

        if($dateValueMonth == $testMonth)
            return "True";
        else
            return "False";
    }

    /**
     * @param \DateTime $dateValue
     * @param string $testDay
     *
     * @return string
     */
    public static function isDay($dateValue, $testDay)
    {
        $dateValueDay = $dateValue->format('D');

        if($dateValueDay == $testDay)
            return "True";
        else
            return "False";
    }

    /**
     * @param \DateTime $dateValue
     * @param \DateTime $dateCompare
     *
     * @return string
     */
    public static function isSameDay($dateValue, $dateCompare)
    {
        if(    ($dateValue->format('Y') == $dateCompare->format('Y'))
            && ($dateValue->format('M') == $dateCompare->format('M'))
            && ($dateValue->format('D') == $dateCompare->format('D')))
            return "True";
        else
            return "False";
    }

    /**
     * @param \DateTime $dateValue
     * @param \DateTime $dateCompare
     * @param int $strictness
     *
     * @return string
     */
    public static function isAfter($dateValue, $dateCompare, $strictness = self::STRICT_INEQUALITY)
    {
        if($strictness == self::STRICT_INEQUALITY)
        {
            if ($dateValue > $dateCompare)
                return "True";
            else
                return "False";
        }
        else if($strictness == self::NOT_STRICT_INEQUALITY)
        {
            if ($dateValue >= $dateCompare)
                return "True";
            else
                return "False";
        }
    }

    /**
     * @param \DateTime $dateValue
     * @param \DateTime $dateCompare
     * @param int $strictness
     *
     * @return string
     */
    public static function isBefore($dateValue, $dateCompare, $strictness = self::STRICT_INEQUALITY)
    {
        if($strictness == self::STRICT_INEQUALITY)
        {
            if ($dateValue < $dateCompare)
                return "True";
            else
                return "False";
        }
        else if($strictness == self::NOT_STRICT_INEQUALITY)
        {
            if ($dateValue <= $dateCompare)
                return "True";
            else
                return "False";
        }
    }

    /**
     * @param \DateTime $dateValue
     *
     * @return string
     */
    public static function isToday($dateValue)
    {
        $dateToday = new \DateTime();

        if(    ($dateValue->format('Y') == $dateToday->format('Y'))
            && ($dateValue->format('M') == $dateToday->format('M'))
            && ($dateValue->format('D') == $dateToday->format('D')))
        {
            return "True";
        }
        else
        {
            return "False";
        }
    }

    /**
     * @param \DateTime $dateValue
     * @param int $strictness
     *
     * @return string
     */
    public static function isAfterToday($dateValue, $strictness = self::STRICT_INEQUALITY)
    {
        $dateToday = new \DateTime();

        if($strictness == self::STRICT_INEQUALITY)
        {
            if ($dateValue > $dateToday)
                return "True";
            else
                return "False";
        }
        else if($strictness == self::NOT_STRICT_INEQUALITY)
        {
            if ($dateValue >= $dateToday)
                return "True";
            else
                return "False";
        }
    }

    /**
     * @param \DateTime $dateValue
     * @param int $strictness
     *
     * @return string
     */
    public static function isBeforeToday($dateValue, $strictness = self::STRICT_INEQUALITY)
    {
        $dateToday = new \DateTime();

        if($strictness == self::STRICT_INEQUALITY)
        {
            if ($dateValue < $dateToday)
                return "True";
            else
                return "False";
        }
        else if($strictness == self::NOT_STRICT_INEQUALITY)
        {
            if ($dateValue <= $dateToday)
                return "True";
            else
                return "False";
        }
    }
} 