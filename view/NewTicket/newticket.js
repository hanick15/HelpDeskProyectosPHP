function init(){

    $("#ticket_form").on("submit", function(e){
        guardaryeditar(e);
    });

}


$(document).ready(function() {
    $('#tick_descrip').summernote({
        height: 200
    });

    $.post("../../controller/categoria.php?op=combo",function(data, status){
        $('#cat_id').html(data);
    });
});


// Envia los datos al controlador
function guardaryeditar(e){

    e.preventDefault();
    var formData = new FormData($("#ticket_form")[0]);
    $.ajax({
        url: "../../controller/ticket.php?op=insert",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos){
            //console.log(datos);

            //borrar datos del formulario
            $('#tick_titulo').val('');
            $('#tick_descrip').summernote('reset');
            /*$('#prio_id').value('');*/
            swal("Correcto!", "Registrado Correctamente", "success");// mensaje de registro
        }
    });
    

}

init();
