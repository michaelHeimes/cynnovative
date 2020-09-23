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
							<h1 class="title cell small-12 text-center"><?php echo $title_banner;?></h1>
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
					<ul class="accordion" data-allow-all-closed="true" data-accordion>
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
					    
					    	<li class="single-job accordion-item" data-accordion-item>						
								<a href="#" class="accordion-title cell small-12">
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
								
							    <div class="accordion-content" data-tab-content>
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
							    </div>

					    	</li>
					    	
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