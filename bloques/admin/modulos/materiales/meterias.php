<?php include("../../../../cabecera_pie_admin/cabecera.php");?>
<body id="page-top">
    <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Listado de las Materias</h3>
                    <div class="card shadow">
                        <div class="card-header py-3"><a class="btn btn-primary btn-icon-split" role="button" href="registrarMateria.html"><span class="text-white-50 icon"><i class="fas fa-save"></i></span><span class="text-white text">Registrar</span></a></div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th style="margin-right: 0px;padding-right: 0px;">Código</th>
                                            <th>Curso</th>
                                            <th>Materia</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ASr34</td>
                                            <td>Primero ESBA</td>
                                            <td>Matemáticas</td>
                                            <td><a class="btn btn-success btn-circle ms-1" role="button" data-bs-toggle="tooltip" data-bss-tooltip="" href="perfilMateria.html" title="Perfil"><i class="fas fa-check text-white"></i></a><a class="btn btn-warning btn-circle ms-1" role="button" data-bs-toggle="tooltip" data-bss-tooltip="" href="editarMateria.html" title="Modificar"><i class="fas fa-exclamation-triangle text-white"></i></a><a class="btn btn-danger btn-circle ms-1" role="button" data-bs-toggle="tooltip" data-bss-tooltip="" title="Eliminar"><i class="fas fa-trash text-white"></i></a></td>
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