<main class="contenedor seccion">
  <h1>Más Sobre Nosotros</h1>

  <?php include 'iconos.php'; ?>

</main>
<section class="seccion contenedor">
  <h2>Casas en Ventas</h2>

  <?php

  include 'listado.php';
  ?>

  <div class="alinear-derecha">
    <a href="/propiedades" class="boton-verde"> Ver todas </a>
  </div>
</section>

<section class="imagen-contacto">
  <h2>Encuentra la casa de tus sueños</h2>
  <p>
    Llena el formulario de contacto y un asesor se pondrá en contacto
    contigo a la brevedad
  </p>
  <a href="/contacto" class="boton-amarillo"> Contáctanos </a>
</section>



<div class="contenedor seccion seccion-inferior ">

  <section class="blog">
    <h3>Nuestro Blog</h3>

    <article class="entrada-blog">
      <div class="imagen">
        <picture>

          <img src="src/img/blog1.jpg" alt="Imagen Blog" />
        </picture>
      </div>
      <div class="texto-entrada">
        <a href="/entrada">
          <h4>Terraza en el techo de tu casa</h4>
          <p class="informacion-meta">
            Escrito el: <span>20/10/2022</span> por: <span>Admin</span>
          </p>

          <p>
            Consejos para construir una terraza en el techo de tu casa con
            los mejores materiales ahorrando dinero
          </p>
        </a>
      </div>
    </article>

    <article class="entrada-blog">
      <div class="imagen">
        <picture>

          <img src="src/img/blog2.jpg" alt="Imagen Blog" />
        </picture>
      </div>
      <div class="texto-entrada">
        <a href="/entrada">
          <h4>Guía para la decoración de tu hogar</h4>
          <p class="informacion-meta">
            Escrito el: <span>20/10/2022</span> por: <span>Admin</span>
          </p>

          <p>
            Maximiza el espacio en tu hogar con esta guía, aprende a
            combinar muebles y colores para darle vida a tu espacio
          </p>
        </a>
      </div>
    </article>
  </section>
  <section class="testimoniales">
    <h3>Testimoniales</h3>
    <div class="testimonial">
      <blockquote>
        El personal se comportó de una excelente forma, muy buena atención y
        la casa que me ofrecieron cumple con todas mis expectativas.
      </blockquote>
      <p>- Sebas Hidalgo</p>
    </div>
  </section>
</div>