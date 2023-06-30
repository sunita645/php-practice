<?php
function myfunc()
{

    for ($i = 1; $i <= 5; $i++) {

        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}

function myfunc2()
{

    for ($i = 1; $i <= 5; $i++) {

        for ($j = 1; $j <= 5 - $i; $j++) {
            echo "&nbsp&nbsp";
        }

        for ($k = 1; $k <= $i; $k++) {
            echo "*";
        }
        echo "<br>";
    }
}
myfunc();
myfunc2();
