<?php

//　論理型の演算
//　「&&」「||」「!」の3つの論理演算子を使う

$true = true;
$false = false;

$a = $true && $true;                // true　論理積　アンド　&&　「どちらも」
$b = $true && $false;               // false 「どちらも」ではなくなった
$c = $true && $true && $true;      //  true
$d = $true && $false && $false;     // false
$e = $true && ($true && $false);    // false　（）の中を優先に考えて、$bと同じ内容になる


var_dump($a,$b,$c,$d,$e);



?>
