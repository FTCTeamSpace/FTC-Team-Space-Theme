<?php

function FTCTeamSpace_resources(){
	
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('slider', get_template_directory_uri() .'/css/slider.css');
	wp_enqueue_style('google-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons');
	wp_enqueue_style('font-roboto', 'https://fonts.googleapis.com/css?family=Roboto');
	wp_enqueue_script('nav', get_template_directory_uri() .'/js/nav.js', array('jquery'));
	wp_enqueue_script('slider', get_template_directory_uri() .'/js/slider.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'FTCTeamSpace_resources');


function FTCTeamSpace_setup(){
	//Navigation Menus
	register_nav_menus(array(
		'primary' => __('Hoofdmenu')
	));
	
	//Featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 132, 110, true);
	add_image_size('main-banner', 950, 250, true);
	add_image_size('post-image', 300, 250, true);

}

add_action('after_setup_theme', 'FTCTeamSpace_setup');

//Custom excerpt length
function custom_excerpt_length(){
	return 25;
}

add_filter('excerpt_length','custom_excerpt_length');

//Add custom slider options
function FTCTeamSpace_image_slider($wp_customize){
	$wp_customize->add_section('FTCTeamSpace-image-slider-section',array(
		'title' => 'Image Slider'
	));
	
	//IMAGE 1
	$wp_customize->add_setting('FTCTeamSpace-image-slider-image1');
	
	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'FTCTeamSpace-image-slider-image1-control',array(
		'label' => 'Afbeelding 1',
		'section' => 'FTCTeamSpace-image-slider-section',
		'settings' => 'FTCTeamSpace-image-slider-image1',
		'width' => 950,
		'height' => 300
	)));
	
	$wp_customize->add_setting('FTCTeamSpace-image-slider-text1',array(
		'default' => 'Welkom op de website van FTC Team Space'
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'FTCTeamSpace-image-slider-text1-control',array(
		'label' => 'Afbeelding 1 onderschrift',
		'section' => 'FTCTeamSpace-image-slider-section',
		'settings' => 'FTCTeamSpace-image-slider-text1'
	)));
	
	$wp_customize->add_setting('FTCTeamSpace-image-slider-link1');
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'FTCTeamSpace-image-slider-link1-control',array(
		'label' => 'Afbeelding 1 link',
		'section' => 'FTCTeamSpace-image-slider-section',
		'settings' => 'FTCTeamSpace-image-slider-link1',
		'type' => 'dropdown-pages'
	)));
	
	//IMAGE 2
	$wp_customize->add_setting('FTCTeamSpace-image-slider-image2');
	
	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'FTCTeamSpace-image-slider-image2-control',array(
		'label' => 'Afbeelding 2',
		'section' => 'FTCTeamSpace-image-slider-section',
		'settings' => 'FTCTeamSpace-image-slider-image2',
		'width' => 950,
		'height' => 300
	)));
	
	$wp_customize->add_setting('FTCTeamSpace-image-slider-text2',array(
		'default' => 'Bekijk het team'
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'FTCTeamSpace-image-slider-text2-control',array(
		'label' => 'Afbeelding 2 onderschrift',
		'section' => 'FTCTeamSpace-image-slider-section',
		'settings' => 'FTCTeamSpace-image-slider-text2'
	)));
	
	$wp_customize->add_setting('FTCTeamSpace-image-slider-link2');
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'FTCTeamSpace-image-slider-link2-control',array(
		'label' => 'Afbeelding 2 link',
		'section' => 'FTCTeamSpace-image-slider-section',
		'settings' => 'FTCTeamSpace-image-slider-link2',
		'type' => 'dropdown-pages'
	)));
	
	//IMAGE 3
	$wp_customize->add_setting('FTCTeamSpace-image-slider-image3');
	
	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'FTCTeamSpace-image-slider-image3-control',array(
		'label' => 'Afbeelding 3',
		'section' => 'FTCTeamSpace-image-slider-section',
		'settings' => 'FTCTeamSpace-image-slider-image3',
		'width' => 950,
		'height' => 300
	)));
	
	$wp_customize->add_setting('FTCTeamSpace-image-slider-text3',array(
		'default' => 'Bekijk de robot'
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'FTCTeamSpace-image-slider-text3-control',array(
		'label' => 'Afbeelding 3 onderschrift',
		'section' => 'FTCTeamSpace-image-slider-section',
		'settings' => 'FTCTeamSpace-image-slider-text3'
	)));
	
	$wp_customize->add_setting('FTCTeamSpace-image-slider-link3');
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'FTCTeamSpace-image-slider-link3-control',array(
		'label' => 'Afbeelding 3 link',
		'section' => 'FTCTeamSpace-image-slider-section',
		'settings' => 'FTCTeamSpace-image-slider-link3',
		'type' => 'dropdown-pages'
	)));
	
	//IMAGE 4
	$wp_customize->add_setting('FTCTeamSpace-image-slider-image4');
	
	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'FTCTeamSpace-image-slider-image4-control',array(
		'label' => 'Afbeelding 4',
		'section' => 'FTCTeamSpace-image-slider-section',
		'settings' => 'FTCTeamSpace-image-slider-image4',
		'width' => 950,
		'height' => 300
	)));
	
	$wp_customize->add_setting('FTCTeamSpace-image-slider-text4',array(
		'default' => ''
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'FTCTeamSpace-image-slider-text4-control',array(
		'label' => 'Afbeelding 4 onderschrift',
		'section' => 'FTCTeamSpace-image-slider-section',
		'settings' => 'FTCTeamSpace-image-slider-text4'
	)));
	
	$wp_customize->add_setting('FTCTeamSpace-image-slider-link4');
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'FTCTeamSpace-image-slider-link4-control',array(
		'label' => 'Afbeelding 4 link',
		'section' => 'FTCTeamSpace-image-slider-section',
		'settings' => 'FTCTeamSpace-image-slider-link4',
		'type' => 'dropdown-pages'
	)));
	
	//IMAGE 5
	$wp_customize->add_setting('FTCTeamSpace-image-slider-image5');
	
	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'FTCTeamSpace-image-slider-image5-control',array(
		'label' => 'Afbeelding 5',
		'section' => 'FTCTeamSpace-image-slider-section',
		'settings' => 'FTCTeamSpace-image-slider-image5',
		'width' => 950,
		'height' => 300
	)));
	
	$wp_customize->add_setting('FTCTeamSpace-image-slider-text5',array(
		'default' => ''
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'FTCTeamSpace-image-slider-text5-control',array(
		'label' => 'Afbeelding 4 onderschrift',
		'section' => 'FTCTeamSpace-image-slider-section',
		'settings' => 'FTCTeamSpace-image-slider-text5'
	)));
	
	$wp_customize->add_setting('FTCTeamSpace-image-slider-link5');
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'FTCTeamSpace-image-slider-link5-control',array(
		'label' => 'Afbeelding 5 link',
		'section' => 'FTCTeamSpace-image-slider-section',
		'settings' => 'FTCTeamSpace-image-slider-link5',
		'type' => 'dropdown-pages'
	)));
}

add_action('customize_register','FTCTeamSpace_image_slider');
?>