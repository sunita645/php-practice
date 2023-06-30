<?php
$file = "writefile.php";
$data = "This is fwrite file";
$handle = fopen($file,"w");
fwrite ($handle, $data) or die("Error:cannot write the file");
fclose($handle);

echo "data written in file sucessfully!!";
?>