<?php 
/**
 * Template Name: Company Page
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
							<h2 class="cell small-12"><?php the_field('pi_heading');?></h2>
							<p class="big-copy cell small-12"><?php echo $pi_copy;?></p>
						</div>
						</div>
				</section>	
				<?php endif;?>
				
				<section class="grid-rows">
				<?php if( have_rows('c_rows') ):?>
					<?php while ( have_rows('c_rows') ) : the_row();?>	
						<?php if( have_rows('single_row') ):?>
							<?php while ( have_rows('single_row') ) : the_row();?>	
							
							<div class="single-row">
								<div class="grid-container">
									<div class="grid-x grid-padding-x">
									
										<?php
											$imgID = get_sub_field('image');
											$imgSize = "full";
											$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
										?>
										<div class="img-wrap cell small-12 medium-6" style="background-image: url(<?php echo $imgArr[0]; ?> );">
										</div>
										
										<div class="text-wrap cell small-12 medium-6">
											<div class="grid-x grid-padding-x">
												<h2 class="cell nfh small-12"><?php the_sub_field('heading');?></h2>
												<p class="big-copy cell nfh small-12"><?php the_sub_field('copy');?></p>
											</div>
										</div>
								
									</div>
								</div>
							</div>
						
							<?php endwhile;?>
						<?php endif;?>
					<?php endwhile;?>					
				<?php endif;?>
				</section>
				
				<?php if($gcta_heading = get_field('gcta_heading')):?>
					<?php get_template_part('partials/partial', 'gradient-cta');?>
				<?php endif;?>
							    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>