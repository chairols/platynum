<div class="content-wrapper">
    <section class="content-header">
        <h1>Banners Modelos</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12"><!-- /.box -->

                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Editar Banner</h3>
                    </div>
                    <div class="box-body">
                        <div class="form-horizontal">
                            <input type="hidden" id="tabla" value="<?=$tabla?>">
                            <input type="hidden" id="posicion_actual" value="<?=$banner['posicion']?>">
                            <div class="form-group">
                                <label class="control-label col-md-3">Posición</label>
                                <div class="col-md-6">
                                    <input type="text" maxlength="50" class="form-control" id="posicion" value="<?=$banner['posicion']?>" autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Contenido</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" id="contenido"><?=$banner['contenido']?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Banner</label>
                                <div class="col-md-6">
                                    <?=$banner['contenido']?>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="button" id="editar" class="btn btn-primary">Modificar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
</div>