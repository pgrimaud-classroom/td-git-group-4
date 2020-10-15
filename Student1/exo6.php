<?php

$paye= rand(900,1100);
$text10="Paye: ".$paye.", 10%=";
$text25="Paye: ".$paye.", 25%=";

echo $paye<1000?$text10.($paye*0.10):$text25.($paye*0.25)."\n";