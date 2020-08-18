<?php
include_once 'app/conection.inc.php';

session_start();

function loginUser($conection, $username, $password){
    try
    {
        //Check username
        $sql = "SELECT * FROM users WHERE username = ?";
        $sentence = $conection -> prepare($sql);
        $sentence -> execute(array($username));
        $request = $sentence -> fetch();
        
        if($request)
        {
            //Now Check Password
            if(password_verify($password, $request['userpass'])){
                $_SESSION['user'] = $username;
                header('Location: indexLogIn.php');
            }
            else{
                return 'Username or password invalids';
            }

        }
        else
        {
            return 'Username or password invalids';
        }

    
    }catch (PDOException $ex) 
    {
        print 'ERROR' . $ex -> getMessage();
    }
}