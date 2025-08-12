$("#btnEnviarCorreo").on("click", function(){

    var parametrosAll = new FormData();
    var urlController = "../correo/correo.php";
    parametrosAll.append("v0", "1");
    var other_data = $("#contactForm").serializeArray();
    $.each(other_data, function (key, input) {
        if(input.value == ""){
            $("#msgSubmit").html("<p style='color:red;'>Debes llenar todos los campos!</p>"); 
            exit(0);
        }
    parametrosAll.append(input.name, input.value);
    });
    
    $.ajax({
    url: urlController,
    type: "POST",
    contentType: false,
    dataType: "JSON",
    data: parametrosAll,
    async: false,
    global: true,
    ifModified: false,
    processData: false,
    cache: false,
        beforeSend: function (objeto) {
            //dialogLoading('show');
        },
        complete: function (objeto, exito) {
            $(document).ajaxStart($.blockUI).ajaxStop($.unblockUI);
        },
         success: function (result) {
             if(result == "nombre"){
                 $("#msgSubmit").html("<p style='color:red;'>Debes agrega tu nombre</p>"); 
             }
             if(result == "apellido"){
                 $("#msgSubmit").html("<p style='color:red;'>Debes agrega tu apellido</p>"); 
             }
             if(result == "correo"){
                 $("#msgSubmit").html("<p style='color:red;'>Debes agrega tu correo</p>"); 
             }
             if(result == "mensaje"){
                 $("#msgSubmit").html("<p style='color:red;'>Debes agrega tu mensaje</p>"); 
             }
             if(result == "celular"){
                 $("#msgSubmit").html("<p style='color:red;'>Debes agrega tu celular o número de contacto</p>"); 
             }
            if(result == "0"){
                $("#msgSubmit").html("<p style='color:green;'>Has enviado el mensaje correctamente!</p>"); 
            }else{
                $("#msgSubmit").html("<p style='color:red;'>Ocurrio un problema intentalo más tarde</p>"); 
            }
        },
        error: function (objeto, quepaso, otroobj) {
             console.log("error al registrar");
        },
    })
    .fail(function(objeto, quepaso, otroobj) {
        dlgCargando("close");
        error=" "+objeto+" "+quepaso+""+otroobj+" ";
      alert(3,error);
      return false;
    })
    .always(function() {
    });
});
