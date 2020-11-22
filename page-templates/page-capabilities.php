<?php 
/**
 * Template Name: Capabilities Page
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
				
				<?php if($cc_copy = get_field('cc_copy')):?>
				<section class="cc-copy text-center">
					<div class="grid-container">
						<div class="grid-x grid-padding-x align-middle">
							<p class="cell small-12"><?php echo $cc_copy;?></p>
						</div>
						</div>
				</section>	
				<?php endif;?>
				
				<section class="grid-rows" data-equalizer data-equalize-on-stack="true">
				<?php if( have_rows('c_rows') ):?>
					<?php while ( have_rows('c_rows') ) : the_row();?>	
						<?php if( have_rows('single_row') ):?>
							<?php while ( have_rows('single_row') ) : the_row();?>	
							
							<div class="single-row" data-equalizer-watch>
								<div class="grid-container fluid">
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
					
					<div class="single-row case-study">
							<div class="grid-container fluid">
								<div class="grid-x grid-padding-x">
								
									<?php
										$imgID = get_field('cs_image');
										$imgSize = "full";
										$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
									?>
									<div class="img-wrap cell small-12 medium-6" style="background-image: url(<?php echo $imgArr[0]; ?> );">
									</div>
									
									<div class="text-wrap cell small-12 medium-6">
										<div class="grid-x grid-padding-x">
											<div class="cs-label-wrap cell nfh small-12">
												<h3>Case Study</h3>
												<div class="bar gradient-bg"></div>
											</div>
											<h2 class="cell nfh small-12"><?php the_field('cs_heading');?></h2>
											<p class="big-copy cell nfh small-12"><?php the_field('cs_copy');?></p>
											
											<?php 
											$link = get_field('cs_link');
											if( $link ): 
											    $link_url = $link['url'];
											    $link_title = $link['title'];
											    $link_target = $link['target'] ? $link['target'] : '_self';
											    ?>
											    <a class="learn-more cell nfh small-12" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
												    <img src="/wp-content/themes/cynnovative/assets/images/learn-more-chevron.png"/>
												    <?php echo esc_html( $link_title ); ?>
												</a>
											<?php endif; ?>
										</div>
									</div>
							
								</div>
							</div>
						</div>
					
				<?php endif;?>
				</section>
				
				<?php if($gcta_heading = get_field('gcta_heading')):?>
					<?php get_template_part('partials/partial', 'gradient-cta');?>
				<?php endif;?>
							    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>