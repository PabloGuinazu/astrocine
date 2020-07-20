$(document).ready(function() {

    $(".eliminar").click(function() {
        var imagen = $(this).parent('td').parent('tr').find('.imagen').val();
        $(this).parent('td').parent('tr').remove();
        $.post('../admin/ejecutar.php', {
            Caso: 'Eliminar',
            Id: $(this).attr('data-id'),
            Imagen: imagen
        }, function(e) {
            alert(e);
        });
    });
    $(".modificar").click(function() {
        var nombre = $(this).parent('td').parent('tr').find('.nombre').val();
        var descripcion = $(this).parent('td').parent('tr').find('.descripcion').val();
        var video = $(this).parent('td').parent('tr').find('.video').val();
        $.post('../admin/ejecutar.php', {
            Caso: 'Modificar',
            Id: $(this).attr('data-id'),
            Nombre: nombre,
            Descripcion: descripcion,
            Video: video
        }, function(e) {
            alert(e);
        });
    });
});