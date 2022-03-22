<?php
    require_once("conexion.php");

    class usuario extends conexion{
        
        public function __construct()
        {
            $this->db = parent::__construct();
        }
        
        public function insertarusuario($nombre, $email, $password){

            $tabla = $this->db->prepare(" INSERT INTO usuario(nombre, email, password) VALUE (:nombre, :email, :password)");  
            $tabla->bindParam(':nombre', $nombre);
            $tabla->bindParam(':email', $email);
            $tabla->bindParam(':password', $password);
            $tabla->execute();

            $idusuario = $this->db->lastinsertid();
            return $idusuario;
        }
        //ver todos los usuarios
        public function getusuarios(){
            $rows = null;
            $tabla = $this->db->prepare("SELECT id, nombre, email, password  FROM usuario");
            $tabla->execute();

            while($result = $tabla->fetch()){
                $rows[]= $result;
            }
            return $rows;
        }
        public function editarUsuario($id, $nombre, $email, $password){
            $tabla = $this->db->prepare("UPDATE usuario SET nombre= :nombre, email = :email, password= :password WHERE id =$id");
            $tabla->bindParam(':nombre', $nombre);
            $tabla->bindParam(':email', $email);
            $tabla->bindParam(':password', $password);
            $tabla->execute();
            return$tabla;
        }
        public function eliminarusuario($id){
        $tabla=$this->db->prepare("DELETE FROM usuario WHERE id = :id");
        $tabla->bindParam('id', $id);
        $tabla->execute();
        return $tabla;
        }
        //ver 1 solo usuario
        public function getidusuario($id){
            $rows= null;
            $tabla= $this->db->prepare("SELECT id, nombre, email FROM usuario WHERE id = :id");
            $tabla->bindParam(':id', $id);
            $tabla->execute();
            while($result = $tabla->fetch()){
                $rows[]= $result;
            }
            return $rows;
            
        }
    }//end class
    
        
?>