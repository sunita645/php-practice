<?php
$file ="myfile.txt";
if(file_exists($file)){
    // $fp = fopen($file, "r+") or die ("Error cannot open the file.");

    $content = file_get_contents($file) or die ("Error cannot open the file.");;
    echo $content;
    //fclose($fp);
}

else{
    echo "ERROR: file doesnot exist.";
}
