<?php
/**
 * Created by PhpStorm.
 * User: Frnçois Peureux
 * Date: 24/11/2014
 * Time: 11:55
 */

namespace RenduFP\validatorLibrary;


class IntegerValidator {

    public function __construct()
    {

    }

    public static function equals($intValue, $equalsValue)
    {
        if ($intValue=$equalsValue)
            return "True";
        else
            return "False";
    }

} 