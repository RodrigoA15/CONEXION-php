<?php
require_once("conexion.php");
class sitio extends conexion {



    public function __construct()
    {
        $this->db = parent::__construct();
    }
    
    public function insertarsitio($municipio, $lugar, $nombre){

        $tabla = $this->db->prepare(" INSERT INTO sitio(municipio, lugar, nombre) VALUE (:municipio, :lugar, :nombre)");  
        $tabla->bindParam(':municipio', $municipio);
        $tabla->bindParam(':lugar', $lugar);
        $tabla->bindParam(':nombre', $nombre);
        $tabla->execute();

        $idsitio = $this->db->lastinsertid();
        return $idsitio;
    }
    public function getsitios(){
        $rows = null;
        $tabla = $this->db->prepare("SELECT id, municipio, lugar, nombre  FROM sitio");
        $tabla->execute();

        while($result = $tabla->fetch()){
            $rows[]= $result;
        }
        return $rows;
    }
    public function editarsitio($id, $municipio, $lugar, $nombre){
        $tabla = $this->db->prepare("UPDATE sitio SET municipio= :municipio, lugar = :lugar, nombre= :nombre WHERE id =$id");
        $tabla->bindParam(':municipio', $municipio);
        $tabla->bindParam(':lugar', $lugar);
        $tabla->bindParam(':nombre', $nombre);
        $tabla->execute();
        return$tabla;
    }
}

?>