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


        // public function setId($roll){
        //     $this->roll = $roll;
        // }
        //insert data
        // public function insert(){
        //     $sql = "INSERT INTO $this->table(name, email, dep, roll) VALUES (:name, :email, :dep, :roll)";
        //     $stmt = DataBase::prepareOwn($sql);
        //     $stmt->bindParam(':name',$this->name);
        //     $stmt->bindParam(':email', $this->email);
        //     $stmt->bindParam(':dep',$this->dep);   
        //     $stmt->bindParam(':roll',$this->roll);
        //     return $stmt->execute();
        // }

         //read data
        //  public function readAll(){
        //     $sql = "SELECT * FROM $this->table";
        //     $stmt = DataBase::prepareOwn($sql);
        //     $stmt->execute();
        //     return $stmt->fetchAll();
        // }

    }
?>