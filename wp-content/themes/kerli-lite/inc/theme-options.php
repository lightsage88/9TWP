<?php

/* create theme options page */
function kerli_lite_register_theme_page(){
	add_theme_page( __('Kerli Dashboard', 'kerli-lite'), __('Kerli Dashboard', 'kerli-lite'), 'edit_theme_options', 'kerli_lite_options', 'kerli_lite_options_content'); 
}
add_action( 'admin_menu', 'kerli_lite_register_theme_page' );

/* callback used to add content to options page */
function kerli_lite_options_content(){
	// Add our CSS Styling
	wp_enqueue_style( 'kerli-lite-adminstyle', get_template_directory_uri() . '/css/style-admin.css', false, '1.0.0' );
	?>

    <div id="kerli-dashboard-wrap" class="wrap">

        <h2><?php _e('kerli Dashboard', 'kerli-lite'); ?></h2>

        <?php $active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'dashboard'; ?>

        <h2 class="nav-tab-wrapper">
            <?php _e('Welcome To Kerli by VolThemes', 'kerli-lite'); ?>
         </h2>
        
            <div class="content-customization content">
                <h3><?php _e('Customization', 'kerli-lite'); ?></h3>
                <p><?php _e('Click the "Customize" link in your menu, or use the button below to get started customizing theme.', 'kerli-lite'); ?></p>
                <p>
                    <a class="button-primary" href="<?php echo admin_url('customize.php'); ?>"><?php _e('Use Customizer', 'kerli-lite') ?></a>
                </p>
            </div>
	       	     
			<div class="content content-resources">
		        <h3><?php _e('Theme Demo', 'kerli-lite'); ?></h3>
		        <p><?php _e("View Official Demo - Kerli lite.", "kerli-lite"); ?></p>
		        <p>
			        <a target="_blank" class="button-primary" href="http://volthemes.com/demo/?theme=kerli-lite"><?php _e('View Demo', 'kerli-lite'); ?></a>
		        </p>
	        </div>
			
			<div class="content content-resources">
		        <h3><?php _e('Theme Documentation', 'kerli-lite'); ?></h3>
		        <p><?php _e("Get the theme up and running in no time.", "kerli-lite"); ?></p>
		        <p>
			        <a target="_blank" class="button-primary" href="http://volthemes.com/kb/kerli-lite-documentation/"><?php _e('View Documentation', 'kerli-lite'); ?></a>
		        </p>
	        </div>
			
			<div class="content content-support">
				<h3><?php _e('Support', 'kerli-lite'); ?></h3>
				<p><?php _e("If you having any kind of trouble with this theme, Please visit support forum.", "kerli-lite"); ?></p>
				<p>
					<a target="_blank" class="button-primary" href="https://wordpress.org/support/theme/kerli-lite"><?php _e('Visit Support Forum', 'kerli-lite'); ?></a>
				</p>
			</div>
		
	        <div class="content content-resources">
		        <h3><?php _e('Rate this theme', 'kerli-lite'); ?></h3>
		        <p><?php _e('If you like this theme, please rate it. Thank you', 'kerli-lite');?></p>
				<p>
					<a target="_blank" class="button-primary" href="https://wordpress.org/support/view/theme-reviews/kerli-lite?filter=5"><?php _e('Rate this theme', 'kerli-lite'); ?></a>
		        </p>
	        </div>
       
    </div>
<?php } 