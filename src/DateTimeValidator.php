<?php
/**
 * Created by PhpStorm.
 * User: François Peureux
 * Date: 24/11/2014
 * Time: 11:57
 */

namespace RenduFP\validatorLibrary;


class DateTimeValidator {

    const STRICT_INEQUALITY     = 0;
    const NOT_STRICT_INEQUALITY = 1;

    public function __construct()
    {

    }

    public static function isYear($dateValue, $testYear)
    {
        $dateValueYear = $dateValue->format('Y');

        if($dateValueYear == $testYear)
            return "True";
        else
            return "False";
    }

    public static function isMonth($dateValue, $testMonth)
    {
        $dateValueMonth = $dateValue->format('M');

        if($dateValueMonth == $testMonth)
            return "True";
        else
            return "False";
    }

    public static function isDay($dateValue, $testDay)
    {
        $dateValueDay = $dateValue->format('D');

        if($dateValueDay == $testDay)
            return "True";
        else
            return "False";
    }

    public static function isSameDay($dateValue, $dateCompare)
    {
        if(    ($dateValue->format('Y') == $dateCompare->format('Y'))
            && ($dateValue->format('M') == $dateCompare->format('M'))
            && ($dateValue->format('D') == $dateCompare->format('D')))
            return "True";
        else
            return "False";
    }

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