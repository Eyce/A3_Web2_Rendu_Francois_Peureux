<?php
/**
 * Created by PhpStorm.
 * User: François Peureux
 * Date: 24/11/2014
 * Time: 11:56
 */

namespace RenduFP\validatorLibrary;


class BooleanValidator {

    public function __construct()
    {

    }

    public static function isTrue($boolean)
    {
        if($boolean)
            return "True";
        else
            return "False";
    }
} 