<?php
    require_once "../config/db_connection.php";
    require_once "../function/search_user.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    $password = hash('sha256',$password);

    if(searchUser($email,$password,$conn)){
        header("location: ../home.html");
    }else{
        header("location: ../index.html");
    }
 
?>