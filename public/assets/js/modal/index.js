document.addEventListener('DOMContentLoaded', function () {
  const btnModal = document.getElementById('btn_modal');
  const modalContainer = document.querySelector('.contenedor_modal');

  btnModal.addEventListener('change', function () {
    if (this.checked) {
      document.body.classList.add('modal-open');
    } else {
      document.body.classList.remove('modal-open');
    }
  });

  modalContainer.addEventListener('click', function (event) {
    if (event.target === this && btnModal.checked) {
      btnModal.checked = false;
      document.body.classList.remove('modal-open');
    }
  });
});