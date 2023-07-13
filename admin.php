<?php
require_once "model/orm_model.php";


require_once "controller/cliente_controller.php";
require_once "model/cliente_model.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style_admin.css">
    <link rel="shortcut icon" href="https://www.ial.edu.pe/isotipo.png">
    <script src="https://kit.fontawesome.com/6f8129a9b1.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" /> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">



    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">

    <title>Administrador | IAL</title>
</head>
<body>


<div class="title_admin">
        Administrador
</div>
<section class="contenedor">

    <p class="p_turno_m">Registros de IAL tiene Talento</p>
    <br>
    <!-- <table id="example" class="display nowrap" style="width:100%"> -->
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>SEDE</th>
                <th>CELULAR</th>
                <th>DNI</th>
                <th>CARRERA</th>
                <th>OPCIONES</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            $turno_m = ClienteController::data_turno_m();
            foreach ($turno_m as $clave => $value){ ?>
                <tr>
                    <td><?= $clave+1 ?></td>
                    <td><?= $value['nombre'] ?></td>
                    <td><?= $value['apellido'] ?></td>
                    <td><?= $value['sede'] ?></td>
                    <td><?= $value['celular'] ?></td>
                    <td><?= $value['dni'] ?></td>
                    <td><?= $value['carrera'] ?></td>  
                    <td>
                        <a href="<?php echo "https://wa.me/".$value["celular"]."?text=Hola te saluda el Instituto Loayza
¡Te damos la bienvenida a IAL tiene Talento! 🎉
Te invitamos a unirte a nuestro grupo de WhatsApp 👇🏽👇🏽https://chat.whatsapp.com/KE2UcnJq3b99WEwbG42MOf
 Asi te mantendrás al tanto acerca del Evento.
Loayza te espera! 💙☺️"; ?>" target="_blank" class="btn btn-success"><i class="fa-brands fa-whatsapp"></i></a>
                    </td>  
                </tr>              
            <?php }?>
            
        </tbody>
    </table>

</section>



    <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );
    </script>
</body>
</html>