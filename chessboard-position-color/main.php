<?php
function find_square_color($position) {
    $position = str_split($position);

    echo (ord($position[0]) + $position[1]) % 2 === 0
        ? "dark\n"
        : "light\n";
}

array_map('find_square_color', [
    'a1', // dark
    'a2', // light
    'c3', // dark
    'a6', // light
    'b2'  // dark
]);
