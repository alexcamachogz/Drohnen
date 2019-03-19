// Formulario de Registro
$('#btnLogin').on("click", () => {
    
    let email       = $('#email-login').val();
    let contrasena  = $('#contrasena-login').val();

    $.ajax({
        method: "POST",
        url: "php/Formulario-Login/login.php",
        beforeSend: function(){
            $('#statusLogin').hide();
        },
        data: {
            email       : email,
            contrasena  : contrasena,
        },
        success : function(data) {
            if(data.status == 'OK') {
                window.location.replace('plataforma.php');
            }

            $('#statusLogin').fadeIn(300);
            $('#statusLogin').html(data.message);
        }
    })
});