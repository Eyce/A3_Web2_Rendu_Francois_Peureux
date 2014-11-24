<?php
/*
 * @author François Peureux
 */
require __DIR__.'/vendor/autoload.php';

/*
 * Integer Validation
 */
echo $validation = RenduFP\validatorLibrary\IntegerValidator::equals(8, 8).PHP_EOL;
echo $validation = \RenduFP\validatorLibrary\IntegerValidator::biggerThan(5, 8).PHP_EOL;
echo $validation = \RenduFP\validatorLibrary\IntegerValidator::smallerThan(5, 8).PHP_EOL;
echo $validation = \RenduFP\validatorLibrary\IntegerValidator::between(5, 1, 10).PHP_EOL;
echo $validation = RenduFP\validatorLibrary\IntegerValidator::isPositive(-5).PHP_EOL;
echo $validation = RenduFP\validatorLibrary\IntegerValidator::isNegative(0,RenduFP\validatorLibrary\IntegerValidator::NOT_STRICT_INEQUALITY).PHP_EOL;

/*
 * Boolean Validation
 */
echo $validation = RenduFP\validatorLibrary\BooleanValidator::isTrue(true).PHP_EOL;
echo $validation = RenduFP\validatorLibrary\BooleanValidator::isFalse(true).PHP_EOL;