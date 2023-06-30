<?php
$file = "rename.txt";
if(file_exists($file)){
    if(rename($file, "myrename.txt")){
        echo "file rename sucessfully";
    }
    else{
        echo"Erro: file cannot be renamed";
    }
}
else{
    echo"Error: file does not exist";
}
?>