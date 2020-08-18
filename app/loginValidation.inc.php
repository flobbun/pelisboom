<?php
include_once 'app/loginUser.inc.php';

$username = $_POST['username'];
$password = $_POST['password'];

$warning_1;

if(isset($_POST['send']))
{
    if(strlen($username) >= 6 && strlen($username) < 25 &&
      strlen($password) >= 8 && strlen($password) < 80)
    {
        $warning_1 = loginUser($conection, $username, $password);
    }
    else{
        $warning_1 = "Username or password invalids";
    }



    



}