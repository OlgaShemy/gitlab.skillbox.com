<?php

$word = "caesar cipher";
$code = 104;
$i = 0;
$length = strlen($word);
var_dump($length);
$alph1 = 122;
$alph2 = 97;
$result = '';

while($i < $length) {
    if ($word[$i] == ' ') {
        $result = $result . $word[$i];
    } else {
        $numbercode = ord($word[$i]) + $code;
        while($numbercode > $alph1) {
            $numbercode = $numbercode - $alph1 + $alph2;
        }
        $lettercode = chr($numbercode);
        $result = $result . $lettercode;
    }
    $i++;
}

var_dump($result);


$length2 = strlen($result);
var_dump($length2);
$s = 0;
$code2 = -104;
$result1 = '';


while ($s < $length2) {
    if($result[$s] == ' '){
        $result1 = $result1 . $result[$s];
    } else {
    $numbercode2 = ord($result[$s]) + $code2;
        while($numbercode2 < $alph2) {
            $numbercode2 = $numbercode2 - $alph2 + $alph1;
        }
        $lettercode2 = chr($numbercode2);
        $result1 = $result1 . $lettercode2;
    }
    $s++;
}

var_dump($result1);
