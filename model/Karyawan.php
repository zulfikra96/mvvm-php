<?php

class Karyawan{

    public function show()
    {
        require("../../config/DB.php");
        try{
            $select = $db->prepare("SELECT * FROM karyawans");
            $select->execute();
            return $fetch =  $select->fetchAll();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function delete($data)
    {
        require("../../config/DB.php");
        try{
            $delete = $db->prepare("DELETE FROM karyawans WHERE id={$data}");
            $delete->execute();
            
        }catch(PDOException $e){
            die($e->getMessage());            
        }        
    }

    public function insert($data)
    {
        require("../../config/DB.php");
        try{
            $insert = $db->prepare("INSERT INTO karyawans (username,fullname,password) VALUES('{$data['username']}','{$data['fullname']}','{$data['password']}')");
            $insert->execute();
        }catch(PDOException $e){
            die($e->getMessage());
        }    
    }




}

