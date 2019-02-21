<?php
/**
 *
 *	Featured Posts area of the theme.
 *
 **/
?>
		<div id="featured-wrapper" class="container">
			<h1 class="fp-title"><?php _e('FEATURED POSTS','ving'); ?></h1>
				<ul id="ving-fp">	
					<?php for ($i=1; $i <= 3; $i++) { ?>
					<?php if ( $i == 1 ) : ?>
					<li class="fp-<?php echo $i; ?> col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="fp-post-thumb">
							<?php $a = 'ving-fp-' . $i; ?>
								<a href="<?php echo get_permalink( absint(get_theme_mod( $a )) ); ?>">
									
										<?php echo 	wp_kses(get_the_post_thumbnail( absint(get_theme_mod( $a )), 'ving-home-thumb' ), 
											array('img'	=> array('width'	=> array(),
														 'height'	=> array(),
														 'src'		=> array(),
														 'class'	=> array(),
														 'alt'		=> array()
														 )
											)
										); ?>
								</a>
						</div>
						<div class="fp-post-title">
<a href="<?php echo get_permalink( absint(get_theme_mod( $a )) ); ?>"><?php echo get_the_title( get_theme_mod( $a ) ); ?></a>
</div>
					</li>	
					<?php else : ?>
						<li class="fp-<?php echo $i; ?> col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="fp-thumb-resp">
							<?php $a = 'ving-fp-' . $i; ?>
								<a href="<?php echo get_permalink( absint(get_theme_mod( $a )) ); ?>">
						
										<?php echo wp_kses(get_the_post_thumbnail( absint(get_theme_mod( $a )), 'ving-home-thumb' ), 
										array('img'	=> array('width'	=> array(),
															 'height'	=> array(),
															 'src'		=> array(),
															 'class'	=> array(),
															 'alt'		=> array()
															 )
												)
											); ?>							
								</a>
						</div>
						<div class="fp-thumb">
							<?php $a = 'ving-fp-' . $i; ?>
								<a href="<?php echo get_permalink( absint(get_theme_mod( $a )) ); ?>">
							
									<?php echo wp_kses(get_the_post_thumbnail( absint(get_theme_mod( $a )), 'ving-fp-thumb' ), 
									array('img'	=> array('width'	=> array(),
														 'height'	=> array(),
														 'src'		=> array(),
														 'class'	=> array(),
														 'alt'		=> array()
														 )
											)
										); ?>
										
								</a>
						</div>
						<div class="fp-post-title">
<a href="<?php echo get_permalink( absint(get_theme_mod( $a )) ); ?>"><?php echo get_the_title( get_theme_mod( $a ) ); ?></a>
</div>
					</li>
					<?php endif; ?>
					<?php } ?>				
				</ul>
		</div>
				


