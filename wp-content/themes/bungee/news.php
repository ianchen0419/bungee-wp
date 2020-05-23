<?php /* Template Name: news */ ?>
<?php get_header() ?>

<div id="visual">
	<img src="<?php bloginfo('template_directory') ?>/inc/img/top/header.png" alt="About Bungee Super Fly®" width="100%" />
	<h1 class="topage-title orange-text">News</h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<div class="spacer" style="height: 60px"></div>
		<?php
			$args = array(
			'posts_per_page' => -1 // 表示件数の指定
			);
			$posts = get_posts( $args );
			foreach ( $posts as $post ): // ループの開始
			setup_postdata( $post ); // 記事データの取得
		?>
		<div class="news-item">
			<div class="news-date"><?php the_time('Y.m.d') ?></div>
			<div class="news-type"><?php echo strip_tags(get_the_category_list()); ?></div>
			<a href="<?php echo get_the_content() ? the_permalink(): "javascript:;"; ?>" class="news-link"><?php echo mb_strimwidth(get_the_title(), 0, 100, '...'); ?></a>
		</div>
		<?php
			endforeach; // ループの終了
			wp_reset_postdata(); // 直前のクエリを復元する
		?>
	</div>
</main>

<?php get_footer() ?>