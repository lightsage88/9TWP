<?php
/**
 * kerli-lite Theme Customizer
 *
 * Add postMessage support for site title and description for the Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function kerli_lite_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'kerli_lite_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function kerli_lite_customize_preview_js() {
	wp_enqueue_script( 'kerli_lite_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130301', true );
}
add_action( 'customize_preview_init', 'kerli_lite_customize_preview_js' );


/**
 * Adds Kerli-lite related customizer elements
 *
 * WordPress 3.4 Required
 */
add_action( 'customize_register', 'kerli_lite_add_customizer' );

if( ! function_exists( 'kerli_lite_add_customizer' ) ) {

	function kerli_lite_add_customizer( $wp_customize ) {
		
	// Add_panel (requiere WP 4.0+)
	$wp_customize->add_panel ('kerli_lite_panel', array(
		'title' => __('Kerli Options', 'kerli-lite'),
		'priority' => '10'));
	
	/**-----------------
	 * Top bar
	 -----------------*/
	$wp_customize->add_section('kerli_lite_top_bar' , array(
			'panel' => 'kerli_lite_panel',
			'title' => __('Top bar and Social icons','kerli-lite'),
			'description' => __('(Leave blank text boxes to not display icons)', 'kerli-lite'),
			'priority'    => 20,
	) );

	// Blog title
	$wp_customize->add_setting('kerli_lite_blog_title_top_bar', array('default' => 1, 'sanitize_callback' => 'kerli_lite_sanitize_checkbox',));
	$wp_customize->add_control('kerli_lite_blog_title_top_bar', array(
			'type' => 'checkbox',
			'label' => __('Display blog title in top bar', 'kerli-lite'),
			'section' => 'kerli_lite_top_bar',
	) );

	// Social icons 
	$wp_customize->add_setting('kerli_lite_twitter_url', array('default' => '', 'sanitize_callback' => 'kerli_lite_sanitize_text'));
	$wp_customize->add_control('kerli_lite_twitter_url', array(
			'label' => __('Twitter URL', 'kerli-lite'),
			'section' => 'kerli_lite_top_bar',
			'type' => 'text',
	) );

	$wp_customize->add_setting('kerli_lite_facebook_url', array('default' => '', 'sanitize_callback' => 'kerli_lite_sanitize_text'));
	$wp_customize->add_control('kerli_lite_facebook_url', array(
			'label' => __('Facebook URL', 'kerli-lite'),
			'section' => 'kerli_lite_top_bar',
			'type' => 'text',
	) );
		
	$wp_customize->add_setting('kerli_lite_googleplus_url', array('default' => '', 'sanitize_callback' => 'kerli_lite_sanitize_text'));
	$wp_customize->add_control('kerli_lite_googleplus_url', array(
			'label' => __('Google Plus URL', 'kerli-lite'),
			'section' => 'kerli_lite_top_bar',
			'type' => 'text',
	) );

	$wp_customize->add_setting('kerli_lite_linkedin_url', array('default' => '', 'sanitize_callback' => 'kerli_lite_sanitize_text'));
	$wp_customize->add_control('kerli_lite_linkedin_url', array(
			'label' => __('LinkedIn URL', 'kerli-lite'),
			'section' => 'kerli_lite_top_bar',
			'type' => 'text',
	) );

	$wp_customize->add_setting('kerli_lite_youtube_url', array('default' => '', 'sanitize_callback' => 'kerli_lite_sanitize_text'));
	$wp_customize->add_control('kerli_lite_youtube_url', array(
			'label' => __('YouTube URL', 'kerli-lite'),
			'section' => 'kerli_lite_top_bar',
			'type' => 'text',
	) );

	$wp_customize->add_setting('kerli_lite_instagram_url', array('default' => '', 'sanitize_callback' => 'kerli_lite_sanitize_text'));
	$wp_customize->add_control('kerli_lite_instagram_url', array(
			'label' => __('Instagram URL', 'kerli-lite'),
			'section' => 'kerli_lite_top_bar',
			'type' => 'text',
	) );
		
	$wp_customize->add_setting('kerli_lite_pinterest_url', array('default' => '', 'sanitize_callback' => 'kerli_lite_sanitize_text'));
	$wp_customize->add_control('kerli_lite_pinterest_url', array(
			'label' => __('Pinterest URL', 'kerli-lite'),
			'section' => 'kerli_lite_top_bar',
			'type' => 'text',
	) );
		
	$wp_customize->add_setting('kerli_lite_rss_url', array('default' => '', 'sanitize_callback' => 'kerli_lite_sanitize_text'));
	$wp_customize->add_control('kerli_lite_rss_url', array(
			'label' => __('RSS URL', 'kerli-lite'),
			'section' => 'kerli_lite_top_bar',
			'type' => 'text',
		));
	 
	/**-----------------
	 * Logo
	 -----------------*/
	$wp_customize->add_section('kerli_lite_logo_settings' , array(
			'panel' => 'kerli_lite_panel',
			'title' => __('Logo in the header','kerli-lite'),
			'priority' => 25,
			'description' => __('If you use a logo instead of full image for the header, check the option "Header image is a logo" to apply margins.', 'kerli-lite'),
	) );

	// Header image is a logo
	$wp_customize->add_setting('kerli_lite_logo_active', array('default' => '', 'sanitize_callback' => 'kerli_lite_sanitize_checkbox',));
	$wp_customize->add_control('kerli_lite_logo_active', array(
			'type' => 'checkbox',
			'label' => __('Header image is a logo', 'kerli-lite'),
			'section' => 'kerli_lite_logo_settings',
	) );
		
	// Center logo
	$wp_customize->add_setting('kerli_lite_logo_center', array('default' => '', 'sanitize_callback' => 'kerli_lite_sanitize_checkbox',));
	$wp_customize->add_control('kerli_lite_logo_center', array(
			'type' => 'checkbox',
			'label' => __('Center logo (Just if "Header image is a logo" is checked)', 'kerli-lite'),
			'section' => 'kerli_lite_logo_settings',
	) );
			
	/*--------------------------------------------------------------
		Colors
	--------------------------------------------------------------*/
	$wp_customize->add_section('kerli_lite_body_color' , array(
			'panel' => 'kerli_lite_panel',
			'title' => __(' Color Settings', 'kerli-lite'),
			'priority'    => 70,
	) );

	/* Body Font Color */
    $wp_customize->add_setting( 'kerli_lite_body_color', array('default' => '#666666', 'sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'kerli_lite_body_color', array(
			'label' => __( 'Body Font Color', 'kerli-lite' ),
			'priority' => 1,
			'settings' => 'kerli_lite_body_color',
			'section' => 'kerli_lite_body_color',
	) ));

	/* Link Color */
    $wp_customize->add_setting( 'kerli_lite_link_color', array('default' => '#666666', 'sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'kerli_lite_link_color', array(
			'label' => __( 'Link Color', 'kerli-lite' ),
			'priority' => 2,
			'settings' => 'kerli_lite_link_color',
			'section' => 'kerli_lite_body_color',
	) ));

	/* Link Hover Color */
    $wp_customize->add_setting( 'kerli_lite_hover_color', array('default' => '#cccccc', 'sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'kerli_lite_hover_color', array(
			'label' => __( 'Link Hover Color', 'kerli-lite' ),
			'priority' => 3,
			'settings' => 'kerli_lite_hover_color',
			'section' => 'kerli_lite_body_color',
	) ));

	/* Site Title Font Color */
    $wp_customize->add_setting( 'kerli_lite_site_title_color', array('default' => '#555555', 'sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'kerli_lite_site_title_color', array(
			'label' => __( 'Site Title Font Color', 'kerli-lite' ),
			'priority' => 4,
			'settings' => 'kerli_lite_site_title_color',
			'section' => 'kerli_lite_body_color',
	) ));

	/* Headings Font Color */
    $wp_customize->add_setting( 'kerli_lite_heading_color', array('default' => '#666666', 'sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'kerli_lite_heading_color', array(
			'label' => __( 'Headings Font Color', 'kerli-lite' ),
			'priority' => 5,
			'settings' => 'kerli_lite_heading_color',
			'section' => 'kerli_lite_body_color',
	) ));
	
	/*--------------------------------------------------------------
		Premium upgrade
	--------------------------------------------------------------*/
	class kerli_lite_Customize_Upgrade_Control extends WP_Customize_Control {
        public function render_content() {  ?>
        	<p class="vt-upgrade-thumb">
        		<img src="<?php echo get_template_directory_uri(); ?>/images/kerli-theme.png" />
        	</p>
        	<p class="vt-upgrade-title">
        		<span class="customize-control-title">
        			<?php _e('Need more features and options?', 'kerli-lite'); ?>
        		</span>
        	</p>
        	<p class="vt-upgrade-text">
        		<span class="textfield">
        			<?php _e('If you run an awesome website and need more advanced features, options and custom widgets, you can upgrade to the premium version of this theme which comes with great additional features to customize your website.', 'kerli-lite'); ?>
        		</span>
			</p>
			<p class="vt-upgrade-button">
				<a href="http://volthemes.com/theme/kerli/?utm_source=kerli+lite&amp;utm_campaign=WordPressOrg" target="_blank" class="button button-secondary">
					<?php _e('Click here for premium features', 'kerli-lite'); ?>
				</a>
			</p><?php
        }
    }
	
	$wp_customize->add_section('vt_upgrade', array(
		'title' => __('Upgrade to Premium', 'kerli-lite'),
		'priority' => 83,
		'panel' => 'kerli_lite_panel',
	) );
		
	$wp_customize->add_setting('vt_options[premium_version_upgrade]', array('default' => '', 'type' => 'option', 'sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control(
		new kerli_lite_Customize_Upgrade_Control($wp_customize, 'premium_version_upgrade', 
		array(
		'section' => 'vt_upgrade',
		'settings' => 'vt_options[premium_version_upgrade]',
		'priority' => 81,
	) ));

	}

}

/*
 * Sanitize Text functions.
 */
function kerli_lite_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

/**
 * Sanitize checkbox for customizer
*/
function kerli_lite_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}