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

Tests if given Integer is Equals to a Parameter :

```php
//Tests if $intTest = 8
\RenduFP\validatorLibrary\IntegerValidator::isEqual($intTest, 8)

//Tests if $intTest = 0
\RenduFP\validatorLibrary\IntegerValidator::isEqual($intTest)
```

###isBiggerThan

Tests if given Integer is Superior to a Parameter :

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

Tests if given Integer is Inferior to a Parameter :

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

Tests if given Integer is between two Parameters :

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

Tests if a given String length is equals to a Parameter :

###lengthBigger
###lengthSmaller
###lengthBetween
###noWhiteSpaceBeginEnd
###noWhiteSpace

##Boolean Validation

Validates a Boolean, by performing the following tests :

###isTrue
###isFalse

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
