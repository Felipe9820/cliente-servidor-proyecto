document.addEventListener("DOMContentLoaded", function () {
  eventListeners();
});

function eventListeners() {
  const menu = document.querySelector(".mobile-menu");
  menu.addEventListener("click", navegacionResponsive);
  const metodoContacto = document.querySelectorAll(
    'input[name="contacto"]'
  );

  metodoContacto.forEach((input) =>
    input.addEventListener("click", mostrarMetodoContacto)
  );
}

function navegacionResponsive() {
  const navegacion = document.querySelector(".navegacion");

  navegacion.classList.toggle("mostrar");
}

function mostrarMetodoContacto(e) {
  const contactoDiv = document.querySelector("#contacto");

  if (e.target.value === "telefono") {
    contactoDiv.innerHTML = `
    <label for="telefono">Número de Teléfono:</label>
            <input type="tel" placeholder="Tu Teléfono" id="telefono" name="contacto[telefono]" />

            <p>Elija la fecha y la hora para la llamada</p>

            <label for="fecha">Fecha</label>
            <input type="date" id="fecha" name="contacto[fecha]"/>

            <label for="hora">Hora:</label>
            <input type="time" id="hora" min="09:00" max="18:00" name="contacto[hora]"/>
    `;
  } else {
    contactoDiv.innerHTML = `
    <label for="email">E-mail:</label>
    <input type="email" placeholder="Tu Correo Eléctronico" id="email" name="contacto[email]" />
    `;
  }
}