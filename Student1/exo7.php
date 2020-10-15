<?php

echo"boucle for : \n";
$forSum = 0;
for($i=0;$i<=100;$i++)
{
    $forSum+=$i;
}
echo $forSum."\n";

echo"boucle while : \n";
$whileSum = 0;
$i=0;
while($i<=100)
{
    $whileSum+=$i;
    $i++;
}
echo $whileSum."\n";

echo"Recursive : \n";
function recursiveSum($nb)
{
    if($nb <=100)
        return $nb+recursiveSum($nb+1);
}

echo recursiveSum(0)."\n";