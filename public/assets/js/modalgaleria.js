document.addEventListener('DOMContentLoaded', function () {
  var verFotoBtns = document.querySelectorAll('.ver-foto-btn');
  var imagenModal = document.getElementById('imagenModal');
  var imagenModalSrc = document.getElementById('imagenModalSrc');
  var btnAnterior = document.querySelector('.btn-anterior');
  var btnSiguiente = document.querySelector('.btn-siguiente');

  var imagenes = [];
  verFotoBtns.forEach(function (btn) {
      var imagenSrc = btn.parentElement.previousElementSibling.querySelector('.img__full').getAttribute('src');
      imagenes.push(imagenSrc);
      btn.addEventListener('click', function (e) {
          e.preventDefault();
          var indice = imagenes.indexOf(imagenSrc);
          imagenModalSrc.setAttribute('src', imagenSrc);
          imagenModal.setAttribute('data-indice', indice);
          $('#imagenModal').modal('show'); // Abre el modal
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