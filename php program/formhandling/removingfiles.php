<?php
$file =" myrename.txt";
if(file_exists($file)){
    if (unlink($file)){
        echo "file removed sucessfully";
    }
    else{
        echo "ERROR: file cannot be removed";
    }
}
    else{
        echo"Error: file does not exist.";
    }
    ?>
