<div class="content-wrapper">
    <section class="content">
        <img id="image" src="/Fotodisk/<?= $modelo['perfil'] ?>/<?= $modelo['carpeta'] ?>/<?= $modelo['carpeta'] ?><?= $idfoto ?>.jpg">

        <button onclick="crop()" class="btn btn-primary">
            Boton
        </button>
    </section>
</div>

<input id="idfoto" value="<?=$idfoto?>" type="hidden">
<input id="idmodelo" value="<?=$modelo['ID']?>" type="hidden">