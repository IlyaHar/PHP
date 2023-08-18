<?php
$last_name = 'Харченко';
const SMALL_SURNAME = 5;
const MEDIUM_SURNAME = 10;
const LARGE_SURNAME = 15;

$last_name_length = strlen($last_name);

if ($last_name_length > LARGE_SURNAME) {
    echo "Довжина вашого прізвища дорівнює $last_name_length і вона більша за " . LARGE_SURNAME;
} elseif ($last_name_length > MEDIUM_SURNAME) {
    echo "Довжина вашого прізвища дорівнює $last_name_length і вона більша за " . MEDIUM_SURNAME . " і менше ніж " . LARGE_SURNAME;
} elseif ($last_name_length > SMALL_SURNAME) {
    echo "Довжина вашого прізвища дорівнює $last_name_length і вона більша за " . SMALL_SURNAME . " і менше ніж " . MEDIUM_SURNAME;
} else {
    echo "Довжина вашого прізвища дорівнює $last_name_length і вона менше ніж " . SMALL_SURNAME;
}

