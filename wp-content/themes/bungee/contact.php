<?php /* Template Name: contact */ ?>
<?php get_header(); ?>

<div id="visual">
	<img src="<?php bloginfo('template_directory') ?>/inc/img/top/header.png" alt="About Bungee Super Fly®" width="100%" />
	<h1 class="topage-title orange-text">Contact</h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<div class="spacer" style="height: 60px;"></div>
		<p class="center-text">お問合せをいただき、誠にありがとうございます。<br>必要な項目をご記入の上、「送信」ボタンをクリックしてください。</p>
		<div class="spacer" style="height: 40px;"></div>
		<form action="<?php bloginfo('url') ?>/contact/conf" class="contact-form" method="POST">
			<div>
				<div>
					<strong>会社名</strong>
				</div>
				<input type="text" name="your-company" />
			</div>
			<div>
				<div>
					<strong>部署名</strong>
				</div>
				<input type="text" name="your-division" />
			</div>
			<div>
				<div>
					<strong>お名前</strong>
					<span class="badge">必須</span>
				</div>
				<input type="text" required name="your-name" />
			</div>
			<div>
				<div>
					<strong>メールアドレス</strong>
					<span class="badge">必須</span>
				</div>
				<input type="email" required name="your-mail" />
			</div>
			<div>
				<div>
					<strong>メールアドレス（確認用）</strong>
					<span class="badge">必須</span>
				</div>
				<input type="email" required name="your-mail2" />
			</div>
			<div>
				<div>
					<strong>電話番号</strong>
					<span class="badge">必須</span>
				</div>
				<input type="tel" required name="your-phone" />
			</div>
			<div>
				<div>
					<strong>お問い合わせ項目</strong>
					<span class="badge">必須</span>
				</div>

				<div>
					<label class="radio">
						<input type="radio" name="your-type" value="サービスに関して" />
						<div class="widget"></div>
						<span>サービスに関して</span>
					</label>
					<label class="radio">
						<input type="radio" name="your-type" value="商品導入に関して" />
						<div class="widget"></div>
						<span>商品導入に関して</span>
					</label>
					<label class="radio">
						<input type="radio" name="your-type" value="インストラクター研修に関して" />
						<div class="widget"></div>
						<span>インストラクター研修に関して</span>
					</label>
					<label class="radio">
						<input type="radio" name="your-type" value="その他" />
						<div class="widget"></div>
						<span>その他</span>
					</label>
				</div>
			</div>
			<div>
				<div>
					<strong>お問い合わせ内容</strong>
				</div>
				<textarea cols="30" rows="10" name="your-message"></textarea>
			</div>

			<div class="button-area center-text">
				<input type="submit" value="入力内容を確認する" class="orange-button long-button" />
			</div>
		</form>
		
	</div>
</main>
<script>
	var prevLabel=decodeURIComponent(location.href.split('#').pop());
	if(prevLabel==='商品導入に関して'){
		document.querySelector('input[value="商品導入に関して"]').checked=true;
	}

	if(prevLabel==='インストラクター研修に関して'){
		document.querySelector('input[value="インストラクター研修に関して"]').checked=true;
	}
</script>
<?php $_SESSION['conf']=true; ?>
<?php get_footer(); ?>