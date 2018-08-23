<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Agregar nueva modelo</h1>
    </section>

    <section class="content">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Datos personales</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" type="button" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Nombre real</label>
                            <input class="form-control" maxlength="20" type="text" id="nombre_real" autofocus>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Numero de DNI</label>
                            <input class="form-control" maxlength="50" type="text" id="documento">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Apellido real</label>
                            <input class="form-control" maxlength="100" type="text" id="apellido">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Fecha de nacimiento</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input class="datepicker form-control pull-right" type="text" id="fecha_nacimiento">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Nombre Sitio Web</label>
                            <input class="form-control" maxlength="60" type="text" id="sitioweb">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Membresia</label>
                            <select class="form-control select2" id="membresia">
                                <option value="Platy">Platy</option>
                                <option value="Silver">Silver</option>
                                <option value="Gold">Gold</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label"><i class="fa fa-warning fa-spin"></i> Sección !! VER CAMPO !! <i class="fa fa-warning fa-spin"></i></label>
                            <input class="form-control" type="text" value="VER ESTE CAMPO !!">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Ranking</label>
                            <select class="form-control select2" id="ranking">
                                <?php for ($i = 1; $i < 11; $i++) { ?>
                                    <option value="<?= $i ?>"><?= $i ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Datos de publicación</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" type="button" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>

            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Altura</label>
                            <input class="form-control" maxlength="4" type="text" id="altura">
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label class="control-label"><i class="fa fa-warning fa-spin"></i> Medidas (revisar) <i class="fa fa-warning fa-spin"></i></label>
                            <input class="form-control" placeholder="" type="text">
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Altura pareja</label>
                            <input class="form-control" maxlength="15" type="text" id="alturapareja">
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label class="control-label">Medidas pareja</label>
                            <input class="form-control" maxlength="25" type="text" id="medidaspareja">
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Peso</label>
                            <input class="form-control" maxlength="5" type="text" id="peso">
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label class="control-label">Color de pelo</label>
                            <select class="form-control select2" id="colordepelo">
                                <?php foreach($pelos as $pelo) { ?>
                                <option value="<?=$pelo['id']?>"><?=$pelo['value_es']?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Color de ojos</label>
                            <select class="form-control select2" id="colordeojos">
                                <?php foreach($ojos as $ojo) { ?>
                                <option value="<?=$ojo['id']?>"><?=$ojo['value_es']?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label class="control-label">Color de piel</label>
                            <select class="form-control select2" id="colordepiel">
                                <?php foreach($pieles as $piel) { ?>
                                <option value="<?=$piel['id']?>"><?=$piel['value_es']?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Idioma 1</label>
                            <select class="form-control select2" id="idioma1">
                                <?php foreach($idiomas as $idioma) { ?>
                                <option value="<?=$idioma['id']?>"><?=$idioma['value_es']?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label class="control-label">Idioma 2</label>
                            <select class="form-control select2" id="idioma2">
                                <?php foreach($idiomas as $idioma) { ?>
                                <option value="<?=$idioma['id']?>"><?=$idioma['value_es']?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Idioma 3</label>
                            <select class="form-control select2" id="idioma3">
                                <?php foreach($idiomas as $idioma) { ?>
                                <option value="<?=$idioma['id']?>"><?=$idioma['value_es']?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label class="control-label">Idioma 4</label>
                            <select class="form-control select2" id="idioma4">
                                <?php foreach($idiomas as $idioma) { ?>
                                <option value="<?=$idioma['id']?>"><?=$idioma['value_es']?></option>
                                <?php } ?>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title"><i class="fa fa-warning fa-spin"></i> Descripción <i class="fa fa-warning fa-spin"></i></h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                <form>
                                    <textarea id="descripcion" name="editor1" rows="10" cols="80"></textarea>
                                </form>
                            </div>
                        </div>
                        <!-- /.box --></div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
    </section>
</div>