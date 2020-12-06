$(document).ready(function() {
    $('#cargaDatos').load('tabla.php');

    $('.nuevo').click(function() {
        $('.form-nuevo').addClass("abierto");
    });

    $('.cerrar').click(function() {
        $('.form-nuevo').removeClass("abierto");
    });
    
    $('.btnInsertar').click(function () {
        datos = $('#formAgregar').serialize();
        $.ajax({
            type:"POST",
            data:datos,
            url:"../procesos/insertar.php",
            success:function(r) {
                if (r == 1) {
                    $('#cargaDatos').load('tabla.php');
                } else {
                    alert("Fallo al agregar");
                }
            }
        });
    });

    $('.btnActualizar').click(function() {
        datos = $('#formActualizar').serialize();
        $.ajax({
            type:"POST",
            data:datos,
            url:"../procesos/actualizar.php",
            success:function(r) {
                if (r == 1) {
                    $('#cargaDatos').load('tabla.php');
                    alertify.success("Actualizado con exito");
                } else {
                    alertify.error("Fallo al actualizar");
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
                    alertify.success("Eliminado con exito");
                } else {
                    alertify.error("No se pudo eliminar el gasto");
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