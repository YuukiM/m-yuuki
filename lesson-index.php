<?php
/*
 * Template Name: レッスントップ
 *
 * */
?>

<?php get_header(); ?>
	<main class="lesson-top">
		<section class="lesson-hero-section lesson-hero-section--top">
			<div class="lesson-home-catch">
				<p class="lesson-home-catch__text">
					Yûki's Web Design Lessonsで、<br>
					プロの技術とノウハウを学ぼう！
				</p>
				<div class="lesson-home-catch__button">
					<a class="button" href="#inquiry">
						まずは無料カウンセリング！
					</a>
				</div>
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
				<h2 class="lesson-section__heading">「わかった！」につながる<br>Yûki's Web Design Lessons</h2>
				<div class="lesson-content">
					<div class="lesson-introduction">
						<div class="lesson-introduction__image">
							<img src="<?php echo get_theme_file_uri('/images/lessons-top-illust.svg'); ?>" loading="lazy" alt="">
						</div>
						<div class="lesson-introduction__text">
							<p>
								ブログや動画などで気軽にWebデザインを学べる時代。
							</p>
							<p>
								でも、答えだけ見て作業して「よくわからないけど、なんかできた！」になっていませんか？
							</p>
							<p>
								その時にはそれでよいのかもしれませんが、残念ながらただの付け焼刃となってしまい、本当に実力がついたとは言えません。
							</p>
							<p>
								Yûki's Web Design Lessonsは、すぐに答えを教えるのではなく、自分で考える力を育てることにも力を入れています。
							</p>
							<p>
								周辺知識から丁寧に解説することで「わかった！」への道筋をつなげていきます。
							</p>
							<p>
								また、「納品できるか心配・・・」といったお悩みに真摯に向き合い、寄り添う力になることを心がけています。
							</p>
						</div>
					</div>
					<div class="lesson-choice-wrap">
						<h3 class="lesson-choice__heading">選べる2つのレッスン形式</h3>
						<ul class="lesson-choice__buttons">
							<li class="lesson-choice__item">
								<a href="#private">プライベートレッスン</a>
							</li>
							<li class="lesson-choice__item">
								<a href="#mentoring">メンタリング</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section class="lesson-section lesson-section--private" id="private">
			<div class="lesson-section__inner">
				<p class="lesson-sub-heading">どうしてもわからないときの駆け込み寺</p>
				<h2 class="lesson-section__heading">プライベートレッスン</h2>
				<p class="lesson-definition">
					プライベートレッスンは、ご自身の目的や必要に応じて行う単発のレッスンです。受注中の案件でどうしてもひとりでは解決できない問題が起きたときなどにぜひご活用ください。
				</p>
				<div class="lesson-price-box">
					<div class="price-box">
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
				<p class="lesson-sub-heading lesson-sub-heading--mentoring">継続受講でモチベーションもスキルもアップ！</p>
				<h2 class="lesson-section__heading lesson-section__heading--mentoring">メンタリング</h2>
				<p class="lesson-definition lesson-definition--mentoring">
					メンタリングサービスは、月々定額をお支払いいただくことで、いつでも質問できるチャットと定期ZOOMレッスンが受けられるサービスです。 プライベートレッスンよりもお得に、継続して勉強できます。
				</p>
				<div class="lesson-price-box">
					<div class="price-box">
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
						<div class="feature-list__text-wrap">
							<p class="feature-list__voice">
								WEBデザイナーとしてデビューしたてで、とにかく何をやるにも不安！！という私の質問・疑問一つ一つに丁寧に解説していただきました。<br>&ensp;
							</p>
							<p>
								受講レッスン：プライベート
							</p>
						</div>
						<div class="feature-list__user">
							<svg id="a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300"><path class="c" d="M89.72 236.64h119.72l-2.03-138.1H91.75l-2.03 138.1z"/><path class="d" d="M209.44 239.86H89.72a3.224 3.224 0 0 1-3.22-3.27l2.03-138.1a3.22 3.22 0 0 1 3.22-3.17h115.66c1.76 0 3.2 1.41 3.22 3.17l2.03 138.1c.01.86-.32 1.69-.93 2.31-.61.61-1.43.96-2.29.96Zm-116.45-6.44h113.18l-1.93-131.66H94.93L93 233.42Z"/><path class="b" d="m91.9 93.82-.24.06c-12.07-.29-15.07 11.09-13.07 21.35 2.64 13.56 12.76 18.49 18.56 16.6 5.33 21.44 16.44 29.01 27.23 33.04-1.2 9.2-.54 18.28-11.68 27.64-5.68 4.77-21.21 7.75-30.85 11.12-15.26 5.33-28.26 13.26-33.4 26.11-4.62 11.55-4.68 18.08-4 27.4.32 4.41 2.58 8.46 6.21 10.97 20.76 14.37 78.1 18.37 99.33 18.37s78.57-3.99 99.32-18.37c3.63-2.51 5.89-6.56 6.21-10.97.69-9.32.63-15.86-3.99-27.4-5.15-12.86-18.15-20.78-33.4-26.11-9.64-3.37-25.18-6.34-30.85-11.11-11.14-9.36-10.47-18.45-11.68-27.65 10.8-4.03 21.71-11.6 27.21-33.04h.02c5.8 1.9 15.92-3.03 18.56-16.59 2-10.26-1-21.64-13.07-21.35l-.24-.06C228.72 5 150.01 7.69 150.01 7.69S71.29 5 91.9 93.82Z"/><path class="d" d="M175.62 169.92c-1.31 0-2.53-.8-3.02-2.1-.62-1.67.22-3.52 1.89-4.14 9.46-3.53 19.86-9.96 25.22-30.83.02-.06.03-.13.05-.19.22-.9.4-1.65.56-2.34a3.228 3.228 0 0 1 3.84-2.45c1.74.39 2.83 2.11 2.45 3.84-.18.81-.39 1.68-.65 2.72l-.06.22c-6.15 23.71-18.8 31.19-29.15 35.05-.37.14-.75.2-1.13.2Z"/><path class="d" d="M205.45 137.27c-1.25 0-2.46-.18-3.6-.55a3.22 3.22 0 0 1 2-6.12c1.69.55 4.11.09 6.31-1.2 2.35-1.38 6.52-4.9 8.09-12.96 1.16-5.96.29-11.54-2.27-14.57-1.74-2.06-4.21-3.02-7.57-2.94a3.213 3.213 0 0 1-3.3-3.14 3.219 3.219 0 0 1 3.14-3.3c5.28-.13 9.65 1.68 12.64 5.22 3.9 4.62 5.24 11.89 3.67 19.96-2.05 10.54-7.87 15.35-11.15 17.28-2.61 1.53-5.38 2.32-7.98 2.32ZM124.39 169.92c-.37 0-.76-.07-1.13-.2-7.05-2.63-12.41-6.06-16.88-10.8-5.72-6.06-9.76-14.07-12.35-24.48-.24-.97-.45-1.86-.64-2.74-.37-1.74.74-3.45 2.47-3.82 1.74-.37 3.45.74 3.82 2.47.17.81.37 1.64.59 2.54 2.31 9.31 5.84 16.38 10.78 21.62 3.77 3.99 8.36 6.91 14.45 9.18 1.67.62 2.51 2.48 1.89 4.14-.48 1.3-1.71 2.1-3.02 2.1Z"/><path class="d" d="M94.57 137.27c-2.61 0-5.38-.79-7.99-2.33-3.28-1.93-9.09-6.74-11.14-17.27-1.57-8.07-.23-15.34 3.67-19.96 2.99-3.54 7.37-5.35 12.64-5.22 1.78.04 3.19 1.52 3.14 3.3a3.219 3.219 0 0 1-3.3 3.14c-3.35-.08-5.83.88-7.57 2.94-2.56 3.03-3.43 8.61-2.27 14.57.67 3.45 2.62 9.73 8.09 12.95 2.2 1.3 4.62 1.76 6.32 1.21a3.218 3.218 0 0 1 4.22 3.06c0 1.49-1.01 2.74-2.38 3.11-1.09.34-2.25.5-3.44.5Z"/><path class="d" d="M206.42 105.57c-.28 0-.57-.04-.86-.12a3.215 3.215 0 0 1-2.25-3.96c.63-2.28 1.18-4.49 1.65-6.56 6.36-27.41 3.69-48.48-7.92-62.63-8.64-10.53-20.85-15.28-29.57-17.42-9.63-2.36-17.28-2.14-17.36-2.14h-.22c-.07 0-7.73-.22-17.36 2.14-8.72 2.14-20.93 6.89-29.57 17.42-11.62 14.15-14.29 35.22-7.93 62.62.47 2.09 1.03 4.29 1.66 6.57.47 1.72-.54 3.49-2.25 3.96-1.72.47-3.49-.54-3.96-2.25-.65-2.37-1.23-4.68-1.72-6.84-6.84-29.46-3.72-52.41 9.26-68.19 7.77-9.45 19.25-16.23 33.2-19.6 9.92-2.4 17.73-2.3 18.79-2.27 1.05-.03 8.87-.13 18.78 2.27 13.94 3.37 25.42 10.15 33.19 19.6 12.98 15.78 16.1 38.73 9.26 68.21-.49 2.15-1.07 4.45-1.72 6.83a3.22 3.22 0 0 1-3.1 2.37ZM150 291.53c-10.83 0-30.51-1-50.29-3.83-24.27-3.46-41.39-8.55-50.87-15.12-4.43-3.07-7.2-7.95-7.59-13.39-.68-9.35-.76-16.4 4.22-28.84 4.89-12.21 16.44-21.36 35.33-27.96 3.08-1.08 6.64-2.09 10.4-3.15 7.52-2.13 16.05-4.54 19.43-7.39 8.63-7.25 9.33-13.97 10.13-21.76.13-1.25.26-2.54.43-3.83a3.228 3.228 0 0 1 3.61-2.78c1.76.23 3.01 1.85 2.78 3.61-.16 1.21-.29 2.45-.41 3.66-.83 8.02-1.77 17.11-12.39 26.03-4.44 3.74-13.28 6.24-21.82 8.66-3.67 1.04-7.13 2.02-10.03 3.03-17.02 5.95-27.32 13.89-31.48 24.27-4.48 11.18-4.41 17.27-3.78 25.97.25 3.49 2.02 6.61 4.83 8.56 8.53 5.91 25.17 10.76 48.11 14.03 19.45 2.78 38.76 3.76 49.38 3.76 23.42 0 78.07-4.35 97.49-17.8 2.82-1.95 4.58-5.07 4.84-8.56.64-8.7.71-14.79-3.77-25.97-4.16-10.38-14.45-18.32-31.47-24.27-2.91-1.02-6.37-2-10.04-3.04-8.54-2.42-17.38-4.92-21.81-8.65-10.62-8.93-11.56-18.01-12.39-26.03-.12-1.21-.25-2.46-.41-3.67a3.22 3.22 0 0 1 2.78-3.61 3.22 3.22 0 0 1 3.61 2.78c.17 1.3.3 2.59.43 3.84.8 7.79 1.5 14.51 10.12 21.76 3.38 2.84 11.9 5.25 19.42 7.38 3.77 1.07 7.33 2.07 10.42 3.16 18.88 6.6 30.43 15.75 35.32 27.96 4.98 12.44 4.91 19.5 4.22 28.84-.4 5.44-3.16 10.32-7.59 13.39-9.48 6.57-26.59 11.65-50.86 15.12-19.78 2.82-39.46 3.83-50.29 3.83ZM150 124.93c-.79 0-1.43-.64-1.43-1.43v-1.81a1.43 1.43 0 1 1 2.86 0v1.81c0 .79-.64 1.43-1.43 1.43ZM150 145.16c-9.8 0-13.4-3.83-14.7-7.04l-.03-.06c-.53-1.28.07-2.74 1.35-3.28 1.28-.53 2.74.07 3.28 1.35l.05.11c1.37 3.4 6.89 3.9 10.05 3.9s8.68-.51 10.05-3.9l.05-.11a2.508 2.508 0 1 1 4.63 1.93l-.03.06c-1.3 3.21-4.9 7.04-14.7 7.04Z"/><ellipse class="d" cx="172.36" cy="101.74" rx="5.17" ry="5.78"/><path class="d" d="M175.61 169.92c-1.31 0-2.53-.8-3.02-2.09-.62-1.67.22-3.52 1.89-4.15 17.65-6.6 22.96-20.57 25.83-33.37a3.22 3.22 0 0 1 3.85-2.44 3.22 3.22 0 0 1 2.44 3.85c-5.82 25.96-19.02 33.94-29.86 37.99-.37.14-.75.2-1.13.2ZM124.38 169.92c-.37 0-.76-.07-1.13-.2-7.37-2.75-12.93-6.4-17.51-11.47-5.88-6.52-9.92-15.2-12.36-26.55-.37-1.74.73-3.45 2.47-3.83 1.74-.37 3.45.73 3.83 2.47 4.88 22.69 15.79 29.59 25.83 33.34 1.67.62 2.51 2.48 1.89 4.15a3.22 3.22 0 0 1-3.02 2.09Z"/><path class="b" d="M150 288.31c23.8 0 92.99-5.02 105.13-24.06.97-12.44 1.86-19.09-3.59-32.69-5.15-12.86-18.15-20.78-33.4-26.11-9.64-3.37-25.18-6.34-30.85-11.11l-37.3 56.55-37.29-56.56c-5.68 4.77-21.21 7.75-30.85 11.12-15.26 5.33-28.26 13.26-33.4 26.11-5.44 13.6-4.56 20.24-3.59 32.69 12.14 19.04 81.33 24.06 105.13 24.06Z"/><path class="c" d="M124.38 46.97c-1.91 32.25-30.8 55.39-30.8 55.39C67.38 6.69 150 9.52 150 9.52s82.62-2.83 56.42 92.83l-2.95-10.46-54.54-14.49s-12.69-13.27-24.54-30.44Z"/><path class="d" d="M93.58 105.58h-.13c-1.4-.06-2.6-1.02-2.97-2.37-8.84-32.28-6.52-57.26 6.91-74.25 7.73-9.78 19.3-16.8 33.48-20.29 10.08-2.49 18.07-2.39 19.14-2.36 1.07-.03 9.06-.13 19.14 2.36 14.17 3.5 25.75 10.51 33.48 20.29 13.43 16.99 15.75 41.97 6.91 74.25a3.22 3.22 0 0 1-3.09 2.37h-.01c-1.44 0-2.71-.96-3.1-2.35l-2.95-10.46a3.23 3.23 0 0 1 2.23-3.98c1.32-.37 2.68.13 3.45 1.17 4.85-24.56 2.02-43.7-8.45-56.98-8.59-10.89-20.94-15.81-29.8-18.02-9.78-2.44-17.61-2.22-17.68-2.22h-.22c-.07 0-7.9-.22-17.68 2.22-8.85 2.21-21.21 7.13-29.8 18.02-10.66 13.51-13.4 33.08-8.19 58.26a3.217 3.217 0 0 1 4.05-1.72c1.67.61 2.53 2.46 1.92 4.13l-3.58 9.81a3.24 3.24 0 0 1-3.03 2.12Z"/><path class="c" d="M149.26 288.31c23.8 0 92.99-5.02 105.13-24.06.97-12.44 1.86-19.09-3.59-32.69-5.15-12.86-18.15-20.78-33.4-26.11-9.64-3.37-25.18-6.34-30.85-11.11l-8.12 23.39h-58.35l-8.12-23.39c-5.68 4.77-21.21 7.75-30.85 11.12-15.26 5.33-28.26 13.26-33.4 26.11-5.44 13.6-4.56 20.24-3.59 32.69 12.14 19.04 81.33 24.06 105.13 24.06Z"/><path class="d" d="M150 291.53c-10.83 0-30.51-1-50.29-3.83-24.27-3.46-41.39-8.55-50.87-15.12-4.43-3.07-7.2-7.95-7.59-13.39-.68-9.35-.76-16.4 4.22-28.84 4.89-12.21 16.44-21.36 35.33-27.96 3.08-1.08 6.64-2.09 10.4-3.15 7.52-2.13 16.05-4.54 19.43-7.39 8.63-7.25 9.33-13.97 10.13-21.76.13-1.25.26-2.54.43-3.83a3.228 3.228 0 0 1 3.61-2.78c1.76.23 3.01 1.85 2.78 3.61-.16 1.21-.29 2.45-.41 3.66-.83 8.02-1.77 17.11-12.39 26.03-4.44 3.74-13.28 6.24-21.82 8.66-3.67 1.04-7.13 2.02-10.03 3.03-17.02 5.95-27.32 13.89-31.48 24.27-4.48 11.18-4.41 17.27-3.78 25.97.25 3.49 2.02 6.61 4.83 8.56 8.53 5.91 25.17 10.76 48.11 14.03 19.45 2.78 38.76 3.76 49.38 3.76 23.42 0 78.07-4.35 97.49-17.8 2.82-1.95 4.58-5.07 4.84-8.56.64-8.7.71-14.79-3.77-25.97-4.16-10.38-14.45-18.32-31.47-24.27-2.91-1.02-6.37-2-10.04-3.04-8.54-2.42-17.38-4.92-21.81-8.65-10.62-8.93-11.56-18.01-12.39-26.03-.12-1.21-.25-2.46-.41-3.67a3.22 3.22 0 0 1 2.78-3.61 3.22 3.22 0 0 1 3.61 2.78c.17 1.3.3 2.59.43 3.84.8 7.79 1.5 14.51 10.12 21.76 3.38 2.84 11.9 5.25 19.42 7.38 3.77 1.07 7.33 2.07 10.42 3.16 18.88 6.6 30.43 15.75 35.32 27.96 4.98 12.44 4.91 19.5 4.22 28.84-.4 5.44-3.16 10.32-7.59 13.39-9.48 6.57-26.59 11.65-50.86 15.12-19.78 2.82-39.46 3.83-50.29 3.83Z"/><ellipse class="d" cx="127.64" cy="101.74" rx="5.17" ry="5.78"/><path class="d" d="M179.4 89.88c-.62 0-1.24-.23-1.72-.69-2.01-1.9-6.47-2.92-10.45-1.34-1.29.51-2.74-.12-3.25-1.4-.51-1.29.12-2.74 1.4-3.25 5.41-2.15 12.03-1.15 15.74 2.36a2.5 2.5 0 0 1-1.72 4.32ZM120.6 89.88a2.5 2.5 0 0 1-1.72-4.32c3.71-3.51 10.33-4.51 15.74-2.36a2.49 2.49 0 0 1 1.4 3.25 2.49 2.49 0 0 1-3.25 1.4c-3.98-1.58-8.44-.56-10.45 1.34-.48.46-1.1.69-1.72.69ZM105.8 91.16c-.78 0-1.57-.29-2.19-.86a3.222 3.222 0 0 1-.17-4.55c4.36-4.69 13.97-20.43 15.83-39.1a3.23 3.23 0 0 1 3.53-2.89 3.23 3.23 0 0 1 2.89 3.53c-1.95 19.57-11.78 36.67-17.52 42.84-.63.68-1.5 1.03-2.36 1.03Z"/><path class="d" d="M148.92 80.63c-.73 0-1.47-.25-2.08-.76-7.66-6.48-23.85-27.1-29.04-36.19a3.228 3.228 0 0 1 1.2-4.4c1.54-.88 3.51-.35 4.39 1.2 4.85 8.49 20.5 28.46 27.61 34.47a3.22 3.22 0 0 1-2.08 5.68ZM187.29 89.19c-1.62 0-3.02-1.22-3.2-2.87-2.04-18.64-10.14-42.08-23.64-52.45a3.22 3.22 0 0 1-.59-4.52 3.22 3.22 0 0 1 4.52-.59c10.02 7.7 22.87 27.21 26.12 56.86a3.216 3.216 0 0 1-2.85 3.55c-.12.01-.24.02-.35.02ZM178.44 220.95h-58.35a3.22 3.22 0 0 1-3.03-2.12l-8.12-22.38c-.61-1.67.26-3.52 1.93-4.13 1.67-.61 3.52.26 4.13 1.93l7.35 20.26h53.8l7.37-21.22a3.226 3.226 0 0 1 4.1-1.99c1.68.58 2.57 2.42 1.99 4.1l-8.12 23.39a3.218 3.218 0 0 1-3.04 2.17ZM105.36 250.05a2.149 2.149 0 0 1-2.01-2.91l7-18.62a2.149 2.149 0 1 1 4.02 1.52l-7 18.62c-.32.86-1.14 1.39-2.01 1.39ZM193.19 246.41c-.83 0-1.62-.48-1.97-1.29l-7.3-16.76c-.47-1.09.02-2.35 1.11-2.83 1.09-.47 2.35.02 2.83 1.11l7.3 16.76a2.153 2.153 0 0 1-1.97 3.01ZM171.24 246.41c-1.01 0-1.91-.72-2.11-1.75l-2.24-11.83c-.22-1.17.54-2.29 1.71-2.51 1.17-.22 2.29.54 2.51 1.71l2.24 11.83c.22 1.17-.54 2.29-1.71 2.51-.14.03-.27.04-.4.04ZM132.73 246.41c-.13 0-.27-.01-.4-.04a2.142 2.142 0 0 1-1.71-2.51l2.24-11.83a2.147 2.147 0 0 1 2.51-1.71c1.17.22 1.93 1.34 1.71 2.51l-2.24 11.83c-.2 1.03-1.1 1.75-2.11 1.75Z"/></svg>
						</div>
					</li>
					<li class="feature-list__item">
						<div class="feature-list__text-wrap">
							<p class="feature-list__voice">
								ウェブサイト製作中にコーディングで行き詰まり、自分では問題に気づけなくて困っていたのですが、宮崎先生の丁寧なご指導で問題を解決することができました！
							</p>
							<p>受講レッスン：プライベート</p>
						</div>
						<div class="feature-list__user">
							<svg id="a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300"><path class="c" d="M83.71 165.35c-6.45 17.82-3.34 32.91 2.47 40.75 34.6-26.53 36.01-55.6 32.01-68.74-10.9 2.29-26.69 6.51-34.47 27.99Z"/><path class="e" d="M86.17 209.23a3.13 3.13 0 0 1-2.52-1.27c-3.44-4.64-5.72-11.1-6.43-18.19-.81-8.07.42-16.88 3.54-25.49 3.65-10.07 9.48-17.73 17.32-22.75 6.4-4.1 13.13-5.9 19.45-7.23 1.59-.33 3.16.6 3.64 2.15 1.29 4.24 3.73 15.79-1.56 31.27-5.12 15-15.74 28.74-31.54 40.86-.55.42-1.22.65-1.9.65Zm29.71-68.15c-11.11 2.65-22.85 7.7-29.24 25.33-5.52 15.25-3.54 27.78.32 35.08 13.32-10.81 22.3-22.84 26.73-35.79 3.8-11.11 3.17-19.77 2.19-24.62ZM83.7 165.35Z"/><path class="b" d="m206.41 101.25.23.06c11.72-.28 14.63 10.77 12.69 20.73-2.56 13.16-12.39 17.95-18.02 16.12-5.17 20.82-15.96 28.16-26.44 32.07 1.17 8.93.53 17.75 11.34 26.83 5.51 4.64 20.59 7.52 29.95 10.79 14.81 5.18 27.43 12.87 32.43 25.35 4.49 11.21 4.55 17.55 3.89 26.61-.31 4.28-2.51 8.22-6.03 10.65-20.16 13.96-75.83 17.83-96.43 17.83s-76.28-3.88-96.43-17.83c-3.52-2.44-5.72-6.37-6.03-10.65-.67-9.05-.61-15.39 3.88-26.61 5-12.48 17.62-20.18 32.42-25.35 9.35-3.27 24.44-6.16 29.95-10.79 10.81-9.09 10.17-17.91 11.34-26.84-10.48-3.91-21.07-11.26-26.42-32.08h-.02c-5.63 1.85-15.46-2.94-18.02-16.11-1.94-9.96.97-21.01 12.69-20.73l.23-.06c-20.03-86.22 56.38-83.6 56.38-83.6s76.42-2.61 56.41 83.62Z"/><path class="e" d="M125.12 173.36c-.36 0-.73-.06-1.09-.2-6.8-2.54-11.99-5.87-16.32-10.49-5.46-5.82-9.38-13.52-11.98-23.54l-.06-.21c-.26-1.02-.46-1.86-.63-2.64-.37-1.69.69-3.36 2.37-3.73 1.69-.37 3.36.69 3.73 2.37.15.68.32 1.41.54 2.28.02.06.04.12.05.18 5.2 20.26 15.29 26.5 24.48 29.93 1.62.6 2.44 2.41 1.84 4.02a3.12 3.12 0 0 1-2.93 2.03Z"/><path class="e" d="M96.17 141.66c-2.52 0-5.21-.77-7.74-2.25-3.19-1.87-8.84-6.54-10.83-16.78-1.52-7.83-.23-14.89 3.56-19.38 2.91-3.44 7.15-5.2 12.28-5.07 1.73.04 3.09 1.48 3.05 3.2s-1.48 3.09-3.2 3.05c-3.26-.08-5.66.85-7.34 2.85-2.48 2.94-3.33 8.36-2.2 14.15.65 3.36 2.54 9.46 7.86 12.58 2.14 1.25 4.48 1.7 6.12 1.16 1.64-.54 3.41.36 3.94 2 .54 1.64-.36 3.41-2 3.95-1.1.36-2.28.54-3.49.54ZM174.87 173.36c-1.27 0-2.46-.78-2.93-2.03-.6-1.62.22-3.42 1.84-4.02 5.91-2.21 10.37-5.04 14.03-8.92 4.8-5.08 8.22-11.94 10.47-20.98.22-.88.41-1.68.57-2.47a3.121 3.121 0 0 1 3.71-2.4c1.69.36 2.76 2.02 2.4 3.71-.18.85-.39 1.73-.62 2.67-2.51 10.11-6.43 17.88-11.99 23.76-4.34 4.6-9.55 7.93-16.39 10.48-.36.13-.73.2-1.09.2Z"/><path class="e" d="M203.82 141.66c-1.18 0-2.32-.17-3.4-.51a3.129 3.129 0 0 1 .87-6.13c.33 0 .66.05.97.15 1.65.54 4 .09 6.13-1.17 2.28-1.34 6.33-4.76 7.85-12.57 1.13-5.79.28-11.21-2.2-14.15-1.69-2-4.09-2.93-7.34-2.85a3.127 3.127 0 0 1-.15-6.25c5.12-.12 9.37 1.63 12.28 5.07 3.79 4.48 5.09 11.55 3.56 19.38-1.99 10.22-7.63 14.89-10.82 16.77-2.53 1.49-5.23 2.26-7.76 2.26Z"/><path class="e" d="M204.77 110.89c-.27 0-.55-.04-.83-.11a3.13 3.13 0 0 1-2.19-3.84c.61-2.22 1.15-4.36 1.61-6.37 6.18-26.61 3.59-47.07-7.69-60.81-8.39-10.22-20.25-14.84-28.71-16.91-9.35-2.29-16.78-2.08-16.86-2.08h-.21c-.07 0-7.5-.21-16.85 2.08-8.46 2.07-20.32 6.69-28.71 16.91-11.28 13.74-13.87 34.19-7.7 60.79.46 2.02 1 4.17 1.61 6.38.46 1.67-.52 3.39-2.19 3.84-1.67.46-3.39-.52-3.84-2.19-.63-2.31-1.2-4.54-1.67-6.64-6.64-28.6-3.61-50.88 8.99-66.2 7.55-9.17 18.69-15.75 32.23-19.03 9.63-2.33 17.21-2.23 18.24-2.21 1.02-.03 8.61-.12 18.24 2.21 13.54 3.28 24.68 9.86 32.23 19.03 12.61 15.32 15.63 37.6 8.99 66.22-.47 2.09-1.04 4.32-1.67 6.63a3.124 3.124 0 0 1-3.01 2.3ZM150 291.43c-10.52 0-29.62-.97-48.83-3.71-23.56-3.36-40.18-8.3-49.38-14.68-4.3-2.98-6.99-7.71-7.37-13-.67-9.07-.74-15.91 4.09-28 4.75-11.85 15.96-20.73 34.29-27.14 3-1.05 6.45-2.03 10.11-3.06 7.3-2.07 15.58-4.41 18.85-7.17 8.37-7.04 9.05-13.57 9.83-21.13.13-1.21.25-2.47.42-3.73a3.133 3.133 0 0 1 6.21.81c-.15 1.17-.28 2.39-.4 3.56-.8 7.78-1.71 16.6-12.02 25.27-4.31 3.62-12.88 6.05-21.18 8.4-3.56 1.01-6.93 1.96-9.75 2.95-16.52 5.78-26.52 13.49-30.55 23.56-4.35 10.86-4.29 16.77-3.66 25.21.25 3.39 1.96 6.42 4.69 8.31 8.28 5.73 24.43 10.45 46.7 13.63 18.88 2.7 37.63 3.65 47.94 3.65 22.74 0 75.8-4.22 94.65-17.28 2.74-1.89 4.45-4.92 4.69-8.31.62-8.45.68-14.36-3.67-25.21-4.03-10.08-14.03-17.79-30.56-23.56-2.82-.99-6.18-1.94-9.74-2.95-8.3-2.35-16.88-4.78-21.19-8.41-10.31-8.66-11.23-17.49-12.03-25.27-.12-1.17-.25-2.38-.4-3.55-.22-1.71.98-3.28 2.7-3.51 1.71-.22 3.28.98 3.51 2.7.16 1.25.29 2.51.42 3.72.78 7.56 1.46 14.09 9.83 21.13 3.29 2.76 11.57 5.11 18.87 7.18 3.65 1.03 7.1 2.01 10.1 3.06 18.33 6.41 29.55 15.29 34.3 27.14 4.83 12.07 4.76 18.92 4.1 27.99-.39 5.28-3.07 10.02-7.37 13-9.21 6.37-25.82 11.31-49.39 14.68-19.21 2.74-38.31 3.71-48.83 3.71ZM150 129.68c-.77 0-1.39-.62-1.39-1.39v-1.76c0-.77.62-1.39 1.39-1.39s1.39.62 1.39 1.39v1.76c0 .77-.62 1.39-1.39 1.39ZM150 149.32c-9.51 0-13.01-3.72-14.27-6.83l-.03-.06a2.43 2.43 0 0 1 1.31-3.18 2.43 2.43 0 0 1 3.18 1.31l.05.11c1.33 3.3 6.69 3.79 9.76 3.79s8.43-.49 9.76-3.79l.05-.11a2.43 2.43 0 0 1 3.18-1.31 2.43 2.43 0 0 1 1.31 3.18l-.03.06c-1.26 3.12-4.76 6.83-14.27 6.83Z"/><ellipse class="e" cx="128.29" cy="107.17" rx="5.02" ry="5.61"/><path class="e" d="M121.46 95.65c-.65 0-1.29-.26-1.77-.76-.92-.98-.88-2.52.1-3.44 3.61-3.41 10.03-4.38 15.28-2.29 1.25.5 1.86 1.91 1.36 3.16a2.429 2.429 0 0 1-3.16 1.36c-3.87-1.53-8.2-.54-10.15 1.3-.47.44-1.07.67-1.67.67ZM125.13 173.35c-.36 0-.73-.06-1.09-.2-7.11-2.66-12.48-6.2-16.92-11.14-5.65-6.3-9.6-14.72-12.07-25.74a3.132 3.132 0 0 1 6.11-1.37c4.97 22.14 15.47 28.8 25.08 32.4 1.62.6 2.44 2.41 1.83 4.02a3.12 3.12 0 0 1-2.93 2.03ZM174.87 173.35c-1.27 0-2.46-.78-2.93-2.03-.6-1.62.22-3.42 1.83-4.02 17.36-6.49 22.42-20 25.07-32.37a3.126 3.126 0 0 1 3.71-2.4c1.69.36 2.76 2.03 2.4 3.71-2.37 11.02-6.29 19.45-12 25.78-4.44 4.92-9.84 8.46-17 11.14-.36.13-.73.2-1.09.2Z"/><path class="b" d="M150 288.3c-23.11 0-90.28-4.87-102.06-23.36-.95-12.08-1.81-18.53 3.48-31.73 5-12.48 17.62-20.18 32.42-25.35 9.35-3.27 24.44-6.16 29.95-10.79L150 251.98l36.2-54.91c5.51 4.64 20.59 7.52 29.95 10.79 14.81 5.18 27.43 12.87 32.43 25.35 5.28 13.21 4.43 19.65 3.48 31.73C240.27 283.43 173.1 288.3 150 288.3Z"/><path d="m114.86 57.71-5.68-3.67c1.85 1.29 3.75 2.51 5.68 3.67Z" style="fill:#74c6be"/><path class="c" d="M204.77 107.76C230.21 14.89 150 17.63 150 17.63s-80.22-2.75-54.77 90.13l6.12-27.19s3.16-6.78 14.8-22.03l-1.29-.83c-1.93-1.16-3.82-2.39-5.68-3.67l5.68 3.67c36.14 21.82 83.79 22.87 83.79 22.87l6.12 27.19Z"/><path class="e" d="M204.77 110.89h-.07a3.126 3.126 0 0 1-2.98-2.44l-5.59-24.85c-4.66-.25-15.51-1.07-29.09-3.71-13.87-2.7-32.84-7.82-50.02-17.32-8.74 11.64-12.04 17.74-12.71 19.06l-6.04 26.82a3.126 3.126 0 0 1-2.98 2.44c-1.43.04-2.71-.92-3.09-2.3-8.59-31.34-6.33-55.6 6.71-72.09 7.5-9.49 18.74-16.31 32.5-19.7 9.79-2.41 17.54-2.32 18.58-2.29 1.04-.03 8.79-.12 18.58 2.29 13.76 3.39 25 10.21 32.5 19.7 13.04 16.5 15.29 40.75 6.71 72.09a3.127 3.127 0 0 1-3.02 2.3Zm-95.59-59.98c.61 0 1.24.18 1.78.56 10.17 7.05 28.34 16.64 57.15 22.26 17.35 3.39 30.48 3.72 30.61 3.72 1.44.03 2.67 1.04 2.98 2.44l3.1 13.77c4.15-22.85 1.27-40.72-8.6-53.24-8.34-10.57-20.33-15.35-28.93-17.5-9.5-2.37-17.09-2.16-17.17-2.16h-.21c-.07 0-7.67-.22-17.16 2.16-8.6 2.15-20.59 6.92-28.93 17.5-9.87 12.52-12.75 30.39-8.6 53.24l3.1-13.77c.05-.22.12-.43.22-.63.13-.27 3.05-6.44 13.09-19.88-1.42-.89-2.82-1.81-4.2-2.77a3.128 3.128 0 0 1 1.78-5.7Z"/><path class="e" d="M196.3 69.61c-.53 0-1.05-.2-1.46-.59-13.66-13.35-38.77-27.16-58.41-32.11a2.078 2.078 0 0 1-1.51-2.53 2.083 2.083 0 0 1 2.53-1.51c20.27 5.11 46.19 19.37 60.31 33.17.82.81.84 2.13.03 2.95-.41.42-.95.63-1.49.63Z"/><path class="c" d="M116.8 210.75c.96.82 5.25 5.4 33.92 5.4s32.96-4.58 33.92-5.4v71.66h-67.83v-71.66Z"/><path class="e" d="M184.63 285.54H116.8c-1.73 0-3.13-1.4-3.13-3.13v-71.66c0-1.22.71-2.33 1.82-2.84 1.11-.51 2.41-.33 3.34.46l.13.12c4.78 4.21 25.51 4.53 31.75 4.53s26.97-.33 31.75-4.53l.14-.12c.93-.79 2.23-.97 3.34-.46 1.11.51 1.82 1.62 1.82 2.84v71.66c0 1.73-1.4 3.13-3.13 3.13Zm-64.7-6.26h61.58v-63.32c-6.21 2.23-16.38 3.31-30.79 3.31s-24.58-1.09-30.79-3.31v63.32Z"/><path class="b" d="M150 288.3c-23.11 0-90.28-4.87-102.06-23.36-.95-12.08-1.81-18.53 3.48-31.73 5-12.48 17.62-20.18 32.42-25.35 9.35-3.27 24.44-6.16 29.95-10.79L150 260.88l36.2-63.81c5.51 4.64 20.59 7.52 29.95 10.79 14.81 5.18 27.43 12.87 32.43 25.35 5.28 13.21 4.43 19.65 3.48 31.73C240.27 283.43 173.1 288.3 150 288.3Z"/><path class="e" d="M150 291.43c-10.52 0-29.62-.97-48.83-3.71-23.56-3.36-40.18-8.3-49.38-14.68-4.3-2.98-6.99-7.71-7.37-13-.67-9.07-.74-15.91 4.09-28 4.75-11.85 15.96-20.73 34.29-27.14 3-1.05 6.45-2.03 10.11-3.06 7.3-2.07 15.58-4.41 18.85-7.17 8.37-7.04 9.05-13.57 9.83-21.13.13-1.21.25-2.47.42-3.73a3.133 3.133 0 0 1 6.21.81c-.15 1.17-.28 2.39-.4 3.56-.8 7.78-1.71 16.6-12.02 25.27-4.31 3.62-12.88 6.05-21.18 8.4-3.56 1.01-6.93 1.96-9.75 2.95-16.52 5.78-26.52 13.49-30.55 23.56-4.35 10.86-4.29 16.77-3.66 25.21.25 3.39 1.96 6.42 4.69 8.31 8.28 5.73 24.43 10.45 46.7 13.63 18.88 2.7 37.63 3.65 47.94 3.65 22.74 0 75.8-4.22 94.65-17.28 2.74-1.89 4.45-4.92 4.69-8.31.62-8.45.68-14.36-3.67-25.21-4.03-10.08-14.03-17.79-30.56-23.56-2.82-.99-6.18-1.94-9.74-2.95-8.3-2.35-16.88-4.78-21.19-8.41-10.31-8.66-11.23-17.49-12.03-25.27-.12-1.17-.25-2.38-.4-3.55-.22-1.71.98-3.28 2.7-3.51 1.71-.22 3.28.98 3.51 2.7.16 1.25.29 2.51.42 3.72.78 7.56 1.46 14.09 9.83 21.13 3.29 2.76 11.57 5.11 18.87 7.18 3.65 1.03 7.1 2.01 10.1 3.06 18.33 6.41 29.55 15.29 34.3 27.14 4.83 12.07 4.76 18.92 4.1 27.99-.39 5.28-3.07 10.02-7.37 13-9.21 6.37-25.82 11.31-49.39 14.68-19.21 2.74-38.31 3.71-48.83 3.71ZM172.12 124.54a19.63 19.63 0 0 1-19.57-17.64l-.14-1.33h-4.82l-.14 1.33c-1.04 10.06-9.46 17.64-19.57 17.64s-18.52-7.58-19.57-17.64l-.33-3.2a2.08 2.08 0 0 1 1.86-2.29 2.08 2.08 0 0 1 2.29 1.86l.33 3.2c.82 7.93 7.45 13.9 15.42 13.9s14.6-5.98 15.42-13.9l.33-3.2a2.09 2.09 0 0 1 2.07-1.87h8.58c1.07 0 1.96.81 2.07 1.87l.33 3.2c.82 7.93 7.45 13.9 15.42 13.9s14.6-5.98 15.42-13.9l.33-3.2a2.08 2.08 0 0 1 2.29-1.86 2.08 2.08 0 0 1 1.86 2.29l-.33 3.2a19.622 19.622 0 0 1-19.57 17.64Z"/><ellipse class="e" cx="171.71" cy="107.17" rx="5.02" ry="5.61"/><path class="e" d="M178.54 95.65c-.6 0-1.2-.22-1.67-.67-1.95-1.85-6.28-2.84-10.15-1.3-1.25.5-2.66-.12-3.16-1.36-.5-1.25.12-2.66 1.36-3.16 5.25-2.08 11.68-1.12 15.28 2.29.98.92 1.02 2.46.1 3.44-.48.51-1.12.76-1.77.76ZM150 264c-1.13 0-2.16-.6-2.72-1.58l-36.21-63.81a3.12 3.12 0 0 1 1.18-4.26 3.12 3.12 0 0 1 4.26 1.18L150 254.54l33.48-59.02c.85-1.5 2.76-2.03 4.26-1.18 1.5.85 2.03 2.76 1.18 4.26l-36.2 63.81c-.56.98-1.59 1.58-2.72 1.58Z"/></svg>
						</div>
					</li>
					<li class="feature-list__item">
						<div class="feature-list__text-wrap">
							<p class="feature-list__voice">
								納品までフォローアップありがとうございました！自分だけでは解決できなかった箇所たくさんありました。とても心強かったです！<br>&ensp;
							</p>
							<p>受講レッスン：メンタリング</p>
						</div>
						<div class="feature-list__user">
							<svg id="a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300"><defs><clipPath id="b"><path d="m93.37 102.63-.23.06c-11.76-.29-14.69 10.81-12.74 20.81 2.57 13.21 12.43 18.02 18.09 16.18 5.19 20.9 16.02 28.27 26.54 32.2-1.17 8.97-.53 17.82-11.39 26.94-5.53 4.65-20.67 7.55-30.06 10.84-14.87 5.2-27.54 12.92-32.56 25.45-4.51 11.25-4.56 17.62-3.9 26.71.31 4.3 2.52 8.25 6.06 10.7 20.23 14.01 76.12 17.9 96.81 17.9s76.57-3.89 96.8-17.9c3.54-2.45 5.74-6.4 6.06-10.7.67-9.08.61-15.45-3.89-26.71-5.02-12.53-17.69-20.25-32.55-25.45-9.39-3.29-24.54-6.18-30.06-10.83-10.86-9.13-10.21-17.98-11.38-26.95 10.52-3.93 21.15-11.3 26.52-32.21h.02c5.65 1.86 15.52-2.95 18.09-16.17 1.95-10-.98-21.09-12.74-20.81l-.23-.06C226.72 16.06 150 26.37 150 26.37s-76.72-10.3-56.63 76.26Z" style="fill:none"/></clipPath></defs><path class="g" d="M150 180.53s55.48.34 74.22-18.24l-6.37-47.91C243.56 13.66 150 18.68 150 18.68s-93.56-5.02-67.84 95.71l-6.37 47.91c18.74 18.58 74.22 18.24 74.22 18.24Z"/><path class="h" d="M150.37 183.68H150c-2.58.01-57.04.07-76.43-19.15-.7-.69-1.03-1.67-.9-2.64l6.29-47.31c-8.12-32.26-5.05-57.37 9.12-74.64 8.95-10.91 22.54-18.58 39.3-22.19 11.8-2.54 21.21-2.26 22.61-2.2 1.41-.06 10.81-.34 22.61 2.2 16.76 3.61 30.35 11.29 39.3 22.19 14.18 17.28 17.25 42.39 9.12 74.64l6.29 47.31c.13.97-.2 1.95-.9 2.64-18.81 18.65-70.61 19.15-76.06 19.15Zm-.37-6.28h.15c1.47 0 14.6-.06 29.57-2.13 19.48-2.7 33.65-7.58 41.16-14.16l-6.16-46.3c-.05-.4-.03-.8.07-1.19 7.78-30.48 5.19-53.92-7.72-69.67-10.12-12.35-24.95-17.71-35.61-20.03-11.76-2.56-21.21-2.1-21.3-2.1h-.33c-.09 0-9.54-.46-21.3 2.1-10.66 2.32-25.49 7.68-35.61 20.03-12.9 15.75-15.5 39.19-7.72 69.67.1.39.12.79.07 1.19l-6.16 46.3c7.51 6.58 21.68 11.46 41.16 14.16 15.81 2.19 29.57 2.14 29.71 2.13h.02Z"/><g style="fill:none;clip-path:url(#b)"><path d="m93.37 102.63-.23.06c-11.76-.29-14.69 10.81-12.74 20.81 2.57 13.21 12.43 18.02 18.09 16.18 5.19 20.9 16.02 28.27 26.54 32.2-1.17 8.97-.53 17.82-11.39 26.94-5.53 4.65-20.67 7.55-30.06 10.84-14.87 5.2-27.54 12.92-32.56 25.45-4.51 11.25-4.56 17.62-3.9 26.71.31 4.3 2.52 8.25 6.06 10.7 20.23 14.01 76.12 17.9 96.81 17.9s76.57-3.89 96.8-17.9c3.54-2.45 5.74-6.4 6.06-10.7.67-9.08.61-15.45-3.89-26.71-5.02-12.53-17.69-20.25-32.55-25.45-9.39-3.29-24.54-6.18-30.06-10.83-10.86-9.13-10.21-17.98-11.38-26.95 10.52-3.93 21.15-11.3 26.52-32.21h.02c5.65 1.86 15.52-2.95 18.09-16.17 1.95-10-.98-21.09-12.74-20.81l-.23-.06C221.96 16.59 150 18.69 150 18.69s-71.47-3.01-56.63 83.94Z" style="fill:#fff"/></g><path d="M185.27 58.91a106.6 106.6 0 0 0 5.7-3.69l-5.7 3.69Z" style="fill:#74c6be"/><path class="g" d="m198.4 81.87 6.12 27.29c25.44-93.24-54.76-84.78-54.76-84.78S69.56 15.92 95 109.16l6.12-27.29s47.65-1.05 83.77-22.96l5.68-3.69c-1.85 1.29-3.75 2.52-5.68 3.69l-1.29.84c11.64 15.31 14.8 22.12 14.8 22.12Z"/><path class="h" d="M174.97 175.01c-1.27 0-2.47-.78-2.94-2.04-.61-1.62.22-3.43 1.84-4.04 9.22-3.44 19.36-9.71 24.58-30.05.02-.06.03-.12.05-.18.22-.88.39-1.61.54-2.28a3.139 3.139 0 0 1 3.75-2.38c1.69.38 2.76 2.05 2.38 3.75-.17.79-.38 1.63-.63 2.65-.02.07-.04.14-.06.22-5.99 23.11-18.33 30.4-28.41 34.17-.36.14-.73.2-1.1.2Z"/><path class="h" d="M204.04 143.19c-1.22 0-2.4-.18-3.5-.54a3.138 3.138 0 0 1-2.01-3.96 3.138 3.138 0 0 1 3.96-2.01c1.65.54 4 .09 6.15-1.17 2.29-1.35 6.36-4.77 7.89-12.63 1.13-5.81.28-11.25-2.21-14.2-1.7-2.01-4.11-2.94-7.37-2.86a3.147 3.147 0 0 1-3.22-3.06 3.153 3.153 0 0 1 3.06-3.22c5.14-.13 9.4 1.63 12.32 5.09 3.8 4.5 5.11 11.59 3.58 19.45-2 10.27-7.67 14.96-10.87 16.84-2.54 1.49-5.24 2.26-7.77 2.26ZM125.04 175.01c-.36 0-.74-.06-1.1-.2-6.87-2.56-12.1-5.91-16.45-10.52-5.58-5.91-9.51-13.71-12.04-23.86-.24-.94-.44-1.82-.62-2.67-.36-1.7.72-3.36 2.41-3.73 1.69-.36 3.36.72 3.73 2.41.17.79.36 1.6.58 2.47 2.26 9.08 5.69 15.97 10.51 21.07 3.67 3.89 8.15 6.73 14.08 8.95a3.139 3.139 0 0 1-1.1 6.08Z"/><path class="h" d="M95.97 143.19c-2.54 0-5.25-.77-7.79-2.27-3.2-1.88-8.86-6.57-10.86-16.83-1.53-7.86-.23-14.95 3.58-19.46 2.92-3.45 7.18-5.21 12.32-5.09a3.14 3.14 0 0 1 3.06 3.22c-.04 1.73-1.49 3.09-3.22 3.06-3.26-.08-5.68.86-7.37 2.86-2.49 2.95-3.34 8.39-2.21 14.2.66 3.37 2.55 9.48 7.88 12.62 2.15 1.26 4.51 1.71 6.16 1.18a3.145 3.145 0 0 1 4.11 2.99c0 1.45-.98 2.67-2.32 3.03-1.06.33-2.19.49-3.35.49ZM204.99 112.3c-.28 0-.56-.04-.83-.11a3.14 3.14 0 0 1-2.19-3.86c.61-2.23 1.15-4.38 1.61-6.39a3.147 3.147 0 0 1 3.76-2.37c1.69.38 2.75 2.07 2.37 3.76-.48 2.11-1.04 4.35-1.68 6.67a3.148 3.148 0 0 1-3.03 2.31Z"/><path class="h" d="M95.02 112.3c-1.38 0-2.64-.91-3.03-2.31-.64-2.32-1.2-4.56-1.68-6.67-.38-1.69.68-3.37 2.37-3.76 1.69-.38 3.37.68 3.76 2.37.46 2.02 1 4.17 1.61 6.39a3.14 3.14 0 0 1-2.19 3.86c-.28.08-.56.11-.83.11ZM150 293.54c-10.56 0-29.73-.98-49.02-3.73-23.66-3.38-40.34-8.33-49.58-14.73-4.32-2.99-7.01-7.74-7.4-13.05-.66-9.11-.74-15.99 4.12-28.1 4.76-11.9 16.03-20.81 34.43-27.25 3.01-1.05 6.47-2.03 10.14-3.07 7.33-2.08 15.64-4.43 18.94-7.2 8.41-7.06 9.09-13.62 9.87-21.21.13-1.22.26-2.47.42-3.73a3.142 3.142 0 0 1 6.23.81c-.15 1.18-.28 2.39-.4 3.56-.81 7.82-1.72 16.67-12.08 25.37-4.33 3.64-12.94 6.08-21.27 8.44-3.57 1.01-6.95 1.97-9.78 2.96-16.59 5.8-26.63 13.54-30.68 23.66-4.36 10.89-4.3 16.83-3.68 25.31.25 3.4 1.97 6.44 4.71 8.34 8.31 5.76 24.53 10.49 46.89 13.68 18.96 2.71 37.78 3.67 48.13 3.67 22.83 0 76.09-4.24 95.01-17.34 2.75-1.9 4.46-4.94 4.71-8.34.63-8.48.69-14.41-3.68-25.31-4.05-10.12-14.08-17.85-30.67-23.66-2.83-.99-6.21-1.95-9.79-2.96-8.33-2.36-16.94-4.79-21.26-8.43-10.35-8.7-11.26-17.56-12.07-25.37-.12-1.18-.25-2.39-.4-3.57a3.142 3.142 0 0 1 6.23-.81c.17 1.26.3 2.52.42 3.74.78 7.59 1.46 14.14 9.87 21.21 3.29 2.77 11.6 5.12 18.93 7.19 3.67 1.04 7.14 2.02 10.15 3.07 18.4 6.44 29.66 15.35 34.43 27.25 4.86 12.13 4.78 19 4.11 28.11-.39 5.3-3.08 10.06-7.4 13.05-9.24 6.4-25.92 11.36-49.57 14.73-19.28 2.75-38.46 3.73-49.02 3.73ZM150 131.17c-.77 0-1.4-.62-1.4-1.4v-1.76c0-.77.62-1.4 1.4-1.4s1.4.62 1.4 1.4v1.76c0 .77-.62 1.4-1.4 1.4ZM178.66 97c-.6 0-1.21-.22-1.68-.67-1.96-1.85-6.3-2.85-10.19-1.31-1.25.5-2.67-.12-3.17-1.37s.12-2.67 1.37-3.17c5.27-2.09 11.72-1.12 15.34 2.3.98.93 1.02 2.47.1 3.45-.48.51-1.13.76-1.77.76Z"/><path class="h" d="M174.96 175.01c-1.27 0-2.47-.78-2.94-2.04-.61-1.62.22-3.43 1.84-4.04 17.2-6.43 22.38-20.05 25.18-32.52a3.144 3.144 0 0 1 3.75-2.38c1.69.38 2.76 2.06 2.38 3.75-5.68 25.3-18.54 33.08-29.11 37.03-.36.14-.73.2-1.1.2ZM125.03 175.01c-.37 0-.74-.06-1.1-.2-7.18-2.68-12.6-6.24-17.06-11.18-5.73-6.35-9.67-14.82-12.05-25.88a3.14 3.14 0 0 1 2.41-3.73c1.69-.36 3.36.71 3.73 2.41 4.75 22.12 15.39 28.84 25.17 32.49 1.62.61 2.45 2.42 1.84 4.04a3.141 3.141 0 0 1-2.94 2.04ZM95.01 112.3c-1.41 0-2.65-.94-3.03-2.31-.95-3.47-1.78-6.89-2.46-10.18-.35-1.7.74-3.36 2.44-3.71.97-.2 1.92.07 2.63.65l3.5-15.56a3.136 3.136 0 0 1 2.99-2.45c.13 0 13.31-.33 30.72-3.73 15.97-3.12 38.88-9.52 57.37-22.35 1.42-.99 3.38-.63 4.37.79.99 1.42.63 3.38-.79 4.37-19.42 13.47-43.28 20.15-59.87 23.38-13.63 2.65-24.52 3.48-29.2 3.72l-5.61 24.94a3.136 3.136 0 0 1-2.99 2.45h-.07Z"/><path class="h" d="M204.98 112.3h-.07a3.136 3.136 0 0 1-2.99-2.45l-6.06-26.92c-.71-1.39-4.38-8.18-14.38-21.27a3.139 3.139 0 1 1 4.99-3.81c11.76 15.4 15.08 22.41 15.21 22.7.09.2.17.42.22.64l3.64 16.16c.67-.43 1.5-.6 2.34-.42 1.7.36 2.78 2.03 2.41 3.73-.65 3.03-1.42 6.18-2.29 9.35a3.136 3.136 0 0 1-3.03 2.31ZM103.52 70.86a2.097 2.097 0 0 1-1.47-3.59c14.17-13.85 40.2-28.17 60.54-33.3 1.12-.28 2.26.4 2.54 1.52.28 1.12-.4 2.26-1.52 2.54-19.72 4.97-44.93 18.83-58.64 32.23-.41.4-.94.6-1.46.6ZM150 293.54c-10.56 0-29.73-.98-49.02-3.73-23.66-3.38-40.34-8.33-49.58-14.73-4.32-2.99-7.01-7.74-7.4-13.05-.66-9.11-.74-15.99 4.12-28.1 4.76-11.9 16.03-20.81 34.43-27.25 3.01-1.05 6.47-2.03 10.14-3.07 7.33-2.08 15.64-4.43 18.94-7.2 8.41-7.06 9.09-13.62 9.87-21.21.13-1.22.26-2.47.42-3.73a3.142 3.142 0 0 1 6.23.81c-.15 1.18-.28 2.39-.4 3.56-.81 7.82-1.72 16.67-12.08 25.37-4.33 3.64-12.94 6.08-21.27 8.44-3.57 1.01-6.95 1.97-9.78 2.96-16.59 5.8-26.63 13.54-30.68 23.66-4.36 10.89-4.3 16.83-3.68 25.31.25 3.4 1.97 6.44 4.71 8.34 8.31 5.76 24.53 10.49 46.89 13.68 18.96 2.71 37.78 3.67 48.13 3.67 22.83 0 76.09-4.24 95.01-17.34 2.75-1.9 4.46-4.94 4.71-8.34.63-8.48.69-14.41-3.68-25.31-4.05-10.12-14.08-17.85-30.67-23.66-2.83-.99-6.21-1.95-9.79-2.96-8.33-2.36-16.94-4.79-21.26-8.43-10.35-8.7-11.26-17.56-12.07-25.37-.12-1.18-.25-2.39-.4-3.57a3.142 3.142 0 0 1 6.23-.81c.17 1.26.3 2.52.42 3.74.78 7.59 1.46 14.14 9.87 21.21 3.29 2.77 11.6 5.12 18.93 7.19 3.67 1.04 7.14 2.02 10.15 3.07 18.4 6.44 29.66 15.35 34.43 27.25 4.86 12.13 4.78 19 4.11 28.11-.39 5.3-3.08 10.06-7.4 13.05-9.24 6.4-25.92 11.36-49.57 14.73-19.28 2.75-38.46 3.73-49.02 3.73ZM121.35 97a2.436 2.436 0 0 1-1.67-4.21c3.62-3.42 10.07-4.39 15.34-2.3 1.25.5 1.87 1.92 1.37 3.17a2.445 2.445 0 0 1-3.17 1.37c-3.88-1.54-8.23-.54-10.19 1.31-.47.45-1.08.67-1.68.67ZM150 156.54c-12.78 0-17.99-12.27-18.21-12.8-.31-.75-.23-1.61.23-2.29.45-.68 1.21-1.08 2.03-1.08h31.9c.82 0 1.58.41 2.03 1.08.45.68.54 1.54.23 2.29-.22.52-5.43 12.8-18.21 12.8Zm-11.71-11.29c2.08 2.83 5.86 6.4 11.71 6.4s9.6-3.58 11.69-6.4h-23.4ZM178.55 114.6c-.75 0-1.5-.35-1.97-1-1.44-1.98-3.62-2.35-4.79-2.39-1.9-.08-3.79.59-4.7 1.65a2.44 2.44 0 0 1-3.7-3.18c1.89-2.2 5.18-3.49 8.6-3.35 3.49.14 6.61 1.74 8.55 4.39.8 1.09.56 2.62-.53 3.41-.43.32-.94.47-1.44.47ZM121.46 114.6c-.5 0-1-.15-1.44-.47a2.435 2.435 0 0 1-.53-3.41c1.94-2.66 5.06-4.26 8.55-4.39 3.42-.13 6.71 1.15 8.6 3.35a2.43 2.43 0 0 1-.27 3.44c-1.02.88-2.57.76-3.44-.26-.91-1.06-2.8-1.73-4.7-1.65-1.17.05-3.35.42-4.79 2.39-.48.65-1.22 1-1.97 1Z"/><path class="h" d="M150 208.88c-29.07 0-34.3-4.6-36.02-6.11l-.06-.06a3.139 3.139 0 0 1-.35-4.43 3.139 3.139 0 0 1 4.43-.35l.14.12c4.8 4.22 25.61 4.55 31.87 4.55s27.07-.33 31.87-4.55l.14-.12a3.14 3.14 0 0 1 4.43.35c1.12 1.32.97 3.3-.35 4.43l-.06.06c-1.24 1.09-3.3 2.5-8.27 3.74-6.36 1.58-15.69 2.38-27.76 2.38ZM150 194.12c-13.7 0-23.44-2.13-28.16-6.16a3.15 3.15 0 0 1-.36-4.43 3.137 3.137 0 0 1 4.42-.36l.01.01c5.07 4.32 19.72 4.66 24.09 4.66s19.02-.34 24.09-4.66l2.05 2.38 2.04 2.39c-4.74 4.04-14.47 6.17-28.17 6.17Z"/></svg>
						</div>
					</li>
				</ul>
			</div>
		</section>

		<section class="lesson-section" id="flow">
			<div class="lesson-section__inner">
				<h2 class="lesson-section__heading">無料カウンセリングまでの流れ</h2>
				<div class="lesson-flow">
					<div class="lesson-flow__item-wrap">
						<dl class="lesson-flow__item">
							<dt class="lesson-flow__item-title"><strong>STEP1</strong>まずはご連絡ください</dt>
							<dd class="lesson-flow__item-content">
								下記のご相談フォームからお申し込みください。
							</dd>
						</dl>
					</div>
					<div class="lesson-flow__item-wrap">
						<dl class="lesson-flow__item">
							<dt class="lesson-flow__item-title"><strong>STEP2</strong>日程調整</dt>
							<dd class="lesson-flow__item-content">
								24時間以内に宮崎よりご連絡差し上げます。<br>カウンセリングの日程を決めましょう。
							</dd>
						</dl>
					</div>
					<div class="lesson-flow__item-wrap">
						<dl class="lesson-flow__item">
							<dt class="lesson-flow__item-title"><strong>STEP3</strong>無料カウンセリング当日</dt>
							<dd class="lesson-flow__item-content">
								オンライン会議ツールZOOMを使用します。所要時間は30分ほどです。
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
							こんにちは！Webデザイン講師の宮崎祐樹です。
						</p>
						<p>
							僕がWeb業界に足を踏み入れてかれこれ15年以上。webデザイナーとしてもコーダーとしても豊富な経験があります。
							数々の企業に携わり、大規模なプロジェクトに参画したこともありました。
						</p>
						<p>
							2020年からwebデザイン講師として活動しており、ママさんたちを中心に600名以上の方々にwebデザインの楽しさを伝えてきました。受講生からは「わかりやすい」「楽しい」「丁寧」という声をたくさんいただいています。
						</p>
						<p>
							webデザインは無限の可能性があります。僕と一緒にwebの世界を探検しましょう！
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
				<h2 class="lesson-section__heading" id="inquiry">無料カウンセリングお申し込み</h2>

				<div class="form-notes">
					<p>下記フォームにご記入の上「送信する」ボタンを押してください。</p>
					<p>24時間以内に宮崎よりメールでご連絡いたします。</p>
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