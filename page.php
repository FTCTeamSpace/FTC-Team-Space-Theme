<?php

get_header();
?><section><?php
if (have_posts()):
	while (have_posts()) : the_post(); ?>
	
			<h2><?php the_title();?></h2>
			<?php the_content(); ?>
	
	<?php endwhile;
	
	else :
		echo '<p>Geen content gevonden</p>';
endif;
?></section><?php	
get_footer();
?>