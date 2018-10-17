




            <footer class="ds page_footer section_padding_70">
                <div class="container">
                    <div class="row"></div>
                </div>
            </footer>

            <section class="ls page_copyright section_padding_20">
                <div class="container">
                    <div class="row topmargin_5 bottommargin_5">
                        <div class="col-sm-12 text-center">
                            <p class="darklinks">&copy; Copyright © 2000 - 2020 Platynum & EscortsBaires Group. Todos los derechos reservados. </p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!-- eof #box_wrapper -->
    </div>
    <!-- eof #canvas -->

    <script src="/assets/web/js/compressed.js"></script>
    <script src="/assets/web/js/main.js"></script>
<?php if (isset($javascript) && count($javascript) > 0) { ?>
    <!-- Carga de Scripts de la vista -->
    <?php foreach ($javascript as $j) { ?>
        <script type="text/javascript" src="<?= $j ?>"></script>
        <?php
    }
}
?>

</body>

</html>