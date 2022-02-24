<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer" role="contentinfo">
											
					<div class="inner-footer">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">
								
								<ul class="footer-logo menu cell small-12">
								<?php 
								$image = get_field('footer_logo', 'option');
								if( !empty( $image ) ): ?>
								    <li><a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a></li>
								    <?php else:?>
								    <li><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
								<?php endif; ?>
								</ul>
						
								<div class="cell small-12">
									
									<ul class="menu social-links text-right">
										<?php if($twitter = get_field('twitter_link', 'option')):?>
										<li><a href="<?php echo $twitter;?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
										<?php endif;?>
										<?php if($linkedin = get_field('linkedin_link', 'option')):?>
										<li><a href="<?php echo $linkedin;?>" target="_blank"><i class="fab fa-linkedin"></i></a></li>
										<?php endif;?>
									</ul>
									
									<nav role="navigation">
			    						<?php joints_footer_links(); ?>
			    					</nav>
			    					
			    					<div class="address text-right">
				    					<?php the_field('footer_address', 'option');?>
			    					</div>
			    					
			    				</div>
						
							</div>
						</div>
					</div> <!-- end #inner-footer -->
						
					<div class="post-footer gradient-bg">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">							
								<div class="cell small-12 text-center">
									&copy; <?php echo date('Y'); ?> Made With <i class="fas fa-heart"></i> By Pomerantz Marketing
								</div>
							</div>
						</div>
					</div>
				
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->