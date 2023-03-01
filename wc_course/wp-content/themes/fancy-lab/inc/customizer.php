<?php 

/**
 * Fany Lab Theme Customizer
 *
 * @package Fancy Lab
 */

function fancy_lab_customizer( $wp_customize ){

	// Copyright Section

	$wp_customize->add_section(
		'sec_copyright', array(
			'title'			=> 'Copyright Settings',
			'description'	=> 'Copyright Section'
		)
	);

			// Field 1 - Copyright Text Box
			$wp_customize->add_setting(
				'set_copyright', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_copyright', array(
					'label'			=> 'Copyright',
					'description'	=> 'Please, add your copyright information here',
					'section'		=> 'sec_copyright',
					'type'			=> 'text'
				)
			);

	/*--------------------------------------------------------------------------------*/
   // Slider Section
	
   $wp_customize->add_section(
		'sec_slider', array(
			'title'			=> 'Slider Settings',
			'description'	=> 'Slider Section'
		)
	);

		// Field 1 - Slider Page Number 1

		$wp_customize->add_setting(
			'set_slider_page1', array(
				'type'					=> 'theme_mod',
				'default'				=> '',
				'sanitize_callback'		=> 'absint'
			)
		);

		$wp_customize->add_control(
			'set_slider_page1', array(
				'label'			=> 'Set slider page 1',
				'description'	=> 'Set slider page 1',
				'section'		=> 'sec_slider',
				'type'			=> 'dropdown-pages'
			)
		);

		// Field 2 - Slider Button Text Number 1

		$wp_customize->add_setting(
			'set_slider_button_text1', array(
				'type'					=> 'theme_mod',
				'default'				=> '',
				'sanitize_callback'		=> 'sanitize_text_field'
			)
		);

		$wp_customize->add_control(
			'set_slider_button_text1', array(
				'label'			=> 'Button Text for Page 1',
				'description'	=> 'Button Text Page 1',
				'section'		=> 'sec_slider',
				'type'			=> 'text'
			)
		);

		
		// Field 3 - Slider Button URL Number 1

		$wp_customize->add_setting(
			'set_slider_button_url1', array(
				'type'					=> 'theme_mod',
				'default'				=> '',
				'sanitize_callback'		=> 'esc_url_raw'
			)
		);

		$wp_customize->add_control(
			'set_slider_button_url1', array(
				'label'			=> 'URL for Page 1',
				'description'	=> 'URL for Page 1',
				'section'		=> 'sec_slider',
				'type'			=> 'url'
			)
		);
}
add_action( 'customize_register', 'fancy_lab_customizer' );