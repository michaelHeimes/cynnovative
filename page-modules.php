<?php
if( have_rows('modules') ):
while ( have_rows('modules') ) : the_row();

	if( get_row_layout() == 'hero' ):
		get_template_part('modules/hero');

	elseif( get_row_layout() == 'text_editor' ):
		get_template_part('modules/text-editor');

	endif;

endwhile;
endif;?>