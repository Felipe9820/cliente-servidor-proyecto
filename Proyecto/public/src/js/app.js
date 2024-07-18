document.addEventListener("DOMContentLoaded", function () {
  eventListeners();
});

function eventListeners() {
  const menu = document.querySelector(".mobile-menu");
  menu.addEventListener("click", navegacionResponsive);
}

function navegacionResponsive() {
  const navegacion = document.querySelector(".navegacion");

  navegacion.classList.toggle("mostrar");
}
