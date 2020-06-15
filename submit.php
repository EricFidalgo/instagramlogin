<?php

// opens an new file to write
$data_file = fopen("example.txt", "a") or die;

$name = $_POST["name"] ;
$age = $_POST["age"] ;
$text_to_write = $name . " " . $age;

// Write data to server side file
fwrite ($data_file, $text_to_write) ;
fclose ($data_file) ;


?>