<aside id="sidebar-1">
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    <?php else : ?>
        <p>No hay widgets activos.</p>
    <?php endif; ?>
</aside>
