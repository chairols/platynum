<section class="ds ms page_models models_portrait gorizontal_padding section_padding_70">
    <div class="container-fluid">
        
        <div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">
            <?php foreach ($modelos as $modelo) { ?>
                <div class="isotope-item col-lg-6 col-md-6 col-sm-6 col-xs-6 fashion">
                    <?php if($modelo['visible'] == '1') { ?>
                    <div class="vertical-item content-absolute">
                        <div class="item-media">
                            <?php 
                            /*
                             *  Si la modelo está deshabilitada, no muestro link 
                             */
                            if($modelo['estado'] == 'habilitado') {
                            ?>
                            <a href="/modelos/ver/<?= $modelo['ID'] ?>/<?= $modelo['nombre_formateado'] ?>-<?= $modelo['telefono1'] ?>/">
                            <?php } ?>
                                <?php $fotos = explode(",", $modelo['fotos_platy']); ?>
                                <img src="/Fotodisk/<?=$modelo['perfil']?>/<?=$modelo['carpeta']?>/<?=$modelo['carpeta']?><?=$fotos[0]?>.jpg">
                                <!--<img src="/assets/web/images/models_portrait/01.jpg">-->
                            <?php 
                            /*
                             *  Si la modelo está deshabilitada, no muestro link  ( cierro el link )
                             */
                            if($modelo['estado'] == 'habilitado') { ?>
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
                            if($modelo['estado'] == 'habilitado') {
                            ?>
                            <a href="/modelos/ver/<?= $modelo['ID'] ?>/<?= $modelo['nombre_formateado'] ?>-<?= $modelo['telefono1'] ?>/">
                            <?php } ?>
                                    <?= $modelo['nombre_formateado'] ?>
                            <?php 
                            /*
                             *  Si la modelo está deshabilitada, no muestro link  ( cierro el link )
                             */
                            if($modelo['estado'] == 'habilitado') { ?>
                            </a>
                            <?php } ?>
                            <br>
                            <?=($modelo['whatsapp1']=='S' && $modelo['estado']=='habilitado')?"<i class='rt-icon2-whatsapp'></i>":""?>
                            <?=($modelo['estado']=='habilitado')? $modelo['telefono1']:"" ?><br>
                            
                        </h4>
                    </div>
                    <?php } ?>
                </div>
            <?php } ?>


        </div>

        
        
    </div>
</section>