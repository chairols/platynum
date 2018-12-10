<section class="page_breadcrumbs changeable ls gradient gorizontal_padding section_padding_20 columns_padding_5 table_section"></section>


<section class="ds model-page section_padding_70 section_padding_bottom_60 columns_padding_25">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-md-8 col-lg-8 col-sm-push-5 col-md-push-4 col-lg-push-4" id="resultado">
                Resultados
            </div>
            <aside class="col-sm-5 col-md-4 col-lg-4 col-sm-pull-8 col-lg-pull-8">
                <div class="with_background with_padding" style="background-color: #000">
                    <div class="widget">
                        <h3 class="widget-title">Buscador</h3>
                        <form method="GET" class="contact-form" style="color: #FFF">
                            <div class="form-group">
                                <label>Cabello / Hair</label>
                                <select name="colordepelo" id="colordepelo" class="form-control">
                                    <option value="">Indistinto / Any</option>
                                    <?php foreach($pelos as $pelo) { ?>
                                    <option value="<?=$pelo['id']?>"<?=($pelo['id']==$this->input->get('colordepelo'))?" selected":""?>><?=$pelo['value_es']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Altura / Height</label>
                                <select name="altura" id="altura" class="form-control">
                                    <option value="">Indistinta / Any</option>
                                    <option value="1">< 150</option>
                                    <option value="2">151 a 155</option>
                                    <option value="3">156 a 160</option>
                                    <option value="4">161 a 165</option>
                                    <option value="5">166 a 170</option>
                                    <option value="6">171 a 175</option>
                                    <option value="7">176 a 180</option>
                                    <option value="8">> 180</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Busto / Breast</label>
                                <select name="medidas1" id="medidas1" class="form-control">
                                    <option value="">Indistinta / Any</option>
                                    <option value="1">< 80</option>
                                    <option value="2">81 a 85</option>
                                    <option value="3">86 a 90</option>
                                    <option value="4">91 a 95</option>
                                    <option value="5">96 a 100</option>
                                    <option value="6">101 a 105</option>
                                    <option value="7">106 a 110</option>
                                    <option value="8">> 110</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Barrio</label>
                                <select name="barrio" id="barrio" class="form-control">
                                    <option value="">Indistinto / Any</option>
                                    <?php foreach($barrios as $barrio) { ?>
                                    <option value="<?=$barrio['id']?>"<?=($barrio['id']==$this->input->get('barrio'))?" selected":""?>><?=$barrio['value']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Ciudad / City</label>
                                <select name="ciudad" id="ciudad" class="form-control">
                                    <?php foreach($ciudades as $ciudad) { ?>
                                    <option value="<?=$ciudad['id']?>"<?=($ciudad['id']==$this->input->get('ciudad'))?" selected":""?>><?=$ciudad['value']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Publica Masajes</label>
                                <input type="checkbox" class="form-control" id=""
                            </div>
                            <button class="theme_button input_button" type="button" id="buscar">Buscar</button>
                        </form>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>