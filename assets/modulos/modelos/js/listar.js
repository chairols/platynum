$(document).ready(function() {
    $(".overlay").hide();
    $(".box-body").show();
    
    $('.select2').select2();
});

$("#select").change(function() {
    window.location.replace("/modelos/listar/?estado="+$("#select").val());
});