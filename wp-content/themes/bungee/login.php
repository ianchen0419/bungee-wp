<?php /* Template Name: login */ ?>
<?php get_header(); ?>

<div id="visual">
	<img src="<?php bloginfo('template_directory') ?>/inc/img/top/header.png" alt="About Bungee Super Fly®" width="100%" />
	<h1 class="topage-title">For Members<br>会員限定ページ</h1>
</div>
<main id="contact" class="gutenberg">
	<div class="wrapper-size text-align-center">
		<div style="height: 80px"></div>
		<?php
			$args=array(
				'redirect' => home_url('/member/'),
			);

			wp_login_form($args);

			$login  = (isset($_GET['login']) ) ? $_GET['login'] : 0;
			if ( $login === "failed" ) {
				echo '<p class="login-msg">不明なユーザー名です。</p>';
			} elseif ( $login === "empty" ) {
				echo '<p class="login-msg">ユーザー名或いはパスワードを入力してください。</p>';
			} elseif ( $login === "false" ) {
				echo '<p class="login-msg"><strong>ERROR:</strong>ログアウトされました</p>';
			}
		?>
	</div>

	
</main>

<?php get_footer(); ?>