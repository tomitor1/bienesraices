<?php
    include './includes/templates/header.php'

?>

    <main class="contenedor">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa dicta soluta blanditiis sequi eos cupiditate quod odit hic ullam aliquid voluptatibus odio quis esse aspernatur maxime ratione illo, harum expedita!</p>
            </div>
        </div>
    </main>

    <section class="contenedor">
        <h1>Mas Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono-seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores autem dolorum ducimus, 
                    ab fugit necessitatibus magni animi perferendis cupiditate laboriosam esse facili</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono-seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores autem dolorum ducimus, 
                    ab fugit necessitatibus magni animi perferendis cupiditate laboriosam esse facili</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono-seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores autem dolorum ducimus, 
                    ab fugit necessitatibus magni animi perferendis cupiditate laboriosam esse facili</p>
            </div>
        </div>
    </section>


    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.html">Nosotros</a>
                <a href="anuncios.html">Anuncios</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contacto</a>
            </nav>
        </div>

        <p class="copyright">Todos los derechos reservados 2021 &copy;</p>
    </footer>

    

    <script src="build/js/bundle.min.js"></script>
</body>
</html>