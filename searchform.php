<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" class="field" name="s" id="s" placeholder='<?php the_search_query(); ?>' />
	<button type="submit" class="submit" name="submit" id="searchsubmit">
		<span><i class="material-icons" style="font-size: 1em;">search</i></span>
	</button>
</form>
