<?php
/*
 * Template Name: プライベートレッスン
 *
 * */
?>

<?php get_header(); ?>
	<main class="private-lesson">
		<section class="lesson-hero-section">
			<h2 class="lesson-hero-section__heading">
				<?php the_title(); ?>
			</h2>
		</section>
		<section class="lesson-section">
			<div class="lesson-section__inner">
				<p class="lesson-catch">必要な時に必要な分だけ、<br>プライベートで！</p>
				<p class="lesson-lead">
						プライベートレッスンは、ご自身の目的や必要に応じて行う単発のレッスンです。受注中の案件でどうしてもひとりでは解決できない問題が起きたときなどにぜひご活用ください。
				</p>
				<div class="lesson-button">
					<a class="button" href="#inquiry">
						ご相談はこちら
					</a>
				</div>
			</div>
		</section>

		<section class="lesson-section">
			<nav class="lesson-nav">
				<ul class="lesson-nav-list">
					<li class="lesson-nav-list__item"><a href="#content">内容</a></li>
					<li class="lesson-nav-list__item"><a href="#price">料金</a></li>
					<li class="lesson-nav-list__item"><a href="#features">特徴</a></li>
					<li class="lesson-nav-list__item"><a href="#voices">受講生の声</a></li>
					<li class="lesson-nav-list__item"><a href="#flow">受講までの流れ</a></li>
					<li class="lesson-nav-list__item"><a href="#inquiry">お問合せ</a></li>
				</ul>
			</nav>
		</section>

		<section class="lesson-section" id="content">
			<div class="lesson-section__inner">
				<h2 class="lesson-section__heading">どんな内容？</h2>
				<div class="lesson-content">
					<div class="lesson-content__block">
						<p>レッスンの内容は自由です。</p>
						<p>その時その時に聞いてみたいこと、習ってみたいことを中心にお勉強していきましょう。</p>
						<p>これからどうしていけばいいか、勉強の仕方をもう少し詳しく知りたい、などのご相談でもOKです。</p>
						<p>お気軽にお問合せください。</p>
					</div>
					<div class="lesson-content__block">
						<p>継続してレッスンを受講したい場合には、よりお得な<a href="https://m-yuuki.com/mentoring/" title="Web制作メンタリングサービス">メンタリングサービス</a>をお勧めしています。
						</p>
					</div>
				</div>
			</div>
		</section>

		<section class="lesson-section lesson-section--price" id="price">
			<div class="lesson-section__inner">
				<h2 class="lesson-section__heading">料金</h2>
				<div class="lesson-content">
					<div class="lesson-box-transparent">
						<p class="lesson-price-title">1時間</p>
						<p class="lesson-price"><strong>5,500</strong>円</p>
					</div>
					<div class="lesson-box-transparent">
						<p class="lesson-price-title">初回の最初の1時間は特別価格！</p>
						<p class="lesson-price"><strong>4,500</strong>円</p>
						<p class="lesson-notes">※2時間目以降は通常の5,500円です</p>
					</div>
				</div>
				<div class="lesson-button">
					<a class="button" href="#inquiry">ご相談はこちら</a>
				</div>
			</div>
		</section>

		<section class="lesson-section" id="features">
			<div class="lesson-section__inner">
				<h2 class="lesson-section__heading">プライベートレッスンの<br class="sp-only">いいところ</h2>
				<ul class="feature-list">
					<li class="feature-list__item">
						<div class="feature-list__icon"><i class="fas fa-question-circle"></i></div>
						<h3 class="feature-list__heading">口頭で質問できる</h3>
						<p class="feature-list__text">文章でしづらい質問も口頭で質問。答えも口頭でわかりやすくお答えします。おひとりなので気軽に聞けるのもポイント！</p>
					</li>
					<li class="feature-list__item">
						<div class="feature-list__icon"><i class="fa-solid fa-face-smile"></i></div>
						<h3 class="feature-list__heading">実力に合わせて</h3>
						<p class="feature-list__text">マンツーマンだから、ご自身の実力に合わせた内容でレッスンを受けることができます。</p>
					</li>
					<li class="feature-list__item">
						<div class="feature-list__icon"><i class="fas fa-info-circle"></i></div>
						<h3 class="feature-list__heading">より丁寧に解説</h3>
						<p class="feature-list__text">クラスレッスンでは丁寧な解説は難しいのも事実。マンツーマンならより丁寧に納得いくまで解説します。</p>
					</li>
				</ul>
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
					</li>
					<li class="feature-list__item">
						<div class="feature-list__icon feature-list__icon--voice"><i class="fas fa-user"></i></div>
						<p class="feature-list__text">
							ウェブサイト製作中にコーディングで行き詰まり、自分では問題に気づけなくて困っていたのですが、宮崎先生の丁寧なご指導で問題を解決することができました！
						</p>
					</li>
					<li class="feature-list__item">
						<div class="feature-list__icon feature-list__icon--voice"><i class="fas fa-user"></i></div>
						<p class="feature-list__text">
							ただ知識だけを教えてもらえるサイトや動画はたくさんありますが、1つ1つ例を用意して頂いたり質問形式でお話し頂けたので理解が深まったと思います。
						</p>
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