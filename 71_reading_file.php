<?php
$file = "example.txt";
if($handle = fopen($file, 'r')) {
    //fopen($file, 'r') opens the file in read mode
    echo $content = fread($handle, filesize($file)); //Each bite equals a character
    fclose($handle);
} else {
    echo "The application was not able to write on the file";
}
?>