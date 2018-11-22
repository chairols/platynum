<div class="content-wrapper">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3>Ordenar Modelos</h3>
                </div>
                <div class="box-body">
                    <select id="select" class="form-control select2">
                        <option value="A-MujeresModelos"<?= ($perfil == 'A-MujeresModelos') ? " selected" : "" ?>>Modelos</option>
                        <option value="B-Mujeres-Masajistas"<?= ($perfil == 'B-Mujeres-Masajistas') ? " selected" : "" ?>>Masajistas</option>
                        <option value="D-Mujeres-Fantasias"<?= ($perfil == 'D-Mujeres-Fantasias') ? " selected" : "" ?>>Fantasías</option>
                    </select>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="cf nestable-lists">
                                <div class="dd">
                                    <ol class="dd-list">
                                        <?php $i = 1; ?>
                                        <?php foreach ($modelos as $modelo) { ?>
                                        <li class="dd-item" data-id="<?=$modelo['ID']?>">
                                            <div class="dd-handle">
                                                <?=$i?>
                                            </div>
                                        </li>
                                        <?php $i++; ?>
                                        <?php } ?>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="cf nestable-lists">
                                <div class="dd" id="nestable">
                                    <ol class="dd-list">
                                        <?php foreach ($modelos as $modelo) { ?>
                                            <li class="dd-item dd3-item" data-id="<?= $modelo['ID'] ?>">
                                                <div class="dd-handle dd3-handle"></div>
                                                <div class="dd3-content">
                                                    <?= $modelo['nombre_formateado'] ?> | <div class="badge <?=($modelo['estado']=='habilitado')?'bg-green-active':'bg-red-active'?>"><?=$modelo['estado']?></div>
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
        </div>
    </div>

</div>
<textarea style="display: none;" id="nestable-output"></textarea>