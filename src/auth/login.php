<?php
    require_once "../config/db_connection.php";
    require_once "../function/search_user.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    $password_hash=password_hash($password, PASSWORD_BCRYPT);

    if(searchUser($email,$password_hash,$conn)){
        $_SESSION['email'] = $email;
        $array['id']="200";
        $array['message']="## Login effettuato ##";
        echo json_encode($array);
    }else{
        $array['id']="406";
        $array['message']="## Login non effetuato ##";
        echo json_encode($array);
    }
 
?>