<main class="contenedor seccion">
    <h1>Contacto</h1>
    <picture>
        <img src="src/img/contacto.jpg" alt="Imagen contacto" />
    </picture>


    <h2>Llene el formulario de contacto</h2>

    <form class="formulario" novalidate>
        <fieldset>
            <legend>Información Personal</legend>

            <label for="nombre">Nombre:</label>
            <input type="text" placeholder="Tu Nombre" id="nombre" name="nombre" required />

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" required></textarea>
        </fieldset>

        <fieldset>
            <legend>Información sobre Propiedad</legend>

            <label for="opciones">Vende o Compra:</label>
            <select id="opciones" name="tipo" required>
                <option selected disabled>--Seleccione--</option>
                <option value="Vende">Venta</option>
                <option value="Compra">Compra</option>
            </select>

            <label for="presupuesto">Precio o Presupuesto:</label>
            <input type="number" placeholder="Tu Precio o Presupuesto" id="presupuesto" min="1" name="precio"
                required />
        </fieldset>

        <fieldset>
            <legend>Contacto</legend>

            <p>Como desea ser Contactado:</p>

            <div class="forma-contacto">
                <label for="contactar-telefono">Teléfono</label>
                <input type="radio" id="contactar-telefono" value="telefono" name="contacto" required />

                <label for="contactar-email">E-Mail</label>
                <input type="radio" id="contactar-email" value="email" name="contacto" required />
            </div>

            <div id="contacto"></div>

        </fieldset>

        <input type="submit" value="Enviar" class="boton-verde">
    </form>
</main>