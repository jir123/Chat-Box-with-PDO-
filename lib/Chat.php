<?php
    include 'Database.php';
    class Chat{

        //read data 
        public function readAll(){
            $sql = "SELECT * FROM  tbl_box";
            $stmt = Database::prepareOwn($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        //insert data
        private $name;
        private $text;
        public function setName($name){
            $this->name = $name;
        }

        public function setText($text){
            $this->text = $text;
        }

        public function insert(){
            $sql = "INSERT INTO tbl_box(name, text) VALUES (:name, :text)";
            $stmt = Database::prepareOwn($sql);
            $stmt->bindParam(':name',$this->name);
            $stmt->bindParam(':text',$this->text);
            return $stmt->execute();
        }


    }
?>