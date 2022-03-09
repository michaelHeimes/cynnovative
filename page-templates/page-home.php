<?php 
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content">
	
		    <main class="main" role="main">
				
				<header class="article-header <?php if(is_page_template()):?>show-for-sr<?php endif;?>">
					<div class="grid-container">
						<div class="grid-x grid-padding-x align-middle">
							<h1 class="page-title text-center"><?php the_title(); ?></h1>
						</div>
					</div>
				</header> <!-- end article header -->
				
				<?php if($title_line_1 = get_field('title_line_1')):?>
				<section class="title-banner text-center">
											
					<div class="grid-container">
						
						<div class="grid-x grid-padding-x align-center align-middle">
							
							<h1 class="cell small-12 title"><?php the_field('title_line_1');?></h1>	

				
							<h1 class="title typing-title">
<!-- 								<span><?php echo $title_line_1;?></span> -->
								<span style="opacity:0;">|</span>
								<span class='typewriter-text' data-text='[ "<?php the_field('title_line_2')?>" ]'></span>

							</h1>
							
							<img id="type-cursor" class="type-cursor" src="/wp-content/themes/cynnovative/assets/images/Cynnovative_Slash_White.svg"/>
							
						</div>
					</div>
				</section>
				<?php endif;?>
				
				<?php if($cc_copy = get_field('cc_copy')):?>
				<section class="cc-copy text-center">
					<div class="grid-container">
						<div class="grid-x grid-padding-x align-middle">
							<p class="cell small-12"><?php echo $cc_copy;?></p>
						</div>
						</div>
				</section>	
				<?php endif;?>
				
				<?php if( have_rows('pss_slides') ):?>
				<section class="pss-slides">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							
							<div class="slider-heading-wrap cell small-12 medium-6">
								<h2><?php the_field('pss_module_heading');?></h2>
							</div>

							<div class="split-slider split-slider-left cell small-12 medium-6">
							<?php while ( have_rows('pss_slides') ) : the_row();?>
								<?php if( have_rows('single_slide') ):?>
									<?php while ( have_rows('single_slide') ) : the_row();?>
									
									<div class="single-slide cell small-12">
										<div class="grid-container">
											<div class="grid-x grid-padding-x align-middle">
											
												<div class="text-wrap cell small-12 medium-6">	
													<h3><img src="/wp-content/themes/cynnovative/assets/images/chevron-right.svg"/><?php the_sub_field('heading');?></h3>
													<p class="big-copy"><?php the_sub_field('copy');?></p>
													
													<div class="dots-container"></div>
												</div>
											</div>
										</div>
									</div>
										
									<?php endwhile;?>
								<?php endif;?>
							<?php endwhile;?>
							</div>

							<div class="ssr-wrap cell small-12 medium-6">
								<div class="inner">
									<div class="split-slider split-slider-right grid-x grid-padding-x">
										<?php while ( have_rows('pss_slides') ) : the_row();?>
											<?php if( have_rows('single_slide') ):?>
												<?php while ( have_rows('single_slide') ) : the_row();?>
												
													<div class="single-slide cell small-12">
														<div class="grid-container fluid">
															<div class="grid-x grid-padding-x align-middle">
																<?php
																	$imgID = get_sub_field('image');
																	$imgSize = "full";
																	$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
																
																?>
																<div class="img-wrap cell small-12 medium-6">
																	<div class="inner" style="background-image: url(<?php echo $imgArr[0]; ?> );"></div>
																</div>
															</div>
														</div>
													</div>
													
												<?php endwhile;?>
											<?php endif;?>
										<?php endwhile;?>
									</div>
							</div>
							</div>
						</div>
						
					<div class="chev-down-wrap cell small-12 text-center">
						<a href="#next"><img src="/wp-content/themes/cynnovative/assets/images/chevron-down.svg"/></a>
					</div>
						
					</div>
										
				</section>
				<?php endif;?>
					<div id="next"></div>
				<?php if($gcta_heading = get_field('gcta_heading')):?>
					<?php get_template_part('partials/partial', 'gradient-cta');?>
				<?php endif;?>
				
				<?php
				$featured_posts = get_field('bs_blogs');
				if( $featured_posts ): ?>
				<section class="grid-container blog-slider-wrap">
				    <div class="blog-slider" data-equalizer data-equalize-on="medium">
					    
					<?php 
						$args = array(  
					        'post_type' => 'post',
					        'post_status' => 'publish',
					        'posts_per_page' => -1,
					        'order' => 'DESC'
					    );
					    
					    $loop = new WP_Query( $args ); 
					    while ( $loop->have_posts() ) : $loop->the_post(); 
					    
					?>
				 
				        <div class="single-blog text-center">
					        
				            <a href="<?php the_permalink(); ?>">
					        	<div class="grid-container">
									<div class="grid-x grid-padding-x">
					            
										<div class="title-wrap cell small-12" data-equalizer-watch>
											<div class="grid-x grid-padding-x">
												<h3 class="cell small-12"><?php the_title(); ?></h3>
												<div class="date cell small-12"><?php $post_date = get_the_date( 'F j, Y' ); echo $post_date?></div>
											</div>
										</div>
										

										
										<div class="thumb-wrap cell small-12">
											<?php the_post_thumbnail( 'full' );?>
										</div>
								
									</div>
								</div>
				            </a>
				            
				        </div>
					    
					<?php endwhile;
					wp_reset_postdata(); ?>
				    </div>
				</section>
				<?php endif; ?>
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>