<?php 
//loading the scripts
function enqueue_customtheme_styles(){
	wp_enqueue_script('bootstrap-js','bootstrap.cdn.3.3.7', array('jquery'));
	wp_enqueue_style('bootstrap', '//bootstrap.cdn.3.3.7..');
	wp_enqueue_style('customtheme-style', get_stylesheet_uri);
}
add_action('wp_enqueue_scripts', 'enqueue_custometheme_style');

//setup customtheme
//register nav
//add title
function customtheme_setup(){
	//register nav
	register_nav_menus(array(
	   'primary' => __('Primary Menu', 'customtheme'),
	));
    
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'customtheme_setup');

//register sidebar
function customtheme_widgets(){
	//register the sidebar
	register_sidebar(array(
       'name'			=> __('Sidebar', 'customtheme'),
       'id'				=>'sidebar-1',
       'description'	=>'Place Widgets Here to Put Them On Sidebar',
       'before_widget'	=>'<setup id="%1$s" class="widget %2$s">',
       'after_widget'	=>'</setup>',
       'before_title'	=>'<h2 class="widget-title">',
       'after_title'	=>'</h2>'
		));
}
add_action('widget_init', 'customtheme_widgets');

?>