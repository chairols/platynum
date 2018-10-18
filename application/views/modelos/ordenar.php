<div class="content-wrapper">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3>Ordenar Modelos</h3>
                </div>
                <div class="box-body">
                    <div class="cf nestable-lists">
                        <div class="dd" id="nestable">
                            <ol class="dd-list">
                                <?php foreach ($modelos as $modelo) { ?>
                                    <li class="dd-item dd3-item" data-id="<?= $modelo['ID'] ?>">
                                        <div class="dd-handle dd3-handle"></div>
                                        <div class="dd3-content">
                                            <?= $modelo['nombre_formateado'] ?>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php var_dump($modelos[0]) ?>

</div>
<textarea style="display: none;" id="nestable-output"></textarea>