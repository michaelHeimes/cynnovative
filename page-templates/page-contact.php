<?php 
/**
 * Template Name: Contact Page
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
				
				
				<?php if($pi_copy = get_field('pi_copy')):?>
				<section class="pi-copy">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<p class="cell small-12 text-center"><?php echo $pi_copy;?></p>						
						</div>
					</div>
				</section>	
				<?php endif;?>
				
				<section class="form-wrap">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12 medium-10 medium-offset-1 tablet-8 tablet-offset-2">
								<?php gravity_form( 1, false, false, false, '', true );?>
							</div>
						</div>
					</div>
				</section>

				<?php if($map_heading = get_field('map_heading')):?>
				<section class="pi-copy">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<p class="cell small-12 text-center"><?php echo $map_heading;?></p>			
							
							<div class="map-wrap cell small-12 text-center">
								<?php the_field('map_google_map_embed');?>
							</div>
										
						</div>
					</div>
				</section>	
				<?php endif;?>

											    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>