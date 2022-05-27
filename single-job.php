<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>
			
<div class="content">

	<div class="inner-content">

		<main class="main" role="main">
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
				<header class="article-header">	
				
					<section class="title-banner text-center<?php if(is_singular( 'job' )):?> gradient-bg<?php endif;?>">
						<div class="grid-container fluid">
							<div class="grid-x grid-padding-x">
								<h1 class="title cell small-12 text-center"><?php the_title(); ?></h1>
							</div>
						</div>
					</section>
					
				</header> <!-- end article header -->
				
				<div class="grid-container">
					<div class="grid-x grid-padding-x">
						
						<div class="single-section cell small-12">
							<h4>
								<?php the_field('company_overview_title', 'option');?>
							</h4>
							<div class="big-copy copy-wrap">
								<?php the_field('company_overview_copy', 'option');?>
							</div>
						</div>
						
						<?php if( have_rows('content_sections') ):?>
							<?php while ( have_rows('content_sections') ) : the_row();?>	
							<div class="single-section cell small-12">
							<?php if( have_rows('single_section') ):?>
								<?php while ( have_rows('single_section') ) : the_row();?>	
								<h4>
									<?php the_sub_field('heading');?>
									
									<?php
									$sub = get_sub_field('add_requirement_label');
									if( $sub && in_array('yes', $sub) ):?>	
									<br>									        	
									<span>
										<img class="type-cursor" src="/wp-content/themes/cynnovative/assets/images/Cynnovative_Slash_White.svg"/>
										<?php the_sub_field('requirement_label');?>
									</span>
									<?php endif;?>
								
								</h4>
								<div class="big-copy copy-wrap">
									<?php the_sub_field('copy');?>
								</div>
								<?php endwhile;?>
							<?php endif;?>
							</div>
							<?php endwhile;?>
						<?php endif;?>
						
						<div class="big-copy job-footnote cell small-12">
							<?php the_field('job_post_footnote', 'option');?>
						</div>
						
					</div>
				</div>
				
			<?php endwhile; else : ?>
		
				   <?php get_template_part( 'parts/content', 'missing' ); ?>

			<?php endif; ?>

		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>