<?php

class conexion{

    static public function conectar(){
        // $link = new PDO("mysql:host=localhost;dbname=ial_dblanding",
        //                 "ial_landing",
        //                 "Pauhomi09*Feria");
        $link = new PDO("mysql:host=localhost;dbname=ial_dblanding",
                        "root",
                        "");
        $link->exec("set names utf8");
        return $link;
    }


}