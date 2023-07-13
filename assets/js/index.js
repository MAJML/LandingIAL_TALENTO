document.getElementById("dni").style.border="1px solid #2BBD14";
document.getElementById("dni").focus();

$("#dni").keyup(function(){
    const dni = $("#dni");
    if($(dni).val().length == 8){

        var datito = new FormData();
        datito.append("dni_form", $(dni).val());
        $.ajax({
            url: "ajax/cliente.ajax.php",
            method: "POST",
            data: datito,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            beforeSend:function(){
                $("#nombre").attr("placeholder", "Buscando ...")
                $("#apellido").attr("placeholder", "Buscando ...")
                $("#nombre").val("");
                $("#apellido").val("");
            },
            success: function(respuesta){
                res = JSON.parse(respuesta);
                // console.log("esta es la respuesta: ", res);  
                if(res.nombres){
                    $("#nombre").val(res.nombres)
                    $("#apellido").val(res.apellidoPaterno + ' ' + res.apellidoMaterno)
                }else{
                    $("#dni").val("");
                    $("#nombre").val("");
                    $("#apellido").val("");
                    $("#nombre").attr("placeholder", "Nombres")
                    $("#apellido").attr("placeholder", "Apellidos")
                }
                
            }
        })

        VerificarDniRepetido()
    }
})

function VerificarDniRepetido(){
    const dni = $("#dni").val();
    // console.log("este es el dni : ", dni)
    var datos = new FormData();
    datos.append("dni", dni);
    $.ajax({
        url: "ajax/cliente.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){
            // console.log("esta es la respuesta: ", respuesta);   
            if(respuesta){
                Swal.fire(
                    'Error',
                    'Este DNI ya ha sido registrado',
                    'error'
                ).then((result) => {
                    if (result.isConfirmed) {
                        window.location = '';
                    }
                })
            }
        }
    })
}
