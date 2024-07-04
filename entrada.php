<?php
    include './includes/templates/header.php'

?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>

        <p class="informacion-meta">Escrito el: <span>20/06/2024</span>por: <span>Juan Torres</span></p>

        <picture>
            <source srcset="build/img/destacada.webp" type="image.webp">
            <source srcset="build/img/destacada.jpg" type="image.jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la propiedad del bosque">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
        </div>
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