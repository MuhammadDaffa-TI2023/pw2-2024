<?php
$animals = ["kucing", "kambing", "ayam"];
echo $animals[1] ."<br>";

foreach ($animals as $key => $value){
    echo $value . "<br>";
}

$animals[2] = "musang";
echo $animals[2];
?>
