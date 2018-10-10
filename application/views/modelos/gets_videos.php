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
            <td>
                <button class="btn btn-danger btn-xs borrar" valor="<?=$video['idvideo']?>">
                    <i class="fa fa-trash-o"></i>
                </button>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<script type="text/javascript">

$(".borrar").click(function() {
    datos = {
        'idvideo': this.attributes.valor.value
    };
    $.ajax({
        type: 'POST',
        url: '/modelos/borrar_video/',
        data: datos,
        beforeSend: function () {
            $("#videos").html('<h1 class="text-center"><i class="fa fa-refresh fa-spin"></i></h1>');
        },
        success: function (data) {
            resultado = $.parseJSON(data);
            if (resultado['status'] == 'error') {
                alertify.set('notifier', 'position', 'top-right');
                alertify.error(resultado['data']);
            } else if (resultado['status'] == 'ok') {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(resultado['data']);
                
            }
            gets_videos();
        },
        error: function (xhr) { // if error occured
            $("#videos").html(xhr.responseText);
            console.log(xhr);
            
            $.notify('<strong>Ha ocurrido el siguiente error:</strong><br>' + xhr.statusText,
                    {
                        type: 'danger',
                        allow_dismiss: false
                    });
        }
    });
});
</script>