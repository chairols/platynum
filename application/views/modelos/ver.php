
<section class="page_breadcrumbs changeable ls gradient gorizontal_padding section_padding_20 columns_padding_5 table_section"></section>


<section class="ds model-page section_padding_70 section_padding_bottom_60 columns_padding_25">
    <div class="container">
        <div class="row">
            <?php
            $idiomas = explode(",", $modelo['idiomas']);
            
            ?>
            <div class="col-md-6 col-md-push-7 ">
                <div class="topmargin_0 bottommargin_30 Titulo"><?= $modelo['nombre_formateado'] ?> / <?= ($modelo['prefijo1'] == 'mov') ? "15-" : "" ?><?= $modelo['telefono1'] ?> </div>
                <p>
                    <strong>Altura: </strong><?=$modelo['altura']?> cm
                </p>
                <p>
                    <strong>Medidas: </strong><?=$modelo['medidas1']?>-<?=$modelo['medidas2']?>-<?=$modelo['medidas3']?> cm
                </p>
                <p>
                    <strong>Idiomas: </strong>
                    <?php foreach($idiomas = explode(",", $modelo['idiomas_formateado']) as $idioma) { 
                        echo $idioma." ";
                    } ?>                 
                </p>
                <p>
                    <strong>Viajes: </strong><?=$modelo['viaja_donde_formateado']?>
                </p>
                <p>
                    <strong>Horario: </strong><?=$modelo['disponible']?>
                </p>
                <p>
                    <strong>Lugar: </strong><?=$modelo['barrio_nombre']?>, <?=$modelo['ciudad_nombre']?>
                </p>
                <p>
                    <strong>Pais: </strong><?=$modelo['pais_nombre']?>
                </p>
                <p>
                    <strong>Teléfono: </strong>
                            <?php if($modelo['estado'] == 'habilitado') { ?>
                            <?=($modelo['prefijo1']=="mov")?"15-":""?><?=$modelo['telefono1']?> <?=($modelo['prefijo2']=="mov")?"15-":""?><?=$modelo['telefono2']?> <?=($modelo['prefijo3']=="mov")?"15-":""?><?=$modelo['telefono3']?>
                            <?php } ?>
                </p>
                <p>
                    <strong>Email: </strong><?=$modelo['email']?>
                </p>
            </div>
            <?php $fotos = explode(",", $modelo['fotos_platy']); ?>
            <div class="col-md-6 col-md-pull-6">
                <?php if(isset($fotos[1])) { ?>
                <div class="vertical-item with_background models_square">
                    <div class="item-media">
                        <img src="/Fotodisk/<?=$modelo['perfil']?>/<?=$modelo['carpeta']?>/<?=$modelo['carpeta']?><?=$fotos[1]?>.jpg" alt="">
                    </div>

                </div>
                <?php } ?>
                <br>


                <div class="columns_padding_5">
                    <div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">
                        <?php
                        for($i = 2; $i < count($fotos); $i++) { ?>
                        
                        <div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 tests">
                            <div class="vertical-item gallery-item content-absolute text-center cs">
                                <div class="item-media">
                                    <img src="/Fotodisk/<?=$modelo['perfil']?>/<?=$modelo['carpeta']?>/<?=$modelo['carpeta']?><?=$fotos[$i]?>Thumb.jpg">
                                    <div class="media-links">
                                        <a class="prettyPhoto abs-link" title="" data-gal="prettyPhoto[gal]" href="/Fotodisk/<?=$modelo['perfil']?>/<?=$modelo['carpeta']?>/<?=$modelo['carpeta']?><?=$fotos[$i]?>.jpg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <!-- eof .isotope_container.row -->
                </div>
            </div>

        </div>
    </div>
</section>
