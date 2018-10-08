<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Archivo</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach(explode(',', $modelo['fotos_platy']) as $foto) { ?>
        <tr>
            <td><?=$modelo['nombre'].$foto?></td>
            <td></td>
        </tr>
        <?php } ?>
    </tbody>
</table>