var exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {

  var form = document.getElementById('formBorrar');
  
  var button = event.relatedTarget

  var sigles = button.getAttribute('data-bs-sigles');
  var action = button.getAttribute('data-action');
  form.setAttribute('action', action);
  var modalBodyInput = exampleModal.querySelector('.modal-body');
  modalBodyInput.innerHTML = '¿Estás seguro de que quieres borrar el curso ' + sigles + '?';

})