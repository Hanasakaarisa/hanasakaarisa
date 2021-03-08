<?php

//　論理和　OR　||　「どちらかが」「どちらか一方でもtrueならtrue」

//一人でもokといったらやってしまうちょっとやばいやつ
$true = true;
$false =false;

$a = $true || $true;　　　　　　　　　// true
$b = $true || $false;               // true
$c = $true || $true || $false;      // true
$d = $true || $true || $true;       // true
$e = $true || ($true || $false);    // true
$f = $false || $false;              // false

var_dump($a,$b,$c,$d,$e,$f);


?>