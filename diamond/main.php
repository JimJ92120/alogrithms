<?php
function diamond(int $length) : void
{
    if ($length < 0) {
        $length = abs($length);
    }

    print(implode("\n", array_map(
        fn ($row) =>
            str_repeat(' ', abs($row - $length))
            . str_repeat('*', ($length - abs($row - $length)) * 2 - 1),
        range(1, $length * 2 - 1)
    )));
}

// diamond(5, 'test');
