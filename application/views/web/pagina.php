                <section class="ds ms page_models models_portrait gorizontal_padding section_padding_70">
                    <div class="container-fluid">

                        <div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">

                            <?php foreach ($modelos as $modelo) { ?>
                                <div class="isotope-item col-lg-3 col-md-4 col-sm-6 fashion">
                                    <div class="vertical-item content-absolute">
                                        <div class="item-media">
                                            <a href="/modelos/ver/<?=$modelo['ID']?>/<?=$modelo['nombre_formateado']?>-<?=$modelo['telefono1']?>/">
                                                <img src="/assets/web/images/models_portrait/01.jpg">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-title text-center">
                                        <h4>
                                            <a href="/modelos/ver/<?=$modelo['ID']?>/<?=$modelo['nombre_formateado']?>-<?=$modelo['telefono1']?>/"><?=$modelo['nombre_formateado']?></a><br>
                                            <?=$modelo['telefono1']?><br>
                                            <?=$modelo['value']?>
                                        </h4>
                                    </div>
                                </div>
                            <?php } ?>
                            
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-12 text-center margin_0">
                                <ul class="pagination ">
                                    <?=$links?>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
            </section>

