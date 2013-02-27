<?php
define('HEADER_TEXTCOLOR', 'ffffff');
define('HEADER_IMAGE', get_template_directory_uri().'/images/header.jpg');
define('HEADER_IMAGE_WIDTH', 680);
define('HEADER_IMAGE_HEIGHT', 140);
if (!isset($content_width)) {
    $content_width = 450;
}
    
add_theme_support('automatic-feed-links');
add_theme_support('post-thumbnails');

add_action( 'widgets_init', 'limeslice_widgets_init' );
function limeslice_widgets_init() {
        register_sidebar( array(
            'name'  => 'Sidebar',
            'id'    => 'sidebar',
            'description'   => 'Right Sidebar',
            'before_title'=>'<h3>',
            'after_title'=>'</h3>',
            'before_widget'=>'<div class="box">',
            'after_widget'=>'</div>'
        ) );
}

register_nav_menu('main', 'Main navigation menu');

wp_register_style('limeslice_ie', get_template_directory_uri().'/ie.css');
wp_enqueue_style( 'limeslice_ie');

add_custom_background('limeslice_custom_background');

function limeslice_custom_background() {
    /* Get the background image. */
    $image = get_background_image();
    /* If there's an image, just call the normal WordPress callback. We won't do anything here. */
    if ( !empty( $image ) ) {
            _custom_background_cb();
            return;
    }
    /* Get the background color. */
    $color = get_background_color();
    /* If no background color, return. */
    if ( empty( $color ) )
            return;
    /* Use 'background' instead of 'background-color'. */
    $style = "background: #{$color};";
?>
<style type="text/css">body { <?php echo trim( $style ); ?> }</style>
<?php
}

function limeslice_header_style() {
    ?><style type="text/css">
        #header {
            background: url(<?php header_image(); ?>) no-repeat;
        }
        #header h1 a,
        #header .description {
            color: #<?php header_textcolor();?>;
        }
    </style><?php
}

function limeslice_admin_header_style() {
    ?><style type="text/css">
        #header {
            width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
            height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
        }
    </style><?php
}
add_custom_image_header('limeslice_header_style', 'limeslice_admin_header_style');
