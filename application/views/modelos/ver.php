
<section class="page_breadcrumbs changeable ls gradient gorizontal_padding section_padding_20 columns_padding_5 table_section"></section>


<section class="ds model-page section_padding_70 section_padding_bottom_60 columns_padding_25">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-md-push-7">
                <h2 class="topmargin_0 bottommargin_30"><?= $modelo['nombre_formateado'] ?> / <?= ($modelo['prefijo1'] == 'mov') ? "15-" : "" ?><?= $modelo['telefono1'] ?> </h2>
                <p>
                    At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod ipsum dolor sit amet. Lorem ipsum
                    dolor sit amet, consetetur sadipscing elitr, sed diam nonumy tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum Stet clita kasd gubergren, no sea takimata sanctus
                    est Lorem ipsum dolor sit amet.
                </p>
                <p>
                    At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua. est Lorem ipsum dolor sit amet. Lorem ipsum
                    dolor sit amet, consetetur sadipscing elitr, sed diam nonumy ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.
                </p>

            </div>

            <div class="col-md-6 col-md-pull-6">
                <div class="vertical-item with_background models_square">
                    <div class="item-media">
                        <img src="/assets/web/images/models_square/17.jpg" alt="">
                    </div>

                </div><br>


                <div class="columns_padding_5">
                    <div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">
                        <?php
                        $fotos = explode(",", $modelo['fotos_platy']);
                        foreach ($fotos as $foto) { ?>
                        <div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 tests">
                            <div class="vertical-item gallery-item content-absolute text-center cs">
                                <div class="item-media">
                                    <img src="/Fotodisk/<?=$modelo['perfil']?>/<?=$modelo['carpeta']?>/<?=$modelo['carpeta']?><?=$foto?>Thumb.jpg">
                                    <div class="media-links">
                                        <a class="prettyPhoto abs-link" title="" data-gal="prettyPhoto[gal]" href="/Fotodisk/<?=$modelo['perfil']?>/<?=$modelo['carpeta']?>/<?=$modelo['carpeta']?><?=$foto?>.jpg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <!-- eof .isotope_container.row -->
                </div>

                <pre>
                    <?php print_r($modelo); ?>
                </pre>

            </div>

        </div>
    </div>
</section>
