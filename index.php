<?php

get_header();
?><section>
<h2>Laatste Nieuws</h2>
<?php
if (have_posts()):
	while (have_posts()) : the_post(); ?>

		<article class="post has-thumbnail">
			<div class="post-thumbnail">
				<a href="<?php the_permalink();?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
			</div>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
			<p class="post-info"><?php the_time('j F Y'); ?> om <?php the_time('G:i'); ?> - door <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> - geplaatst in
				<?php
					$categories = get_the_category();
					$separator = ", ";
					$output = '';
					
					if ($categories){
						foreach ($categories as $category){
							$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
						}
						echo trim($output, $separator);
					}
				?>
			</p>
			<?php echo get_the_excerpt(); ?>
			<a class="read-more" href="<?php the_permalink(); ?>"><button class="button" style="vertical-align:middle"><span>Lees Verder </span></button></a>
		</article>
	
	<?php endwhile;
	
	else :
		echo '<p>Geen content gevonden</p>';
endif;
?><div id="pagination-wrapper"><?php
	echo paginate_links();
?></div></section><?php	
get_footer();
?>