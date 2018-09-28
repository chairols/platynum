<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Posición</th>
            <th>Banner</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($banners as $banner) { ?>
            <tr>
                <td><?= $banner['posicion'] ?></td>
                <td><?= $banner['contenido'] ?></td>
                <td>
                    <a href="/banners/editar/<?= $tabla ?>/<?= $banner['posicion'] ?>/">
                        <button class="btn btn-warning">
                            <i class="fa fa-edit"></i>
                        </button>
                    </a>
                    <button class="btn btn-danger borrar" posicion="<?= $banner['posicion'] ?>">
                        <i class="fa fa-trash-o"></i>
                    </button>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<script type="text/javascript">
    $(".borrar").click(function () {
        datos = {
            'tabla': '<?= $tabla ?>',
            'posicion': this.attributes.posicion.value
        };
        $.ajax({
            type: 'POST',
            url: '/banners/borrar/',
            data: datos,
            beforeSend: function () {
                $("#tabla").html("<h1 class='text-center'><i class='fa fa-refresh fa-spin'></i></h1>");
            },
            success: function (data) {
                resultado = $.parseJSON(data);
                alertify.set('notifier', 'position', 'top-center');
                if (resultado['status'] == 'error') {
                    alertify.error(resultado['data']);
                } else if (resultado['status'] == 'ok') {
                    alertify.success(resultado['data']);
                    gets_tabla();
                }
            },
            error: function (xhr) { // if error occured
                alertify.set('notifier', 'position', 'top-center');
                alertify.error('<strong>Ha ocurrido el siguiente error:</strong><br>' + xhr.statusText);
            }
        });
    });
</script>