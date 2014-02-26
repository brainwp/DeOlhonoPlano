<?php
if ( function_exists('register_sidebar') ) {
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div> <!-- end .widget -->',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	) );
	register_sidebar( array(
		'name' => 'Contador',
		'id' => 'contador',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div> <!-- end .widget -->',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	) );
	register_sidebar( array(
		'name' => 'Slider',
		'id' => 'slider',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div> <!-- end .widget -->',
	) );
	register_sidebar( array(
		'name' => 'Widgets Home',
		'id' => 'widgets-home',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div> <!-- end .widget -->',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	) );
}
?>