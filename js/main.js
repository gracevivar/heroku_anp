$(function(){
    
    $('#ingresar').on('click',function(){
        var usu = $('#usuario').val();
        var pass = $('#contrasena').val();
        var area = $('#perfil').val();
        var url = 'val_Usuario.php';
        var total = usu.length * pass.length * area.length;
        if (total>0){
            $.ajax({
                type: 'POST',
                url: url,
                data: 'usuario='+usu+'&contrasena='+pass+'&perfil='+area,
                success: function(valor){
                    if(valor == 'usuario'){
                        $('#mensaje').html('El usuario ingresado no existe').show(300).delay(3000).hide(300);
                        $('#usuario').focus();
                        return false;
                    }else if(valor == 'area'){
                        $('#mensaje').html('Usted no pertenece al area seleccionada').show(300).delay(3000).hide(300);
                        $('#perfil').focus();
                        return false;
                    }else if(valor == 'password'){
                        $('#mensaje').html('Su password es incorrecto').show(300).delay(3000).hide(300);
                        $('#contrasena').focus();
                        return false;
                    }else if(valor == 'administrador'){
                        document.location.href = 'registro.php';
                    }else if(valor == 'cliente'){
                        document.location.href = 'compras.php';
                    }
                }
            });
            return false;
        }else{
            $('#mensaje').html('Complete todos los campos').show(300).delay(3000).hide(300);
        }
    });
    
});
