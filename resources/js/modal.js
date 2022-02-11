var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')


/*var textoModal = document.getElementById('textoModal');

borrarBoton.addEventListener("click", nombreCurso());

function nombreCurso(){
    var curso = borrarBoton.value;
    textoModal.innerHTML = '¿Estás seguro de que quieres borrar el curso ' + curso + '?';
}*/



var exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {

  var button = event.relatedTarget

  var sigles = button.getAttribute('data-bs-sigles')
  var modalBodyInput = exampleModal.querySelector('.modal-body')
  modalBodyInput.innerHTML = '¿Estás seguro de que quieres borrar el curso ' + sigles + '?';
})