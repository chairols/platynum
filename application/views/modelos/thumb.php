<div class="content-wrapper">
    <section class="content">
        <img id="image" src="/Fotodisk/<?= $modelo['perfil'] ?>/<?= $modelo['carpeta'] ?>/<?= $modelo['carpeta'] ?><?= $idfoto ?>.jpg">

        <br>
        <div class="text-center">
            <a href="/modelos/agregar_fotos/<?=$modelo['ID']?>/">
                <button class="btn btn-primary">
                    <i class="fa fa-backward"></i> Volver
                </button>
            </a>
            <button onclick="crop()" class="btn btn-primary">
                Crear Thumb
            </button>
            <a href="/modelos/ver/<?=$modelo['ID']?>/" target="_blank">
                <button class="btn btn-primary">
                    <i class="fa fa-user"></i> Ver Perfil
                </button>
            </a>
        </div>
    </section>
</div>

<input id="idfoto" value="<?= $idfoto ?>" type="hidden">
<input id="idmodelo" value="<?= $modelo['ID'] ?>" type="hidden">