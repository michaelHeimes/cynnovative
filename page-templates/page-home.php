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
								
							<h1 class="title typing-title">
<!-- 								<span><?php echo $title_line_1;?></span> -->
								<span style="opacity:0;">|</span>
								<span class='typewriter-text' data-text='[ "<?php echo $title_line_1;?> ", "<?php the_field('title_line_2')?>" ]'></span>

							</h1>
							
							<img class="type-cursor" src="/wp-content/themes/cynnovative/assets/images/Cynnovative_Slash_White.svg"/>
							
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
					
							<h2 class="cell small-12 medium-6"><?php the_field('pss_module_heading');?></h2>
							
							<?php while ( have_rows('pss_slides') ) : the_row();?>
							
								<?php if( have_rows('single_slide') ):?>
									<?php while ( have_rows('single_slide') ) : the_row();?>
									
								<div class="single-slide cell small-12">
									<div class="grid-container">
									<div class="grid-x grid-padding-x align-middle">
									
										<div class="text-wrap cell small-12 medium-6">	
											<h3><img src="/wp-content/themes/cynnovative/assets/images/chevron-right.svg"/><?php the_sub_field('heading');?></h3>
											<p class="big-copy"><?php the_sub_field('copy');?></p>
										</div>
			
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
						
					<div class="chev-down-wrap cell small-12 text-center">
						<img src="/wp-content/themes/cynnovative/assets/images/chevron-down.svg"/>
					</div>
						
					</div>
										
				</section>
				<?php endif;?>
				
				<?php if($gcta_heading = get_field('gcta_heading')):?>
					<?php get_template_part('partials/partial', 'gradient-cta');?>
				<?php endif;?>
				
				<?php
				$featured_posts = get_field('bs_blogs');
				if( $featured_posts ): ?>
				<section class="grid-container blog-slider-wrap">
				    <div class="blog-slider">
				    <?php foreach( $featured_posts as $post ): 
				
				        // Setup this post for WP functions (variable must be named $post).
				        setup_postdata($post); ?>
				        <div class="single-blog text-center">
					        
				            <a href="<?php the_permalink(); ?>">
					        	<div class="grid-container">
									<div class="grid-x grid-padding-x">
					            
					            
										<h3 class="cell small-12"><?php the_title(); ?></h3>
										
										<div class="thumb-wrap cell small-12">
											<?php the_post_thumbnail( 'full' );?>
										</div>
								
									</div>
								</div>
				            </a>
				            
				        </div>
				    <?php endforeach; ?>
				    </div>
				    <?php 
				    // Reset the global post object so that the rest of the page works correctly.
				    wp_reset_postdata(); ?>
				</section>
				<?php endif; ?>
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>