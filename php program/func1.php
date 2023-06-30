<?php
function writeMsg() {
    $c = 55;
    echo "wihout return and param writeMsg()";
    echo "<br>";
  echo "my func name is ".$c."<br>";
}

function readMsg($a,$b){
    $c=$a+$b;
    echo"<br>";
    echo "the value  as parametre are".$a."and ".$b."<br>";
}

function function_name3(){
    echo"<br>";
    return "function_name3<br>";
}

function function_name4(){

}

writeMsg();
readMsg(3,2);

?>