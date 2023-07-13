<?php

require_once "controller/config_controller.php";
require_once "model/orm_model.php";


require_once "controller/cliente_controller.php";
require_once "model/cliente_model.php";




$link = new MVC();
$link -> mvc_controller();

// $rspt = ClienteModel::listar_turno_t();


// foreach ($rspt as $key => $value){ 
//     echo $value;
//     if($value == 50){
//         echo "el registro de turno tarde ha llegado a su limite";
//     }else{
//         echo "Aun hay vacantes para el turno tarde";
//     }
// }