function busqueda(){
    var texto= document.getElementById("txtbus").value;

    var parametros = {
        "texto": texto
    };

    $.ajax({
        data: parametros,
        url:  "includes/busqueda.php",
        type: "POST",
        success: function(response){
            $("#resultados").html(response);
        }
    });
}