<?php 

class registerValidator {

    private $open_warning;
    private $close_warning;


    private $username;
    private $email;

    private $error_name;
    private $error_password;
    private $error_email;

    public function __construct($username, $email, $userpass){
        $this -> open_warning = "<br><div class='alert alert-danger' style='float:left' role='alert'>";
        $this -> close_warning = "</div>"; 
       

        $this -> username = "";
        $this -> email = "";
       
        $this -> error_name = $this -> validateName($username);
        $this -> error_email = $this -> validateName($email);
        $this -> error_password = $this -> validateName($userpass);
    }

    private function initialVar($var){
        if (isset($var) && !empty($var)){
            return true;
        }
        else{
            return false;
        }
    }

    private function validateName($username){
        if (!$this -> initialVar($username)){
            return "You must fill the username field";
        }else{
            $this -> username = $username;
        }

        if(strlen($username) < 6){
            return "Username must be longer than 6 characters";
        }

        if(strlen($username) > 24){
            return "Username can't be longer than 24 characters";
        }

        return "";

    }

    private function validateEmail($email){
        if(!$this -> initialVar($email)){
            return "You must enter an email";
        }else{
            $this -> email = $email;
        }
        return "";
    }

    private function validatePassword($userpass){
        if(!$this -> initialVar($userpass)){
            return "You must enter a password";
        }else{
            $this -> email = $userpass;
        }
        return "";
    }


    //====Get======//

    public function getName()
    {
        return $this -> name;
    }
    public function getEmail()
    {
        return $this -> email;
    }

        //Errors

    public function getPasswordError()
    {
        return $this -> error_password;
    }
    public function getNameError()
    {
        return $this -> error_name;
    }
    public function getEmailError()
    {
        return $this -> error_email;
    }

        //Show in inputs

    public function showName(){
        if($this -> name !== ""){
            echo 'value=="'. $this -> name . '"';
        }
    }

    public function showEmail(){
        if($this -> email !== ""){
            echo 'value=="'. $this -> email . '"';
        }
    }

    public function showErrorName(){
        if($this -> error_name !== ""){
            echo $this -> open_warning . $this -> error_name . $this -> close_warning;
        }
    }
    public function showErrorEmail(){
        if($this -> error_email !== ""){
            echo $this -> open_warning . $this -> error_email . $this -> close_warning;
        }
    }
}




?>