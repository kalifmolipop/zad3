<?php

$simie= "localhost";
$uimie = "root";
$haslo = "";

$db_imie="test_db";

$conn = mysqli_connect($simie, $uimie, $haslo, $db_imie);

if(!$conn){
    echo "Połaczono!";
}
?>