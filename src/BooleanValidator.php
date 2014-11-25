<?php
/**
 * Created by PhpStorm.
 * User: François Peureux
 * Date: 24/11/2014
 * Time: 11:56
 */

namespace RenduFP\validatorLibrary;


/**
 * Class BooleanValidator
 * @package RenduFP\validatorLibrary
 */
class BooleanValidator {

    /**
     * Constructor
     */
    public function __construct()
    {

    }

    /**
     * @param boolean $booleanIn
     *
     * @return string
     */
    public static function isTrue($booleanIn)
    {
        if($booleanIn)
            return "True";
        else
            return "False";
    }

    /**
     * @param boolean $booleanIn
     *
     * @return string
     */
    public static function isFalse($booleanIn)
    {
        if(!$booleanIn)
            return "True";
        else
            return "False";
    }
} 