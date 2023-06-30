<?php
$diceNumber = mt_rand(1, 4);
$numText = "";
switch ($diceNumber) {
    case 1:
        $numText = "one";
        break;

    case 2:
        $numText = "two";
        break;
    case 3:
        $numText = "three";
        break;
    case 4:
        $numText = "four";
        break;
    case 5:
        $numText = "five";
        break;
    case 6:
        $numText = "six";
        break;
        default:
        $numText ="unknown";
    }
        echo 'dice show number ' .$numText;
        ?>

