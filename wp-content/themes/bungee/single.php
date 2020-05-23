<?php get_header(); ?>

<div id="visual">
	<img src="<?php bloginfo('template_directory') ?>/inc/img/top/header.png" alt="About Bungee Super Fly®" width="100%" />
	<h1 class="topage-title orange-text"><?php the_title(); ?></h1>
</div>
<main id="contact" class="gutenberg">
	<div class="wrapper-size">
		<div class="spacer" style="height: 60px"></div>
		<div class="right-text"><?php the_time('Y.m.d') ?></div>
		<div class="spacer" style="height: 40px"></div>
		<?php
			while(have_posts()): the_post(); 
				the_content();
			endwhile;
			
			edit_post_link('クリックして編集', '<div class="right-text clear-both">', '</div>'); 
		?>
	</div>

	
</main>

<?php get_footer(); ?>