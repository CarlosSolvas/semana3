<?php
// Función para habilitar soporte de menús y registrar el menú
function semana3_setup() {
    // Habilitar soporte para menús
    add_theme_support('menus'); 

    // Registrar el menú principal
    register_nav_menu('menu-principal', 'Menú 1');
}
add_action('after_setup_theme', 'semana3_setup');

// Función para registrar los widgets
function semana3_widgets_init() {
    // Registrar la barra lateral
    register_sidebar(array(
        'name'          => 'Sidebar Principal',
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    // Registrar un widget personalizado
    register_widget('Semana3_Widget');
}
add_action('widgets_init', 'semana3_widgets_init');

// Cargar estilos personalizados
function semana3_enqueue_styles() {
    wp_enqueue_style('semana3-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'semana3_enqueue_styles');

// Definir el widget personalizado
class Semana3_Widget extends WP_Widget {
    function __construct() {
        parent::__construct(
            'semana3_widget', // ID del widget
            'Widget Semana 3', // Nombre del widget
            array( 'description' => 'Un widget personalizado de Semana 3.' ) // Descripción
        );
    }

    // Mostrar el widget
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
        echo '<p>Este es un widget personalizado de Semana 3.</p>';
        echo $args['after_widget'];
    }

    // Formulario en el administrador para el widget
    public function form( $instance ) {
        if ( isset( $instance['title'] ) ) {
            $title = $instance['title'];
        } else {
            $title = __( 'Nuevo Título', 'text_domain' );
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Título:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <?php
    }

    // Guardar los datos del widget
    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

        return $instance;
    }
}
?>
