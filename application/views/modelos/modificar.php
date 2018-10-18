<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Modificar modelo</h1>
    </section>

    <input type="hidden" id="idmodelo" value="<?= $modelo['ID'] ?>">
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
                            <input class="form-control" maxlength="20" type="text" id="nombre_real" value="<?= $modelo['nombre_real'] ?>" autofocus>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Numero de DNI</label>
                            <input class="form-control" maxlength="50" type="text" id="documento" value="<?= $modelo['documento'] ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Apellido real</label>
                            <input class="form-control" maxlength="100" type="text" id="apellido" value="<?= $modelo['apellido'] ?>">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Fecha de nacimiento</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input class="datepicker form-control pull-right" type="text" id="fecha_nacimiento" value="<?= $modelo['fecha_nacimiento_formateada'] ?>">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Nombre de Publicación</h3>
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
                            <label class="control-label">Nombre Sitio Web</label>
                            <input class="form-control" maxlength="60" type="text" id="nombre" value="<?= $modelo['nombre_formateado'] ?>">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Membresia</label>
                            <select class="form-control select2" id="membresia">
                                <option value="Platy"<?= ($modelo['membresia'] == 'Platy') ? " selected" : "" ?>>Platy</option>
                                <option value="Silver"<?= ($modelo['membresia'] == 'Silver') ? " selected" : "" ?>>Silver</option>
                                <option value="Gold"<?= ($modelo['membresia'] == 'Gold') ? " selected" : "" ?>>Gold</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Sección</label>
                            <select id="perfil" class="form-control select2">
                                <option value="A-MujeresModelos"<?= ($modelo['perfil'] == 'A-MujeresModelos') ? " selected" : "" ?>>Modelos</option>
                                <option value="B-Mujeres-Masajistas"<?= ($modelo['perfil'] == 'B-Mujeres-Masajistas') ? " selected" : "" ?>>Masajistas</option>
                                <option value="C-Mujeres-AlgoDistinto"<?= ($modelo['perfil'] == 'C-Mujeres-AlgoDistinto') ? " selected" : "" ?>>Algo Distinto</option>
                                <option value="D-Mujeres-Fantasias"<?= ($modelo['perfil'] == 'D-Mujeres-Fantasias') ? " selected" : "" ?>>Fantasías</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Ranking</label>
                            <select class="form-control select2" id="ranking">
                                <?php for ($i = 1; $i < 11; $i++) { ?>
                                    <option value="<?= $i ?>"<?= ($modelo['ranking'] == $i) ? " selected" : "" ?>><?= $i ?></option>
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
                            <input class="form-control" maxlength="4" type="text" id="altura" value="<?= $modelo['altura'] ?>">
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label class="control-label">Medidas</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <input id="medidas1" class="form-control" placeholder="" type="text" value="<?= $modelo['medidas1'] ?>">
                                </div>
                                <div class="col-md-4">
                                    <input id="medidas2" class="form-control" placeholder="" type="text" value="<?= $modelo['medidas2'] ?>">
                                </div>
                                <div class="col-md-4">
                                    <input id="medidas3" class="form-control" placeholder="" type="text" value="<?= $modelo['medidas3'] ?>">
                                </div>
                            </div>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Altura pareja</label>
                            <input class="form-control" maxlength="15" type="text" id="alturapareja" value="<?= $modelo['alturapareja'] ?>">
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label class="control-label">Medidas pareja</label>
                            <input class="form-control" maxlength="25" type="text" id="medidaspareja" value="<?= $modelo['medidaspareja'] ?>">
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Peso</label>
                            <input class="form-control" maxlength="5" type="text" id="peso" value="<?= $modelo['peso'] ?>">
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label class="control-label">Color de pelo</label>
                            <select class="form-control select2" id="colordepelo">
                                <?php foreach ($pelos as $pelo) { ?>
                                    <option value="<?= $pelo['id'] ?>"<?= ($modelo['colordepelo'] == $pelo['id']) ? " selected" : "" ?>><?= $pelo['value_es'] ?></option>
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
                                    <option value="<?= $ojo['id'] ?>"<?= ($modelo['colordeojos'] == $ojo['id']) ? " selected" : "" ?>><?= $ojo['value_es'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label class="control-label">Color de piel</label>
                            <select class="form-control select2" id="colordepiel">
                                <?php foreach ($pieles as $piel) { ?>
                                    <option value="<?= $piel['id'] ?>"<?= ($modelo['colordepiel'] == $piel['id']) ? " selected" : "" ?>><?= $piel['value_es'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <?php $i = explode(",", $modelo['idiomas']); ?>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Idioma 1</label>
                            <select class="form-control select2" id="idioma1">
                                <option value="">-- Seleccionar --</option>
                                <?php foreach ($idiomas as $idioma) { ?>
                                    <option value="<?= $idioma['value_es'] ?>"<?= ($i[0] == $idioma['value_es']) ? " selected" : "" ?>><?= $idioma['value_es'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label class="control-label">Idioma 2</label>
                            <select class="form-control select2" id="idioma2">
                                <option value="">-- Seleccionar --</option>
                                <?php foreach ($idiomas as $idioma) { ?>
                                    <option value="<?= $idioma['value_es'] ?>"<?= ($i[1] == $idioma['value_es']) ? " selected" : "" ?>><?= $idioma['value_es'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Idioma 3</label>
                            <select class="form-control select2" id="idioma3">
                                <option value="">-- Seleccionar --</option>
                                <?php foreach ($idiomas as $idioma) { ?>
                                    <option value="<?= $idioma['value_es'] ?>"<?= ($i[2] == $idioma['value_es']) ? " selected" : "" ?>><?= $idioma['value_es'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label class="control-label">Idioma 4</label>
                            <select class="form-control select2" id="idioma4">
                                <option value="">-- Seleccionar --</option>
                                <?php foreach ($idiomas as $idioma) { ?>
                                    <option value="<?= $idioma['value_es'] ?>"<?= ($i[3] == $idioma['value_es']) ? " selected" : "" ?>><?= $idioma['value_es'] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Descripción</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                <form>
                                    <textarea id="descripcion" name="editor1" rows="10" cols="80"><?= $modelo['descripcion_platy'] ?></textarea>
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
                                <option value="lin"<?= ($modelo['prefijo1']) == 'lin' ? " selected" : "" ?>>Línea</option>
                                <option value="mov"<?= ($modelo['prefijo1']) == 'mov' ? " selected" : "" ?>>Móvil</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Número</label>
                            <input class="form-control" type="text" id="telefono1" value="<?= $modelo['telefono1'] ?>">
                        </div>
                        <div class="form-group">
                            <label class="control-label">
                                <input type="checkbox" class="minimal-red" id="mensaje1" <?= ($modelo['mensaje1']) == 'S' ? " checked" : "" ?>>
                            </label>
                            <label class="control-label">
                                Mensaje
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="control-label">
                                <input type="checkbox" class="minimal-red" id="whatsapp1"<?= ($modelo['whatsapp1']) == 'S' ? " checked" : "" ?>>
                            </label>
                            <label class="control-label">
                                Whatsapp
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="control-label">
                                <input type="checkbox" class="minimal-red" id="llamadaprivada1"<?= ($modelo['llamadaprivada1']) == 'S' ? " checked" : "" ?>>
                            </label>
                            <label class="control-label">
                                Llamada privada
                            </label>
                        </div>                        
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <h4>Teléfono 2</h4>
                            <br>
                            <label class="control-label">Tipo</label>
                            <select class="form-control select2" id="prefijo2">
                                <option value="lin"<?= ($modelo['prefijo2']) == 'lin' ? " selected" : "" ?>>Línea</option>
                                <option value="mov"<?= ($modelo['prefijo2']) == 'mov' ? " selected" : "" ?>>Móvil</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Número</label>
                            <input class="form-control" type="text" id="telefono2" value="<?= $modelo['telefono2'] ?>">
                        </div>
                        <div class="form-group">
                            <label class="control-label">
                                <input type="checkbox" class="minimal-red" id="mensaje2"<?= ($modelo['mensaje2']) == 'S' ? " checked" : "" ?>>
                            </label>
                            <label class="control-label">
                                Mensaje
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="control-label">
                                <input type="checkbox" class="minimal-red" id="whatsapp2"<?= ($modelo['whatsapp2']) == 'S' ? " checked" : "" ?>>
                            </label>
                            <label class="control-label">
                                Whatsapp
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="control-label">
                                <input type="checkbox" class="minimal-red" id="llamadaprivada2"<?= ($modelo['llamadaprivada2']) == 'S' ? " checked" : "" ?>>
                            </label>
                            <label class="control-label">
                                Llamada privada
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <h4>Teléfono 3</h4>
                            <br>
                            <label class="control-label">Tipo</label>
                            <select class="form-control select2" id="prefijo3">
                                <option value="lin"<?= ($modelo['prefijo3']) == 'lin' ? " selected" : "" ?>>Línea</option>
                                <option value="mov"<?= ($modelo['prefijo3']) == 'mov' ? " selected" : "" ?>>Móvil</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Número</label>
                            <input class="form-control" type="text" id="telefono3" value="<?= $modelo['telefono3'] ?>">
                        </div>
                        <div class="form-group">
                            <label class="control-label">
                                <input type="checkbox" class="minimal-red" id="mensaje3"<?= ($modelo['mensaje3']) == 'S' ? " checked" : "" ?>>
                            </label>
                            <label class="control-label">
                                Mensaje
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="control-label">
                                <input type="checkbox" class="minimal-red" id="whatsapp3"<?= ($modelo['whatsapp3']) == 'S' ? " checked" : "" ?>>
                            </label>
                            <label class="control-label">
                                Whatsapp
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="control-label">
                                <input type="checkbox" class="minimal-red" id="llamadaprivada3"<?= ($modelo['llamadaprivada3']) == 'S' ? " checked" : "" ?>>
                            </label>
                            <label class="control-label">
                                Llamada privada
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input class="form-control" type="text" maxlength="50" id="email" value="<?= $modelo['email'] ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Website</label>
                            <input class="form-control" type="text" maxlength="60" id="sitioweb" value="<?= $modelo['sitioweb'] ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Email privado</label>
                            <input class="form-control" type="text" maxlength="50" placeholder="Este no se publica" id="email_privado" value="<?= $modelo['email_privado'] ?>">
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
                                <?php foreach ($paises as $pais) { ?>
                                    <option value="<?= $pais['id'] ?>"<?= ($modelo['pais'] == $pais['id']) ? " selected" : "" ?>><?= $pais['value'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Provincia</label>
                            <select class="form-control select2" id="provincia">
                                <?php foreach ($provincias as $provincia) { ?>
                                    <option value="<?= $provincia['id'] ?>"<?= ($modelo['provincia'] == $provincia['id']) ? " selected" : "" ?>><?= $provincia['value'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Ciudad</label>
                            <select class="form-control select2" id="ciudad">
                                <?php foreach ($ciudades as $ciudad) { ?>
                                    <option value="<?= $ciudad['id'] ?>"<?= ($modelo['ciudad'] == $ciudad['id']) ? " selected" : "" ?>><?= $ciudad['value'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Barrio</label>
                            <select class="form-control select2" id="barrio">
                                <?php foreach ($barrios as $barrio) { ?>
                                    <option value="<?= $barrio['id'] ?>"<?= ($modelo['barrio'] == $barrio['id']) ? " selected" : "" ?>><?= $barrio['value'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Proximidad</label>
                            <input type="text" class="form-control" maxlength="100" placeholder="Especificar zona / barrio" id="proximidad" value="<?= $modelo['proximidad'] ?>">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Full Time</label>
                            <select class="form-control select2" id="fulltime">
                                <option value="on"<?= ($modelo['fulltime'] == 'on') ? " selected" : "" ?>>Si</option>
                                <option value="off"<?= ($modelo['fulltime'] == 'off') ? " selected" : "" ?>>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Ciudad exterior</label>
                            <input class="form-control" placeholder="Especificar" maxlength="100" type="text" id="ciudad_exterior" value="<?= $modelo['ciudad_exterior'] ?>">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Disponibilidad</label>
                            <input class="form-control" placeholder="Especificar" maxlength="100" type="text" id="disponible" value="<?= $modelo['disponible'] ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Secciones</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <h4>Publica en:</h4>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>
                                <input type="checkbox" class="minimal-red" id="publica_masajes"<?= ($modelo['publica_masajes'] == 'on') ? " checked" : "" ?>>
                            </label>
                            <label>
                                Masajes</label></div>
                        <div class="form-group">

                            <label>
                                <input type="checkbox" class="minimal-red" id="publica_fantasias"<?= ($modelo['publica_fantasias'] == 'on') ? " checked" : "" ?>>
                            </label>
                            <label>
                                Fantasias</label></div>
                        <div class="form-group">
                            <label>
                                <input type="checkbox" class="minimal-red" id="publica_maduras"<?= ($modelo['publica_maduras'] == 'on') ? " checked" : "" ?>>
                            </label>
                            <label>
                                Maduras</label></div>
                        <div class="form-group"></div>
                        <form>
                            <label>
                                Observaciones - Uso interno</label>
                            <textarea id="editor1" name="editor1" rows="10" cols="80">
                                <?= $modelo['observaciones_formateado'] ?>                     
                            </textarea>
                        </form>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <h4>Opciones varias</h4>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">

                            <label>
                                <input type="checkbox" class="minimal-red" id="con_lugar"<?= ($modelo['con_lugar'] == 'on') ? " checked" : "" ?>>
                            </label>
                            <label>
                                Tiene lugar
                            </label>
                        </div>
                        <div class="form-group">

                            <label>
                                <input type="checkbox" class="minimal-red" id="a_domicilio"<?= ($modelo['a_domicilio'] == 'on') ? " checked" : "" ?>>
                            </label>
                            <label>
                                Va a domicilio</label>
                            ?</div>
                        <div class="form-group">

                            <label>
                                <input type="checkbox" class="minimal-red" id="a_hotel"<?= ($modelo['a_hotel'] == 'on') ? " checked" : "" ?>>
                            </label>
                            <label>
                                Va a hoteles
                            </label>
                            ?</div>
                        <div class="form-group">

                            <label>
                                <input type="checkbox" class="minimal-red" id="fuma"<?= ($modelo['fuma'] == 'on') ? " checked" : "" ?>>
                            </label>
                            <label>
                                Fuma ?</label></div>
                        <div class="form-group">

                            <label>
                                <input type="checkbox" class="minimal-red" id="molesta"<?= ($modelo['molesta'] == 'on') ? " checked" : "" ?>>
                            </label>
                            <label>
                                Molesta que fumen ?</label></div>
                        <div class="form-group">

                            <label>
                                <input type="checkbox" class="minimal-red" id="baila"<?= ($modelo['baila'] == 'on') ? " checked" : "" ?>>
                            </label>
                            <label>
                                Baila ?</label></div>
                        <div class="form-group">

                            <label>
                                <input type="checkbox" class="minimal-red" id="ho"<?= ($modelo['ho'] == 'on') ? " checked" : "" ?>>
                            </label>
                            <label>
                                Escort + Hombre</label></div>
                        <div class="form-group">

                            <label>
                                <input type="checkbox" class="minimal-red" id="mu"<?= ($modelo['mu'] == 'on') ? " checked" : "" ?>>
                            </label>
                            <label>
                                Escort + Mujer </label></div>
                        <div class="form-group">

                            <label>
                                <input type="checkbox" class="minimal-red" id="ho_mu"<?= ($modelo['ho_mu'] == 'on') ? " checked" : "" ?>>
                            </label>
                            <label>
                                Escort + Hombre + Mujer </label></div>
                        <div class="form-group">

                            <label>
                                <input type="checkbox" class="minimal-red" id="viaja"<?= ($modelo['viaja'] == 'on') ? " checked" : "" ?>>
                            </label>
                            <label>
                                Viaja ? </label></div>
                        <div class="form-group">

                            <label>
                                <input type="checkbox" class="minimal-red" id="visa_usa"<?= ($modelo['visa_usa'] == 'on') ? " checked" : "" ?>>
                            </label>
                            <label>
                                Tiene visa USA ? </label></div>


                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>

            <!-- /.box-body -->
        </div>
    </section>

    <section class="content">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">EscortsBaires</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="box-body pad">
                                <form>
                                    <textarea name="editor2" cols="80" rows="10" id="editor2" placeholder="Descripcion"><?= $modelo['descripcion_ebcom'] ?></textarea>
                                </form>
                            </div>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Comidas</label>
                            <input type="text" class="form-control" placeholder="" id="comidas" value="<?= $modelo['comidas'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Hobbies</label>
                            <input type="text" class="form-control" placeholder="" id="hobbies" value="<?= $modelo['hobbies'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Musica Preferida</label>
                            <input type="text" class="form-control" placeholder="" id="musica" value="<?= $modelo['musica'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Deportes Preferidos</label>
                            <input type="text" class="form-control" placeholder="" id="deportes" value="<?= $modelo['deportes'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Aversiones</label>
                            <input type="text" class="form-control" placeholder="" id="nogusta" value="<?= $modelo['nogusta'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Personalidad</label>
                            <input type="text" class="form-control" placeholder="" id="personalidad" value="<?= $modelo['personalidad'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Duermo (horas por dia)</label>
                            <input type="text" class="form-control" placeholder="" id="duermo" value="<?= $modelo['duermo'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Lugares preferidos</label>
                            <input type="text" class="form-control" placeholder="" id="lugares" value="<?= $modelo['lugares'] ?>">
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="box-body pad">
                                <form>
                                    <textarea name="editor3" cols="80" rows="10" id="editor3" placeholder="Description"><?= $modelo['descripcion_ebcomar'] ?></textarea>
                                </form>
                            </div>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Food</label>
                            <input type="text" class="form-control" placeholder="" id="comidas2" value="<?= $modelo['comidas2'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Hobbies</label>
                            <input type="text" class="form-control" placeholder="" id="hobbies2" value="<?= $modelo['hobbies2'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Music</label>
                            <input type="text" class="form-control" placeholder="" id="musica2" value="<?= $modelo['musica2'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Sports</label>
                            <input type="text" class="form-control" placeholder="" id="deportes2" value="<?= $modelo['deportes2'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Dislikes</label>
                            <input type="text" class="form-control" placeholder="" id="nogusta2" value="<?= $modelo['nogusta2'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Personality</label>
                            <input type="text" class="form-control" placeholder="" id="personalidad2" value="<?= $modelo['personalidad2'] ?>">
                        </div>
                        <div class="form-group">
                            <label>I Sleep</label>
                            <input type="text" class="form-control" placeholder="" value="<?= $modelo['duermo'] ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Place</label>
                            <input type="text" class="form-control" placeholder="" id="lugares2" value="<?= $modelo['lugares2'] ?>">
                        </div>
                        <!-- /.form-group -->
                    </div>


                </div>



                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <!-- /.box -->
    </section>

    <div class="text-center">
        <button id="modificar" class="btn btn-primary">Modificar</button>
        <button id="modificar_loading" class="btn btn-primary" style="display: none;">
            <i class="fa fa-refresh fa-spin"></i>
        </button>
        <a href="/modelos/ver/<?= $modelo['ID'] ?>" target="_blank">
            <button type="button" class="btn btn-primary">
                <i class="fa fa-user"></i> Ver Perfil
            </button>
        </a>
    </div>
    <br>
</div>
