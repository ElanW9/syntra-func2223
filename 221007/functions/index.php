<?php

$seconden = $_GET["s"];

function berekenSom($a, $b){
    return ($a + $b);

}

function doeIets($a) {
    $a = strtoupper($sa);
    $a = $a ."- ik heb iets gedaan...";
    return $a;
}

$teller = 0;
function addOne($teller){
    $a = $a + 1;
    $extra = "dit is een tekst die gemaakt wordt in functie addOne";
    return $a;
}

function showFuturetime($extra_time){
    $current_time = time() + $extra_time;
    //$current_time = strtotime("+6 hours");
    $str = date("d/m/Y - H\ui\ms\s", $current_time);
    return $str;
}

echo "som van 5+3 is" . berekenSom(5,3) . "<br />";
echo berekenSom(10, 1) . "<br />";
echo doeIets("dit is mijn tekst");

echo "<br />";
addOne ($teller) . "<br />";
echo $teller . "<br />";
echo showFuturetime($seconden);

?>

