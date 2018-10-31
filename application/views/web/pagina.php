<section class="ds ms page_models models_portrait gorizontal_padding section_padding_70">
    <div class="container-fluid">
        <div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">
            <div class="isotope-item col-lg-4 col-md-4 col-sm-4 fashion">

            </div>
            <div class="isotope-item col-lg-4 col-md-4 col-sm-4 fashion form-group select-group">
                <select id="modelo" class="seleccionar form-control orderby">
                    <option value="0">-- Modelos --</option> 
                    <?php foreach($modelos_todas as $modelo) { ?>
                    <option value="<?=$modelo['ID']?>"><?=$modelo['nombre_formateado']?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="isotope-item col-lg-4 col-md-4 col-sm-4 fashion form-group select-group">
                <select id="masajista" class="seleccionar form-control orderby">
                    <option value="0">-- Masajistas --</option>
                    <?php foreach($masajistas_todas as $masajista) { ?>
                    <option value="<?=$masajista['ID']?>"><?=$masajista['nombre_formateado']?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        
        <div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">
            <?php 
                $i = 0; 
                $j = 0;
            ?>
            <?php foreach ($modelos as $modelo) { ?>
                <div class="isotope-item col-lg-2 col-md-2 col-sm-2 col-xs-4 fashion">
                    <div class="vertical-item content-absolute">
                        <div class="item-media">
                            <a href="/modelos/ver/<?= $modelo['ID'] ?>/<?= $modelo['nombre_formateado'] ?>-<?= $modelo['telefono1'] ?>/">
                                <?php $fotos = explode(",", $modelo['fotos_platy']); ?>
                                <img src="/Fotodisk/<?=$modelo['perfil']?>/<?=$modelo['carpeta']?>/<?=$modelo['carpeta']?><?=$fotos[0]?>.jpg">
                                <!--<img src="/assets/web/images/models_portrait/01.jpg">-->
                            </a>
                        </div>
                    </div>
                    <div class="item-title text-center">
                        <h4>
                            <a href="/modelos/ver/<?= $modelo['ID'] ?>/<?= $modelo['nombre_formateado'] ?>-<?= $modelo['telefono1'] ?>/"><?= $modelo['nombre_formateado'] ?></a><br>
                            <?= $modelo['telefono1'] ?><br>
                            <?= $modelo['value'] ?>
                        </h4>
                    </div>
                </div>
                <?php $i++; ?>
                <?php if(($i % 6) == 0) { ?>
        </div>
        <div class="isotope_container isotope row masonry-layout banner-aling" data-filters=".isotope_filters">
            <div class="isotope-item col-lg-12 col-md-12 col-sm-12  fashion style="position: absolute">
                    <?=$banners[$j]['contenido'];?>
                </div>
        </div>
        
        <div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">
                <?php $j++ ?>
                <?php } ?>
            <?php } ?>


        </div>

        <div class="row">
            <div class="col-sm-12 text-center margin_0">
                <ul class="pagination ">
                    <?= $links ?>
                </ul>
            </div>
        </div>
        
        
    </div>
</section>

