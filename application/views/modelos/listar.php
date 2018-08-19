<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Modelos</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12"><!-- /.box -->

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Todas las modelos</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="display: none;">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                    <th>Sección</th>
                                    <th>Teléfono</th>
                                    <th>Estado</th>
                                    <th>Editar</th>
                                    <th>Deshabilitar</th>
                                    <th>Borrar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($modelos as $modelo) { ?>
                                    <tr>
                                        <td>x</td>
                                        <td><?= $modelo['nombre'] ?></td>
                                        <td>x</td>
                                        <td><?= $modelo['telefono1'] ?></td>
                                        <td>
                                            <?php
                                            switch ($modelo['estado']) {
                                                case 'habilitado':
                                                    echo "<span class='badge bg-green'>".$modelo['estado']."</span>";
                                                    break;
                                                case 'deshabilitado':
                                                    echo "<span class='badge bg-yellow'>".$modelo['estado']."</span>";
                                                    break;
                                                case 'redireccionado':
                                                    echo "<span class='badge bg-light-blue'>".$modelo['estado']."</span>";
                                                    break;
                                                case 'borrado':
                                                    echo "<span class='badge bg-red'>".$modelo['estado']."</span>";
                                                    break;
                                            }
                                            ?>
                                        </td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
<?php } ?>
                            </tbody>
                            <tfoot>
                            </tfoot>
                        </table>
                    </div>
                    <div class="overlay">
                        <i class="fa fa-refresh fa-spin"></i>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->