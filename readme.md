#Validator

[![Build Status](https://scrutinizer-ci.com/g/Eyce/A3_Web2_Rendu_Francois_Peureux/badges/build.png?b=master)](https://scrutinizer-ci.com/g/Eyce/A3_Web2_Rendu_Francois_Peureux/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Eyce/A3_Web2_Rendu_Francois_Peureux/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Eyce/A3_Web2_Rendu_Francois_Peureux/?branch=master)

This library validates several types of data :

*   Int
*   String
*   Boolean
*   Array
*   DateTime

##Integer Validation

Validates an Integer, by performing the following tests :

###isEqual

Tests if given Integer is Equals to a Parameter.

**Syntax**

```php
bool isEqual(int $intTest, [int $parameter = 0])
```

**Example**

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
bool isBiggerThan(int $intTest, [int $parameter = 0], [int $strictness = STRICT_INEQUALITY])
```

**Example**

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
bool isSmallerThan(int $intTest, [int $parameter = 0], [int $strictness = STRICT_INEQUALITY])
```

**Example**

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
bool isBiggerThan(int $intTest, int $parameterMin, int $parameterMax, [int $strictness = STRICT_INEQUALITY])
```

**Example**

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
bool lengthBigger(string $strValue, int $testValue, [int $strictness = STRICT_INEQUALITY])
```

**Example**

```php
//Tests if $stringTest length is strictly bigger than 10
\RenduFP\validatorLibrary\StringValidator::lengthBigger($stringTest, 10)
\RenduFP\validatorLibrary\StringValidator::lengthBigger($stringTest, 10, STRICT_INEQUALITY)

//Tests if $stringTest length is bigger or equals to 10
\RenduFP\validatorLibrary\StringValidator::lengthBigger($stringTest, 10, NOT_STRICT_INEQUALITY)
```

###lengthSmaller

Tests if a given String length is smaller than a Parameter.

**Syntax**

```php
bool lengthSmaller(string $strValue, int $testValue, [int $strictness = STRICT_INEQUALITY])
```

**Example**

```php
//Tests if $stringTest length is strictly smaller than 10
\RenduFP\validatorLibrary\StringValidator::lengthSmaller($stringTest, 10)
\RenduFP\validatorLibrary\StringValidator::lengthSmaller($stringTest, 10, STRICT_INEQUALITY)

//Tests if $stringTest length is smaller or equals to 10
\RenduFP\validatorLibrary\StringValidator::lengthSmaller($stringTest, 10, NOT_STRICT_INEQUALITY)
```

###lengthBetween

Tests if a given String length is between two Parameters.

**Syntax**

```php
bool lengthBetween(string $strValue, int $testValueMin, int $testValueMax, [int $strictness = STRICT_INEQUALITY])
```

**Example**

```php
//Tests if $stringTest length is strictly between 1 and 10
\RenduFP\validatorLibrary\StringValidator::lengthBetween($stringTest, 1, 10)
\RenduFP\validatorLibrary\StringValidator::lengthBetween($stringTest, 1, 10, STRICT_INEQUALITY)

//Tests if $stringTest length is between 1 and 10 included
\RenduFP\validatorLibrary\StringValidator::lengthBetween($stringTest, 1, 10, NOT_STRICT_INEQUALITY)
```

###noWhiteSpaceBeginEnd

Tests if a given String has neither a white space at the beginning nor at the end.

**Syntax**

```php
bool noWhiteSpaceBeginEnd(string $stringTest)
```

**Example**

```php
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
\RenduFP\validatorLibrary\StringValidator::noWhiteSpace($stringTest)
```

##Boolean Validation

Validates a Boolean, by performing the following tests :

###isTrue

Tests if the boolean is True.

**Syntax**

```php
bool isTrue($booleanTest)
```

**Example**

```php
\RenduFP\validatorLibrary\BooleanValidator::isTrue($booleanTest)
```

###isFalse

Tests if the boolean is False.

**Syntax**

```php
bool isFalse($booleanTest)
```

**Example**

```php
\RenduFP\validatorLibrary\BooleanValidator::isFalse($booleanTest)
```

##Array Validation

Validates an Array, by performing the following tests :

###isEmpty
###hasSameElementNumber
###hasMoreElements
###hasLessElements
###elementNumberBetween
###containsKey
###containsValue

##DateTime Validation

Validates an DateTime object, by performing the following tests :

###isYear
###isMonth
###isDay
###isSameDay
###isAfter
###isBefore
###isToday
###isBeforeToday
###isAfterToday
###hasSameTimezone
