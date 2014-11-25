#Validator

[![Build Status](https://scrutinizer-ci.com/g/Eyce/A3_Web2_Rendu_Francois_Peureux/badges/build.png?b=master)](https://scrutinizer-ci.com/g/Eyce/A3_Web2_Rendu_Francois_Peureux/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Eyce/A3_Web2_Rendu_Francois_Peureux/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Eyce/A3_Web2_Rendu_Francois_Peureux/?branch=master)

This library validates several types of data :

*   Int
*   String
*   Boolean
*   Array
*   DateTime

*Several examples can be found commented in the index.php file.*

##Integer Validation

Validates an Integer, by performing the following tests :

###isEqual

Tests if given Integer is Equals to a Parameter.

**Syntax**

```php
bool isEqual(int $intTest, [int $parameter = 0])
```

**Examples**

```php
//Tests if $intTest = 8
\RenduFP\validatorLibrary\IntegerValidator::isEqual($intTest, 8)

//Tests if $intTest = 0
\RenduFP\validatorLibrary\IntegerValidator::isEqual($intTest)
```

###isBiggerThan

Tests if given Integer is Superior to a Parameter.

**Syntax**

```php
bool isBiggerThan(int $intTest, [int $parameter = 0], [int $strictness = self::STRICT_INEQUALITY])
```

**Examples**

```php
//Tests if $intTest > 8
\RenduFP\validatorLibrary\IntegerValidator::isBiggerThan($intTest, 8)
\RenduFP\validatorLibrary\IntegerValidator::isBiggerThan($intTest, 8, RenduFP\validatorLibrary\IntegerValidator::STRICT_INEQUALITY)

//Tests if $intTest >= 8
\RenduFP\validatorLibrary\IntegerValidator::isBiggerThan($intTest, 8, RenduFP\validatorLibrary\IntegerValidator::NOT_STRICT_INEQUALITY)

//Tests if $intTest > 0
\RenduFP\validatorLibrary\IntegerValidator::isBiggerThan($intTest)
```

###isSmallerThan

Tests if given Integer is Inferior to a Parameter.

**Syntax**

```php
bool isSmallerThan(int $intTest, [int $parameter = 0], [int $strictness = self::STRICT_INEQUALITY])
```

**Examples**

```php
//Tests if $intTest < 8
\RenduFP\validatorLibrary\IntegerValidator::isSmallerThan($intTest, 8)
\RenduFP\validatorLibrary\IntegerValidator::isSmallerThan($intTest, 8, RenduFP\validatorLibrary\IntegerValidator::STRICT_INEQUALITY)

//Tests if $intTest <= 8
\RenduFP\validatorLibrary\IntegerValidator::isSmallerThan($intTest, 8, RenduFP\validatorLibrary\IntegerValidator::NOT_STRICT_INEQUALITY)

//Tests if $intTest < 0
\RenduFP\validatorLibrary\IntegerValidator::isSmallerThan($intTest)
```

###isBetween

Tests if given Integer is between two Parameters.

**Syntax**

```php
bool isBiggerThan(int $intTest, int $parameterMin, int $parameterMax, [int $strictness = self::STRICT_INEQUALITY])
```

**Examples**

```php
//Tests if $intTest is strictly between 1 and 10
\RenduFP\validatorLibrary\IntegerValidator::isBetween($intTest, 1, 10)
\RenduFP\validatorLibrary\IntegerValidator::isBetween($intTest, 1, 10, RenduFP\validatorLibrary\IntegerValidator::STRICT_INEQUALITY)

//Tests if $intTest is between 1 and 10 included
\RenduFP\validatorLibrary\IntegerValidator::isBetween($intTest, 1, 10, RenduFP\validatorLibrary\IntegerValidator::NOT_STRICT_INEQUALITY)
```

##String Validation

Validates a String, by performing the following tests :

###lengthEquals

Tests if a given String length is equals to a Parameter.

**Syntax**

```php
bool lengthEquals(string $strValue, int $testValue)
```

**Example**

```php
//Tests if $stringTest length is 10
\RenduFP\validatorLibrary\StringValidator::lengthEquals($stringTest, 10)
```

###lengthBigger

Tests if a given String length is bigger than a Parameter.

**Syntax**

```php
bool lengthBigger(string $strValue, int $testValue, [int $strictness = self::STRICT_INEQUALITY])
```

**Examples**

```php
//Tests if $stringTest length is strictly bigger than 10
\RenduFP\validatorLibrary\StringValidator::lengthBigger($stringTest, 10)
\RenduFP\validatorLibrary\StringValidator::lengthBigger($stringTest, 10, RenduFP\validatorLibrary\StringValidator::STRICT_INEQUALITY)

//Tests if $stringTest length is bigger or equals to 10
\RenduFP\validatorLibrary\StringValidator::lengthBigger($stringTest, 10, RenduFP\validatorLibrary\StringValidator::NOT_STRICT_INEQUALITY)
```

###lengthSmaller

Tests if a given String length is smaller than a Parameter.

**Syntax**

```php
bool lengthSmaller(string $strValue, int $testValue, [int $strictness = self::STRICT_INEQUALITY])
```

**Examples**

```php
//Tests if $stringTest length is strictly smaller than 10
\RenduFP\validatorLibrary\StringValidator::lengthSmaller($stringTest, 10)
\RenduFP\validatorLibrary\StringValidator::lengthSmaller($stringTest, 10, RenduFP\validatorLibrary\StringValidator::STRICT_INEQUALITY)

//Tests if $stringTest length is smaller or equals to 10
\RenduFP\validatorLibrary\StringValidator::lengthSmaller($stringTest, 10, RenduFP\validatorLibrary\StringValidator::NOT_STRICT_INEQUALITY)
```

###lengthBetween

Tests if a given String length is between two Parameters.

**Syntax**

```php
bool lengthBetween(string $strValue, int $testValueMin, int $testValueMax, [int $strictness = self::STRICT_INEQUALITY])
```

**Examples**

```php
//Tests if $stringTest length is strictly between 1 and 10
\RenduFP\validatorLibrary\StringValidator::lengthBetween($stringTest, 1, 10)
\RenduFP\validatorLibrary\StringValidator::lengthBetween($stringTest, 1, 10, RenduFP\validatorLibrary\StringValidator::STRICT_INEQUALITY)

//Tests if $stringTest length is between 1 and 10 included
\RenduFP\validatorLibrary\StringValidator::lengthBetween($stringTest, 1, 10, RenduFP\validatorLibrary\StringValidator::NOT_STRICT_INEQUALITY)
```

###noWhiteSpaceBeginEnd

Tests if a given String has neither a white space at the beginning nor at the end.

**Syntax**

```php
bool noWhiteSpaceBeginEnd(string $stringTest)
```

**Example**

```php
//Tests if $stringTest has no white spaces at the beginning or the end
\RenduFP\validatorLibrary\StringValidator::noWhiteSpaceBeginEnd($stringTest)
```

###noWhiteSpace

Tests if a given String has no white space in it.

**Syntax**

```php
bool noWhiteSpace(string $stringTest)
```

**Example**

```php
//Tests if $stringTest has no white spaces
\RenduFP\validatorLibrary\StringValidator::noWhiteSpace($stringTest)
```

##Boolean Validation

Validates a Boolean, by performing the following tests :

###isTrue

Tests if the Boolean is True.

**Syntax**

```php
bool isTrue($booleanTest)
```

**Example**

```php
//Tests if $booleanTest is true
\RenduFP\validatorLibrary\BooleanValidator::isTrue($booleanTest)
```

###isFalse

Tests if the Boolean is False.

**Syntax**

```php
bool isFalse($booleanTest)
```

**Example**

```php
//Tests if $booleanTest is false
\RenduFP\validatorLibrary\BooleanValidator::isFalse($booleanTest)
```

##Array Validation

Validates an Array, by performing the following tests :

###isEmpty

Tests if an Array is Empty.

**Syntax**

```php
bool isEmpty(array $arrayTest)
```

**Example**

```php
//Tests if $arrayTest is empty
\RenduFP\validatorLibrary\ArrayValidator::isEmpty($arrayTest);
```

###hasSameElementNumber

Tests if an Array has X elements, where X is a given Parameter.

**Syntax**

```php
bool hasSameElementNumber(array $arrayValue, int $elementNumber)
```

**Example**

```php
//Tests if $arrayTest contains 3 elements
\RenduFP\validatorLibrary\ArrayValidator::hasSameElementNumber($arrayTest, 3)
```

###hasMoreElements

Tests if an Array has more than X elements, where X is a given Parameter.

**Syntax**

```php
bool hasMoreElements(array $arrayValue, int $elementNumber, [int $strictness = self::STRICT_INEQUALITY])
```

**Examples**

```php
//Tests if $arrayTest has strictly more than 3 elements
\RenduFP\validatorLibrary\ArrayValidator::hasMoreElements($arrayTest, 3)
\RenduFP\validatorLibrary\ArrayValidator::hasMoreElements($arrayTest, 3, RenduFP\validatorLibrary\ArrayValidator::STRICT_INEQUALITY);
//Tests if $arrayTest has 3 or more elements
\RenduFP\validatorLibrary\ArrayValidator::hasMoreElements($arrayTest, 3, RenduFP\validatorLibrary\ArrayValidator::NOT_STRICT_INEQUALITY);
```

###hasLessElements

Tests if an Array has less than X elements, where X is a given Parameter.

**Syntax**

```php
bool hasLessElements(array $arrayValue, int $elementNumber, [int $strictness = self::STRICT_INEQUALITY])
```

**Examples**

```php
//Tests if $arrayTest has strictly less than 3 elements
\RenduFP\validatorLibrary\ArrayValidator::hasLessElements($arrayTest, 3)
\RenduFP\validatorLibrary\ArrayValidator::hasLessElements($arrayTest, 3, RenduFP\validatorLibrary\ArrayValidator::STRICT_INEQUALITY);
//Tests if $arrayTest has 3 or less elements
\RenduFP\validatorLibrary\ArrayValidator::hasLessElements($arrayTest, 3, RenduFP\validatorLibrary\ArrayValidator::NOT_STRICT_INEQUALITY);
```

###elementNumberBetween

Tests if an Array has a number of elements between two given Parameters.

**Syntax**

```php
bool elementNumberBetween(array $arrayValue, int $elementNumberMin, int $elementNumberMax, [int $strictness = self::STRICT_INEQUALITY])
```

**Examples**

```php
//Tests if $arrayTest has strictly between 1 and 10 elements
\RenduFP\validatorLibrary\ArrayValidator::lengthBetween($arrayTest, 1, 10)
\RenduFP\validatorLibrary\ArrayValidator::lengthBetween($arrayTest, 1, 10, RenduFP\validatorLibrary\ArrayValidator::STRICT_INEQUALITY)
//Tests if $stringTest has between 1 and 10 elements included
\RenduFP\validatorLibrary\ArrayValidator::lengthBetween($arrayTest, 1, 10, RenduFP\validatorLibrary\ArrayValidator::NOT_STRICT_INEQUALITY)
```

###containsKey

Tests if an Array contains a given Key.

**Syntax**

```php
bool containsKey(array $arrayValue, mixed $key)
```

**Examples**

```php
//Tests if $arrayTest contains the key 4
\RenduFP\validatorLibrary\ArrayValidator::containsKey($arrayTest, 4)
```

###containsValue

Tests if an Array contains a given Value.

**Syntax**

```php
bool containsValue(array $arrayValue, mixed $value)
```

**Examples**

```php
//Tests if $arrayTest contains the value "foo"
\RenduFP\validatorLibrary\ArrayValidator::containsKey($arrayTest, "foo")
```

##DateTime Validation

Validates an DateTime object, by performing the following tests :

###isYear

Tests if a DateTime fits a given year.

**Syntax**

```php
bool isYear(DateTime $dateValue, int $testYear)
```

**Examples**

```php
//Tests if $dateTest year is 2012
\RenduFP\validatorLibrary\DateTimeValidator::isYear($dateTest, 2012)
```

###isMonth

Tests if a DateTime fits a given month.

**Syntax**

```php
bool isMonth(DateTime $dateValue, string $testMonth)
```

**Examples**

```php
//Tests if $dateTest month is July
\RenduFP\validatorLibrary\DateTimeValidator::isYear($dateTest, "Jul")
```

###isDay

Tests if a DateTime fits a given day.

**Syntax**

```php
bool isDay(DateTime $dateValue, int $testDay)
```

**Examples**

```php
//Tests if $dateTest day is Sunday
\RenduFP\validatorLibrary\DateTimeValidator::isYear($dateTest, "Sun")
```

###isSameDay

Tests if two DateTime are one the same day.

**Syntax**

```php
bool isSameDay(DateTime $dateValue, DateTime $dateCompare)
```

**Examples**

```php
//Tests if $dateTest is the same as $dateComp
\RenduFP\validatorLibrary\DateTimeValidator::isSameDay($dateTest, $dateComp)
```

###isAfter

Tests if a DateTime is after another given DateTime.

**Syntax**

```php
bool isAfter(DateTime $dateValue, DateTime $dateCompare, [int $strictness = self::STRICT_INEQUALITY])
```

**Examples**

```php
//Tests if $dateTest is strictly after $dateComp
\RenduFP\validatorLibrary\DateTimeValidator::isAfter($dateTest, $dateComp)
\RenduFP\validatorLibrary\DateTimeValidator::isAfter($dateTest, $dateComp, RenduFP\validatorLibrary\DateTimeValidator::STRICT_INEQUALITY)
//Tests if $dateTest is equals or after $dateComp
\RenduFP\validatorLibrary\DateTimeValidator::isAfter($dateTest, $dateComp, RenduFP\validatorLibrary\DateTimeValidator::NOT_STRICT_INEQUALITY)
```

###isBefore

Tests if a DateTime is before another given DateTime.

**Syntax**

```php
bool isBefore(DateTime $dateValue, DateTime $dateCompare, [int $strictness = self::STRICT_INEQUALITY])
```

**Examples**

```php
//Tests if $dateTest is strictly before $dateComp
\RenduFP\validatorLibrary\DateTimeValidator::isBefore($dateTest, $dateComp)
\RenduFP\validatorLibrary\DateTimeValidator::isBefore($dateTest, $dateComp, RenduFP\validatorLibrary\DateTimeValidator::STRICT_INEQUALITY)
//Tests if $dateTest is equals or before $dateComp
\RenduFP\validatorLibrary\DateTimeValidator::isBefore($dateTest, $dateComp, RenduFP\validatorLibrary\DateTimeValidator::NOT_STRICT_INEQUALITY)
```

###isToday

Tests if a DateTime is today.

**Syntax**

```php
bool isToday(DateTime $dateValue)
```

**Examples**

```php
//Tests if $dateTest is today
\RenduFP\validatorLibrary\DateTimeValidator::isToday($dateTest)
```

###isBeforeToday

Tests if a DateTime is before today.

**Syntax**

```php
bool isAfterToday(DateTime $dateValue, [int $strictness = self::STRICT_INEQUALITY])
```

**Examples**

```php
//Tests if $dateTest is strictly before today
\RenduFP\validatorLibrary\DateTimeValidator::isBeforeToday($dateTest)
\RenduFP\validatorLibrary\DateTimeValidator::isBeforeToday($dateTest, RenduFP\validatorLibrary\DateTimeValidator::STRICT_INEQUALITY)
//Tests if $dateTest is today or before
\RenduFP\validatorLibrary\DateTimeValidator::isBeforeToday($dateTest, RenduFP\validatorLibrary\DateTimeValidator::NOT_STRICT_INEQUALITY)
```

###isAfterToday

Tests if a DateTime is after today.

**Syntax**

```php
bool isAfterToday(DateTime $dateValue, [int $strictness = self::STRICT_INEQUALITY])
```

**Examples**

```php
//Tests if $dateTest is strictly after today
\RenduFP\validatorLibrary\DateTimeValidator::isAfterToday($dateTest)
\RenduFP\validatorLibrary\DateTimeValidator::isAfterToday($dateTest, RenduFP\validatorLibrary\DateTimeValidator::STRICT_INEQUALITY)
//Tests if $dateTest is today or after
\RenduFP\validatorLibrary\DateTimeValidator::isAfterToday($dateTest, RenduFP\validatorLibrary\DateTimeValidator::NOT_STRICT_INEQUALITY)
```

###hasSameTimezone

Tests if a DateTime timezone is the same as a given Parameter.

**Syntax**

```php
bool hasSameTimezone(DateTime $dateValue, DateTimeZone $timeZoneTest)
```

**Examples**

```php
//Tests if $dateTest timezone is "Europe/Paris"
\RenduFP\validatorLibrary\DateTimeValidator::hasSameTimezone($dateTest, new DateTimeZone('Europe/Paris'))
```