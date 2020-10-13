# Information Coding Systems

## ASCII and Unicode

### ASCII
- Used to transfer English characters.
- Limited to 128 characters due to only being seven bits.
- Not usable for non-Latin languages, e.g. Chinese.

### Unicode
- Super set of ASCII.
- 120,000 characters.
- Comes as UTF-8, UTF-16 and UTF-32 depending on how many characters are used to store data.

## Error Checking and Correction
During transmission signals may suffer from noise and data may be lost, causing a bit to flip unexpectedly.
There are systems to detect these error:

### Parity Bits
- The most significant bit is used to store if the number of ones or zeros in the following seven bits is even or odd.
- For even parity the bit is one if the number of "1 bits" is positive.
- For odd parity the bit is one if the number of "1 bits" is odd.

### Majority Voting
Each bit is transmitted three times in the hope that the majority of bits are correct.

### Check sum
An algorithm is applied to the data at each end of the transmission, if the same answer is found at both ends then the transmission has be successful.