<?php
    require_once "../config/db_connection.php";

    function searchUser($email,$password,$conn){
        $id=NULL;

        $prpstm = $conn->prepare("SELECT id FROM user u WHERE u.email = ? AND u.password = ?");

        $prpstm->bind_param('ss', $email, $password);
        if (!$prpstm->execute()) {
            return false;
        }

        $prpstm->bind_result($id);
        $prpstm->fetch();
        if ($id === NULL) 
            return false;
        return true;
    }



?>