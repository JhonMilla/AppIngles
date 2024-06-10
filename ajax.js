function cargarDatosModificar(id_animal) {
    $.ajax({
        url: '../controlador/modificar_animal.php',
        method: 'POST',
        data: { id_animal: id_animal },
        dataType: 'json',
        success: function(response) {
            $('#nomEsp_animal').val(response.nomEsp_animal);
            $('#nomEng_animal').val(response.nomEng_animal);
            $('#pronunciacion_animal').val(response.pronunciacion_animal);

            // Cargar la imagen
            $('#imagen_animal').attr('src', 'data:image/png;base64,' + response.img_animal);

            // Cargar el audio
            $('#audio_animal').attr('src', 'data:audio/mp3;base64,' + response.audio_animal);
        }
    });
}

// Agregar evento de clic al botón de edición en cada fila de la tabla
$('.btn-editar').click(function() {
    // Obtener el ID del animal de la fila
    var idAnimal = $(this).data('id-animal');

    // Cargar los datos del animal en el formulario de modificación
    cargarDatosAnimal(idAnimal);
});