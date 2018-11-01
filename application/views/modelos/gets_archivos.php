<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Imagen</th>
            <th>Archivo</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach(explode(',', $modelo['fotos_platy']) as $foto) { ?>
        <?php if(strlen($foto)) { ?>
        <tr>
            <td><img src="/Fotodisk/<?=$modelo['perfil']?>/<?=$modelo['carpeta']?>/<?=$modelo['carpeta']?><?=$foto?>Thumb.jpg"></td>
            <td><?=$modelo['nombre_formateado'].$foto?></td>
            <td>
                <button class="btn btn-github btn-xs thumb" idfoto="<?=$foto?>">
                    <i class="fa fa-image"></i>
                </button>
                <button class="btn btn-danger btn-xs borrar_foto" valor="<?=$foto?>">
                    <i class="fa fa-trash-o"></i>
                </button>
            </td>
        </tr>
        <?php } ?>
        <?php } ?>
    </tbody>
</table>

<script type="text/javascript">

$(".thumb").click(function() {
    window.location.href = '/modelos/thumb/'+$("#idmodelo").val()+"/"+this.attributes.idfoto.value+"/";
});

$(".borrar_foto").click(function() {
    datos = {
        'idmodelo': $("#idmodelo").val(),
        'idfoto': this.attributes.valor.value
    };
    $.ajax({
        type: 'POST',
        url: '/modelos/borrar_foto/',
        data: datos,
        beforeSend: function () {
            $("#archivos").html('<h1 class="text-center"><i class="fa fa-refresh fa-spin"></i></h1>');
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
            gets_archivos();
        },
        error: function (xhr) { // if error occured
            $("#archivos").html(xhr.responseText);
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