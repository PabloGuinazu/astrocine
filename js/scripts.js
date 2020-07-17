var inicio = function() {

    $(".eliminar").click(function(e) {
        e.preventDefault(); //evita recargar la pagina
        var id = $(this).attr('data-id');
        $(this).parentsUntil('.producto').remove();
        $.post('js/eliminar.php', {
            Id: id
        }, function(a) {
            if (a == '0') {
                location.href = "./carritoCompras.php";
            }

        });
    });
}
$(document).on('ready', inicio);