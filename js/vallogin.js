$(function() {

    $('#ingresar').on('click', function() {
        var usu = $("#usu").val();
        var pass = $("#pass").val();
        var perfil = $("#perfil").val();
        var url = '../rpc/rpc.php';
        var total = usu.length * pass.length * area.length;
        if (total > 0) {
            $.ajax({
                type: 'POST',
                url: url,
                data: 'usu=' + usu + '&pass=' + pass + '&perfil=' + perfil,
                success: function(valor) {
                    if (valor == 'usuario') {
                        $('#mensaje').addClass('error').html('El usuario ingresado no existe').show(300).delay(3000).hide(300);
                        $('#usu').focus();
                        return false;
                    } else if (valor == 'perfil') {
                        $('#mensaje').addClass('error').html('Usted no pertenece al area seleccionada').show(300).delay(3000).hide(300);
                        $('#area').focus();
                        return false;
                    } else if (valor == 'password') {
                        $('#mensaje').addClass('error').html('Su password es incorrecto').show(300).delay(3000).hide(300);
                        $('#pass').focus();
                        return false;
                    } else if (valor == 'cliente') {
                        document.location.href = 'compras.php';
                    } else if (valor == 'empleado') {
                        document.location.href = 'comprar.php';
                    }
                    else if (valor == 'administrador') {
                        document.location.href = 'empleados.php';
                    }
                }
            });

        } else {
            $("#mensaje").addClass('error').html('Complete todos los campos').
                    show(300).delay(3000).hide(300);
        }
    });
});