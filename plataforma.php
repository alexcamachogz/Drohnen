<?php session_start();
    // Comprobamos tenga sesion, si no entonces redirigimos y MATAMOS LA EJECUCION DE LA PAGINA.
    if(isset($_SESSION['usuario'])) {
        header('Location: index.php');
        die();
    } else {

?>

    <!DOCTYPE html>
    <html lang="en" class="full-height">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Drohnen - Plataforma</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="font/font-awesome/css/all.min.css">
        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/mdb.min.css">
        <link rel="stylesheet" href="css/plataforma.css">
    </head>
    <body>

    <nav class="navbar navbar-expand-sm navbar-dark unique-color-dark">
        <a class="navbar-brand" href="#">Drohnen</a>
        <div class="ml-auto">
            <a href="#" data-toggle="modal" data-target="#modalConfig"><i class="fas fa-cog text-white"></i></a>
        </div>
    </nav>

    <!-- MODAL INICIO SESIÓN -->
	<div class="modal fade modal-fondo" id="modalConfig" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document"> 
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center" id="exampleModalLongTitle">Configuración</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
                    <p>Cambiar Email</p>
                    <p>Cambiar Password</p>
                    <p>Cambiar Imagen de Perfil</p>
                    <p>Cambiar Suscripción</p>
                    <p><i>Actualizar a la versión completa</i></p>
				</div>
				<div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
			</div> 
		</div>
	</div>
	<!-- MODAL INICIO SESIÓN -->


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    Hola!
                </div>
            </div>
        </div>


        <!-- Scripts -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mdb.min.js"></script>
        <script src="js/formularios/formulario-registro.js"></script>
        <script src="js/formularios/formulario-login.js"></script>
    </body>
    </html>

<?php

    }

?>