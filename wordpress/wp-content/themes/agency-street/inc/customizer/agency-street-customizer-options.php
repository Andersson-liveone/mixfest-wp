<?php
/**
 * Customizer section options.
 *
 * @package agency-street
 *
 */

function agency_street_customizer_theme_settings( $wp_customize ){
	
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
		
		$wp_customize->add_setting(
			'arilewp_footer_copright_text',
			array(
				'sanitize_callback' =>  'agency_street_sanitize_text',
				'default' => __('Copyright &copy; 2023 | Powered by <a href="//wordpress.org/">WordPress</a> <span class="sep"> | </span> Agency Street theme by <a target="_blank" href="//themearile.com/">ThemeArile</a>', 'agency-street'),
				'transport'         => $selective_refresh,
			)	
		);
		$wp_customize->add_control('arilewp_footer_copright_text', array(
				'label' => esc_html__('Footer Copyright','agency-street'),
				'section' => 'arilewp_footer_copyright',
				'priority'        => 10,
				'type'    =>  'textarea'
		));

}
add_action( 'customize_register', 'agency_street_customizer_theme_settings' );

function agency_street_sanitize_text( $input ) {
		return wp_kses_post( force_balance_tags( $input ) );
}