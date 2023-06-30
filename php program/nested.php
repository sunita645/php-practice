<?php
$age = 1;

if($age<18){
    
    if($age<5){
    echo "infant";
}
else if($age>5&&$age<12){
    echo "Non teenager child";
}
else{
    echo "teenagers";
}

}

else if($age>18 && $age<25){
    echo "adult";
}

else if($age>50 && $age<80){
    echo"old age";
}

else{
    echo "people";
}

?>

