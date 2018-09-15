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
                            <input class="form-control" maxlength="60" type="text" id="nombresitioweb">
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
                                    <option value="<?= $pais['id'] ?>"><?= $pais['value'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Provincia</label>
                            <select class="form-control select2" id="provincia">
                                <?php foreach ($provincias as $provincia) { ?>
                                    <option value="<?= $provincia['id'] ?>"><?= $provincia['value'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Ciudad</label>
                            <select class="form-control select2" id="ciudad">
                                <?php foreach ($ciudades as $ciudad) { ?>
                                    <option value="<?= $ciudad['id'] ?>"><?= $ciudad['value'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Barrio</label>
                            <select class="form-control select2" id="barrio">
                                <?php foreach ($barrios as $barrio) { ?>
                                    <option value="<?= $barrio['id'] ?>"><?= $barrio['value'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Proximidad</label>
                            <input type="text" class="form-control" maxlength="100" placeholder="Especificar zona / barrio" id="proximidad">
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
                                <input type="checkbox" class="minimal-red" id="publica_masajes">
                            </label>
                            <label>
                                Masajes</label></div>
                        <div class="form-group">

                            <label>
                                <input type="checkbox" class="minimal-red" id="publica_fantasias">
                            </label>
                            <label>
                                Fantasias</label></div>
                        <div class="form-group">
                            <label>
                                <input type="checkbox" class="minimal-red" id="publica_maduras">
                            </label>
                            <label>
                                Maduras</label></div>
                        <div class="form-group"></div>
                        <form>
                            <label>
                                Observaciones - Uso interno</label>
                            <textarea id="editor1" name="editor1" rows="10" cols="80" id="observaciones">
                     Agregar descripción                      
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
                                <input type="checkbox" class="minimal-red" id="con_lugar">
                            </label>
                            <label>
                                Tiene lugar
                            </label>
                        </div>
                        <div class="form-group">

                            <label>
                                <input type="checkbox" class="minimal-red" id="a_domicilio">
                            </label>
                            <label>
                                Va a domicilio</label>
                            ?</div>
                        <div class="form-group">

                            <label>
                                <input type="checkbox" class="minimal-red" id="a_hotel">
                            </label>
                            <label>
                                Va a hoteles
                            </label>
                            ?</div>
                        <div class="form-group">

                            <label>
                                <input type="checkbox" class="minimal-red" id="fuma">
                            </label>
                            <label>
                                Fuma ?</label></div>
                        <div class="form-group">

                            <label>
                                <input type="checkbox" class="minimal-red" id="molesta">
                            </label>
                            <label>
                                Molesta que fumen ?</label></div>
                        <div class="form-group">

                            <label>
                                <input type="checkbox" class="minimal-red" id="baila">
                            </label>
                            <label>
                                Baila ?</label></div>
                        <div class="form-group">

                            <label>
                                <input type="checkbox" class="minimal-red" id="ho">
                            </label>
                            <label>
                                Escort + Hombre</label></div>
                        <div class="form-group">

                            <label>
                                <input type="checkbox" class="minimal-red" id="mu">
                            </label>
                            <label>
                                Escort + Mujer </label></div>
                        <div class="form-group">

                            <label>
                                <input type="checkbox" class="minimal-red" id="ho_mu">
                            </label>
                            <label>
                                Escort + Hombre + Mujer </label></div>
                        <div class="form-group">

                            <label>
                                <input type="checkbox" class="minimal-red" id="viaja">
                            </label>
                            <label>
                                Viaja ? </label></div>
                        <div class="form-group">

                            <label>
                                <input type="checkbox" class="minimal-red" id="visa_usa">
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
                                    <textarea name="editor2" cols="80" rows="10" id="editor2" placeholder="Descripcion"></textarea>
                                </form>
                            </div>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Comidas</label>
                            <input type="text" class="form-control" placeholder="" id="comidas">
                        </div>
                        <div class="form-group">
                            <label>Hobbies</label>
                            <input type="text" class="form-control" placeholder="" id="hobbies">
                        </div>
                        <div class="form-group">
                            <label>Musica Preferida</label>
                            <input type="text" class="form-control" placeholder="" id="musica">
                        </div>
                        <div class="form-group">
                            <label>Deportes Preferidos</label>
                            <input type="text" class="form-control" placeholder="" id="deportes">
                        </div>
                        <div class="form-group">
                            <label>Aversiones</label>
                            <input type="text" class="form-control" placeholder="" id="nogusta">
                        </div>
                        <div class="form-group">
                            <label>Personalidad</label>
                            <input type="text" class="form-control" placeholder="" id="personalidad">
                        </div>
                        <div class="form-group">
                            <label>Duermo (horas por dia)</label>
                            <input type="text" class="form-control" placeholder="" id="duermo">
                        </div>
                        <div class="form-group">
                            <label>Lugares preferidos</label>
                            <input type="text" class="form-control" placeholder="" id="lugares">
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="box-body pad">
                                <form>
                                    <textarea name="editor3" cols="80" rows="10" id="editor3" placeholder="Description"></textarea>
                                </form>
                            </div>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Food</label>
                            <input type="text" class="form-control" placeholder="" id="comidas2">
                        </div>
                        <div class="form-group">
                            <label>Hobbies</label>
                            <input type="text" class="form-control" placeholder="" id="hobbies2">
                        </div>
                        <div class="form-group">
                            <label>Music</label>
                            <input type="text" class="form-control" placeholder="" id="musica2">
                        </div>
                        <div class="form-group">
                            <label>Sports</label>
                            <input type="text" class="form-control" placeholder="" id="deportes2">
                        </div>
                        <div class="form-group">
                            <label>Dislikes</label>
                            <input type="text" class="form-control" placeholder="" id="nogusta2">
                        </div>
                        <div class="form-group">
                            <label>Personality</label>
                            <input type="text" class="form-control" placeholder="" id="personalidad2">
                        </div>
                        <div class="form-group">
                            <label>I Sleep</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Place</label>
                            <input type="text" class="form-control" placeholder="" id="lugares2">
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
        <button id="agregar" class="btn btn-primary">Agregar</button>
    </div>
    <br>
</div>