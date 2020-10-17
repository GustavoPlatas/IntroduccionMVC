<?php
/*Fecha de creación: 14 de octubre del 2020
autor: Gustavo Platas Pedraza
Contacto: 9745@utl.edu.mx
Descripcion: el siguiente archivo será la clase de perosnas donde se agruparán las funciones y atributos a utlizar
para el modulo de personas
Fecha de última modificación: 14 de octubre de 2020*/
class Personas{
    private $personas;
    private $conexion;
    public function __construct(){
        $this->personas = Array();
        $this->conexion = new PDO("mysql:host=localhost;dbname=idgs07-av;","root","pedraza12");
        //$cadena_conexion = "mysql:host=localhost;dbnanme=idgs07-av;";
        //$this->conexion = new PDO($cadena_conexion,"root","pedraza12");
        //el tipo de codificado que tendrá la bd
        $this->conexion->query("SET NAMES utf8");
    } 
    public function listar_personas(){
        try{
        
            $query = "SELECT id_persona,
            nombre,
            ap_paterno,
            ap_materno,
            genero,
            activo
            FROM personas";
            //preparamos la consulta
            $qry = $this->conexion->prepare($query);
            #ejecutamos la consulta
            $qry->execute();
            $data = $qry->fetchAll(PDO::FETCH_ASSOC);
            $this->personas = $data;
            return $this->personas;
            $this->conexion = null;
       
        }catch(Exception $e){
            $error= "error";
            echo $e;
        }
    }   
    
}
?>