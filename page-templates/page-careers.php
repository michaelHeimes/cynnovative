<?php 
/**
 * Template Name: Careers Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content">
	
		    <main class="main" role="main">
			    
				
				<header class="article-header <?php if(is_page_template()):?>show-for-sr<?php endif;?>">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<h1 class="page-title"><?php the_title(); ?></h1>
						</div>
					</div>
				</header> <!-- end article header -->
				
				
				<?php if($title_banner = get_field('title_banner')):?>
					<?php get_template_part('partials/partial', 'title-banner');?>
				<?php endif;?>
				
				
				<?php 
				$image = get_field('fw_image');
				if( !empty( $image ) ): ?>
				<section class="fw-image">
					<div class="grid-container fluid">
						<div class="grid-x grid-padding-x small-padding-collapse">
							<div class="cell small-12 text-center">
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							</div>
						</div>
					</div>
				</section>
				<?php endif; ?>
				
				
				<?php if($pi_copy = get_field('pi_copy')):?>
				<section class="pi-copy black-bg">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="left cell small-12 medium-6 xxlarge-5">
								<h2 class="big-h2"><?php the_field('pi_heading');?></h2>
							</div>
							<div class="right cell small-12 medium-6 xxlarge-7">
								<p class="big-copy cell small-12"><?php echo $pi_copy;?></p>
								<?php 
								$link = get_field('pi_link');
								if( $link ): 
								    $link_url = $link['url'];
								    $link_title = $link['title'];
								    $link_target = $link['target'] ? $link['target'] : '_self';
								    ?>
								    <a class="learn-more" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
									    <img src="/wp-content/themes/cynnovative/assets/images/learn-more-chevron.png"/>
										<?php echo esc_html( $link_title ); ?>
									</a>
								<?php endif; ?>								
							</div>
						</div>
						</div>
				</section>	
				<?php endif;?>
				
				
				<section class="contractor-slider-wrap">					
				<?php if( have_rows('contractor_slider') ):?>
					<div class="contractor-slidernav">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<h2 class="big-h2 cell small-12 text-center"><?php the_field('cs_heading');?></h2>
							</div>
						</div>
						
						<div class="grid-container">
							<div class="nav grid-x grid-padding-x align-bottom">
							<?php while ( have_rows('contractor_slider') ) : the_row();?>
								<?php $slide_to = get_row_index();?>
								<?php if( have_rows('single_slide') ):?>
									<?php while ( have_rows('single_slide') ) : the_row();?>
									
									<div class="nav-link-wrap cell small-6 tablet-3 text-center">
										<a href="#" data-slide="<?php echo  $slide_to;?>"><?php the_sub_field('heading');?></a>
										<div class="bar gradient-bg"></div>
									</div>
									
									<?php endwhile;?>
								<?php endif;?>
							<?php endwhile;?>
							</div>
						</div>
					</div>
				<?php endif;?>	
								
					
				<?php if( have_rows('contractor_slider') ):?>
					<div class="grid-container">
						<div class="grid-x grid-padding-x">

							<div class="cell small-12 contractor-slider grid-rows">
							<?php while ( have_rows('contractor_slider') ) : the_row();?>	

								<div class="single-slide single-row slide-<?php echo get_row_index(); ?>" data-slide="slide-<?php echo get_row_index(); ?>">
									
									<?php if( have_rows('single_slide') ):?>
										<?php while ( have_rows('single_slide') ) : the_row();?>
									
										<div class="grid-container">
											<div class="grid-x grid-padding-x">
											
												<?php
													$imgID = get_sub_field('image');
													$imgSize = "full";
													$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
												?>
												
												<div class="img-wrap cell small-12 medium-6 xxlarge-7" style="background-image: url(<?php echo $imgArr[0]; ?> );">
												</div>
												
												<div class="text-wrap cell small-12 medium-6 xxlarge-5">
													<div class="grid-x grid-padding-x">
														<h2 class="cell nfh small-12"><?php the_sub_field('heading');?></h2>
														<p class="big-copy cell nfh small-12"><?php the_sub_field('copy');?></p>
													</div>
												</div>
										
											</div>
										</div>
										
										<?php endwhile;?>
									<?php endif;?>
									
								</div>
									
							<?php endwhile;?>
							</div>
						</div>
					</div>
				<?php endif;?>
				</section>
				
				
				<?php if($bgcta_heading = get_field('bgcta_heading')):?>
				<section class="bbg-cta">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">	
							
							<div class="left cell small-12 medium-6">
								<h2 class="big-h2 remove-break"><?php echo $bgcta_heading;?></h2>
							</div>				

							<div class="right cell small-12 medium-5">
								<p class="big-copy"><?php the_field('bgcta_copy');?></p>
							</div>	
							
							<?php 
							$link = get_field('bgcta_link');
							if( $link ): 
							    $link_url = $link['url'];
							    $link_title = $link['title'];
							    $link_target = $link['target'] ? $link['target'] : '_self';
							    ?>
							    <div class="cell small-12 text-right">
								    <a class="learn-more" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
									    <img src="/wp-content/themes/cynnovative/assets/images/learn-more-chevron.png"/>
									    <?php echo esc_html( $link_title ); ?>
									</a>
							    </div>
							<?php endif; ?>
					
						</div>
					</div>
				</section>
				<?php endif;?>
				
				
				<?php if( have_rows('quotes') ):?>
				<section class="quotes">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<h2 class="big-h2 remove-break cell small-12 text-center"><?php the_field('ts_heading');?></h2>
							<div class="cell small-12 contractor-slider grid-rows">
							<?php while ( have_rows('quotes') ) : the_row();?>	
									
								<div class="single-quote">
									<p class="big-copy text-center"><?php the_sub_field('single_quote');?></p>								
								</div>

							<?php endwhile;?>
							</div>
						</div>
					</div>
				</section>
				<?php endif;?>

				
				
				<?php if($gcta_heading = get_field('gcta_heading')):?>
					<?php get_template_part('partials/partial', 'gradient-cta');?>
				<?php endif;?>
				
				
				<section class="team">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<h2 class="big-h2 cell small-12 text-center"><?php the_field('team_hashtag');?></h2>
						</div>
					</div>
							
					<div class="img-tiles">
						
						<?php if( have_rows('team_image_tiles') ):?>
							<?php while ( have_rows('team_image_tiles') ) : the_row();?>	
						
							<?php
								$imgID1 = get_sub_field('image_1');
								$imgSize1 = "full";
								$imgArr1 = wp_get_attachment_image_src( $imgID1, $imgSize1 );

								$imgID2 = get_sub_field('image_2');
								$imgSize2 = "full";
								$imgArr2 = wp_get_attachment_image_src( $imgID2, $imgSize2 );

								$imgID3 = get_sub_field('image_3');
								$imgSize3 = "full";
								$imgArr3 = wp_get_attachment_image_src( $imgID3, $imgSize3 );

								$imgID4 = get_sub_field('image_4');
								$imgSize4 = "full";
								$imgArr4 = wp_get_attachment_image_src( $imgID4, $imgSize4 );
							?>																		
							
							<div class="img-tile it-1" style="background-image: url(<?php echo $imgArr1[0]; ?> );"></div>
							<div class="img-tile it-2" style="background-image: url(<?php echo $imgArr2[0]; ?> );"></div>
							<div class="img-tile it-3" style="background-image: url(<?php echo $imgArr3[0]; ?> );"></div>
							<div class="img-tile it-4" style="background-image: url(<?php echo $imgArr4[0]; ?> );"></div>
							
						
							<?php endwhile;?>
						<?php endif;?>
						
					</div>
										
				</section>
				
							    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>