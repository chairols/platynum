$(document).ready(function() {
    var updateOutput = function(e)
    {
        var list   = e.length ? e : $(e.target),
            output = list.data('output');
        if (window.JSON) {
            output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
        } else {
            output.val('JSON browser support required for this demo.');
        }
    };

    // activate Nestable for list 1
    $('#nestable').nestable({
        group: 1,
        maxDepth: 1
    })
    .on('change', updateOutput);

    
    $("#nestable").change(function() {
        actualizar_orden();
    });

    // output initial serialised data
    updateOutput($('#nestable').data('output', $('#nestable-output')));

});

function actualizar_orden() {
    datos = {
        'orden': $("#nestable-output").val()
    };
    $.ajax({
        type: 'POST',
        url: '/modelos/actualizar_orden/',
        data: datos,
        beforeSend: function () {
            
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
        }
    });
}

$("#select").change(function() {
    window.location.replace("/modelos/ordenar/"+$("#select").val()+"/");
});