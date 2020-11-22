<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ja">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="ja" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<?php wp_site_icon(); ?>
	<meta name="title" content="<?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?>" />
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	<meta name="description" content="<?php bloginfo('description') ?>" />
	<meta name="keywords" content="ジム,トレーニング,フィットネス,有酸素運動,Natural Body Space,バンジースーパーフライ" />
	<link rel="stylesheet prefetch" href="<?php bloginfo('template_directory') ?>/inc/lib/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet prefetch" href="<?php bloginfo('template_directory') ?>/gutenberg.css" />
	<link rel="stylesheet prefetch" href="<?php bloginfo('template_directory') ?>/style.css" />
	<link rel="stylesheet" media="screen and (max-width: 768px)" href="<?php bloginfo('template_directory') ?>/mobile.css" />
	<link rel='stylesheet' id='admin-bar-css'  href='<?php bloginfo('home') ?>/wp-includes/css/admin-bar.min.css?ver=5.5.3' type='text/css' media='all' />
	<link rel='stylesheet' id='admin-bar-css'  href='<?php bloginfo('home') ?>/wp-includes/css/dashicons.min.css?ver=5.5.3' type='text/css' media='all' />
</head>

<?php 
	if(is_front_page()){
?>
		<body onload="autoShow()" onclick="closeMenu(this, event)">

<?php 
	}else {
?>
		<body onclick="closeMenu(this, event)">
<?php
	}
?>

<?php 
	if(is_admin()){
		wp_body_open();
	}
?>
	<header id="header">
		<table width="100%">
			<tr>
				<td width="10%"></td>
				<td width="80%" align="center">
					<a href="<?php bloginfo('url'); ?>" />
						<img src="<?php bloginfo('template_directory') ?>/inc/img/top/logo.png" alt="ロゴ" height="100" />
					</a>
				</td>
				<td width="10%" align="right">
					<div class="menu-icon" onclick="openMenu()">
						<span class="menu-text">Menu</span>
						<i class="fa fa-bars menu-bars fa-2x"></i>
					</div>
				</td>
			</tr>
		</table>
	</header>
	<nav id="menu">
		<div class="menu-wrapper">
			<a href="<?php bloginfo('url'); ?>" class="menu-item">home</a>
			<a href="<?php bloginfo('url'); ?>/about-bungee-super-fly-workout" class="menu-item">about</a>
			<a href="<?php bloginfo('url'); ?>/bungee-teacher-training" class="menu-item">teacher training</a>
			<a href="<?php bloginfo('url'); ?>/instructor" class="menu-item">certified instructor</a>
			<a href="<?php bloginfo('url'); ?>/bungee-equipment" class="menu-item">equipment</a>
			<a href="<?php bloginfo('url'); ?>/locations" class="menu-item">locations</a>
			<a href="<?php bloginfo('url'); ?>/contact" class="menu-item">contact</a>
			<a href="<?php bloginfo('url'); ?>/member" class="menu-item">For Members<br>（会員限定ページ）</a>
		</div>
	</nav>