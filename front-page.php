<?php

get_header();
?>
<div id="slider">
	<ul id="slides">
		<li class="slide">
			<a href="<?php echo get_permalink(get_theme_mod('FTCTeamSpace-image-slider-link1'))?>">
				<figcaption><?php echo get_theme_mod('FTCTeamSpace-image-slider-text1')?></figcaption>
				<img src="<?php echo wp_get_attachment_url(get_theme_mod('FTCTeamSpace-image-slider-image1'))?>">
			</a>
		</li>
		<li class="slide">
			<a href="<?php echo get_permalink(get_theme_mod('FTCTeamSpace-image-slider-link2'))?>">
				<figcaption><?php echo get_theme_mod('FTCTeamSpace-image-slider-text2')?></figcaption>
				<img src="<?php echo wp_get_attachment_url(get_theme_mod('FTCTeamSpace-image-slider-image2'))?>">
			</a>
		</li>
		<li class="slide">
			<a href="<?php echo get_permalink(get_theme_mod('FTCTeamSpace-image-slider-link3'))?>">
				<figcaption><?php echo get_theme_mod('FTCTeamSpace-image-slider-text3')?></figcaption>
				<img src="<?php echo wp_get_attachment_url(get_theme_mod('FTCTeamSpace-image-slider-image3'))?>">
			</a>
		</li>
		<li class="slide">
			<a href="<?php echo get_permalink(get_theme_mod('FTCTeamSpace-image-slider-link4'))?>">
				<figcaption><?php echo get_theme_mod('FTCTeamSpace-image-slider-text4')?></figcaption>
				<img src="<?php echo wp_get_attachment_url(get_theme_mod('FTCTeamSpace-image-slider-image4'))?>">
			</a>
		</li>
		<li class="slide">
			<a href="<?php echo get_permalink(get_theme_mod('FTCTeamSpace-image-slider-link5'))?>">
				<figcaption><?php echo get_theme_mod('FTCTeamSpace-image-slider-text5')?></figcaption>
				<img src="<?php echo wp_get_attachment_url(get_theme_mod('FTCTeamSpace-image-slider-image5'))?>">
			</a>
		</li>
		<li class="slide">
			<a href="<?php echo get_permalink(get_theme_mod('FTCTeamSpace-image-slider-link1'))?>">
				<figcaption><?php echo get_theme_mod('FTCTeamSpace-image-slider-text1') ?></figcaption>
				<img src="<?php echo wp_get_attachment_url(get_theme_mod('FTCTeamSpace-image-slider-image1'))?>">
			</a>
		</li>
	</ul>
</div>
<section><?php

if (have_posts()):
	while (have_posts()) : the_post(); ?>
	
		<div id="twitter">
			<h2 style="margin-top: 0;">Laatste Tweets</h2>
			<a class="twitter-timeline" data-height="600" data-theme="light" data-chrome="noheader nofooter noborders" href="https://twitter.com/FTCTeamSpace">Tweets by FTCTeamSpace</a>
			<script async src="http://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>
		
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	
	<?php endwhile;
	
	else :
		echo '<p>Geen content gevonden</p>';
endif; ?>

<!-- home columns -->
<div class="home-columns clearfix">
	
	<!-- one half -->
	<div class="home-column-half">
		<h2>Laatste Nieuws</h2>
		<?php $newsPosts = new WP_Query('cat=3&posts_per_page=2');

		if ($newsPosts->have_posts()):
			while ($newsPosts->have_posts()) : $newsPosts->the_post(); ?>
			
				<article class="post has-thumbnail">
					<div class="post-thumbnail">
						<a href="<?php the_permalink();?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
					</div>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
					<p class="post-info"><?php the_time('j F Y'); ?> om <?php the_time('G:i'); ?> - door <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>
					<?php echo get_the_excerpt(); ?>
					<a class="read-more" href="<?php the_permalink(); ?>"><button class="button" style="vertical-align:middle"><span>Lees Verder </span></button></a>
				</article>
			
			<?php endwhile;
			
			else :
				echo '<p>Geen content gevonden</p>';
		endif; 
		wp_reset_postdata();?>	
	</div>
	
	<!-- one half -->
	<div class="home-column-half">
		<h2>Robot Updates</h2>
		<?php $robotPosts = new WP_Query('cat=4&posts_per_page=2');

		if ($robotPosts->have_posts()):
			while ($robotPosts->have_posts()) : $robotPosts->the_post(); ?>
			
				<article class="post has-thumbnail">
					<div class="post-thumbnail">
						<a href="<?php the_permalink();?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
					</div>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
					<p class="post-info"><?php the_time('j F Y'); ?> om <?php the_time('G:i'); ?> - door <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>
					<?php echo get_the_excerpt(); ?>
					<a class="read-more" href="<?php the_permalink(); ?>"><button class="button" style="vertical-align:middle"><span>Lees Verder </span></button></a>
				</article>
			
			<?php endwhile;
			
			else :
				echo '<p>Geen content gevonden</p>';
		endif;
		wp_reset_postdata();?>
	</div>
	
</div><!-- home columns -->


</section>



<?php	
get_footer();
?>