module Main where

getListLength :: (Num b) => [a] -> b 
getListLength [] = 0 
getListLength list = sum [1 | _ <- list]

sumLastTwoListIndexes :: [Int] -> Int
sumLastTwoListIndexes list = list !! (getListLength list - 1)
    + list !! (getListLength list - 2)

generateSequence :: Int -> Int -> [Int] -> [Int]
generateSequence start end accumulator
    | start >= end
        || sumLastTwoListIndexes(accumulator) > end = accumulator
    | otherwise = generateSequence
        (sumLastTwoListIndexes accumulator)
        end
        (accumulator ++ [sumLastTwoListIndexes accumulator])
        

initSequence :: Int -> [Int]
initSequence end = generateSequence 0 end [0, 1]
