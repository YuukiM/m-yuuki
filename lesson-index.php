<?php
/*
 * Template Name: レッスントップ
 *
 * */
?>

<?php get_header(); ?>
	<main class="lesson-top">
		<section class="lesson-hero-section lesson-hero-section--top">
			<div class="lesson-hero-section__catch">
				<p class="lesson-hero-section__catch-text">
					Yûki's Web Design Lessonsで、<br>
					プロの技術とノウハウを学ぼう！
				</p>
				<div class="lesson-hero-section__catch-button">
					<a class="button" href="#inquiry">
						ご相談はこちら
					</a>
				</div>
			</div>
			<div class="lesson-hero-section__image">
				<img src="<?php echo get_theme_file_uri('/images/portrait-lesson-top.png'); ?>" loading="lazy" alt="宮崎祐樹 写真">
			</div>
		</section>
		<?php
/*		<section class="lesson-section">
			<nav class="lesson-nav">
				<ul class="lesson-nav-list">
					<li class="lesson-nav-list__item"><a href="#private">プライベートレッスン</a></li>
					<li class="lesson-nav-list__item"><a href="#mentoring">メンタリング</a></li>
					<li class="lesson-nav-list__item"><a href="#voices">受講生の声</a></li>
					<li class="lesson-nav-list__item"><a href="#flow">受講までの流れ</a></li>
					<li class="lesson-nav-list__item"><a href="#teacher">講師について</a></li>
					<li class="lesson-nav-list__item"><a href="#inquiry">お問合せ</a></li>
				</ul>
			</nav>
		</section>*/
		?>
		<section class="lesson-section" id="content">
			<div class="lesson-section__inner">
				<h2 class="lesson-section__heading">Yûki's Web Design Lessonsの特徴</h2>
				<div class="lesson-content">
					<div class="lesson-introduction">
						<p>
							こんにちは！Webデザイン講師の宮崎祐樹です。
						</p>
						<p>
							僕は、webデザインはただ技術を覚えるだけではなく、自分の感性や発想力も大切だと思っています。
						</p>
						<p>
							だから、Yûki's Web Design Lessonsでは、答えを教えるだけではなく、自分で考える力を育てることにも力を入れています。
						</p>
						<p>レッスン形式は2種類。ご要望に応じて、柔軟にご対応いたします。</p>
					</div>
					<ul class="lesson-choice">
						<li class="lesson-choice__item">
							<a href="#private">プライベートレッスン</a>
						</li>
						<li class="lesson-choice__item">
							<a href="#mentoring">メンタリング</a>
						</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="lesson-section lesson-section--private" id="private">
			<div class="lesson-section__inner">
				<p class="lesson-section__sub-heading">どうしてもわからないときの駆け込み寺</p>
				<h2 class="lesson-section__heading">プライベートレッスン</h2>
				<p class="lesson-section__lesson-lead">
					プライベートレッスンは、ご自身の目的や必要に応じて行う単発のレッスンです。受注中の案件でどうしてもひとりでは解決できない問題が起きたときなどにぜひご活用ください。
				</p>
				<div class="lesson-content">
					<div class="lesson-box-transparent">
						<p class="lesson-price-title">1時間</p>
						<p class="lesson-price"><strong>5,500</strong>円</p>
					</div>
				</div>
				<div class="lesson-button">
					<a class="button" href="private-lesson">詳細はこちら</a>
				</div>
			</div>
		</section>

		<section class="lesson-section lesson-section--mentoring" id="mentoring">
			<div class="lesson-section__inner">
				<p class="lesson-section__sub-heading lesson-section__sub-heading--mentoring">継続受講でモチベーションもスキルもアップ！</p>
				<h2 class="lesson-section__heading lesson-section__heading--mentoring">メンタリング</h2>
				<p class="lesson-section__lesson-lead lesson-section__lesson-lead--mentoring">
					メンタリングサービスは、月々定額をお支払いいただくことで、いつでも質問できるチャットと定期ZOOMレッスンが受けられるサービスです。 プライベートレッスンよりもお得に、継続して勉強できます。
				</p>
				<div class="lesson-content">
					<div class="lesson-box-transparent">
						<p class="lesson-price-title">1か月</p>
						<p class="lesson-price"><strong>5,000</strong>円～</p>
					</div>
				</div>
				<div class="lesson-button">
					<a class="button" href="mentoring">詳細はこちら</a>
				</div>
			</div>
		</section>

		<section class="lesson-section" id="voices">
			<div class="lesson-section__inner">
				<h2 class="lesson-section__heading">受講された方の声</h2>
				<ul class="feature-list">
					<li class="feature-list__item">
						<div class="feature-list__icon feature-list__icon--voice"><i class="fas fa-user"></i></div>
						<p class="feature-list__text">
							WEBデザイナーとしてデビューしたてで、とにかく何をやるにも不安！！という私の質問・疑問一つ一つに丁寧に解説していただきました。
						</p>
						<p>
							受講レッスン：プライベート
						</p>
					</li>
					<li class="feature-list__item">
						<div class="feature-list__icon feature-list__icon--voice"><i class="fas fa-user"></i></div>
						<p class="feature-list__text">
							ウェブサイト製作中にコーディングで行き詰まり、自分では問題に気づけなくて困っていたのですが、宮崎先生の丁寧なご指導で問題を解決することができました！
						</p>
						<p>受講レッスン：プライベート</p>
					</li>
					<li class="feature-list__item">
						<div class="feature-list__icon feature-list__icon--voice"><i class="fas fa-user"></i></div>
						<p class="feature-list__text">
							納品までフォローアップありがとうございました！自分だけでは解決できなかった箇所たくさんありました。とても心強かったです！
						</p>
						<p>受講レッスン：メンタリング</p>
					</li>
				</ul>
			</div>
		</section>

		<section class="lesson-section" id="flow">
			<div class="lesson-section__inner">
				<h2 class="lesson-section__heading">受講までの流れ</h2>
				<div class="lesson-flow">
					<div class="lesson-flow__item-wrap">
						<dl class="lesson-flow__item">
							<dt class="lesson-flow__item-title"><strong>STEP1</strong> まずはご相談ください</dt>
							<dd class="lesson-flow__item-content">
								下記のご相談フォームからご相談ください。<br>できればその際に現在のご状況やご希望のレッスン内容などをご連絡ください。<br>宮崎から改めてご連絡差し上げます。
							</dd>
						</dl>
					</div>
					<div class="lesson-flow__item-wrap">
						<dl class="lesson-flow__item">
							<dt class="lesson-flow__item-title"><strong>STEP2</strong> 日程決め・決済</dt>
							<dd class="lesson-flow__item-content">
								メールでご都合の良い受講の日時を決めます。<br>ストアカというサイトで決済をしていただきます。日程が決定次第、決済用のリンクをお送りします。
							</dd>
						</dl>
					</div>
					<div class="lesson-flow__item-wrap">
						<dl class="lesson-flow__item">
							<dt class="lesson-flow__item-title"><strong>STEP3</strong> レッスン当日</dt>
							<dd class="lesson-flow__item-content">
								決済後に届く完了メールにZOOMのリンクが記載されています。<br>当日の時間になりましたらリンクからZOOMにお入りください。
							</dd>
						</dl>
					</div>
				</div>
			</div>
		</section>

		<section class="lesson-section" id="teacher">
			<div class="lesson-section__inner">
				<h2 class="lesson-section__heading">講師について</h2>
				<div class="teacher">
					<div class="teacher__image">
						<img src="<?php echo get_theme_file_uri('/images/teacher.jpg'); ?>" loading="lazy" alt="宮崎祐樹 写真">
					</div>
					<div class="teacher__profile">

						<p>
							web業界で15年以上の経験を持ち、webデザイナーとしてもコーダーとしても豊富な経験を持っています。
						</p>
						<p>
							2020年からwebデザイン講師として活動しており、ママさんたちを中心に600名以上の方々にwebデザインの楽しさを伝えてきました。受講生からは「わかりやすい」「楽しい」「丁寧」という声をたくさんいただいています。
						</p>
						<p>
							webデザインは無限の可能性があります。私と一緒にwebの世界を探検しましょう！
						</p>
					</div>
				</div>
				<div class="lesson-button">
					<a href="/profile" class="button" target="_blank">詳しい経歴はこちら</a>
				</div>
			</div>
		</section>

		<section class="lesson-section" id="inquiry">
			<div class="lesson-section__inner">
				<h2 class="lesson-section__heading" id="inquiry">ご相談はこちら</h2>

				<div class="form-notes">
					<p>下記フォームにご記入の上「送信する」ボタンを押してください。</p>
					<p><em class="emphasis">※印は必ず入力してください。</em></p>
				</div>

				<?php //フォーム用 ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; else: ?>
					<p>no data</p>
				<?php endif; ?>

			</div>
		</section>

	</main>

<?php get_footer(); ?>