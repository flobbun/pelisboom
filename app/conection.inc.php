<?php


$conection; 

$bLink = 'mysql:host=localhost;dbname=pelisboom';
$bUser = 'root';
$bPass = 'root';


try
{
    $conection = new PDO($bLink, $bUser, $bPass);
    $conection -> exec("SET CHARACTER SET utf8");  

}
catch(PDOException $ex)
{
    echo "ERROR " . $ex -> getMessage();
    die();
}

