<?php


function dd ( $val) {
    echo '<pre>';
    die(var_dump($val));
    echo '</pre>';
}

function ageCheck ($age) {
    if ($age < 18) {
        return false;
    } else {
        return true;
    }
}
