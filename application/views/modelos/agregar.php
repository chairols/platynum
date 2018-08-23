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
                                <?php foreach ($pelos as $pelo) { ?>
                                    <option value="<?= $pelo['id'] ?>"><?= $pelo['value_es'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Color de ojos</label>
                            <select class="form-control select2" id="colordeojos">
                                <?php foreach ($ojos as $ojo) { ?>
                                    <option value="<?= $ojo['id'] ?>"><?= $ojo['value_es'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label class="control-label">Color de piel</label>
                            <select class="form-control select2" id="colordepiel">
                                <?php foreach ($pieles as $piel) { ?>
                                    <option value="<?= $piel['id'] ?>"><?= $piel['value_es'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Idioma 1</label>
                            <select class="form-control select2" id="idioma1">
                                <?php foreach ($idiomas as $idioma) { ?>
                                    <option value="<?= $idioma['id'] ?>"><?= $idioma['value_es'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label class="control-label">Idioma 2</label>
                            <select class="form-control select2" id="idioma2">
                                <?php foreach ($idiomas as $idioma) { ?>
                                    <option value="<?= $idioma['id'] ?>"><?= $idioma['value_es'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Idioma 3</label>
                            <select class="form-control select2" id="idioma3">
                                <?php foreach ($idiomas as $idioma) { ?>
                                    <option value="<?= $idioma['id'] ?>"><?= $idioma['value_es'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label class="control-label">Idioma 4</label>
                            <select class="form-control select2" id="idioma4">
                                <?php foreach ($idiomas as $idioma) { ?>
                                    <option value="<?= $idioma['id'] ?>"><?= $idioma['value_es'] ?></option>
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

    <section class="content">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Datos de contacto</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" type="button" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <h4>Teléfono 1</h4>
                            <br>
                            <label class="control-label">Tipo</label>
                            <select class="form-control select2" id="prefijo1">
                                <option value="lin">Línea</option>
                                <option value="mov">Móvil</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Código de área</label>
                            <input class="form-control" type="text" id="codigoarea1">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Número</label>
                            <input class="form-control" type="text" id="telefono1">
                        </div>
                        <div class="form-group">
                            <label class="control-label">
                                <input type="checkbox" class="minimal-red" id="mensaje1">
                            </label>
                            <label class="control-label">
                                Mensaje
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="control-label">
                                <input type="checkbox" class="minimal-red" id="whatsapp1">
                            </label>
                            <label class="control-label">
                                Whatsapp
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="control-label">
                                <input type="checkbox" class="minimal-red" id="llamadaprivada1">
                            </label>
                            <label class="control-label">
                                Llamada privada
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="control-label">
                                <input type="checkbox" class="minimal-red" id="otro1">
                            </label>
                            <label class="control-label">
                                Otro
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <h4>Teléfono 2</h4>
                            <br>
                            <label class="control-label">Tipo</label>
                            <select class="form-control select2" id="prefijo2">
                                <option value="lin">Línea</option>
                                <option value="mov">Móvil</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Código de área</label>
                            <input class="form-control" type="text" id="codigoarea2">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Número</label>
                            <input class="form-control" type="text" id="telefono2">
                        </div>
                        <div class="form-group">
                            <label class="control-label">
                                <input type="checkbox" class="minimal-red" id="mensaje2">
                            </label>
                            <label class="control-label">
                                Mensaje
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="control-label">
                                <input type="checkbox" class="minimal-red" id="whatsapp2">
                            </label>
                            <label class="control-label">
                                Whatsapp
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="control-label">
                                <input type="checkbox" class="minimal-red" id="llamadaprivada2">
                            </label>
                            <label class="control-label">
                                Llamada privada
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="control-label">
                                <input type="checkbox" class="minimal-red" id="otro2">
                            </label>
                            <label class="control-label">
                                Otro
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <h4>Teléfono 3</h4>
                            <br>
                            <label class="control-label">Tipo</label>
                            <select class="form-control select2" id="prefijo3">
                                <option value="lin">Línea</option>
                                <option value="mov">Móvil</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Código de área</label>
                            <input class="form-control" type="text" id="codigoarea3">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Número</label>
                            <input class="form-control" type="text" id="telefono3">
                        </div>
                        <div class="form-group">
                            <label class="control-label">
                                <input type="checkbox" class="minimal-red" id="mensaje3">
                            </label>
                            <label class="control-label">
                                Mensaje
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="control-label">
                                <input type="checkbox" class="minimal-red" id="whatsapp3">
                            </label>
                            <label class="control-label">
                                Whatsapp
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="control-label">
                                <input type="checkbox" class="minimal-red" id="llamadaprivada3">
                            </label>
                            <label class="control-label">
                                Llamada privada
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="control-label">
                                <input type="checkbox" class="minimal-red" id="otro3">
                            </label>
                            <label class="control-label">
                                Otro
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input class="form-control" type="text" maxlength="50" id="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Website</label>
                            <input class="form-control" type="text" maxlength="60" id="sitioweb">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Email privado</label>
                            <input class="form-control" type="text" maxlength="50" placeholder="Este no se publica" id="email_privado">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Dominio TUYA.TV</label>
                            <input class="form-control" type="text" placeholder="Escribir la URL" id="tuya_tv">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="content">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Datos de ubicación y disponibilidad</h3>
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
                            <label class="control-label">Pais</label>
                            <select class="form-control select2" id="pais">
                                <?php foreach($paises as $pais) { ?>
                                <option value="<?=$pais['id']?>"><?=$pais['value']?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Provincia</label>
                            <select class="form-control select2" id="provincia">
                                <?php foreach($provincias as $provincia) { ?>
                                <option value="<?=$provincia['id']?>"><?=$provincia['value']?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Ciudad</label>
                            <select class="form-control select2" id="ciudad">
                                <?php foreach($ciudades as $ciudad) { ?>
                                <option value="<?=$ciudad['id']?>"><?=$ciudad['value']?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Barrio</label>
                            <select class="form-control select2" id="barrio">
                                <?php foreach($barrios as $barrio) { ?>
                                <option value="<?=$barrio['id']?>"><?=$barrio['value']?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Proximidad</label>
                            <input type="text" class="form-control" maxlength="100" id="proximidad">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Full Time</label>
                            <select class="form-control select2" id="fulltime">
                                <option value="on">Si</option>
                                <option value="off">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Ciudad exterior</label>
                            <input class="form-control" placeholder="Especificar" maxlength="100" type="text" id="ciudad_exterior">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Disponibilidad</label>
                            <input class="form-control" placeholder="Especificar" maxlength="100" type="text" id="disponible">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>