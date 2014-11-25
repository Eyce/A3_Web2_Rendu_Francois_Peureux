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
    public static function isTrue($booleanIn)
    {
        if (!isset($booleanIn))
            throw new Exception("Item to validate doesn't exist (boolean)");
        if (!is_bool($booleanIn))
            throw new Exception("Item to validate has the wrong type (must be boolean)");

        if($booleanIn)
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
    public static function isFalse($booleanIn)
    {
        if (!isset($booleanIn))
            throw new Exception("Item to validate doesn't exist (boolean)");
        if (!is_bool($booleanIn))
            throw new Exception("Item to validate has the wrong type (must be boolean)");

        if(!$booleanIn)
            return true;
        else
            return false;
    }
} 