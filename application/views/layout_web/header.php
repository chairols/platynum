<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
    <!--<![endif]-->

    <head>
        <title>Platynum</title>
        <!--<meta charset="utf-8">-->
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="/assets/web/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/web/css/main.css" id="color-switcher-link">
        <link rel="stylesheet" href="/assets/web/css/animations.css">
        <link rel="stylesheet" href="/assets/web/css/fonts.css">
        <script src="/assets/web/js/vendor/modernizr-2.6.2.min.js"></script>

        <!--[if lt IE 9]>
        <script src="js/vendor/html5shiv.min.js"></script>
        <script src="js/vendor/respond.min.js"></script>
    <![endif]-->

    </head>

    <body>
        <!--[if lt IE 9]>
        <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
    <![endif]-->

        <div class="preloader">
            <div class="preloader_image"></div>
        </div>

        <!-- search modal -->
        <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
            <div class="widget widget_search">
                <form method="get" class="searchform form-inline" action="/">
                    <div class="form-group">
                        <input type="text" value="" name="search" class="form-control" placeholder="Type search keyword here..." id="modal-search-input">
                    </div>
                    <button type="submit" class="theme_button input_button">Search</button>
                </form>
            </div>
        </div>

        <!-- wrappers for visual page editor and boxed version of template -->
        <div id="canvas">
            <div id="box_wrapper">

                <!-- template sections -->

                <header class="page_header header_darkgrey columns_padding_0 table_section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-4 text-center">
                                <a href="/" class="logo logo_image">

                                    <img src="/assets/web/images/logo.png" alt="">
                                </a>
                            </div>
                            <div class="col-sm-8 text-center">
                                <!-- main nav start -->
                                <nav class="mainmenu_wrapper">
                                    <ul class="mainmenu nav sf-menu">
                                        <li<?=($perfil=='Modelos')?" class='active'":""?>>
                                            <a href="/web/pagina/Modelos/">Modelos</a>
                                        </li>
                                        <li<?=($perfil=='Masajistas')?" class='active'":""?>>
                                            <a href="/web/pagina/Masajistas/">Masajitas</a>
                                        </li>
                                        <li<?=($perfil=='Fantasias')?" class='active'":""?>>
                                            <a href="/web/pagina/Fantasias/">Fantasias</a>
                                        </li>
                                        <li<?=($perfil=='AlgoDistinto')?" class='active'":""?>>
                                            <a href="/web/pagina/AlgoDistinto/">Algo Distinto</a>
                                        </li>
                                       
                                        <!-- eof pages -->

                                        <li>
                                            <a href="#">Buscador</a>
                                        </li>

                                        <li>
                                            <a href="#">Contacto</a>
                                        </li>

                                    </ul>
                                </nav>
                                <!-- eof main nav -->
                                <span class="toggle_menu">
                                    <span></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </header>