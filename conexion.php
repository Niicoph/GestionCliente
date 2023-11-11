<?php


class Conexion {
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $conexion;

    public function __construct() {
        try {
            $this->conexion = new PDO("mysql:host=$this->server; dbname=clientes-gim", $this->username, $this->password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "conexion con exito";
        }
        catch (PDOException $e)  {
            echo "Error al conectarse: $e";
        }
    }

    public function query($sql) {
        $query=$this->conexion->prepare($sql); 
        $query->execute();
        return $query->fetchAll(); 
      }
}


$conexion = new Conexion();
$asd = $conexion->query("SELECT name FROM contacto");


echo"ASD";