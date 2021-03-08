<?php

// 否定　NOT　!　意味を反転させる性質を持つ


// いつもちがうことをするやつみたいなもの　意味が反転する

$true = true;
$flase = false;

$a = !$true;　　　　　　　// false　否定するので意味が反転
$b = !$false;           // true 同じく
$c = !$true && !$true;　// false &&はどちらもということなのでtrueになり、否定なので結果は反転する
$d = !($true && $true); // false 上に同じく

var_dump($a,$b,$c,$d);


?>