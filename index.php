<?php

require 'function.php';

$task = [
    'title' => 'Eesti keel; kirjutada e-mail õpetajale',
    'due' => '15,02,2021' ,
    'assigned to' => 'Markus' ,
    'completed' => true
];


//dd(ageCheck(20));

if(ageCheck(17)) {
    echo "Sa oled piisavalt vana, et minna ööklubise.";
}  else {
    echo "Sa ei ole piisavalt vana, et minna ööklubise.";
}




require('index.view.php');
