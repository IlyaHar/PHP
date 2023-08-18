<?php

$age = 17;

const AGE_1 = 20;
const AGE_2 = 40;
const AGE_3 = 60;
const AGE_4 = 80;

switch ($age) {
    case $age <= AGE_1:
        echo "Ваш вік менше або дорівнює 20.";
        break;

    case $age <= AGE_2:
        echo "Ваш вік більше 20, але менше або дорівнює 40.";
        break;

    case $age <= AGE_3:
        echo "Ваш вік більше 40, але менше або дорівнює 60.";
        break;

    case $age <= AGE_4:
        echo "Ваш вік більше 60, але менше або дорівнює 80.";
        break;

    default:
        echo "Ваш вік більше 80.";
}

