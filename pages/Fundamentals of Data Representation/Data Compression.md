# Data Compression

Compression is needed to reduce the size of files, this makes them easier to store and transmit over the internet.

## Lossy Compression
Loses accuracy but results in much smaller file sizes.

### MP3
- Uses perpetual coding which assumes:
- Certain sounds can't be heard.
- Some sounds can be heard better than others.
- If two sounds are played simultaneously the louder one will be heard best.

Based on these assumptions parts of the track can be removed without reducing quality.

## Lossless Compression
Can be decompressed to give the original data.

### FLAC 
- Uses run length encoding to find repeated patterns in a file and stores how many repeats occur.

## Image Compression

### Lossy
- Example: JPEG

### Lossless
- Example: GIF
- The Lempel-Ziv-Welch technique is used to reduce the file size without degrading quality. 
- This is done by storing repeating patterns in a dictionary and referring to it when ever a pattern is needed.