# semana3
1. Creación de la estructura básica del tema:
Comenzamos creando un tema de WordPress desde cero, donde configuramos los archivos esenciales:

style.css: El archivo principal de estilos que define el nombre, autor, y otros detalles del tema.

index.php: El archivo principal para la presentación de contenido.

header.php: Contiene la estructura de la cabecera, incluyendo el menú de navegación y el encabezado del sitio.

footer.php: Definimos el pie de página, donde colocamos la información de copyright y la función wp_footer().

functions.php: Agregamos funciones para habilitar características como menús personalizados y la activación de widgets.

sidebar.php: Definimos el área para mostrar la barra lateral y los widgets activos.

2. Desarrollo de la funcionalidad de los widgets:
Registramos la barra lateral (sidebar) en functions.php usando register_sidebar(), lo que permitió mostrar widgets en el sitio.

Creamos un widget personalizado en el archivo functions.php.

Implementamos la lógica en sidebar.php para mostrar los widgets activos mediante dynamic_sidebar().

3. Creación y personalización de la página de inicio:
Modificamos home.php para mostrar los últimos artículos del blog y llamamos al archivo get_sidebar().

Personalizamos el diseño con estilos en style.css, incluyendo estilos básicos para el cuerpo, el encabezado, el menú, el sidebar y los widgets.

4. Configuración de menús personalizados:
Registramos un menú principal en functions.php para que los usuarios pudieran navegar fácilmente por el sitio.

Definimos la estructura de menú en el archivo header.php usando la función wp_nav_menu().

5. Subida del proyecto a GitHub:
Inicializamos un repositorio en GitHub, creamos un repositorio vacío y configuramos Git en la máquina local.

Subimos todos los archivos del tema a GitHub, asegurándonos de que el contenido de wp-content (como el tema y los plugins) estuviera incluido.