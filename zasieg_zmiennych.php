<?php

$variable = 'aaaa';

echo $variable . "<br />";

$variable = 'bbbb';

echo $variable . "<br />";


function a(){
    $varibale = 'ccc';
}

a();

echo $variable . "<br />";


function b(){
    global $variable;

    $variable = 'ddd';
}

b();

echo $variable . "<br />";


function c(){
    global $new;

    $new = 'new';
}

c();

 global $new;

 echo $new . '<br />';

 include './plik2.php';

 echo $othervariable . "<br />";

 d();

