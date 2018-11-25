<link rel="stylesheet" href="/assets/vendors/DataTables-1.10.18/DataTables-1.10.18/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="/assets/vendors/DataTables-1.10.18/Buttons-1.5.4/css/buttons.dataTables.min.css">

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Exportar modelo</h1>
    </section>

    <section class="content">
        <div class="box box-default">
            <div class="box-body">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Orden</th>
                            <th>Modelo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($modelos as $modelo) { ?>
                            <tr>
                                <td><?= $modelo['orden'] ?></td>
                                <td><?= $modelo['nombre'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript" src="/assets/vendors/DataTables-1.10.18/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/assets/vendors/DataTables-1.10.18/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/assets/vendors/DataTables-1.10.18/Buttons-1.5.4/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="/assets/vendors/DataTables-1.10.18/JSZip-2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="/assets/vendors/DataTables-1.10.18/pdfmake-0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="/assets/vendors/DataTables-1.10.18/pdfmake-0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="/assets/vendors/DataTables-1.10.18/Buttons-1.5.4/js/buttons.html5.min.js"></script>

