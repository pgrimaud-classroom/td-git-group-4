<?php
$note = rand(0,20);
switch($note){
    case $note <= 10:
        echo "Bof";
        break;
    case $note > 10 AND $note <= 12:
        echo "Passable";
        break;
    case $note >12 AND  $note <=14:
        echo "Assez-bien";
        break;
    case $note >16 AND $note <= 18:
        echo "Bien";
        break;
    case $note > 18:
        echo "Très bien";
        break;
}