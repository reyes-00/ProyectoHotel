document.addEventListener('DOMContentLoaded', function () {
    var deluxeAreaItems = document.querySelectorAll('.deluxe__area-item');
    var imagenModal = document.getElementById('imagenModal');
    var imagenModalSrc = document.getElementById('imagenModalSrc');
    var btnAnterior = document.querySelector('.btn-anterior');
    var btnSiguiente = document.querySelector('.btn-siguiente');
    var imagenes = [];

    
    deluxeAreaItems.forEach(function (item, index) {
        var imagenSrc = item.querySelector('.img__full').getAttribute('src');
        imagenes.push(imagenSrc);

        item.addEventListener('click', function () {
            imagenModalSrc.setAttribute('src', imagenSrc);
            imagenModal.setAttribute('data-indice', index); 
            $('#imagenModal').modal('show');
        });
    });

    btnAnterior.addEventListener('click', function () {
        var indice = parseInt(imagenModal.getAttribute('data-indice'));
        if (indice > 0) {
            indice -= 1;
            imagenModalSrc.setAttribute('src', imagenes[indice]);
            imagenModal.setAttribute('data-indice', indice);
        }
    });

    btnSiguiente.addEventListener('click', function () {
        var indice = parseInt(imagenModal.getAttribute('data-indice'));
        if (indice < imagenes.length - 1) {
            indice += 1;
            imagenModalSrc.setAttribute('src', imagenes[indice]);
            imagenModal.setAttribute('data-indice', indice);
        }
    });
});
