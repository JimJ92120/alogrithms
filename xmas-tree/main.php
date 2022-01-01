<?php
function sort_array_by_key(array $array) : array
{
    ksort($array);

    return $array;
}

function xmas_tree(int $length) : string
{
    if ($length < 3) {
        return 'Too short!';
    }

    $draw = function (int $item) use ($length) : string
    {
        return str_repeat(' ', abs($length - $item))
            . str_repeat('*', $item * 2 - 1);
    };

    $draw_trunk = function () use ($draw, $length) : string
    {
        return $draw((int) abs($length / 5) + 1);
    };

    $draw_rows = function (array $accumulator, int $item) use ($draw, $draw_trunk, $length) : array
    {
        $accumulator[$item] = $draw($item);

        if ($item % 3 === 0) {
            $accumulator[$length + $item / 3 + 1] = $draw_trunk();
        }

        return $accumulator;
    };

    return implode("\n", sort_array_by_key(array_reduce(
        range(1, $length),
        fn ($accumulator, $item) => $draw_rows($accumulator, $item),
        []
    )));
}

// print_r(xmas_tree(6));
