document.addEventListener("DOMContentLoaded", function () {
  iniciarApp();
});

function iniciarApp() {
  buscarPorFecha();
}

function buscarPorFecha() {
  const fechaInput = document.querySelector("#fecha");
  fechaInput.addEventListener("input", function (e) {
    const fechaSeleccionada = e.target.value;

    // Montamos fecha seleccionada en la dirección del navegador
    window.location = `?fecha=${fechaSeleccionada}`;
  });
}
