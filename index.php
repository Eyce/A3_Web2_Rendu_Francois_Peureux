<?php
/*
 * @author François Peureux
 */
require __DIR__.'/vendor/autoload.php';

// VARIABLE DEFINITION

$intTest = 5 ;
$stringTest = "Hello world !";
$booleanTest = true;
$arrayTest = array
                    (
                        1 => "Value 1",
                        2 => "Value 2",
                        3 => "Value 3",
                        4 => "Value 4",
                        5 => "Value 5"
                    );
$dateTest = new DateTime("2012-07-08 11:14:15", new DateTimeZone('Europe/Paris'));
var_dump($dateTest);


// INTEGER VALIDATION

echo $validation = \RenduFP\validatorLibrary\IntegerValidator::equals($intTest, 8);
echo $validation = \RenduFP\validatorLibrary\IntegerValidator::biggerThan($intTest, 8);
echo $validation = \RenduFP\validatorLibrary\IntegerValidator::smallerThan($intTest, 8);
echo $validation = \RenduFP\validatorLibrary\IntegerValidator::between($intTest, 1, 10);
echo $validation = \RenduFP\validatorLibrary\IntegerValidator::isPositive($intTest);
echo $validation = \RenduFP\validatorLibrary\IntegerValidator::isNegative($intTest,RenduFP\validatorLibrary\IntegerValidator::NOT_STRICT_INEQUALITY).PHP_EOL;

// STRING VALIDATION

echo $validation = \RenduFP\validatorLibrary\StringValidator::strLengthEquals($stringTest, 10);
echo $validation = \RenduFP\validatorLibrary\StringValidator::strLengthBigger($stringTest, 5);
echo $validation = \RenduFP\validatorLibrary\StringValidator::strLengthSmaller($stringTest, 87);
echo $validation = \RenduFP\validatorLibrary\StringValidator::strLengthBetween($stringTest, 1, 15);
echo $validation = \RenduFP\validatorLibrary\StringValidator::noWhiteSpaceBeginEnd($stringTest);
echo $validation = \RenduFP\validatorLibrary\StringValidator::noWhiteSpace($stringTest).PHP_EOL;

// BOOLEAN VALIDATION

echo $validation = \RenduFP\validatorLibrary\BooleanValidator::isTrue($booleanTest);
echo $validation = \RenduFP\validatorLibrary\BooleanValidator::isFalse($booleanTest).PHP_EOL;

// ARRAY VALIDATION

echo $validation = \RenduFP\validatorLibrary\ArrayValidator::isEmpty($arrayTest);
echo $validation = \RenduFP\validatorLibrary\ArrayValidator::hasSameElementNumber($arrayTest, 3);
echo $validation = \RenduFP\validatorLibrary\ArrayValidator::hasMoreElements($arrayTest, 3);
echo $validation = \RenduFP\validatorLibrary\ArrayValidator::hasLessElements($arrayTest, 3);
echo $validation = \RenduFP\validatorLibrary\ArrayValidator::elementNumberBetween($arrayTest, 3, 5);
echo $validation = \RenduFP\validatorLibrary\ArrayValidator::containsKey($arrayTest, 4);
echo $validation = \RenduFP\validatorLibrary\ArrayValidator::containsValue($arrayTest,"Value 3").PHP_EOL;

// DATETIME VALIDATION

echo $validation = \RenduFP\validatorLibrary\DateTimeValidator::isYear($dateTest, 2012);
echo $validation = \RenduFP\validatorLibrary\DateTimeValidator::isMonth($dateTest, "Jul");
echo $validation = \RenduFP\validatorLibrary\DateTimeValidator::isDay($dateTest, "Sun");
echo $validation = \RenduFP\validatorLibrary\DateTimeValidator::isAfter($dateTest, new DateTime());
echo $validation = \RenduFP\validatorLibrary\DateTimeValidator::isBefore($dateTest, new DateTime());