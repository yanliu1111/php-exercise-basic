<?php
$file = "example.txt";
if($handle = fopen($file, 'w')) {
    //fopen($file, 'w') opens the file in write mode
    fwrite($handle, 'I love coding and this is cool! I hope...'); //Each bite equals a character
    fclose($handle);
} else {
    echo "The application was not able to write on the file";
}
?>