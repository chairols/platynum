<div class="content-wrapper">
    <section class="content-header">
        <h1><?= $modelo['nombre_formateado'] ?></h1>
    </section>

    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                <h3>Fotos Escort Baires</h3>
            </div>
            <div class="box-body">
                <input type="hidden" id="idmodelo" value="<?=$modelo['ID']?>">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6" id="archivos">
                        
                    </div>

                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="dropzone" id="dz1"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="box box-primary">
            <div class="box-body">
                <h3>Videos</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6" id="videos">
                        
                    </div>
                    
                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="dropzone" id="dz2"></div>
                    </div>
                    
                    <div class="col-12 col-sm-12 col-md-12 text-center">
                        <a href="/modelos/modificar/<?=$modelo['ID']?>">
                            <button type="button" class="btn btn-primary">
                                <i class="fa fa-backward"></i> Volver
                            </button>
                        </a>
                        <a href="/modelos/listar">
                            <button type="button" class="btn btn-primary">
                                <i class="fa fa-save"></i> Guardar
                            </button>
                        </a>
                        <a href="/modelos/ver/<?=$modelo['ID']?>" target="_blank">
                            <button type="button" class="btn btn-primary">
                                <i class="fa fa-user"></i> Ver Perfil
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<input type="hidden" id="idfoto" value="">