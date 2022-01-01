<?php
// https://www.hackerrank.com/challenges/climbing-the-leaderboard/problem
function getRank (int $score, array $rankedScores, $maybeRank = 0) : int
{
    return !empty($rankedScores[$maybeRank])
            && $score < $rankedScores[$maybeRank]
        ? getRank($score, $rankedScores, $maybeRank + 1)
        : $maybeRank + 1;
}

function climbingLeaderboard(array $ranked, array $player) : array
{
    return array_map(
        function ($score) use ($ranked) {
            arsort($ranked);
            
            return getRank(
                $score,
                array_keys(array_count_values($ranked))
            );
        },
        $player
    );
}

// echo implode(', ',  climbingLeaderboard(
//     [100, 100, 50, 40, 40, 20, 10],
//     [5, 25, 50, 120]
// )) . "\n";

// echo implode(', ',  climbingLeaderboard(
//     [100, 90, 90, 80, 75, 60],
//     [50, 65, 77, 90, 102]
// )) . "\n";
