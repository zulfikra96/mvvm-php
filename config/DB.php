<?php

$dbname     = "crud_db";
$user       = "root";
$pass       = "";
$sql        = "mysql";
$host       = "127.0.0.1";



try{
 
    $db = new PDO("{$sql}:host={$host};dbname={$dbname}", $user, $pass);
}catch(PDOException $e){
    die("maaf ada koneksi gagal". $e->getMessage());
}