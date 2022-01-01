# diamond
| Languages |
|-----------|
| `PHP`     |

## Description
For a given input `n`, print a diamond with the following rules:
- diamond height is equal to `n * 2 - 1`
- diamond has `n - 1` levels (or rows) above its middle
- diamond has `n - 1` levels (or rows) below its middlle
- from top to middle, for each level, the width increases by `2`, starting at `1`
- from bottom to middle, for each level, the width increases by `2`, starting at `1`

e.g:
- for `n` is `5`:
```
    *
   ***
  *****
 *******
*********
 *******
  *****
   ***
    *
```

- for `n` is `10`:
```
         *
        ***
       *****
      *******
     *********
    ***********
   *************
  ***************
 *****************
*******************
 *****************
  ***************
   *************
    ***********
     *********
      *******
       *****
        ***
         *
```

## Sources
- [`Problem Solve Like a Computer Programmer | Kyle Smyth | TEDxRPLCentralLibrary`](https://www.youtube.com/watch?v=x77-gT8bWLo&ab_channel=TEDxTalks)
