let botonAgregarEjercicio = document.getElementById("agregar-ejercicio");
let agregarEjercicioForm = document.getElementById("agregar-ejercicio-form");

agregarEjercicioForm.addEventListener("submit", function(event){
    event.preventDefault();
    const formularioData = new FormData(agregarEjercicioForm);
    insertarNuevoEjercicio(formularioData);
});

let eliminarEjercicioForm  = document.getElementById("eliminar-ejercicio-form");

eliminarEjercicioForm.addEventListener("submit", function(event){
    event.preventDefault();
    const formularioData = new FormData(eliminarEjercicioForm);
    eliminarEjercicio(formularioData);
});


let editarEjercicioForm = document.getElementById("editar-ejercicio-form");

editarEjercicioForm.addEventListener("submit", function (event){
    event.preventDefault();
    const formularioData = new FormData(editarEjercicioForm);
    editarEjercicio(formularioData);
});

let botonMostrarRutina = document.getElementById("mostrar-rutina");
const gridDivPark = document.getElementsByClassName("grid-div-park"); /* div padre donde iran las rutinas*/
botonMostrarRutina.addEventListener("click", function (event){
    event.preventDefault();
    mostrarRutina();
});