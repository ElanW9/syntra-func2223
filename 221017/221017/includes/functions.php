<?php
date_default_timezone_set("Europe/Brussels");

function getHello($firstname, $lastname, $sex)
{
    $hour = (int)date("G");
    $firstname = ucfirst(strtolower($firstname));
    $lastname = ucfirst(strtolower($lastname));
    $sex = ucfirst(strtolower($sex));

    $hello = "Dag";
    if ($hour < 6) {
        $hello = "Goeienacht";
    } elseif ($hour < 11) {
        $hello = "Goeiemorgen";
    } elseif ($hour < 17) {
        $hello = "Dag";
    } elseif ($hour <= 23) {
        $hello = "Goedenavond";
    }

    //$title = "meneer";
    //if ($sex == "f") {
    //  $title = "mevrouw";
    //} elseif ($sex == "x") {
    //   $title = "";
    //}
    switch ($sex) {
        case 'f':
            $title = "mevrouw";
            break;
        case 'm':
            $title = "meneer";
            break;
        case 'x':
            $title = "";
            break;
    }

    return "$hello $title $lastname, ";
} ?>

