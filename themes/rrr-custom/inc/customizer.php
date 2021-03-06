<?php
/**
 * _s Theme Customizer.
 *
 * @package Run Rabbit Run
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function rrr_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Add our social link options.
	$wp_customize->add_section(
		'rrr_social_links_section',
		array(
			'title'       => esc_html__( 'Social Links', 'rrr' ),
			'description' => esc_html__( 'These are the settings for social links. Please limit the number of social links to 5.', 'rrr' ),
			'priority'    => 90,
		)
	);

	// Add our Contact Email field.
	$wp_customize->add_setting(
		'rrr_email_link',
		array(
			'default' => '',
		)
	);

	$wp_customize->add_control(
		'rrr_email_link',
		array(
			'label'       => esc_html__( 'Email', 'rrr' ),
			'section'     => 'rrr_social_links_section',
			'type'        => 'email',
			// 'sanitize'    => 'html',
		)
	);

	// Create an array of our social links for ease of setup.
	$social_networks = array( 'facebook', 'instagram' );

	// Loop through our networks to setup our fields.
	foreach ( $social_networks as $network ) {

		$wp_customize->add_setting(
			'rrr_' . $network . '_link',
			array(
				'default' => '',
				'sanitize_callback' => 'rrr_sanitize_customizer_url',
			)
		);
		$wp_customize->add_control(
			'rrr_' . $network . '_link',
			array(
				'label'   => sprintf( esc_html__( '%s Link', 'rrr' ), ucwords( $network ) ),
				'section' => 'rrr_social_links_section',
				'type'    => 'text',
			)
		);
	}

	// Add our Footer Customization section section.
	$wp_customize->add_section(
		'rrr_footer_section',
		array(
			'title'    => esc_html__( 'Footer Customization', 'rrr' ),
			'priority' => 90,
		)
	);

	// Add our copyright text field.
	$wp_customize->add_setting(
		'rrr_copyright_text',
		array(
			'default' => '',
			'sanitize_callback' => 'rrr_sanitize_customizer_text',
		)
	);
	$wp_customize->add_control(
		'rrr_copyright_text',
		array(
			'label'       => esc_html__( 'Copyright Text', 'rrr' ),
			'description' => esc_html__( 'The copyright text will be displayed beneath the menu in the footer.', 'rrr' ),
			'section'     => 'rrr_footer_section',
			'type'        => 'text',
			'sanitize'    => 'html',
		)
	);
}
add_action( 'customize_register', 'rrr_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function rrr_customize_preview_js() {
	wp_enqueue_script( 'rrr_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'rrr_customize_preview_js' );

/**
 * Sanitize our customizer text inputs.
 */
function rrr_sanitize_customizer_text( $input ) {
	return sanitize_text_field( force_balance_tags( $input ) );
}

/**
 * Sanitize our customizer URL inputs.
 */
function rrr_sanitize_customizer_url( $input ) {
	return esc_url( $input );
}
