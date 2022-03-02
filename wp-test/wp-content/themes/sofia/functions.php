<?php
	add_action( 'wp_enqueue_scripts', 'style_theme' );
	add_action( 'wp_footer', 'scripts_theme' );
    add_action( 'after_setup_theme', 'test_after_setup' );
	
	function style_theme() {
		wp_enqueue_style('style', get_stylesheet_uri());
		wp_enqueue_style('main',get_template_directory_uri() .'/assets/css/styles.css',false,time());
        wp_enqueue_style('owl-min',get_template_directory_uri() .'/assets/css/vnd/owl/owl.carousel.min.css',false,time());
        wp_enqueue_style('owl-default',get_template_directory_uri() .'/assets/css/vnd/owl/owl.theme.default.css',false,time());
		
	}
	add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
 function my_scripts_method() {
  // отменяем зарегистрированный jQuery
  // вместо "jquery-core", можно вписать "jquery", тогда будет отменен еще и jquery-migrate
  wp_deregister_script( 'jquery-core' );
  wp_enqueue_script('jquery-core', get_template_directory_uri() .'/assets/js/vnd/jquery/jquery-3.5.1.min.js');
  wp_enqueue_script( 'jquery' );
 }
    
    
    
    
	function scripts_theme() {
		
        
    
        
		wp_enqueue_script('main', get_template_directory_uri() .'/assets/js/scripts.js', array('jquery-core'), null, true);
        wp_enqueue_script('carousel', get_template_directory_uri() .'/assets/js/vnd/owl/owl.carousel.min.js',array('jquery-core'), null, true);
            wp_enqueue_script('parallax', get_template_directory_uri() .'/assets/js/vnd/parallax/parallax.min.js',array('jquery-core'), null, true);
        wp_enqueue_script('idtabs', get_template_directory_uri() .'/assets/js/vnd/idtabs/jquery.idTabs.js',array('jquery-core'), null, true);
        wp_enqueue_script('blueimp', get_template_directory_uri() .'/assets/js/vnd/blueimp/blueimp-gallery.min.js', array('jquery-core'), null, true);
        wp_enqueue_script('sticky', get_template_directory_uri() .'/assets/js/vnd/sticky/sticky.js',array('jquery-core'), null, true);
        wp_enqueue_script('modal-video', get_template_directory_uri() .'/assets/js/vnd/modal-video/jquery-modal-video.min.js',array('jquery-core'), null, true);
}
    
function test_after_setup() {
  register_nav_menu( 'main_menu', 'Основное меню');
 }


?>
