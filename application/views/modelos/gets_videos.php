<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Archivo</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($videos as $video) { ?>
        <tr>
            <td>Video ID: <?=$video['idvideo']?></td>
            <td></td>
        </tr>
        <?php } ?>
    </tbody>
</table>