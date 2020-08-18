<?php
include_once 'app/conection.inc.php';
include_once 'app/insertUser.inc.php';


//Vars//

$warning_type_user;   
$warning_type_email;
$warning_type_password;

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email']; 




//====GET INFO====//

if(isset($_POST['send'])){
   //==VALIDATION====USER==//

    if($username == "")
    {
        $warning_type_user = "You must enter an username";
    }
    else if(strlen($username) < 6 && strlen($username) > 0)
    {
        $warning_type_user = "Username must be longer then 6 characters";
    }
    else if(strlen($username) > 25)
    {
        $warning_type_user = "Username can't be longer then 25 characters";
    }else{
        $warning_type_user = "";
    }
         
       //==VALIDATION====EMAIL==//
     
    if($email == "")
    {
        $warning_type_email = "You must enter an email";
    }
    else{
        $warning_type_email = ""; 
    }
    
       
        //==VALIDATION====PASSWORD==//
       
    if($password == "")
    {
        $warning_type_password = "You must enter a password";
    } 

    else if(strlen($password) < 8 && strlen($password) > 0){
        $warning_type_password = "Password must be longer then 8 characters";
    }

    else if(strlen($password) > 80)
    {
        $warning_type_password = "Password can't be longer then 80 characters";
    }
    else{
        $warning_type_password = "";
    }


        //Check if the username already exists
    $sql = "SELECT * FROM users WHERE username = ?";
    $sentence = $conection -> prepare($sql);
    $sentence -> execute(array($username));
    $userExist = $sentence -> fetch();

        //Check if the email already exists
    $sql = "SELECT * FROM users WHERE email = ?";
    $sentence = $conection -> prepare($sql);
    $sentence -> execute(array($email));
    $emailExist = $sentence -> fetch();

    if($userExist || $emailExist)
    {
       $warning_type_user = "Username or email already exists";

       //Kill
       $sql = null;
       $sentence = null;
    }
    else
    {
    //FINAL VALIDATION 
    if($warning_type_user=="" && $warning_type_email=="" && $warning_type_password=="")
    {
        insertUser($conection, $username, $email, $password);
        header('Location: emailverify.php');
    }



    }





    
    }
          

 
 


