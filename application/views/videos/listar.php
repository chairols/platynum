<section class="ds ms page_models models_portrait gorizontal_padding section_padding_70">
    <div class="container-fluid">
        <div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">
            
            <?php foreach ($videos as $video) { ?>
            <div class="isotope-item col-lg-3 col-md-3 col-sm-3 fashion">
                <div class="vertical-item content-absolute">
                    <div class="item-media">
                        <video src="/upload/videos/<?=$video['video']?>" controls></video>
                    </div>
                </div>
                <div class="item-title text-center">
                    <h4>
                        <?=$video['modelo']['nombre_formateado']?><br>
                        <?=$video['modelo']['telefono1']?><br>
                        <?=$video['modelo']['barrio_nombre']?><br> 
                        <?=$video['modelo']['ciudad_nombre']?>
                    </h4>
                </div>
            </div>
            <?php } ?>


        </div>
        
        
    </div>
</section>

