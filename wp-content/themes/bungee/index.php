<?php get_header(); ?>

<div id="visual" class="topage-visual">
	<div class="out-area">
		<div class="slide1" style="z-index: 3" data-index=3></div>
		<div class="slide2" style="z-index: 2" data-index=2></div>
		<div class="slide3" style="z-index: 1" data-index=1></div>
	</div>
	<h1 class="topage-title">BUNGEE SUPER FLY®<br>バンジースーパーフライ</h1>
	<div class="arrow-area">
		<button onclick="goPrev()">
			<i class="fa fa-chevron-left fa-fw"></i>
		</button>
		<button onclick="goNext()">
			<i class="fa fa-chevron-right fa-fw"></i>
		</button>
	</div>
</div>
<main id="contact">
	<section>
		<div class="wrapper-size">
			<div class="column-area flex-aligncenter">
				<div class="column-item" style="flex-basis: 20%" data-basis=true>
					<h2 class="orange-text center-text large-text">WHAT IS<br>BUNGEE SUPER FLY®?</h2>
				</div>
				<div class="column-item">
					<strong>バンジースーパーフライは、筋力トレーニングと有酸素運動を組み合わせた新しいスタイルのフィットネスです。<br>楽しさと効果を両立させたワークアウトを体験ください。</strong>
					<p>空中でジャンプすることで心拍数を上げ、1回のワークアウトで最大700キロカロリーの消費になります。 バンジーは、バーピー、腕立て伏せ、ジャンプといったさまざまな運動が組み合わさることで、これまでとは異なる方法で筋肉を鍛えます。</p>
				</div>
			</div>
			<div class="button-area right-text">
				<a class="white-button" href="<?php bloginfo('url'); ?>/about-bungee-super-fly-workout">Read more</a>
			</div>
			<div class="center-text">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/6MXsnABjCyY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</section>
	<section class="section-orange">
		<div class="wrapper-size">
			<div class="column-area flex-aligncenter">
				<div class="column-item">
					<figure class="center-text">
						<figcaption>
							<strong class="large-text">TEACHER TRAINING</strong>
						</figcaption>
						<div class="spacer" style="height: 20px"></div>
						<img src="<?php bloginfo('template_directory') ?>/inc/img/top/training.png" alt="TEACHER TRAINING" width="300" />
						<div class="button-area">
							<a class="white-button" href="<?php bloginfo('url'); ?>/bungee-teacher-training">Read more</a>
						</div>
					</figure>
				</div>
				<div class="column-item">
					<figure class="center-text">
						<figcaption>
							<strong class="large-text">EQUIPMENT</strong>
						</figcaption>
						<div class="spacer" style="height: 20px"></div>
						<img src="<?php bloginfo('template_directory') ?>/inc/img/top/equipment.png" alt="EQUIPMENT" width="300" />
						<div class="button-area">
							<a class="white-button" href="<?php bloginfo('url'); ?>/bungee-equipment">Read more</a>
						</div>
					</figure>
				</div>
			</div>
		</div>
	</section>
	<section class="section-black">
		<div class="wrapper-size">
			<div class="column-area flex-aligncenter">
				<div class="column-item">
					<figure class="center-text">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/top/limitless.png" alt="LIMITLESS" width="500" />
					</figure>
				</div>
				<div class="column-item">
					<h2 class="large-text">BENEFITS</h2>
					<p>バンジースーパーフライは、発想次第でさまざまな使い方が可能となり、大きな可能性を秘めています。<br>リゾートやジム、そしてインストラクターの発想によって加えられる価値は無限大 (Limitless) です。</p>
					<ul class="pad_lt20">
						<li>有酸素運動とウエイトトレーニングを組み合わせた特別なワークアウト。</li>
						<li>45分間のワークアウトで700キロカロリーを燃焼。</li>
						<li>目標達成に向けた楽しいワークアウト時間。</li>
						<li>全ての年齢の方に向けた、簡単な回復プログラムから負荷の高いトレーニングまで。</li>
						<li>実用的な最高のバンジーギアを開発。ハーネスはXXSからXXLサイズまで調整可能で、体重20kgから150kgの方まで対象。</li>
						<li>個人に向けた集中的なトレーニングなど新しい機会を提供。</li>
					</ul>
					<strong>THE POSSIBILITIES ARE ENDLESS</strong>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="wrapper-size">
			<h2 class="center-text large-text">NEWS</h2>
			<div class="spacer" style="height: 40px"></div>
			<?php
				$args = array(
				'posts_per_page' => 6 // 表示件数の指定
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
			<div class="button-area right-text">
				<a href="<?php bloginfo('url'); ?>/news" class="white-button">過去のニュース一覧</a>
			</div>
		</div>
	</section>
</main>

<?php get_footer();?>