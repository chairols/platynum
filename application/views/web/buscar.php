<section class="page_breadcrumbs changeable ls gradient gorizontal_padding section_padding_20 columns_padding_5 table_section"></section>


<section class="ds model-page section_padding_70 section_padding_bottom_60 columns_padding_25">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-md-8 col-lg-8 col-sm-push-5 col-md-push-4 col-lg-push-4">
                Resultados
            </div>
            <aside class="col-sm-5 col-md-4 col-lg-4 col-sm-pull-8 col-lg-pull-8">
                <div class="with_background with_padding" style="background-color: #000">
                    <div class="widget">
                        <h3 class="widget-title">Buscador</h3>
                        <form method="GET" class="contact-form" style="color: #FFF">
                            <div class="form-group">
                                <label>Cabello / Hair</label>
                                <select name="colordepelo" class="form-control">
                                    <?php foreach($pelos as $pelo) { ?>
                                    <option value="<?=$pelo['id']?>"<?=($pelo['id']==$this->input->get('colordepelo'))?" selected":""?>><?=$pelo['value_es']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Altura / Height</label>
                                
                            </div>
                            <div class="form-group">
                                <label>Busto / Breast</label>
                                
                            </div>
                            <div class="form-group">
                                <label>Barrio</label>
                                <select name="barrio" class="form-control">
                                    <?php foreach($barrios as $barrio) { ?>
                                    <option value="<?=$barrio['id']?>"<?=($barrio['id']==$this->input->get('barrio'))?" selected":""?>><?=$barrio['value']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Ciudad / City</label>
                                <select name="ciudad" class="form-control">
                                    <?php foreach($ciudades as $ciudad) { ?>
                                    <option value="<?=$ciudad['id']?>"<?=($ciudad['id']==$this->input->get('ciudad'))?" selected":""?>><?=$ciudad['value']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <button class="theme_button input_button" type="submit">Buscar</button>
                        </form>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>