<?php
include 'config.php';

class Datbase{
    private static $pdo;
    public function connection(){
        if(!isset(self::$pdo)){
            try{
                self::$pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
            }catch(PDOException $e){
                echo $e->getMassage();
            }
        }
        return self::$pdo;
    }
    public static function prepareOwn($sql){
        return self::connection()->prepare($sql);
    }
}
