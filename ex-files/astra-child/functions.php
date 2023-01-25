<?php
add_action( 'wp_enqueue_scripts', 'astra_child_enqueue_styles' );
function astra_child_enqueue_styles() {
 
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'parent-style' )
    );
}

add_action('acf/init', 'lil_define_block');
function lil_define_block() {
	
	// check function exists
	if( function_exists( 'acf_register_block' ) ) {
		
		// register a fun facts block
		acf_register_block(array(
			'name'				=> 'fun-facts',
			'title'				=> __( 'Fun Facts' ),
			'description'		=> __('A custom fun facts block.'),
			'render_callback'	=> 'lil_render_fun_facts_block',
			'category'			=> 'layout',
			'icon'				=> 'nametag',
			'keywords'			=> array( 'fun', 'facts', 'profiles', 'acf' ),
		));
	}
}

define( 'LIL_PATH', trailingslashit( get_stylesheet_directory() ) );
function lil_render_fun_facts_block( $block ) {
	
	// convert name ("acf/fun-facts") into path friendly slug ("fun-facts")
	$slug = str_replace( 'acf/', '', $block['name'] );
	if( file_exists( LIL_PATH . "template-parts/block/content-{$slug}.php" ) ) {
		include( LIL_PATH . "template-parts/block/content-{$slug}.php" );
	}
}