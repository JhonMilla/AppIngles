document.addEventListener('DOMContentLoaded', function() {
    const animalImagesContainer = document.getElementById('animal-images');
    const soundElement = document.getElementById('sonido_animal');

    // Realizar una solicitud AJAX para obtener los datos de los animales desde el servidor
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'server.php', true);
    xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 400) {
            const animales = JSON.parse(xhr.responseText);
            animales.forEach(animal => {
                // Crear una imagen para cada animal y asociar el sonido correspondiente
                const image = document.createElement('img');
                image.src = '../img/' + animal.imagen;
                image.alt = animal.nombre;
                image.setAttribute('data-sound', animal.sonido);

                // Agregar event listener para reproducir sonido al hacer clic en la imagen
                image.addEventListener('click', function() {
                    const soundSrc = image.getAttribute('data-sound');
                    soundElement.src = '../sonidos/' + soundSrc;
                    soundElement.play().catch(error => {
                        console.error('Error al reproducir el sonido:', error);
                    });
                });

                // Agregar la imagen al contenedor de imágenes
                animalImagesContainer.appendChild(image);
            });
        } else {
            console.error('Error al obtener los datos de los animales');
        }
    };
    xhr.send();
});