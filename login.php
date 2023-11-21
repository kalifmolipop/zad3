<?php
include "db_baza.php";

if (isset($_POST['imie']) && isset($_POST['haslo'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $imie = validate($_POST['imie']);
    $haslo = validate($_POST['haslo']);

    if(empty($imie)){
        header("Location: index.php?error=User name is required");
        exit();

    }else if(empty($haslo)){
        header("Location: index.php?error=User password is required");
        exit();

    }else{
        $sql = "SELECT * FROM users WHERE user_name='$imie' AND password='haslo'";


        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)){
            echo "string";
        }
    }
    
}
else{
    header("Location: index.php");
    exit();
}