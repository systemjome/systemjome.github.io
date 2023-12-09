<?PHP

session_start();

if(!isset($_SESSION['email_usuario'])){

    header("location: ../.././index.php");
    session_destroy();
    die();
    
} else if($_SESSION['rol_usuario']=="ROOT") { ?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>JOME</title>
    <meta http-equiv="og:image" content="../../../../assets/img/fotos/altaeducacion.png">
    <meta property="og:description" content="Aplicación Web de Gestión de Clases Particulares">
    <meta name="description" content="Aplicación Web encargada de llevar a cabo la Gestión de una Agencia cualquiera de Clases Particulares">
    <meta property="og:image" content="../../../../assets/img/fotos/altaeducacion.png">
    <link rel="icon" type="image/png" sizes="750x719" href="../../assets/img/fotos/altaeducacion.png">
    <link rel="icon" type="image/png" sizes="750x719" href="../../assets/img/fotos/altaeducacion.png">
    <link rel="icon" type="image/png" sizes="750x719" href="../../assets/img/fotos/altaeducacion.png">
    <link rel="icon" type="image/png" sizes="750x719" href="../../assets/img/fotos/altaeducacion.png">
    <link rel="icon" type="image/png" sizes="750x719" href="../../assets/img/fotos/altaeducacion.png">
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arbutus+Slab">
    <link rel="stylesheet" href="../../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../assets/css/Animated-Text-Background.css">
    <link rel="stylesheet" href="../../assets/css/Articles-Cards-images.css">
    <link rel="stylesheet" href="../../assets/css/best-carousel-slide.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="../../assets/css/Pricing-Free-Paid-badges.css">
    <link rel="stylesheet" href="../../assets/css/Pricing-Free-Paid-icons.css">
    <link rel="stylesheet" href="../../assets/css/responsive-blog-card-slider.css">
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="../admin/inicio.html">
                            <div class="sidebar-brand-icon rotate-n-15"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" style="font-size: 37px;">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M0 219.2v212.5c0 14.25 11.62 26.25 26.5 27C75.32 461.2 180.2 471.3 240 511.9V245.2C181.4 205.5 79.99 194.8 29.84 192C13.59 191.1 0 203.6 0 219.2zM482.2 192c-50.09 2.848-151.3 13.47-209.1 53.09C272.1 245.2 272 245.3 272 245.5v266.5c60.04-40.39 164.7-50.76 213.5-53.28C500.4 457.9 512 445.9 512 431.7V219.2C512 203.6 498.4 191.1 482.2 192zM352 96c0-53-43-96-96-96S160 43 160 96s43 96 96 96S352 149 352 96z"></path>
                                </svg></div>
                            <div class="sidebar-brand-text mx-3"><span>&nbsp;JOME</span></div>
                        </a><a class="nav-link" href="inicioRoot.html"><i class="fas fa-tachometer-alt"></i><span>&nbsp;Registro</span></a></li>
                    <li class="nav-item">
                        <div><a class="btn btn-link nav-link" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapse-3" href="#collapse-3" role="button"><i class="fas fa-folder"></i>&nbsp;<span>Agencias</span></a>
                            <div class="collapse" id="collapse-3">
                                <div class="bg-white border rounded py-2 collapse-inner"><a class="collapse-item" href="agencias.html">Listado</a><a class="collapse-item" href="pagos.html">Pagos</a><a class="collapse-item" href="mensajes.html">Notificaciones</a></div>
                            </div>
                        </div>
                        <div id="collapsePages" class="collapse" aria-labelledby="headingTwo" aria-controls="collapsePages" data-bs-parent="#accordionSidebar">
                            <div class="bg-white border rounded py-2 collapse-inner">
                                <h6 class="collapse-header">LOGIN SCREENS:</h6><a class="collapse-item" href="#">Login</a><a class="collapse-item" href="#">Register</a><a class="collapse-item" href="#">Forgot Password</a>
                                <h6 class="collapse-header">OTHER PAGES:</h6><a class="collapse-item" href="#">404 Page</a><a class="collapse-item" href="#">Blank Page</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="reportesRoot.html"><i class="fas fa-chart-area"></i><span>&nbsp;Reportes</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop-1" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Juan Ondó Esono Eyanga</span><img class="border rounded-circle img-profile" src="../../assets/img/dogs/image3.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="../../index.html"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Cerrar Sesión!</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">REGISTRO</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generar PDF</a>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><a href="../../bloques/admin/modulos/profesores/profesores.html" > TOTAL DE AGENCIAS PLAN (FREE)</a></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span style="color: var(--bs-blue);">40,000</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-door-closed fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><a href="../../bloques/admin/modulos/estudiantes/estudiantes.html" >TOTAL DE AGENCIAS PLAN (PRO)</a></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span style="color: var(--bs-teal);">215,000</span></div>
                                        </div>
                                        <div class="col-auto"><i class="far fa-credit-card fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-info py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-info fw-bold text-xs mb-1"><a href="../../bloques/admin/modulos/cursos/cursos.html">TOTAL DE AGENCIAS PLAN (PRO_EMP)</a></div>
                                            <div class="row g-0 align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-dark fw-bold h5 mb-0 me-3"><span style="color: var(--bs-pink);">12</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-door-open fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-warning fw-bold text-xs mb-1"><a> TOTAL DE VISITAS</a></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span style="color: var(--bs-gray-800);">120</span></div>
                                        </div>
                                        <div class="col-auto"><i class="far fa-eye fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="text-primary fw-bold m-0"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-stack-overflow" style="font-size: 23px;">
                                            <path d="M12.412 14.572V10.29h1.428V16H1v-5.71h1.428v4.282h9.984z"></path>
                                            <path d="M3.857 13.145h7.137v-1.428H3.857v1.428zM10.254 0 9.108.852l4.26 5.727 1.146-.852L10.254 0zm-3.54 3.377 5.484 4.567.913-1.097L7.627 2.28l-.914 1.097zM4.922 6.55l6.47 3.013.603-1.294-6.47-3.013-.603 1.294zm-.925 3.344 6.985 1.469.294-1.398-6.985-1.468-.294 1.397z"></path>
                                        </svg>&nbsp;ACCESOS AL SISTEMA (AGENCIAS)</h6>
                                    <div class="alert alert-warning" role="alert" style="margin-top: 8px;"><span><strong>Fecha:&nbsp;</strong></span><span><strong>&nbsp;&nbsp;</strong><input type="date" name="fechaactual" style="color: var(--bs-danger);border-style: inherit;"><strong>&nbsp;&nbsp;</strong></span><a class="btn btn-light btn-icon-split" role="button"><span class="text-black-50 icon"><i class="fas fa-arrow-right"></i></span><span class="text-dark text">Filtrar</span></a></div>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Agencias</th>
                                                                <th>Visitas</th>
                                                                <th>Fecha</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Educando</td>
                                                                <td>23</td>
                                                                <td>11/09/2022</td>
                                                            </tr>
                                                            <tr></tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="text-primary fw-bold m-0"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-stack-overflow" style="font-size: 23px;">
                                            <path d="M12.412 14.572V10.29h1.428V16H1v-5.71h1.428v4.282h9.984z"></path>
                                            <path d="M3.857 13.145h7.137v-1.428H3.857v1.428zM10.254 0 9.108.852l4.26 5.727 1.146-.852L10.254 0zm-3.54 3.377 5.484 4.567.913-1.097L7.627 2.28l-.914 1.097zM4.922 6.55l6.47 3.013.603-1.294-6.47-3.013-.603 1.294zm-.925 3.344 6.985 1.469.294-1.398-6.985-1.468-.294 1.397z"></path>
                                        </svg>&nbsp;ACCESOS AL SISTEMA (GENERAL)</h6>
                                    <div class="alert alert-warning" role="alert" style="margin-top: 8px;"><span><strong>Fecha:&nbsp;</strong></span><span><strong>&nbsp;&nbsp;</strong><input type="date" name="fechaactual" style="color: var(--bs-danger);border-style: inherit;"><strong>&nbsp;&nbsp;</strong></span><a class="btn btn-light btn-icon-split" role="button"><span class="text-black-50 icon"><i class="fas fa-arrow-right"></i></span><span class="text-dark text">Filtrar</span></a></div>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Paginas</th>
                                                                <th>Visitas</th>
                                                                <th>Fecha</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>inicio</td>
                                                                <td>12</td>
                                                                <td>11/09/2022</td>
                                                            </tr>
                                                            <tr></tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col-lg-12 mb-4">
                                    <div class="card text-white bg-primary shadow">
                                        <div class="card-body"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © JOME 2023</span></div>
                </div>
            </footer>
        </div>
    </div>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="../../assets/js/Animated-Text-Background.js"></script>
    <script src="../../assets/js/responsive-blog-card-slider-1.js"></script>
    <script src="../../assets/js/responsive-blog-card-slider.js"></script>
    <script src="../../assets/js/theme.js"></script>
</body>

</html>
<?php } else {

header("Location: ../.././index.php");

} ?>