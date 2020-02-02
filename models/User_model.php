<?php

class User_model {

   public $db;
   public $users;

   public function __construct(){
 
      require_once('Conectar.php');
      $this->db = Conectar::conexion();
      $this->users = array();
   }

   public function get_users(){

         $resultado = $this->db->query("SELECT * FROM datos_usuarios");
            while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
                 $this->users[] = $fila;
            }

             return $this->users;
   }


   public function get_delete($id){
       
      $resultado = $this->db->query("DELETE * FROM datos_usuarios WHERE id= ?");
      
        
   }


}