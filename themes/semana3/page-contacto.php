<?php
/* Template Name: Contacto */
get_header();
?>

<main>
    <h1>Formulario de Contacto</h1>

    <form action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" required></textarea>

        <button type="submit">Enviar</button>
    </form>
</main>

<?php get_footer(); ?>
