<!DOCTYPE html>
    <html lang="en" class="full-height">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Drohnen - Plataforma</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="../font/font-awesome/css/all.min.css">
        <!-- CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/mdb.min.css">
        <link rel="stylesheet" href="../css/plataforma.css">
    </head>
    <body>

        <nav class="navbar navbar-expand-sm navbar-dark unique-color-dark">
            <li>
                <img class="logo-dron" src="../img/logos/logo-medium-light.png" alt="logo">
            </li>
            <div class="ml-auto">
                <a href="#" class="white-text mr-3">Carmen Alejandra Camacho Gómez</a>
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(17)-mini.jpg" class="rounded-circle z-depth-1-half">
            </div>
        </nav>

        <div class="container">
            <div class="row mt-4">
                <div class="col-md-12">
                    <h2>Estadísticas</h2>
                    <label>Tiempo de Vuelo</label>
                    <div class="progress md-progress" style="height: 20px">
                        <div class="progress-bar progress-bar-striped bg-color-1" role="progressbar" style="width: 25%; height: 20px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                    </div>
                    <label class="mt-2">Rapidez</label>
                    <div class="progress md-progress" style="height: 20px">
                        <div class="progress-bar progress-bar-striped bg-color-2" role="progressbar" style="width: 50%; height: 20px" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                    </div>
                    <label class="mt-2">Precisión</label>
                    <div class="progress md-progress" style="height: 20px">
                        <div class="progress-bar progress-bar-striped bg-color-3" role="progressbar" style="width: 45%; height: 20px" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                    </div>
                    <label class="mt-2">Circuitos Completados</label>
                    <div class="progress md-progress" style="height: 20px">
                        <div class="progress-bar progress-bar-striped bg-color-4" role="progressbar" style="width: 80%; height: 20px" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                    </div>
                    <label class="mt-2">Choques</label>
                    <div class="progress md-progress" style="height: 20px">
                        <div class="progress-bar progress-bar-striped bg-color-5" role="progressbar" style="width: 95%; height: 20px" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
                    </div>
                    <label class="mt-2">Drohnes Volados</label>
                    <div class="progress md-progress" style="height: 20px">
                        <div class="progress-bar progress-bar-striped bg-color-5" role="progressbar" style="width: 50%; height: 20px" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                    </div>
                </div>
            </div>
            <div class="row mt-3 d-flex justify-content-end">
                <div class="col-md-3">
                    <a href="#" class="black-text">
                        <p class="download">
                            <i class="fas fa-download"></i> Descargar Estadísticas
                        </p>
                    </a>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-12">
                    <h2>Historial</h2>
                    <p>Tus últimos vuelos.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"><img src="../img/historial/vuelo-1.jpg" alt="" srcset=""></div>
                <div class="col-md-3"><img src="../img/historial/vuelo-2.jpg" alt="" srcset=""></div>
                <div class="col-md-3"><img src="../img/historial/vuelo-3.jpg" alt="" srcset=""></div>
                <div class="col-md-3"><p class="vertical">Haz más vuelos para que sean mostrados aquí...</p></div>
            </div>
            <div class="row mt-1">
                <div class="col-md-3"><p class="text-center">05/04/2019</p></div>
                <div class="col-md-3"><p class="text-center">07/04/2019</p></div>
                <div class="col-md-3"><p class="text-center">15/04/2019</p></div>
                <div class="col-md-3"><p class="text-center"></div>
            </div>

            <br><br><br><br><br><br><br><br><br><br><br><br><br>

            <!-- SETTINGS -->
            <div class="zoom">
                <a class="zoom-fab zoom-btn-large" id="zoomBtn"><i class="fas fa-cog"></i></a>
                <ul class="zoom-menu">
                    <li data-toggle="tooltip" title="Suscripción">
                        <a class="zoom-fab zoom-btn-sm zoom-btn-person scale-transition scale-out" data-toggle="modal" data-target="#modalSuscripcion">
                        <i class="fa fa-shopping-cart"></i></a>
                    </li>
                    <li data-toggle="tooltip" title="Usuario">
                        <a class="zoom-fab zoom-btn-sm zoom-btn-tangram scale-transition scale-out" data-toggle="modal" data-target="#modalPerfil">
                        <i class="fa fa-user"></i></a>
                    </li>
                    <li data-toggle="tooltip" title="Contraseña">
                        <a class="zoom-fab zoom-btn-sm zoom-btn-report scale-transition scale-out" data-toggle="modal" data-target="#modalPassword">
                        <i class="fa fa-key"></i></a>
                    </li>
                    <li data-toggle="tooltip" title="E-mail">
                        <a class="zoom-fab zoom-btn-sm zoom-btn-feedback scale-transition scale-out" data-toggle="modal" data-target="#modalEmail">
                        <i class="fa fa-envelope"></i></a>
                    </li>
                </ul>
            </div>
        </div>


        <!-- MODAL PAGOS -->
        <div class="modal fade right" id="modalSuscripcion" tabindex="-1" role="dialog" aria-labelledby="modalSuscripcion" aria-hidden="true">
            <div class="modal-dialog modal-side modal-top-right" role="document">
                <div class="modal-content">
                    <div class="modal-header peach-gradient">
                        <h5 class="modal-title white-text text-center"><p><i class="fa fa-shopping-cart"></i> Suscripciones</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="white-text" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Actualmente tienes la versión PRO de Drohnen.</p>
                        <p><i class="fa fa-check-circle text-success"></i> Gracias por el apoyo.</p>
                    </div>
                </div> 
            </div>
        </div>
        <!-- MODAL PAGOS -->

        <!-- MODAL IMG PERFIL -->
        <div class="modal fade right" id="modalPerfil" tabindex="-1" role="dialog" aria-labelledby="modalPerfil" aria-hidden="true">
            <div class="modal-dialog modal-side modal-top-right" role="document">
                <div class="modal-content">
                    <div class="modal-header aqua-gradient">
                        <h5 class="modal-title white-text text-center"><i class="fa fa-user"></i> Imagen de Perfil</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body fluid-container">
                        <div class="row">
                            <div class="col-md-12">
                                <p>Cambia tu imagen de perfil aquí.</p>
                                <div class="form-group files">
                                    <input type="file" class="form-control" multiple="">
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-end">
                            <div class="col-md-5">
                                <button class="btn btn-outline-default btn-block waves-effect z-depth-0" type="submit">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <!-- MODAL IMG PERFIL -->

        <!-- MODAL PASSWORD -->
        <div class="modal fade right" id="modalPassword" tabindex="-1" role="dialog" aria-labelledby="modalPassword" aria-hidden="true">
            <div class="modal-dialog modal-side modal-top-right" role="document">
                <div class="modal-content">
                    <div class="modal-header blue-gradient">
                        <h5 class="modal-title white-text text-center"><i class="fa fa-key"></i> Contraseña</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="white-text" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="fluid-container">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="password" class="form-control" placeholder="Contraseña Anterior">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="password" class="form-control mt-3" placeholder="Contraseña Nueva">
                                    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4 text-center">
                                        Recuerda que la contraseña debe ser mayor a 8 caracteres.
                                    </small>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-end">
                                <div class="col-md-5">
                                    <button class="btn btn-outline-info btn-block waves-effect z-depth-0" type="submit">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <!-- MODAL PASSWORD -->

        <!-- MODAL EMAIL -->
        <div class="modal fade right" id="modalEmail" tabindex="-1" role="dialog" aria-labelledby="modalEmail" aria-hidden="true">
            <div class="modal-dialog modal-side modal-top-right" role="document">
                <div class="modal-content">
                    <div class="modal-header purple-gradient">
                        <h5 class="modal-title white-text text-center"><i class="fa fa-envelope"></i> Correo Electrónico</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="white-text" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="fluid-container">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="email" id="emailAnterior" class="form-control" placeholder="Correo Electronico Anterior">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="email" id="emailNuevo" class="form-control mt-3" placeholder="Correo Electronico Nuevo">
                                </div>
                            </div>
                            <div class="row d-flex justify-content-end mt-3">
                                <div class="col-md-5">
                                    <button class="btn btn-outline-secondary btn-block waves-effect z-depth-0" type="submit">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <!-- MODAL EMAIL -->

        <!-- Scripts -->
        <script src="../js/jquery-3.3.1.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/mdb.min.js"></script>
        <script src="../js/action-buttons.js"></script>
    </body>
</html>
