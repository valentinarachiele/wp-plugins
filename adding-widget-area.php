// This code must be placed inside functions.php
add_action( 'widgets_init', 'miasidebar' );
function miasidebar() {
  $args = array(
    'name'          => 'Header sidebar',
    'id'            => 'header-sidebar',
    'description'   => 'Nuova area widget nella testata del mio tema',
    'class'         => '',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>' 
  );
  register_sidebar( $args );
}

// This code can be placed inside your template php file you want the widget area to appear
<?php if ( is_active_sidebar( 'header-sidebar' )  ) : ?>
  <?php dynamic_sidebar( 'header-sidebar' ); ?>
<?php endif; ?>
