<?php
$array100Random = array();
for($i=0;$i<100;$i++) {
    array_push($array100Random, rand(10, 1000));
}

function sortArray($array)
{
    $sortArray = array();
    $tmpArray = $array;
    for($i=0; $i < count($array); $i++)
    {
        $max = max($tmpArray);
        $keyMax = array_search($max, $tmpArray);
        array_unshift($sortArray, $max);
        unset($tmpArray[$keyMax]);
    }
    return $sortArray;
}

$sortArray = sortArray($array100Random);
var_dump($sortArray);