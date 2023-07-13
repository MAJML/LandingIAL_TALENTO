<?php

class ClienteController{

    static public function store(){

        if(isset($_POST["nombre"])){

            $data = array(
                "nombre"    => $_POST['nombre'],
                "apellido"  => $_POST['apellido'],
                "dni"       => $_POST["dni"], 
                "carrera"   => $_POST["carrera"],
                "celular"   => $_POST['celular'],
                "sede"      => $_POST["sede"]
                );  

            $respuesta = ClienteModel::storeModel($data);

            if($respuesta == "ok"){
                echo "<script>
                        Swal.fire(
                            'Registrado',
                            'Exitosamente',
                            'success'
                        ).then((result) => {
                            if (result.isConfirmed) {
                                window.location = '';
                            }
                          })
                    </script>";
                echo "<script>                   
                    if(window.history.replaceState){
                        window.history.replaceState( null, null, window.location.href);
                    }
                </script>";
            }else{
                echo "
                    <script>
                        Swal.fire(
                            'Cerrado',
                            'Registro lleno!',
                            'error'
                        )                
                    </script>
                    ";  
                echo "
                <script>
                if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                }
                </script>
                ";     
            }
        }


    }

    static public function data_turno_m(){
        $respuesta = ClienteModel::data_turno_m();
        return $respuesta;
    }

    static public function data_turno_t(){
        $respuesta = ClienteModel::data_turno_t();
        return $respuesta;
    }

    static public function BuscarDataDni($data){
        $respuesta = ClienteModel::BuscarDataDni($data);
        return $respuesta;
    }
}