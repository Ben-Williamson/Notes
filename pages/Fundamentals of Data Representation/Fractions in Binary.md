# Fractions in Binary

Fractions can be represented as fixed point binary integers: these numbers have a pre-defined decimal place.

This means that bits after the decimal place represent 1/2, 1/4, 1/8, ...

This system allows for some fractions to be stored perfectly but not all, the more bits after the decimal, the more accurate a fraction can be stored.

## Floating Point Form
- More accurate than fixed point form.
- Uses standard form to represent large numbers so they are easier to read.


***Mantissa***- The part that is times by ten to the exponent.

***Exponent*** - The number of times 10 is multiplied by itself.

> For example: In 2100 = 2.1 x 10<sup>3</sup>, the mantissa is 2.1 and the exponent is 3.

To store these values as binary we use some bits for the mantissa and some for the exponent.
The binary point never moves it is always after the first digit.


## To convert from Decimal to FPF:
1. Convert to fixed point Two's Compliment form.
2. Normalize, move the binary point to just after the sign bit.
3. Record the number of places moved as the exponent.

## To convert from FPF to Decimal:
1. Convert the fixed point mantissa to decimal, noting the location of the binary place.
2. Convert the exponent to decimal.
3. mantissa x 2<sup>exponent</sup>

> **Important** - Both the mantissa and the exponent and stored in Two's Compliment.

## Error
Not all fractions can be stored accurately in FPF, there are two types of error:
***Absolute*** - The distance between the actual value and the stored value.

***Relative*** - The percentage error. (Absolute / Actual) x 100.

## Underflow and Overflow
***Underflow*** - A number is too small to be represented in the given number of bits. This can happen when a small number is divided by a number that is larger than 1, this may be represented by 0.

***Overflow*** - A number is too large to be represented in the given number of bits. For example, the product of two larger than 1 numbers.