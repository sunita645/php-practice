<?php
if(!file_exists("err1.txt")){
    die("File is not present");
}

else{
    $file = fopen("err1.txt", "w");
}
?>