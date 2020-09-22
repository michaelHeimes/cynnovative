<section class="gcta-heading gradient-bg">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 text-center">
			
				<h2><?php the_field('gcta_heading')?></h2>
				
				<?php if($gcta_copy = get_field('gcta_copy')):?>
				<p><?php echo $gcta_copy;?></p>
				<?php endif;?>
				
				<?php 
				$link = get_field('gcta_link');
				if( $link ): 
				    $link_url = $link['url'];
				    $link_title = $link['title'];
				    $link_target = $link['target'] ? $link['target'] : '_self';
				    ?>
				    <a class="button white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>
	
			</div>
		</div>
	</div>
</section>