<?php 
try {

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "estagio";
    $connt = new PDO ("mysql:host=$server;dbname=$db",$user,$pass);
    $connt->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch (PDOException $e) {
    echo "ERRO:". $e->getMessage(); 
    exit;
}