<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://www.ial.edu.pe/isotipo.png">
    <script src="assets/js/sweetalert2.11.js"></script>
    <script src="https://kit.fontawesome.com/6f8129a9b1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>IAL | TALENTO REGISTRO</title>
</head>
<body>

    <img src="assets/img/webinar-2.2.jpg" width="100%" alt="">

    <div class="contenedor">

        <p class="title_registro">REGISTRO</p>

        
            <form class="row g-3 needs-validation" method="post" novalidate>
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-text" style="background: #0049AF"><i class="fa-solid fa-id-card" style="color: #ffffff;"></i></div>
                        <input type="text" autocomplete="off" id="dni" class="form-control form-control-lg" placeholder="Ingrese su DNI" name="dni" required minlength="8" maxlength="8" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" >
                        <div class="invalid-feedback">
                        Ingrese su DNI verdadero
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-text" style="background: #0049AF"><i class="fa-regular fa-user" style="color: #ffffff;"></i></div>
                        <input type="text" autocomplete="off" class="form-control form-control-lg" id="nombre" placeholder="Nombres" name="nombre" readonly required>  
                        <div class="invalid-feedback">
                            Ingrese su Nombre en la Casilla
                        </div>                            
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-text" style="background: #0049AF"><i class="fa-regular fa-user" style="color: #ffffff;"></i></div>
                        <input type="text" autocomplete="off" class="form-control form-control-lg" id="apellido" placeholder="Apellidos" name="apellido" readonly required>
                        <div class="invalid-feedback"> 
                            Ingrese su Apellido en la Casilla
                        </div>                    
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-text" style="background: #0049AF"><i class="fa-solid fa-location-crosshairs" style="color: #ffffff;"></i></div>
                        <select class="form-select form-select-lg" id="" name="sede" required>
                            <option value="" hidden>¿Cual es tu Sede?</option>
                            <option value="Sede Central (Psje. Nueva Rosita N°140)">Sede Central (Psje. Nueva Rosita N°140)</option>
                            <option value="Sede Clínica (Av. Alfonso Ugarte 1061)">Sede Clínica (Av. Alfonso Ugarte 1061)</option>
                            <option value="Sede Arequipa (Av. Arequipa  N° 1473)">Sede Arequipa (Av. Arequipa  N° 1473)</option>
                            <option value="Sede Mendiola (Av. Alfredo Mendiola N° 3349)">Sede Mendiola (Av. Alfredo Mendiola N° 3349)</option>
                            <option value="Sede Salavery (Av. Salaverry N°3624)">Sede Salavery (Av. Salaverry N°3624)</option>
                            <option value="Sede Independecia (Av. Carlos izaguirre N°216)">Sede Independecia (Av. Carlos izaguirre N°216)</option>
                            <option value="Sede Puente Piedra(Av. Puente Piedra N° 712 )">Sede Puente Piedra(Av. Puente Piedra N° 712 )</option>
                            <option value="Sede ATE (Av. Nicolás Ayllon N° 831 )">Sede ATE (Av. Nicolás Ayllon N° 831 )</option>
                            <option value="Sede Villa el Salvador (Mz K-1 Lote 08- A Parcela II)">Sede Villa el Salvador (Mz K-1 Lote 08- A Parcela II)</option>
                            <option value="Sede Belisario (Av. Belisario Suarez MZ. C - 2 TL12 )">Sede Belisario (Av. Belisario Suarez MZ. C - 2 TL12 )</option>
                            <option value="Sede San Juan (Av. San Juan N° 721 )">Sede San Juan (Av. San Juan N° 721 )</option>
                            <option value="Sede Miguel Iglesias (Av. Miguel Iglesias MZ. T LT. 09 )">Sede Miguel Iglesias (Av. Miguel Iglesias MZ. T LT. 09 )</option>
                            <option value="Sede Billinghurst (Av. Guillermo Billinghurst MZ. F2 LT. 32 Parcela D)">Sede Billinghurst (Av. Guillermo Billinghurst MZ. F2 LT. 32 Parcela D)</option>
                            <option value="Sede Próceres 1 (Av.Próceres de la Independencia N° 2272)">Sede Próceres 1 (Av.Próceres de la Independencia N° 2272)</option>
                            <option value="Sede Próceres 2 (Av. Próceres de la Independencia N°1087 )">Sede Próceres 2 (Av. Próceres de la Independencia N°1087 )</option>
                        </select>
                        <div class="invalid-feedback">
                            Selecciona tu Sede
                        </div>                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-text" style="background: #0049AF"><i class="fa-solid fa-phone" style="color: #ffffff;"></i></div>
                        <input type="text" autocomplete="off" class="form-control form-control-lg" id="celular" placeholder="Celular" name="celular" minlength="9" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"  required>
                        <div class="invalid-feedback">
                        Ingrese su número de celular
                        </div>                    
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-text" style="background: #0049AF"><i class="fas fa-file-import" style="color: #ffffff;"></i></div>
                        <select class="form-select form-select-lg" name="carrera" required>
                        <option value="" hidden>Carrera</option>
                        <option value="Enfermería Técnica">Enfermería Técnica</option>
                        <option value="Farmacia Técnica">Farmacia Técnica</option>
                        <option value="Prótesis Dental">Prótesis Dental</option>
                        <option value="Laboratorio Clínico">Laboratorio Clínico</option>
                        <option value="Fisioterapia y Rehabilitación">Fisioterapia y Rehabilitación</option>
                        </select>
                        <div class="invalid-feedback">
                            Selecciona tu Carrera
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-5 mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Al marcar esta casilla, autorizo al Instituto Arzobispo Loayza a utilizar mis datos para comunicarse conmigo y entregarme la información solicitada.
                        </label>
                        <div class="invalid-feedback">
                            Marque la casilla para confirmar que esta de acuerdo
                        </div>
                    </div>
                </div>

                <div class="col-12 row">
                    <button class="btn btn_guardar_form" type="submit">Regístrate</button>
                </div>
            </form>

            <?php
            $registrar = new ClienteController();
            $registrar-> store();
            ?>

    </div>

    <footer>
        <img src="assets/img/webinar-2.1.jpg" width="100%" alt="">
        <!-- <div class="contenedor">
            <p class="siguenos_footer">Siguenos en:</p>
            <p class="redes_i">
                <a href="https://www.facebook.com/ial.oficial/" target="_blank"><i class="fa-brands fa-facebook" style="color: #ffffff;"></i></a>
                <a href="https://www.instagram.com/ial.oficial/?hl=es" target="_blank"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>
                <a href="https://www.youtube.com/institutoarzobispoloayzaialoficial" target="_blank"><i class="fa-brands fa-youtube" style="color: #ffffff;"></i></a>
                <a href="https://www.tiktok.com/@ial.oficial?fbclid=IwAR3g0T4ApKykHfYV4rlpg9o3xANoDtLaDF20yeGbTOkDYSRLwUq9Vm0eF-U" target="_blank"><i class="fa-brands fa-tiktok" style="color: #ffffff;"></i></a>
            </p>
            <p class="footer_ultimo">www.ial.edu.pe</p>
        </div> -->
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

<script>
    
    (function () {
    'use strict'

    var forms = document.querySelectorAll('.needs-validation')

    Array.prototype.slice.call(forms)
        .forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
        })
    })()

</script>
<script src="assets/js/index.js"></script>

</body>
</html>