<?php get_header(); ?>

<main>
    <h1>Últimos Artículos</h1>

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            ?>
            <article>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php the_excerpt(); ?></p>
            </article>
            <?php
        endwhile;
    else :
        echo '<p>No hay artículos disponibles.</p>';
    endif;
    ?>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
