			<div class="top-bar">
				
				<?php if (get_theme_mod('kerli_lite_blog_title_top_bar', 1) == 1) : ?>
				<div class="blog-title-wrapper"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></div>
				<?php endif; ?>
				
				<div class="toggle-search">
				  <span class="icons icon-search"></span>
				  <span class="icons icon-remove"></span>
				</div>
				
				<div class="social-icon-wrapper">
					<?php if( get_theme_mod( 'kerli_lite_twitter_url' ) !== '' ) { ?>
						<a class="social social-twitter" target="_blank" title="<?php _e( 'Twitter', 'kerli-lite' ); ?>" href="<?php echo esc_url(get_theme_mod( 'kerli_lite_twitter_url', '' )); ?>"></a> 
					<?php } ?>
					
					<?php if( get_theme_mod( 'kerli_lite_facebook_url' ) !== '' ) { ?>
						<a class="social social-facebook" target="_blank" title="<?php _e( 'Facebook', 'kerli-lite' ); ?>" href="<?php echo esc_url(get_theme_mod( 'kerli_lite_facebook_url', '' )); ?>"></a>
					<?php } ?>
					
					<?php if( get_theme_mod( 'kerli_lite_googleplus_url' ) !== '' ) { ?>
						<a class="social social-googleplus" target="_blank" title="<?php _e( 'Google Plus', 'kerli-lite' ); ?>" href="<?php echo esc_url(get_theme_mod( 'kerli_lite_googleplus_url', '' )); ?>"></a>
					<?php } ?>
					
					<?php if( get_theme_mod( 'kerli_lite_linkedin_url' ) !== '' ) { ?>
						<a class="social social-linkedin" target="_blank" title="<?php _e( 'LinkedIn', 'kerli-lite' ); ?>" href="<?php echo esc_url(get_theme_mod( 'kerli_lite_linkedin_url', '' )); ?>"></a>
					<?php } ?>
					
					<?php if( get_theme_mod( 'kerli_lite_youtube_url' ) !== '' ) { ?>
						<a class="social social-youtube" target="_blank" title="<?php _e( 'YouTube', 'kerli-lite' ); ?>" href="<?php echo esc_url(get_theme_mod( 'kerli_lite_youtube_url', '' )); ?>"></a>
					<?php } ?>
					
					<?php if( get_theme_mod( 'kerli_lite_instagram_url' ) !== '' ) { ?>
						<a class="social social-instagram" target="_blank" title="<?php _e( 'Instagram', 'kerli-lite' ); ?>" href="<?php echo esc_url(get_theme_mod( 'kerli_lite_instagram_url', '' )); ?>"></a>
					<?php } ?>
					
					<?php if( get_theme_mod( 'kerli_lite_pinterest_url' ) !== '' ) { ?>
						<a class="social social-pinterest" target="_blank" title="<?php _e( 'Pinterest', 'kerli-lite' ); ?>" href="<?php echo esc_url(get_theme_mod( 'kerli_lite_pinterest_url', '' )); ?>"></a>
					<?php } ?>
					
					<?php if( get_theme_mod( 'kerli_lite_rss_url' ) !== '' ) { ?>
						<a class="social social-feed" target="_blank" title="<?php _e( 'RSS', 'kerli-lite' ); ?>" href="<?php echo esc_url(get_theme_mod( 'kerli_lite_rss_url', '' )); ?>"></a>			
					<?php } ?>
				</div><!-- .social-icon-wrapper -->
				
			</div><!-- .top-bar -->
			
			<div class="wrapper-search-container">
			  <div class="wrapper-search-top-bar">
				<div class="search-top-bar">
				  <?php get_search_form(); ?>
				</div>
			  </div>
			</div>