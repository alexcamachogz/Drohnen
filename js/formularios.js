// Formulario de Registro
$('#btnRegistro').on("click", () => {
    
    let nombre      = $('#nombre-registro').val();
    let apellido    = $('#apellido-registro').val();
    let email       = $('#email-registro').val();
    let contrasena  = $('#contrasena-registro').val();
    let codigo      = $('#codigo-registro').val();

    $.ajax({
        method: "POST",
        url: "php/Formulario-Registro/registro.php",
        beforeSend: function(){
            $('#statusMessage').hide();
        },
        data: {
            nombre      : nombre,
            apellido    : apellido,
            email       : email,
            contrasena  : contrasena,
            codigo      : codigo
        },
        success : function(data) {
            $('#statusMessage').fadeIn(300);
            $('#statusMessage').html(data.message);
        }
    })
});

// Formulario de Contacto 
// $('#btnEnviar').on("click", () => {
//     let nombre = $('#nombre').val();
//     let email = $('#email').val();
//     let mensaje = $('#mensaje').val();

//     $.ajax({
//         method: "POST",
//         url: "contacto.php",
//         beforeSend: function(){
//             $('#statusMessage').hide();
//         },
//         data: {
//             postFlag 	: true,
//             nombre 		: nombre,
//             email 		: email,
//             mensaje 	: mensaje
//         },
//         success : function(data) {
//             $('#statusMessage').fadeIn(300);
//             $('#statusMessage').html(data.message);
//         }
//     })
// });
