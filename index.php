<?php
/*
 * @author François Peureux
 */
require __DIR__.'/vendor/autoload.php';

/*
 *
 */
echo $validation = RenduFP\validatorLibrary\IntegerValidator::equals(8, 8);

/*
 * Boolean Validation
 */
echo $validation = RenduFP\validatorLibrary\BooleanValidator::isTrue(true);