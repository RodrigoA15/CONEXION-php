<?php

class conexion{

    private   $db;
    private   $driver      = "mysql";
    protected $host        = "localhost";
    private   $based       = "adsi_2338368";
    private   $usuario     = "root";
    private   $contrasena  = "";
    
    public function __construct(){
        try {
            $db = new PDO("{$this->driver}:host={$this->host};dbname={$this->
                based}", $this->usuario, $this->contrasena);
               // echo "La conexion a la  BD es exitosa";
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $db;
        } catch (PDOException $e) {
            echo "Ha ocurrido un error al conectarse a la BD" . $e->getMessage();
        }



    }





}


$objConexion = new conexion();
print_r($objConexion);

?>