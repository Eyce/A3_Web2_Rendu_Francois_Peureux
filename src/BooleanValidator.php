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
     * @throws Exception Item must be boolean
     *
     * @return bool
     */
    public static function isTrue($booleanIn)
    {
        if (!is_bool($booleanIn))
            throw new Exception("Item must be boolean");

        return ($booleanIn);
    }

    /**
     * @param bool $booleanIn
     *
     * @throws Exception Item must be boolean
     *
     * @return bool
     */
    public static function isFalse($booleanIn)
    {
        if (!is_bool($booleanIn))
            throw new Exception("Item must be boolean");

        return (!$booleanIn);
    }
} 