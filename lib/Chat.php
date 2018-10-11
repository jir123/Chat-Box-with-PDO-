<?php
    include 'Database.php';
    class Chat{
        public function readAll(){
            $sql = "SELECT * FROM  tbl_box";
            $stmt = Datbase::prepareOwn($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }

         //read data
        //  public function readAll(){
        //     $sql = "SELECT * FROM $this->table";
        //     $stmt = DataBase::prepareOwn($sql);
        //     $stmt->execute();
        //     return $stmt->fetchAll();
        // }

    }
?>