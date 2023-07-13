<?php

require_once "../controller/cliente_controller.php";
require_once "../model/orm_model.php";
require_once "../model/cliente_model.php";

class ClienteAjax{

    public $dni;
    public function RevisarDataDni(){
        $data = $this -> dni;
        $respuesta = ClienteController::BuscarDataDni($data);
        echo json_encode($respuesta);
    }

    // conexion con la reniec
    public $dni_user;
	public function consultar_dni(){
		
        $token = 'apis-token-1.aTSI1U7KEuT-6bbbCguH-4Y8TI6KS73N';
        // $dni = '72392204';
        $dni = $this->dni_user;
        
        // Iniciar llamada a API
        $curl = curl_init();
        
        // Buscar dni
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.apis.net.pe/v1/dni?numero=' . $dni,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 2,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'Referer: https://apis.net.pe/consulta-dni-api',
            'Authorization: Bearer ' . $token
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        // Datos listos para usar
        echo json_encode($response); 
    }

}

if(isset($_POST['dni'])){
    $exec = new ClienteAjax();
    $exec -> dni = $_POST['dni'];
    $exec -> RevisarDataDni();
}

if(isset( $_POST["dni_form"])){
    $DNI_SNI = new ClienteAjax();
	$DNI_SNI -> dni_user = $_POST["dni_form"];
	$DNI_SNI -> consultar_dni();
}