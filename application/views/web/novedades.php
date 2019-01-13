<section class="ds ms page_models models_portrait gorizontal_padding section_padding_70">
    <div class="container-fluid">
        <div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">
            <?php 
                $i = 0; 
                $j = 0;
            ?>
            <?php foreach ($novedades as $novedad) { ?>
                <div class="isotope-item col-lg-2 col-md-2 col-sm-2 col-xs-4 fashion">
                    <?php if($novedad['modelo']['visible'] == '1') { ?>
                    <div class="vertical-item content-absolute">
                        <div class="item-media">
                            <?php 
                            /*
                             *  Si la modelo está deshabilitada, no muestro link 
                             */
                            if($novedad['modelo']['estado'] == 'habilitado') {
                            ?>
                            <a href="/modelos/ver/<?= $novedad['modelo']['ID'] ?>/<?= $novedad['modelo']['nombre_formateado'] ?>-<?= $novedad['modelo']['telefono1'] ?>/">
                            <?php } ?>
                                <?php $fotos = explode(",", $novedad['modelo']['fotos_platy']); ?>
                                <img src="/Fotodisk/<?=$novedad['modelo']['perfil']?>/<?=$novedad['modelo']['carpeta']?>/<?=$novedad['modelo']['carpeta']?><?=$fotos[0]?>.jpg">
                                <!--<img src="/assets/web/images/models_portrait/01.jpg">-->
                            <?php 
                            /*
                             *  Si la modelo está deshabilitada, no muestro link  ( cierro el link )
                             */
                            if($novedad['modelo']['estado'] == 'habilitado') { ?>
                            </a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="item-title text-center">
                        <h4>
                            <?php 
                            /*
                             *  Si la modelo está deshabilitada, no muestro link 
                             */
                            if($novedad['modelo']['estado'] == 'habilitado') {
                            ?>
                            <a href="/modelos/ver/<?= $novedad['modelo']['ID'] ?>/<?= $novedad['modelo']['nombre_formateado'] ?>-<?= $novedad['modelo']['telefono1'] ?>/">
                            <?php } ?>
                                    <?= $novedad['modelo']['nombre_formateado'] ?>
                            <?php 
                            /*
                             *  Si la modelo está deshabilitada, no muestro link  ( cierro el link )
                             */
                            if($novedad['modelo']['estado'] == 'habilitado') { ?>
                            </a>
                            <?php } ?>
                            <br>
                            <?=$novedad['fecha_formateada']?><br>
                            <?=$novedad['novedad']?>
                        </h4>
                    </div>
                    <?php } ?>
                </div>
                <?php $i++; ?>
                <?php if(($i % 6) == 0) { ?>
        </div>
        
        
        <div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">
                <?php $j++ ?>
                <?php } ?>
            <?php } ?>
            
        </div>
        
    </div>
</section>

