<?php
/**
 * Template part for displaying a single post
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
						
				<header class="article-header">	
			    
					<section class="title-banner text-center">
						<div class="grid-container fluid">
							<div class="grid-x grid-padding-x">
								<h1 class="title cell small-12 text-center"><?php the_title(); ?></h1>
							</div>
						</div>
					</section>
					
			    </header> <!-- end article header -->
			    
			</div>
		</div>
	</div>
	
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
	
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
								
			    <section class="entry-content" itemprop="text">
					<?php the_content(); ?>
				</section> <!-- end article section -->
									
				<footer class="article-footer">
					<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
					<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>	
				</footer> <!-- end article footer -->
				
			</div>
		</div>
	</div>
																			
</article> <!-- end article -->