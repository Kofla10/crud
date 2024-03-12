<?php
 require_once '../config/connection.php';
class  Person extends  Connection{
    public static function showData(){

        try {

            $sql = "select * from person";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;

        } catch (PDOException $th) {

            echo $th->getMessage();

        }
    }

    public static function getDataId($id){

        try {

            $sql = "select * from person where id = :id";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;

        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }


    public  static function saveData($data){

        try {
            $sql = "INSERT INTO person (name, email, age) VALUES (:name, :email, :age)";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam(':name', $data['name']);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':age', $data['age']);
            $stmt->execute();
            return true;

        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
    public  static function updateData($data){
        try {

            $sql = "update person set name = :name, email=:email, age= :age where id = :id";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam(':name' , $data['names']);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':age'  , $data['age']);
            $stmt->bindParam(':id'   , $data['id']);
            $stmt->execute();
            return true;

        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

    public static function deleteData($id){

        try {
            $sql = "delete from person where id = :id";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            return true;

        } catch (PDOException $th) {
            echo $th->getMessage();
        }

    }
}