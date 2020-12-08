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

    $('.close-alert-cancel').click(function() {
        $('.alert-cancel').removeClass("notificacion");
    });

    $('.close-alert-nuevo').click(function() {
        $('.alert-nuevo-error').removeClass("notificacion");
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
                    cleanActualizar();
                    setTimeout(function(){ 
                        $('.alert-insert').removeClass("notificacion"); 
                    }, 3000);
                } else {
                    errorAgregar(r);
                    $('.alert-insert-error').addClass("notificacion"); 
                    setTimeout(function(){ 
                        $('.alert-insert-error').removeClass("notificacion");
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
                    $('.alert-update-error').addClass("notificacion");
                    setTimeout(function(){ 
                        $('.alert-update-error').removeClass("notificacion");
                    }, 3000);
                }
            }
        });
    });

    $("#formLogin").on('submit', function (evt) {
        evt.preventDefault();
        datos = $('#formLogin').serialize();
        $.ajax({
            type:"POST",
            data:datos,
            url:"procesos/login.php",
            success:function(r) {
                if (r == 1) {
                    window.location.href = 'vistas/';
                } else {
                    $('.input-control').addClass("input-error");
                    $('.label-input').addClass("label-error");
                    alert("Usuario y/o contraseña invalidos.");
                    setTimeout(function(){ 
                        $('.input-control').removeClass("input-error");
                        $('.label-input').removeClass("label-error");
                    }, 3500);
                }
            }
        });
    });

    $("#formRegistro").on('submit', function (evt) {
        evt.preventDefault();
        datos = $('#formRegistro').serialize();
        $.ajax({
            type:"POST",
            data:datos,
            url:"procesos/registro.php",
            success:function(r) {
                if (r == 1) {
                    window.location.href = './';
                } else {
                    errorRegistro(r);
                    $('.alert-nuevo-error').addClass("notificacion");
                    setTimeout(function(){ 
                        $('.alert-nuevo-error').removeClass("notificacion");
                    }, 3500);
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
        $('.alert-cancel').addClass("notificacion");
        $('.alert-cancel').addClass("error"); 
        setTimeout(function(){ 
            $('.alert-cancel').removeClass("notificacion");
            $('.alert-cancel').removeClass("error"); 
        }, 3000);
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

function errorAgregar(err) {
    if (err == 2) {
        $('#concepto').addClass("input-error");
    } else if (err == 3) {
        $('#cantidad').addClass("input-error");
    } else if (err == 4) {
        $('#fecha').addClass("input-error");
    } 
}

function errorRegistro (err) {
    if (err == 2) {
        $('#nombre').addClass("input-error");
    } else if (err == 3) {
        $('#aP').addClass("input-error");
    } else if (err == 4) {
        $('#aM').addClass("input-error");
    } else if (err == 5) {
        $('#mail').addClass("input-error");
    } else if (err == 6) {
        $('#usuario').addClass("input-error");
    } else if (err == 7) {
        $('#password').addClass("input-error");
    }
}

function cleanActualizar() {
    $('#concepto').removeClass("input-error");
    $('#cantidad').removeClass("input-error");
    $('#fecha').removeClass("input-error");
    $('#concepto').val("");
    $('#cantidad').val("");
    $('#fecha').val("");
}