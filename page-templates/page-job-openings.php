<?php 
/**
 * Template Name: Job Openings Page
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
				<section class="title-banner text-center">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="title cell small-12 text-center"><?php echo $title_banner;?></div>
						</div>
					</div>
				</section>
				<?php endif;?>
				
				
				<?php if($pi_copy = get_field('pi_copy')):?>
				<section class="pi-copy gradient-bg">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="big-copy cell small-12"><?php echo $pi_copy;?></div>						
						</div>
					</div>
				</section>	
				<?php endif;?>
				
				<section class="jobs-wrap">
					<?php			
					$args = array(  
				        'post_type' => 'job',
				        'post_status' => 'publish',
				        'posts_per_page' => -1,
				        'orderby' => 'title',
				        'order' => 'ASC'
				    );
				
				    $loop = new WP_Query( $args ); 
				    
				    if ( $loop->have_posts() ) : 
				        
					    while ( $loop->have_posts() ) : $loop->the_post();?>
					    
				    	<div class="single-job">						
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="accordion-title cell small-12">
								<div class="gradient-bg"></div>
								<div class="grid-container">
									<div class="grid-x grid-padding-x">
										<div class="inner cell small-12">
								        	<h2><?php print the_title();?></h2>
											<h3><span><?php the_field('location');?></span> \ <span><?php the_field('levels');?></span></h3>
										</div>
									</div>
								</div>
							</a>
				    	</div>
					    	
					    <?php
					    endwhile;
					    
					else:
					
						echo 'no jobs';
				
					endif;
				    wp_reset_postdata(); 
				    ?>
					</ul>
				</section>
				
											    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>