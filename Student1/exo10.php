<?php

$users = array(
    'firstname' => 'yannis',
    'lastname' => 'baltus',
    'age' => '30',
    'job' => 'student'
);

foreach ($users as $key=>$user)
{
    echo $key." : ".$user."\n";
}