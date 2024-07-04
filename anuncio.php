<?php
    include './includes/templates/header.php'

?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image.webp">
            <source srcset="build/img/destacada.jpg" type="image.jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la propiedad del bosque">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
        </div>
        <ul class="iconos-carecteristicas">
            <li>
                <img src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                <p>3</p>
            </li>
            <li>
                <img src="build/img/icono_estacionamiento.svg" alt="icono wc" loading="lazy">
                <p>3</p>
            </li>
            <li>
                <img src="build/img/icono_dormitorio.svg" alt="icono wc" loading="lazy">
                <p>3</p>
            </li>
        </ul>

        <p>Lorem ipsum dolor sit amet consectetur 
            adipisicing elit. Dignissimos laboriosam 
            iste qui labore a! Vero, perferendis 
            accusamus reprehenderit, tempore vitae, 
            itaque minima eaque nesciunt 
            exercitationem veritatis voluptatibus 
            ex distinctio dolore.</p>
    </main>

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