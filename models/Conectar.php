<?php
class Conectar{
   
    public static function conexion(){

        try {
           
            $conexion = new PDO("mysql:host=localhost; dbname=login", "root", "Admin09");
          
            // echo "conectado";

        } catch(Exception $e){
             
            die("eror" + $e->getMessage());
            echo "liena del error ". $e->getLine();
        }

        return $conexion;
    }


}

