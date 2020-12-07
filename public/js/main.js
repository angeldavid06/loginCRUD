$(document).ready(function() {
    $('#cargaDatos').load('tabla.php');

    $('.nuevo').click(function() {
        $('.form-nuevo').addClass("abierto");
    });

    $('.cerrar').click(function() {
        $('.form-nuevo').removeClass("abierto");
    });

    $('.close-alert-delete').click(function() {
        $('.alert-delete').removeClass("notificacion");
    });

    $('.close-alert-update').click(function() {
        $('.alert-update').removeClass("notificacion");
    });

    $('.close-alert-insert').click(function() {
        $('.alert-insert').removeClass("notificacion");
    });
    
    $("#formAgregar").on('submit', function(evt){
        evt.preventDefault(); 
        datos = $('#formAgregar').serialize();
        $.ajax({
            type:"POST",
            data:datos,
            url:"../procesos/insertar.php",
            success:function(r) {
                if (r == 1) {
                    $('#cargaDatos').load('tabla.php');
                    $('.alert-insert').addClass("notificacion");
                    setTimeout(function(){ 
                        $('.alert-insert').removeClass("notificacion"); 
                    }, 3000);
                } else {
                    $('.alert-insert').addClass("notificacion");
                    $('.alert-insert').addClass("error"); 
                    setTimeout(function(){ 
                        $('.alert-insert').removeClass("notificacion");
                        $('.alert-insert').removeClass("error"); 
                    }, 3000);
                }
            }
        });
    });

    $("#formActualizar").on('submit', function(evt){
        evt.preventDefault();  
        datos = $('#formActualizar').serialize();
        $.ajax({
            type:"POST",
            data:datos,
            url:"../procesos/actualizar.php",
            success:function(r) {
                if (r == 1) {
                    $('#cargaDatos').load('tabla.php');
                    $('.alert-update').addClass("notificacion"); 
                    setTimeout(function(){ 
                        $('.alert-update').removeClass("notificacion"); 
                    }, 3000);
                } else {
                    $('.alert-update').addClass("notificacion");
                    $('.alert-update').addClass("error"); 
                    setTimeout(function(){ 
                        $('.alert-update').removeClass("notificacion");
                        $('.alert-update').removeClass("error"); 
                    }, 3000);
                }
            }
        });
    });
});
    
function eliminarDatos(idGasto) {
    alertify.confirm('Eliminar un juego', '¿Seguro de eliminar este gasto?', function(){ 
        $.ajax({
            type:"POST",
            data:"idGasto="+idGasto,
            url:"../procesos/eliminar.php",
            success:function(r) {
                if (r==1) {
                    $('#cargaDatos').load('tabla.php');
                    $('.alert-delete').addClass("notificacion"); 
                    setTimeout(function(){ 
                        $('.alert-delete').removeClass("notificacion"); 
                    }, 3000);
                } else {
                    $('.alert-delete').addClass("notificacion");
                    $('.alert-delete').addClass("error"); 
                    setTimeout(function(){ 
                        $('.alert-delete').removeClass("notificacion");
                        $('.alert-delete').removeClass("error"); 
                    }, 3000);
                }
            }
        });
    }, function() { 
        alertify.error('Cancelado');
    });

}

function formActualizar(idGasto) {
    $.ajax({
        type:"POST",
        data:"idGasto="+idGasto,
        url:"../procesos/obtenerGasto.php",
        success:function(r) {
            datos = jQuery.parseJSON(r);
            $('#idGasto').val(datos['id']);
            $('#conceptoA').val(datos['concepto']);
            $('#cantidadA').val(datos['cantidad']);
            $('#fechaA').val(datos['fecha']);
        }
    });
}