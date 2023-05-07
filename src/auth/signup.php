<?php
    require_once "../config/db_connection.php";
    require_once "../function/search_user.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    $password_hash=password_hash($password, PASSWORD_BCRYPT);

    if(searchUser($email,$password,$conn)){
        header("location: ../signup.html");
    }else{
        $query = "INSERT INTO user (email, password) VALUES ('".$email."', '".$password_hash."')";
        $result = $conn->query($query);
        header("location: ../home.html");
    }
 
?>