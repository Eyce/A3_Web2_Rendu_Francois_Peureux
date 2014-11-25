#Validator

This library validates several types of data :

*   Int
*   String
*   Boolean
*   Array
*   DateTime

##Integer Validation

Validates an Integer, by performing the following tests :

###isEqual
###isBiggerThan
###isSmallerThan
###isBetween

##String Validation

Validates a String, by performing the following tests :

###lengthEquals
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
