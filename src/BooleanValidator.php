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
     * @param bool $booleanIn
     *
     * @throws Exception Item to validate doesn't exist (boolean)
     * @throws Exception Item to validate has the wrong type (must be boolean)
     *
     * @return bool
     */
    public static function isTrue($booleanIn1)
    {
        if (!isset($booleanIn1))
            throw new Exception("Item to validate doesn't exist (boolean)");
        if (!is_bool($booleanIn1))
            throw new Exception("Item to validate has the wrong type (must be boolean)");

        if($booleanIn1)
            return true;
        else
            return false;
    }

    /**
     * @param bool $booleanIn
     *
     * @throws Exception Item to validate doesn't exist (boolean)
     * @throws Exception Item to validate has the wrong type (must be boolean)
     *
     * @return bool
     */
    public static function isFalse($booleanIn2)
    {
        if (!isset($booleanIn2))
            throw new Exception("Item to validate doesn't exist (boolean)");
        if (!is_bool($booleanIn2))
            throw new Exception("Item to validate has the wrong type (must be boolean)");

        if(!$booleanIn2)
            return true;
        else
            return false;
    }
} 