<?php

/*
 * @author François Peureux
 */

require __DIR__.'/vendor/autoload.php';

/*

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

// INTEGER VALIDATION

echo $validation = \RenduFP\validatorLibrary\IntegerValidator::isEqual($intTest, 8);
echo $validation = \RenduFP\validatorLibrary\IntegerValidator::isBiggerThan($intTest, 8, RenduFP\validatorLibrary\IntegerValidator::STRICT_INEQUALITY);
echo $validation = \RenduFP\validatorLibrary\IntegerValidator::isSmallerThan($intTest, 8);
echo $validation = \RenduFP\validatorLibrary\IntegerValidator::isBetween($intTest, 1, 10).'<br />';

// STRING VALIDATION

echo $validation = \RenduFP\validatorLibrary\StringValidator::lengthEquals($stringTest, 10);
echo $validation = \RenduFP\validatorLibrary\StringValidator::lengthBigger($stringTest, 5);
echo $validation = \RenduFP\validatorLibrary\StringValidator::lengthSmaller($stringTest, 87);
echo $validation = \RenduFP\validatorLibrary\StringValidator::lengthBetween($stringTest, 1, 15);
echo $validation = \RenduFP\validatorLibrary\StringValidator::noWhiteSpaceBeginEnd($stringTest);
echo $validation = \RenduFP\validatorLibrary\StringValidator::noWhiteSpace($stringTest).'<br />';

// BOOLEAN VALIDATION

echo $validation = \RenduFP\validatorLibrary\BooleanValidator::isTrue($booleanTest);
echo $validation = \RenduFP\validatorLibrary\BooleanValidator::isFalse($booleanTest).'<br />';

// ARRAY VALIDATION

echo $validation = \RenduFP\validatorLibrary\ArrayValidator::isEmpty($arrayTest);
echo $validation = \RenduFP\validatorLibrary\ArrayValidator::hasSameElementNumber($arrayTest, 3);
echo $validation = \RenduFP\validatorLibrary\ArrayValidator::hasMoreElements($arrayTest, 3);
echo $validation = \RenduFP\validatorLibrary\ArrayValidator::hasLessElements($arrayTest, 3);
echo $validation = \RenduFP\validatorLibrary\ArrayValidator::elementNumberBetween($arrayTest, 3, 5);
echo $validation = \RenduFP\validatorLibrary\ArrayValidator::containsKey($arrayTest, 4);
echo $validation = \RenduFP\validatorLibrary\ArrayValidator::containsValue($arrayTest,"Value 3").'<br />';

// DATETIME VALIDATION

echo $validation = \RenduFP\validatorLibrary\DateTimeValidator::isYear($dateTest, 2012);
echo $validation = \RenduFP\validatorLibrary\DateTimeValidator::isMonth($dateTest, "Jul");
echo $validation = \RenduFP\validatorLibrary\DateTimeValidator::isDay($dateTest, "Sun");
echo $validation = \RenduFP\validatorLibrary\DateTimeValidator::isSameDay($dateTest, new DateTime());
echo $validation = \RenduFP\validatorLibrary\DateTimeValidator::isAfter($dateTest, new DateTime());
echo $validation = \RenduFP\validatorLibrary\DateTimeValidator::isBefore($dateTest, new DateTime());
echo $validation = \RenduFP\validatorLibrary\DateTimeValidator::isToday($dateTest);
echo $validation = \RenduFP\validatorLibrary\DateTimeValidator::isBeforeToday($dateTest);
echo $validation = \RenduFP\validatorLibrary\DateTimeValidator::isAfterToday($dateTest, RenduFP\validatorLibrary\DateTimeValidator::STRICT_INEQUALITY);
echo $validation = \RenduFP\validatorLibrary\DateTimeValidator::hasSameTimezone($dateTest, new DateTimeZone('Europe/Paris')).'<br />';

*/