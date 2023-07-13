<?php

require_once "conexion.php";

class ClienteModel{

    static public function storeModel($data){
        $stmt = orm::insert('ial_tiene_talento' , $data);
        if($stmt->execute()){
            return "ok";
        }else{
            return "error";          
        }
    }
    static public function listar_todo(){
        $stmt = orm::select("SELECT count(*) FROM landing_kpop",array(),PDO::FETCH_ASSOC);
        return $stmt[0];
    }

    static public function listar_turno_m(){
        $stmt = orm::select("SELECT count(*) FROM landing_kpop WHERE turno = 'Mañana'",array(),PDO::FETCH_ASSOC);
        return $stmt[0];
    }

    static public function listar_turno_t(){
        $stmt = orm::select("SELECT count(*) FROM landing_kpop WHERE turno = 'Tarde'",array(),PDO::FETCH_ASSOC);
        return $stmt[0];
    }

    static public function data_turno_m(){
        $stmt = orm::select("SELECT * FROM ial_tiene_talento",array(),PDO::FETCH_ASSOC);
        return $stmt;
    }

    static public function data_turno_t(){
        $stmt = orm::select("SELECT * FROM landing_kpop WHERE turno = 'Tarde'",array(),PDO::FETCH_ASSOC);
        return $stmt; 
    }

    static public function BuscarDataDni($data){
        $stmt = conexion::conectar()->prepare("SELECT * FROM ial_tiene_talento WHERE dni = '".$data."'");
        $stmt -> execute();
        return $stmt -> fetch();
    }

}

