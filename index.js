function init(){
}

$(document).ready(function() {

});

$(document).on("click", "#btnadmin", function () {
    if ($('#rol_id').val()==1){
        $('#lbltitulo').html("Acceso Administrador");
        $('#btnadmin').html("Acceso Usuario");
        $('#rol_id').val(2);
        
    }else{
        $('#lbltitulo').html("Acceso Usuario");
        $('#btnadmin').html("Acceso Admin");
        $('#rol_id').val(1);
        
    }
});

init();