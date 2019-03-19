// Formulario de Contacto 
$('#btnEnviar').on("click", () => {
    let nombre = $('#nombre').val();
    let email = $('#email').val();
    let mensaje = $('#mensaje').val();

    $.ajax({
        method: "POST",
        url: "contacto.php",
        beforeSend: function(){
            $('#statusMessage').hide();
        },
        data: {
            postFlag 	: true,
            nombre 		: nombre,
            email 		: email,
            mensaje 	: mensaje
        },
        success : function(data) {
            $('#statusMessage').fadeIn(300);
            $('#statusMessage').html(data.message);
        }
    })
});
