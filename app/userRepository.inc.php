<?php

class userRepository {
        // ----- Get the total number of users(agressive) -----//
    public static function getAll($conection){

        $users = array();

        if(isset($conection)){

            try {
                
                include_once 'user.inc.php';

                $sql = "SELECT * FROM users";

                $sentence = $conection -> prepare($sql);
                $sentence -> execute();
                $result = $sentence -> fetchAll();

                if(count($result)){
                    foreach($result as $row){
                        $users[] = new User(
                            $row['id'], $row['name'], $row['$userpass'], $row['email'], $row['data_register'], $row['active']
                        );
                    }
                }
                else{
                    print "There's no result";
                }

            } catch (PDOException $ex) {
                print "ERROR " . $ex -> getMessage(); 
            }
        }
        return $users;

    }
        // ----- Get the total number of users(recommended) -----//
    public static function getUserCount($conection){
        $totalUsers = null;

        if(isset($conection)){
            try {
                $sql = "SELECT COUNT(*) as total FROM users";

                $sentence = $conection -> prepare($sql);
                $sentence -> execute();
                $result = $sentence -> fetch();

                $totalUsers = $result['total'];
            } catch (PDOException $ex) {
                echo "ERROR " . $ex -> getMessage();
            }
        }

        return $totalUsers;

    }
}