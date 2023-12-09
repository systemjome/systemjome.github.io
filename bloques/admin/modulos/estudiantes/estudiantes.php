<?php include("../../../../cabecera_pie_admin/cabecera.php");?>
<body id="page-top">
    <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Listado de los Estudiantes</h3>
                    <div class="card shadow">
                        <div class="card-header py-3"><a class="btn btn-primary btn-icon-split" role="button" href="registrarEstudiante.html"><span class="text-white-50 icon"><i class="fas fa-save"></i></span><span class="text-white text">Registrar</span></a></div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th style="margin-right: 0px;padding-right: 0px;">Foto</th>
                                            <th>Nombre</th>
                                            <th>Dirección</th>
                                            <th>Teléfono</th>
                                            <th style="margin-right: 0px;padding-right: 0px;">Email</th>
                                            <th>Código</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img class="rounded-circle me-2" width="30" height="30" src="avatars/avatar1.jpeg"></td>
                                            <td>Carla Paco</td>
                                            <td>Alcaide</td>
                                            <td>222356090</td>
                                            <td>p@gmail.com</td>
                                            <td>AM5</td>
                                            <td><a class="btn btn-success btn-circle ms-1" role="button" data-bs-toggle="tooltip" data-bss-tooltip="" href="perfilEstudiante.html" title="Perfil"><i class="fas fa-check text-white"></i></a><a class="btn btn-warning btn-circle ms-1" role="button" data-bs-toggle="tooltip" data-bss-tooltip="" href="editarEstudiante.html" title="Modificar"><i class="fas fa-exclamation-triangle text-white"></i></a><a class="btn btn-danger btn-circle ms-1" role="button" data-bs-toggle="tooltip" data-bss-tooltip="" title="Eliminar"><i class="fas fa-trash text-white"></i></a></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr></tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("../../../../cabecera_pie_admin/pie.php");?>