<?php

class Conexion{
    private $connect;
    private $db_host = "localhost";
    private $db_name = "cryptolearning";

    private $user = "root";
    private $pass = "";

    public function __construct()
    {
        $connectionString = "mysql:host=".$this->db_host.";dbname=".$this->db_name.";"."utf8mb4_unicode_ci";
        try {
            $this->connect = new PDO($connectionString,$this->user,$this->pass);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            $this->conect ='Error de conexión';
            echo "ERROR: ".$e->getMessage();
        }
    }

    public function getConnect()
    {
        return $this->connect;
    }
}

?>