<?php
/**
 * BFitMethod.
 *
 * This file adds the Customizer additions to the BFitMethod Theme.
 *
 * @package BFitMethod
 * @author  Bryan Chan
 * @license GPL-2.0+
 * @link    https://bfitmethod.com/
 */

add_action( 'customize_register', 'bfitmethod_customizer_register' );
/**
 * Register settings and controls with the Customizer.
 *
 * @since 2.2.3
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function bfitmethod_customizer_register( $wp_customize ) {

	$wp_customize->add_setting(
		'bfitmethod_link_color',
		array(
			'default'           => bfitmethod_customizer_get_default_link_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'bfitmethod_link_color',
			array(
				'description' => __( 'Change the color of post info links, hover color of linked titles, hover color of menu items, and more.', 'bfitmethod' ),
				'label'       => __( 'Link Color', 'bfitmethod' ),
				'section'     => 'colors',
				'settings'    => 'bfitmethod_link_color',
			)
		)
	);

	$wp_customize->add_setting(
		'bfitmethod_accent_color',
		array(
			'default'           => bfitmethod_customizer_get_default_accent_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'bfitmethod_accent_color',
			array(
				'description' => __( 'Change the default hovers color for button.', 'bfitmethod' ),
				'label'       => __( 'Accent Color', 'bfitmethod' ),
				'section'     => 'colors',
				'settings'    => 'bfitmethod_accent_color',
			)
		)
	);

}
