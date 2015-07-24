$(document).ready(function() {
    $("#modal").on("hidden.bs.modal", function(ev) {
        $("#modal")[0].reset();
    });
    $("#modal").validate({
        rules: {
            nombre: {
                required: true,
                minlength: 2,
                maxlength: 10
            },
            email: {
                required: true,
                email: true
            },
            mensajes: {
                required: true,
                minlength: 5,
                maxlength: 100
            },
             noticias: {
                    required: true
                }
        },
        messages: {
            nombre: {
                required: "Campo obligatorio",
                minlength: "El nombre debe contener 'más de 2 caracteres",
                maxlength: "El nombre no debe contener más de 5 caracteres"
            },
            mensajes: {
                required: "Campo obligatorio",
                minlength: "El mensaje debe contener más de 5 caracteres",
                maxlength: "El mensaje no debe contener más de 100 caracteres"
            },
            noticias: {
                    required: "Seleccione una categoria por favor"
            }
        }
    })
//implemeto del aJax
    $("#save").on("click", function(ev) {
        ev.preventDefault();
        if ($("#modal").valid()) {
            $.ajax({
                url: 'rpc/rpc.php',
                type: 'POST',
                data: {
                    nombre: $("#nombre").val(),
                    email: $("#email").val(),
                    telefono: $("#mensajes").val(),
                    noticias: $("#noticias").val()
                }
            })
                    .done(function(msg) {
                $("#mensaje2").html(msg);
            })
                    .fail(function(jHttp, textStatus, errorThrown) {
                $("#mensaje2").html("Error: " + textStatus + ". " + errorThrown);
            })
                    .always(function() {
                $("#modal")[0].reset();
                console.log("complete");
            });
        }
    });
});


//$(document).ready(function ()
//{
//
//    $("#btn").on("click", function (ev) {
//        ev.preventDefault();
//        $.ajax({
//            url: 'rpc/rpc.php',
//            type: 'post',
//            data: {
//                nombre: $("#nombre").val()
//            },
//        })
//                .done(function (msg) {
//                    $("#mensaje").html(msg);
//                })
//                .fail(function (jHttp, textStatus, errorThrown) {
//                    $("#mensaje").html("Error: " + textStatus + "." + errorThrown);
//                })
//                .always(function () {
//                    console.log("complete");
//                });
//    })
//});

