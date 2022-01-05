# xmas-tree
| Languages    |
|--------------|
| `PHP`        |
| `JavaScript` |

## Description
For a given input `n`, print a Christmas tree with the following rules:
- minimum input must be `greater` or `equal` to `3`
- the tree as `n` levels (or rows)
- for each level, the width (symbols printed) increases by `2`, starting from `1`
- the width and height of the trunk start at `1`
- the width of the trunk increases by 2 for `n / 5` rounded up
- the height of the trunk increases by 1 for `n / 3` rounded up

e.g:
For `n` is `6`, :
```
     *
    ***
   *****
  *******
 *********
***********
    ***
    ***
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
       *****
       *****
       *****
```

## Sources
- [`Problem Solve Like a Computer Programmer | Kyle Smyth | TEDxRPLCentralLibrary`](https://www.youtube.com/watch?v=x77-gT8bWLo&ab_channel=TEDxTalks)
