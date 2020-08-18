<?php

class User {

    private $id;
    private $name;
    private $userpass;
    private $email;
    private $data_register;
    private $active;

    public function __construct($id, $name, $userpass, $email, $data_register, $active)
    {
        $this -> id = $id;
        $this -> name = $name;
        $this -> userpass = $userpass;
        $this -> email = $email;
        $this -> data_register = $data_register;
        $this -> active = $active;
    }

 //===== Get =============//

    public function getId(){
        return $this -> id;
    }

    public function getName(){
        return $this -> name;
    }

    public function getUserpass(){
        return $this -> userpass;
    }

    public function getEmail(){
        return $this -> email;
    }

    public function getDataRegister(){
        return $this -> data_register;
    }

    public function isActive(){
        return $this -> active;
    }

    //===== Set =============//

    public function setName($name){
        $this -> name = $name;
    }

    public function setUserpass($userpass){
        $this -> name = $userpass;
    }

    public function setEmail($email){
        $this -> name = $email;
    }

    public function setActive($active){
        $this -> name = $active;
    }

}