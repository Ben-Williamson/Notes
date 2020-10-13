# Binary Number Systems


### There are two ways of storing numbers:
- ***Unsigned*** - Do not have a bit to store positivity or negativity meaning that a larger value can be stored.
- ***Signed*** - Use a bit to store positivity or negativity.

### There are three schemes for signed integers:
- ***Sign Magnitude*** - The first bit is used to indicate the sign and the other seven bits are used normally.
- ***1's Compliment*** - For positive numbers the value is equal to the value of the seven least significant bits, for negative values the number is equal to the value of the inverted least significant seven bits.
> For example:  the 8-bit pattern 1000 0001 represents a negative number (msb=1). The inverse (complement) of the remaining bit pattern is 111 1110 which is 126. Thus we get -126.

- ***Two's Compliment*** - The most significant bit is the sign bit, then: for positive numbers the value is equal to the value of the seven least significant bits, for negative values the number is equal to the value of the inverted least significant seven bits plus one.

### Converting from Decimal to Two's Compliment:
1. Convert to binary.
2. Invert the bits.
3. Add one.

### Converting from Two's Compliment Binary to Decimal:
1. Invert seven least significant bits.
2. Add one.
3. Convert to decimal.

### Addition of Two's Compliment Numbers:
Addition can be carried out as usual, however sometimes the sum from the first seven bits overflows into the sign bit, this causes an incorrect sum.  This is called overflow.

### Subtraction in Two's Complement:
When subtracting, change the number being subtracted to its inverse and add it.