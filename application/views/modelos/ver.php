<section class="page_breadcrumbs changeable ls gradient gorizontal_padding section_padding_20 columns_padding_5 table_section"></section>


<section class="ds model-page section_padding_70 section_padding_bottom_60 columns_padding_25">
    <div class="container">
        <div class="row">

            <div class="col-md-5 col-md-push-7">
                <div class="vertical-item with_background models_square">
                    <div class="item-media">
                        <img src="/assets/web/images/models_square/17.jpg" alt="">
                    </div>


                </div>

            </div>

            <div class="col-md-7 col-md-pull-5">
                <h2 class="topmargin_0 bottommargin_30">About Model</h2>
                <p>
                    <strong>Altura: </strong><?=$modelo['altura']?>
                </p>
                <p>
                    <strong>Medidas: </strong><?=$modelo['medidas1']?>-<?=$modelo['medidas2']?>-<?=$modelo['medidas3']?> cm
                </p>
                <?php
                $i = explode(",", $modelo['idiomas']);
                $idiomas = '';
                foreach($i as $idioma) { 
                    if(strlen($idioma)) {
                        $idiomas .= $idioma.' - ';
                    }
                } ?>
                <p>
                    <strong>Idiomas: </strong><?php echo $idiomas ?>
                </p>
                <p>
                    <strong>Viajes: </strong>
                </p>
                <p>
                    <strong>Horario: </strong>
                </p>
                <p>
                    <strong>Barrio y Ciudad: </strong><?=$modelo['value']?>
                </p>
                <p>
                    <strong>Provincia y Pais: </strong>
                </p>
                <?php
                $telefono = '';
                if($modelo['prefijo1'] == 'mov' && strlen($modelo['telefono1'])) {
                    $telefono .= '15-'.$modelo['telefono1'];
                } 
                if($modelo['prefijo2'] == 'mov' && strlen($modelo['telefono2'])) {
                    $telefono .= ' / 15-'.$modelo['telefono2'];
                }
                ?>
                <p>
                    <strong>Teléfono Local: </strong><?=$telefono?>
                </p>
                <p>
                    <strong>Teléfono Internacional:</strong>
                </p>
                <p>
                    <strong>E-mail: </strong><?=(strlen($modelo['email']))?$modelo['email']:"No posee"?>
                </p>
                
                <p>
                <pre>
                    <?php print_r($modelo); ?>
                </pre>
                </p>

                <div class="columns_padding_5">
                    <div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">
                        <div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 tests">
                            <div class="vertical-item gallery-item content-absolute text-center cs">
                                <div class="item-media">
                                    <img src="/assets/web/images/models_square/01.jpg" alt="">
                                    <div class="media-links">
                                        <a class="prettyPhoto abs-link" title="" data-gal="prettyPhoto[gal]" href="images/models_square/01.jpg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 editorials">
                            <div class="vertical-item gallery-item content-absolute text-center cs">
                                <div class="item-media">
                                    <img src="/assets/web/images/models_square/02.jpg" alt="">
                                    <div class="media-links">
                                        <a class="prettyPhoto abs-link" title="" data-gal="prettyPhoto[gal]" href="images/models_square/02.jpg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 snaps">
                            <div class="vertical-item gallery-item content-absolute text-center cs">
                                <div class="item-media">
                                    <img src="/assets/web/images/models_square/03.jpg" alt="">
                                    <div class="media-links">
                                        <a class="prettyPhoto abs-link" title="" data-gal="prettyPhoto[gal]" href="images/models_square/03.jpg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 tests">
                            <div class="vertical-item gallery-item content-absolute text-center cs">
                                <div class="item-media">
                                    <img src="/assets/web/images/models_square/04.jpg" alt="">
                                    <div class="media-links">
                                        <a class="prettyPhoto abs-link" title="" data-gal="prettyPhoto[gal]" href="images/models_square/04.jpg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 editorials">
                            <div class="vertical-item gallery-item content-absolute text-center cs">
                                <div class="item-media">
                                    <img src="/assets/web/images/models_square/05.jpg" alt="">
                                    <div class="media-links">
                                        <a class="prettyPhoto abs-link" title="" data-gal="prettyPhoto[gal]" href="images/models_square/05.jpg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 snaps">
                            <div class="vertical-item gallery-item content-absolute text-center cs">
                                <div class="item-media">
                                    <img src="/assets/web/images/models_square/06.jpg" alt="">
                                    <div class="media-links">
                                        <a class="prettyPhoto abs-link" title="" data-gal="prettyPhoto[gal]" href="images/models_square/06.jpg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 tests">
                            <div class="vertical-item gallery-item content-absolute text-center cs">
                                <div class="item-media">
                                    <img src="/assets/web/images/models_square/07.jpg" alt="">
                                    <div class="media-links">
                                        <a class="prettyPhoto abs-link" title="" data-gal="prettyPhoto[gal]" href="images/models_square/07.jpg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 editorials">
                            <div class="vertical-item gallery-item content-absolute text-center cs">
                                <div class="item-media">
                                    <img src="/assets/web/images/models_square/08.jpg" alt="">
                                    <div class="media-links">
                                        <a class="prettyPhoto abs-link" title="" data-gal="prettyPhoto[gal]" href="images/models_square/08.jpg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 snaps">
                            <div class="vertical-item gallery-item content-absolute text-center cs">
                                <div class="item-media">
                                    <img src="/assets/web/images/models_square/09.jpg" alt="">
                                    <div class="media-links">
                                        <a class="prettyPhoto abs-link" title="" data-gal="prettyPhoto[gal]" href="images/models_square/09.jpg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 tests">
                            <div class="vertical-item gallery-item content-absolute text-center cs">
                                <div class="item-media">
                                    <img src="/assets/web/images/models_square/10.jpg" alt="">
                                    <div class="media-links">
                                        <a class="prettyPhoto abs-link" title="" data-gal="prettyPhoto[gal]" href="images/models_square/10.jpg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 editorials">
                            <div class="vertical-item gallery-item content-absolute text-center cs">
                                <div class="item-media">
                                    <img src="/assets/web/images/models_square/11.jpg" alt="">
                                    <div class="media-links">
                                        <a class="prettyPhoto abs-link" title="" data-gal="prettyPhoto[gal]" href="images/models_square/11.jpg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 snaps">
                            <div class="vertical-item gallery-item content-absolute text-center cs">
                                <div class="item-media">
                                    <img src="/assets/web/images/models_square/12.jpg" alt="">
                                    <div class="media-links">
                                        <a class="prettyPhoto abs-link" title="" data-gal="prettyPhoto[gal]" href="images/models_square/12.jpg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 tests">
                            <div class="vertical-item gallery-item content-absolute text-center cs">
                                <div class="item-media">
                                    <img src="/assets/web/images/models_square/13.jpg" alt="">
                                    <div class="media-links">
                                        <a class="prettyPhoto abs-link" title="" data-gal="prettyPhoto[gal]" href="images/models_square/13.jpg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 editorials">
                            <div class="vertical-item gallery-item content-absolute text-center cs">
                                <div class="item-media">
                                    <img src="/assets/web/images/models_square/14.jpg" alt="">
                                    <div class="media-links">
                                        <a class="prettyPhoto abs-link" title="" data-gal="prettyPhoto[gal]" href="images/models_square/14.jpg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 snaps">
                            <div class="vertical-item gallery-item content-absolute text-center cs">
                                <div class="item-media">
                                    <img src="/assets/web/images/models_square/15.jpg" alt="">
                                    <div class="media-links">
                                        <a class="prettyPhoto abs-link" title="" data-gal="prettyPhoto[gal]" href="images/models_square/15.jpg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- eof .isotope_container.row -->
                </div>



            </div>

        </div>
    </div>
</section>