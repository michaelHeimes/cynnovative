<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div id="top-bar-menu">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-justify">
			
			<div class="top-bar-left cell small-7 tablet-shrink">
				<ul class="menu">
					
					<?php 
					$image = get_field('header_logo', 'option');
					if( !empty( $image ) ): ?>
					    <li><a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a></li>
					    <?php else:?>
					    <li><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
					<?php endif; ?>
					
				</ul>
			</div>
			
			<div class="top-bar-right cell shrink">
				
				<div class="inner">
				
					<?php joints_top_nav(); ?>	
					
					<ul class="menu social">
						
						<li><a href="<?php the_field('twitter_link', 'option');?>"><i class="fab fa-twitter"></i></a></li>
						
						<li><a href="<?php the_field('linkedin_link', 'option');?>"><i class="fab fa-linkedin"></i></a></li>
						
					</ul>
				
					<ul class="menu hide-for-xlarge">
						<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
						<li>
							<a id="nav-trigger" data-toggle="off-canvas">
								<span></span>
								<span></span>
								<span></span>							
							</a>
						</li>
					</ul>
				
				</div>
				
			</div>
			
		</div>
	</div>
</div>