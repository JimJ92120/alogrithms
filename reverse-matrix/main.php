<?php
function reverse_row_points(array &$matrix, int $row_index, int $matrix_length, int $point_index = 0) : void
{
    $opposite_value = $matrix[$matrix_length - $point_index - 1][$matrix_length - $row_index - 1];
    $matrix[$matrix_length - $point_index - 1][$matrix_length - $row_index - 1] = $matrix[$row_index][$point_index];
    $matrix[$row_index][$point_index] = $opposite_value;

    if ($point_index === $matrix_length - $row_index - 2) return;

    ++$point_index;

    reverse_row_points($matrix, $row_index, $matrix_length, $point_index);
}

function reverse_rows(array &$matrix, int $matrix_length, int $row_index = 0) : array
{
    reverse_row_points($matrix, $row_index, $matrix_length);

    if ($row_index === $matrix_length - 2) return $matrix;

    ++$row_index;

    return reverse_rows($matrix, $matrix_length, $row_index);
}

function reverse_matrix(array $matrix) : array
{
    return reverse_rows($matrix, count($matrix));
}

// print_r(reverse_matrix([
//     [1, 2, 3],  // => [9, 6, 3]
//     [4, 5, 6],  // => [8, 5, 2]
//     [7, 8, 9],  // => [7, 4, 1]
// ]));
// print("\n");
// print_r(reverse_matrix([
//     [ 1,  2,  3,  4],  // => [16, 12,  8,  4]
//     [ 5,  6,  7,  8],  // => [15, 11,  7,  3]
//     [ 9, 10, 11, 12],  // => [14, 10,  6,  2]
//     [13, 14, 15, 16]   // => [13,  9,  5,  1]
// ]));
