<?php
/*
 * @author François Peureux
 */
require __DIR__.'/vendor/autoload.php';

/*
 * Integer Validation
 */

echo $validation = \RenduFP\validatorLibrary\IntegerValidator::equals(8, 8);
echo $validation = \RenduFP\validatorLibrary\IntegerValidator::biggerThan(5, 8);
echo $validation = \RenduFP\validatorLibrary\IntegerValidator::smallerThan(5, 8);
echo $validation = \RenduFP\validatorLibrary\IntegerValidator::between(5, 1, 10);
echo $validation = \RenduFP\validatorLibrary\IntegerValidator::isPositive(-5);
echo $validation = \RenduFP\validatorLibrary\IntegerValidator::isNegative(0,RenduFP\validatorLibrary\IntegerValidator::NOT_STRICT_INEQUALITY).PHP_EOL;

/*
 *  String Validation
 */

echo $validation = \RenduFP\validatorLibrary\StringValidator::strLengthEquals("Hello world", 10);
echo $validation = \RenduFP\validatorLibrary\StringValidator::strLengthBigger("Hello world", 5);
echo $validation = \RenduFP\validatorLibrary\StringValidator::strLengthSmaller("Hello world", 87);
echo $validation = \RenduFP\validatorLibrary\StringValidator::strLengthBetween("Hello world", 1, 15);
echo $validation = \RenduFP\validatorLibrary\StringValidator::noWhiteSpaceBeginEnd("Hello world ");
echo $validation = \RenduFP\validatorLibrary\StringValidator::noWhiteSpace("Hello world").PHP_EOL;

/*
 * Boolean Validation
 */

echo $validation = \RenduFP\validatorLibrary\BooleanValidator::isTrue(true);
echo $validation = \RenduFP\validatorLibrary\BooleanValidator::isFalse(true).PHP_EOL;

/*
 * Array Validation
 */

