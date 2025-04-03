<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <h1><a href="<?php echo home_url(); ?>">Mi Sitio</a></h1>
        <nav class="main-nav">
            <?php 
                wp_nav_menu(array(
                    'theme_location' => 'menu-principal',
                    'container' => false,
                    'menu_class' => 'menu',
                    'fallback_cb' => false
                ));
            ?>
        </nav>
    </header>
