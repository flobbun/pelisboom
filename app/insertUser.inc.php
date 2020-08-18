<?php
include_once 'app/conection.inc.php';

//===Insert user===//
function insertUser($conection, $username, $email, $password){

    
    
    try
    {
        $sql = "INSERT INTO users(username, email, userpass, data_register, active) VALUES (?,?,?, NOW(), 0)";
    
        $addSentence = $conection -> prepare($sql);
        $addSentence -> execute(array($username, $email, password_hash($password, PASSWORD_DEFAULT)));

        $sql = null;
        $addSentence = null;
    
    }catch (PDOException $ex) 
    {
        print 'ERROR' . $ex -> getMessage();
    }
    
    }





