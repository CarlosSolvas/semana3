<?php get_header(); ?>

<main>
    <h1>Bienvenido a Mi Sitio</h1>
    <p>Este es un tema de WordPress creado desde cero.</p>

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_title('<h2>', '</h2>');
            the_excerpt();
        endwhile;
    else :
        echo '<p>No hay contenido disponible.</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>
