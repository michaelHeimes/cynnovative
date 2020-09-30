<section class="title-banner text-center <?php if(is_page_template('page-templates/page-contact.php')):?>gradient-bg<?php endif;?>">
	<div class="grid-container fluid">
		<div class="grid-x grid-padding-x">
			<div class="title cell small-12 text-center">
				<?php the_field('title_banner');?>

<!--
				<?php				
				$text = get_field('title_banner');
				$stripped_text = str_replace('|', '<span><img class="type-cursor" src="/wp-content/themes/cynnovative/assets/images/Cynnovative_Slash_White.svg"/></span>',$text);
				echo $stripped_text;
				?>
-->
				
			</div>
		</div>
	</div>
</section>