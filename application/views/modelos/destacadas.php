<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Modelos Destacadas</h1>
    </section>

    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Modelos Destacadas</h3>
                        <div class="dd" id="nestable">
                            <ol class="dd-list">
                                <?php foreach ($destacadas as $destacada) { ?>
                                    <li class="dd-item dd3-item" data-id="<?= $destacada['modelo']['ID'] ?>">
                                        <div class="dd-handle dd3-handle"></div>
                                        <div class="dd3-content">
                                            <?= $destacada['modelo']['nombre_formateado'] ?> | <div class="badge <?= ($destacada['modelo']['estado'] == 'habilitado') ? 'bg-green-active' : 'bg-red-active' ?>"><?= $destacada['modelo']['estado'] ?></div>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>Modelos No Destacadas</h3>
                        <div class="dd" id="nestable2">
                            <ol class="dd-list">
                                <?php foreach ($modelos as $modelo) { ?>
                                    <li class="dd-item dd3-item" data-id="<?= $modelo['ID'] ?>">
                                        <div class="dd-handle dd3-handle"></div>
                                        <div class="dd3-content">
                                            <?= $modelo['nombre_formateado'] ?> | <div class="badge <?= ($modelo['estado'] == 'habilitado') ? 'bg-green-active' : 'bg-red-active' ?>"><?= $modelo['estado'] ?></div>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<textarea style="display: none;" id="nestable-output"></textarea>