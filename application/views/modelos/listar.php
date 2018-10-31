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
                        <select id="select" class="form-control select2">
                            <option value="habilitado"<?=($estado=='habilitado')?" selected":""?>>Habilitados</option>
                            <option value="deshabilitado"<?=($estado=='deshabilitado')?" selected":""?>>Deshabilitados</option>
                            <option value="redireccionado"<?=($estado=='redireccionado')?" selected":""?>>Redireccionados</option>
                            <option value="borrado"<?=($estado=='borrado')?" selected":""?>>Borrados</option>
                        </select>
                        <br><br>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                    <th>Sección</th>
                                    <th>Teléfono</th>
                                    <th>Documento</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($modelos as $modelo) { ?>
                                    <tr>
                                        <td>
                                            <img src="/Fotodisk/<?=$modelo['perfil']?>/<?=$modelo['carpeta']?>/<?=$modelo['carpeta']?>01.jpg" width="40%" height="40%">
                                        </td>
                                        <td><?= $modelo['nombre_formateado'] ?></td>
                                        <td><?=$modelo['perfil']?></td>
                                        <td><?= $modelo['telefono1'] ?></td>
                                        <td><?=$modelo['documento']?></td>
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
                                        <td>
                                            <a class="tooltips" data-pacement="top" data-toggle="tooltip" data-original-title="Editar" href="/modelos/modificar/<?=$modelo['ID']?>/">
                                                <button class="btn btn-sm bg-yellow btn-flat">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </a>
                                            <a class="tooltips" data-pacement="top" data-toggle="tooltip" data-original-title="Editar Fotos y Videos" href="/modelos/agregar_fotos/<?=$modelo['ID']?>/">
                                                <button class="btn btn-sm btn-dropbox btn-flat">
                                                    <i class="fa fa-video-camera"></i>
                                                </button>
                                            </a>
                                            <?php switch ($estado) {
                                            case 'deshabilitado': ?>
                                            <a class="tooltips" data-pacement="top" data-toggle="tooltip" data-original-title="Habilitar" href="/modelos/modificar_estado_modelo/<?=$modelo['ID']?>/habilitado/">
                                                <button class="btn btn-sm btn-info btn-flat">
                                                    <i class="fa fa-undo"></i>
                                                </button>
                                            </a>
                                            <?php
                                            break;
                                            case 'habilitado': ?>
                                            <a class="tooltips" data-pacement="top" data-toggle="tooltip" data-original-title="Deshabilitar" href="/modelos/modificar_estado_modelo/<?=$modelo['ID']?>/deshabilitado/">
                                                <button class="btn btn-sm btn-info btn-flat">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </a>
                                            <?php
                                            break;
                                            }
                                            ?>
                                            <a class="tooltips" data-pacement="top" data-toggle="tooltip" data-original-title="Borrar" href="/modelos/modificar_estado_modelo/<?=$modelo['ID']?>/borrado/">
                                                <button class="btn btn-sm btn-danger btn-flat">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                            </a>
                                            <a class="tooltips" data-pacement="top" data-toggle="tooltip" data-original-title="Duplicar" href="/modelos/duplicar/<?=$modelo['ID']?>">
                                                <button class="btn btn-sm btn-success btn-flat">
                                                    <i class="fa fa-copy"></i>
                                                </button>
                                            </a>
                                        </td>
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
