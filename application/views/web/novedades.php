<section class="ds ms page_models models_portrait gorizontal_padding section_padding_70">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 col-sm-push-1">
                <div class="row">
                    <?php foreach($novedades as $novedad) { ?>
                    <div class="col-sm-12 bottommargin_40">
                        <div class="side-item event-item content-padding with_background">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="item-media">
                                        <?php $fotos = explode(",", $novedad['modelo']['fotos_platy']); ?>
                                        <?php var_dump($fotos); ?>
                                        <img src="/Fotodisk/<?=$novedad['modelo']['perfil']?>/<?=$novedad['modelo']['carpeta']?>/<?=$novedad['modelo']['carpeta']?><?=$fotos[1]?>.jpg">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="item-content">
                                        <h3 class="entry-title topmargin_0">
                                            <a href="/modelos/ver/<?=$novedad['idmodelo']?>/"><?=$novedad['modelo']['nombre_formateado']?></a>
                                        </h3>
                                        <p class="grey"><?=$novedad['novedad']?></p>
                                        <p class="item-meta grey">
                                            <i class="rt-icon2-calendar4 highlight"></i> <?=date("d/m/Y", strtotime($novedad['fecha']))?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>