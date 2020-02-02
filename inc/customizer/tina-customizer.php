<?php 
define('BONIK_DOKAN_SIMPOL_SHOP_CUSTOMIZER_ID','bonik_simpole_shop_settings');
define('BONIK_DOKAN_SIMPOL_SHOP_PANALE_ID','bonik_customizer_pannel_id');

if(class_exists('Kirki')){ 

	Kirki::add_config( BONIK_DOKAN_SIMPOL_SHOP_CUSTOMIZER_ID, array(
		'capability'    => 'edit_theme_options',
		'option_type'   => 'theme_mod',
	) );

	Kirki::add_panel( BONIK_DOKAN_SIMPOL_SHOP_PANALE_ID, array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Bonik Shop', 'kirki' ),
	    'description' => esc_html__( 'My panel description', 'kirki' ),
	) );

	Kirki::add_section( 'bonike_simpol_section', array(
	    'title'          => esc_html__( 'Bonik Home Page', 'kirki' ),
	    'description'    => esc_html__( 'My section description.', 'kirki' ),
	    'panel'          => BONIK_DOKAN_SIMPOL_SHOP_PANALE_ID,
	    'priority'       => 160,
	    'active_callback'=>function(){
	    	return is_page_template('page-template/homepage.php');
	    }
	) );

}

