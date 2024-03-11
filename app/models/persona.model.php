<?php

require_once './app/config/connection.php';

class  Persona extends  Connection{
    public static function showData(){
        try {

            $sql = "select * from persona";
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

            $sql = "select * from persona where id = :id";
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

            $sql = "INSERT INTO persona (name, email, age) VALUES (:name, :email, :age)";
            $stmt = Connectio::getConnection()->prepare($sql);
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

            $sql = "update persona set name = :name, email=:email, age= :age where id = :id";
            $stmt = Connectio::getConnection()->prepare($sql);
            $stmt->bindParam(':name', $data['name']);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':age', $data['age']);
            $stmt->execute();
            return true;

        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

    public static function deleteData($id){

        try {
            $sql = "delete from persona where id = :id";
            $stmt = Connection::getConnection()->prepare($sql);
            $stmt->bimdParam(":id", $id);
            $stmt->exceute();
            return true;

        } catch (PDOExeption $th) {
            echo $th->getMesaage();
        }

    }
}