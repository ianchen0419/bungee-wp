<?php /* Template Name: contact-finish */ ?>
<?php get_header(); ?>

<div id="visual">
	<img src="<?php bloginfo('template_directory') ?>/inc/img/top/header.png" alt="About Bungee Super Fly®" width="100%" />
	<h1 class="topage-title orange-text">Contact</h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<div class="spacer" style="height: 60px;"></div>
		<?php

		error_reporting(0);

		function _post($str){
		    $val=htmlspecialchars($_POST[$str]);
		    return $val;
		}
		// $_POST['str']ではなくて、_post('str')を利用する

		if ($_SESSION['finish']==true){

			// ユーザーへのメール
			require_once(ABSPATH . WPINC . '/class-phpmailer.php'); 
			$mailer = new PHPMailer();
			$mailer->SMTPSecure = "ssl";
			$mailer->Host = "smtp.gmail.com";
			// $mailer->Host = "sv8207.xserver.jp";
			$mailer->Port = 465;
			// $mailer->Port = 587;
			$mailer->CharSet = "utf-8";    
			$mailer->Username = "inquiry.workcapital@gmail.com";     
			// $mailer->Username = "info@bungee-super-fly.jp";     
			$mailer->Password = "contactwc180623@";
			// $mailer->Password = "443322ska";
			$mailer->IsSMTP();
			$mailer->SMTPAuth = true;
			// $mailer->SMTPDebug = 2;
			$mailer->Encoding = "base64";
			$mailer->IsHTML(true); 
			$mailer->AddReplyTo('inquiry.workcapital@gmail.com');
			// $mailer->AddReplyTo('info@natural-bs.jp');
			$mailer->setFrom('inquiry.workcapital@gmail.com', 'Bungee Super Fly'); 
			// $mailer->setFrom('info@bungee-super-fly.jp', 'Bungee Super Fly'); 
			$mailer->Subject = 'Bungee Super Flyへのお問い合わせありがとうございます'; 
			$mailer->Body = 
				_post('your-company')."<br>".
				_post('your-name').'様'."<br><br>".
				'この度はBungee Super Flyへお問い合わせいただき、誠に有難うございます。'."<br>".
				'下記の内容でお問い合わせを承りました。'."<br>".
				'担当者確認の上、ご連絡いたしますので、今しばらくお待ちいただきますようお願いいたします。'."<br><br><br><br>".

				'【会社名】'._post('your-company')."<br>".
				'【部署名】'._post('your-division')."<br>".
				'【お名前】'._post('your-name')."<br>".
				'【メールアドレス】'._post('your-mail')."<br>".
				'【メールアドレス（確認用）】'._post('your-mail2')."<br>".
				'【電話番号】'._post('your-phone')."<br>".
				'【お問い合わせ項目】'._post('your-type')."<br>".
				'【お問い合わせ内容】'."<br>".
				str_replace("\n","<br>",_post('your-message'))."<br><br><br><br>".

				'---'."<br>".
				'BUNGEE SUPER FLY®'."<br>".
				'株式会社Natural Body Space'."<br>".
				'東京都中央区東日本橋2丁目25-4　サンライズ升和ビル5階'."<br>".
				'TEL. 03-6869-3927'."<br>".
				'E-Mail. info@natural-bs.jp';

			$mailer->AddAddress(_post('your-mail'));

			if($mailer->Send()){
				echo '
					<p>
						この度はお問い合わせをいただき、誠にありがとうございます。<br>
						内容は担当者が確認の上、追ってご連絡いたします。<br>
						どうぞよろしくお願いいたします。<br>
					</p>

					<div class="spacer" style="height: 40px"></div>

					<p>
						BUNGEE SUPER FLY®<br>
						株式会社Natural Body Space<br>
						東京都中央区東日本橋2丁目25-4　サンライズ升和ビル5階<br>
						TEL. 03-6869-3927
					</p>
				';

		 	}else{
				echo '<h2 class="main-title">失敗しました</h2>';
			}

			//担当者へのメール
			$mailer->setFrom(_post('your-mail'), _post('your-name')); 
			$mailer->Subject = 'Bungee Super Flyへのお問い合わせが届きました'; 
			$mailer->Body = 
				'担当者各位'."<br><br>".
				'Bungee Super Flyへのお問い合わせが届きましたので、'."<br>".
				'ご確認の程お願いいたします。'."<br><br><br><br>".

				'【会社名】'._post('your-company')."<br>".
				'【部署名】'._post('your-division')."<br>".
				'【お名前】'._post('your-name')."<br>".
				'【メールアドレス】'._post('your-mail')."<br>".
				'【メールアドレス（確認用）】'._post('your-mail2')."<br>".
				'【電話番号】'._post('your-phone')."<br>".
				'【お問い合わせ項目】'._post('your-type')."<br>".
				'【お問い合わせ内容】'."<br>".
				str_replace("\n","<br>",_post('your-message'))."<br><br><br><br>";

			$mailer->ClearAllRecipients( );
			$mailer->AddAddress('ianchen0419@gmail.com');
			// $mailer->AddAddress('info@natural-bs.jp');
			$mailer->Send();

		}else{
			header('Location: http://localhost/bungee/');
		}

		?>		
	</div>
</main>
<?php unset($_SESSION['finish']); ?>
<?php get_footer(); ?>