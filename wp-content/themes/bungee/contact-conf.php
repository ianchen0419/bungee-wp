<?php /* Template Name: contact-conf */ ?>
<?php get_header(); ?>

<div id="visual">
	<img src="<?php bloginfo('template_directory') ?>/inc/img/top/header.png" alt="About Bungee Super Fly®" width="100%" />
	<h1 class="topage-title orange-text">Contact</h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<div class="spacer" style="height: 60px;"></div>

		<?php 	
			if ($_SESSION['conf']!=true){
				header('Location: http://localhost/bungee/');
			}
		?>


		<p class="center-text">お問合せをいただき、誠にありがとうございます。<br>必要な項目をご記入の上、「送信」ボタンをクリックしてください。</p>
		<div class="spacer" style="height: 40px;"></div>


		<form action="<?php bloginfo('url') ?>/contact/finish" class="contact-form" method="POST" onsubmit="goMail(this, event);">
			<div>
				<div>
					<strong>会社名</strong>
				</div>
				<input type="text" name="your-company" disabled readonly value="<?php echo $_POST['your-company'] ?>"  />
			</div>
			<div>
				<div>
					<strong>部署名</strong>
				</div>
				<input type="text" name="your-division" disabled readonly value="<?php echo $_POST['your-division'] ?>" />
			</div>
			<div>
				<div>
					<strong>お名前</strong>
					<span class="badge">必須</span>
				</div>
				<input type="text" required name="your-name" disabled readonly value="<?php echo $_POST['your-name'] ?>" />
			</div>
			<div>
				<div>
					<strong>メールアドレス</strong>
					<span class="badge">必須</span>
				</div>
				<input type="email" required name="your-mail" disabled readonly value="<?php echo $_POST['your-mail'] ?>" />
			</div>
			<div>
				<div>
					<strong>メールアドレス（確認用）</strong>
					<span class="badge">必須</span>
				</div>
				<input type="email" required name="your-mail2" disabled readonly value="<?php echo $_POST['your-mail2'] ?>" />
			</div>
			<div>
				<div>
					<strong>電話番号</strong>
					<span class="badge">必須</span>
				</div>
				<input type="tel" required name="your-phone" disabled readonly value="<?php echo $_POST['your-phone'] ?>" />
			</div>
			<div>
				<div>
					<strong>お問い合わせ項目</strong>
					<span class="badge">必須</span>
				</div>

				<div>
					<label class="radio">
						<input type="radio" name="your-type" disabled readonly <?php echo ($_POST['your-type']=='サービスに関して')?'checked':''; ?> value="サービスに関して" />
						<div class="widget"></div>
						<span>サービスに関して</span>
					</label>
					<label class="radio">
						<input type="radio" name="your-type" disabled readonly  <?php echo ($_POST['your-type']=='商品導入に関して')?'checked':''; ?> value="商品導入に関して" />
						<div class="widget"></div>
						<span>商品導入に関して</span>
					</label>
					<label class="radio">
						<input type="radio" name="your-type" disabled readonly  <?php echo ($_POST['your-type']=='インストラクター研修に関して')?'checked':''; ?> value="インストラクター研修に関して" />
						<div class="widget"></div>
						<span>インストラクター研修に関して</span>
					</label>
					<label class="radio">
						<input type="radio" name="your-type" disabled readonly  <?php echo ($_POST['your-type']=='その他')?'checked':''; ?> value="その他" />
						<div class="widget"></div>
						<span>その他</span>
					</label>
				</div>
			</div>
			<div>
				<div>
					<strong>お問い合わせ内容</strong>
				</div>
				<textarea cols="30" rows="10" name="your-message" disabled readonly><?php echo $_POST['your-message'] ?></textarea>
			</div>

			<div class="button-area center-text">
				<a class="white-button long-button" href="history.back();">戻る</a>
				<input type="submit" value="送信" class="orange-button long-button" />
			</div>
		</form>
	</div>
</main>

<?php 
	$_SESSION['finish']=true; 
	unset($_SESSION['conf']);
?>
<?php get_footer(); ?>