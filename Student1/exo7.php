<?php

echo"boucle for : \n";
$forSum = 1;
for($i=0;$i<100;$i++)
{
    $forSum+=1;
}
echo $forSum."\n";

echo"boucle while : \n";
$whileSum = 1;
$i=0;
while($i<100)
{
    $whileSum+=1;
    $i++;
}
echo $whileSum."\n";
