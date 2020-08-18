<?php

class Conection {
    private static $conection;

    public static function openConection(){
        if(!isset(self::$conection)){
            try {
                include_once 'config.inc.php';

                self::$conection = new PDO($link ,$username, $password);
                self::$conection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$conection -> exec("SET CHARACTER SET utf8");

            } catch (PDOException $ex) {
               print "ERROR " . $ex -> getMessage() . "<br>";
               die();   
            }
        }
    }
    
    public static function closeConection(){
        if(isset(self::$conection)){
            self::$conection = null;
        }
    }

    public static function getConection(){
        return self::$conection;
    }


}