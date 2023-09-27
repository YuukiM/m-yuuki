<?php
/*
 * Template Name: ブラッシュアップ
 *
 * */
?>

<?php get_header(); ?>
	<main class="private-lesson">
		<section class="lesson-hero-section">
			<p class="lesson-sub-heading">超！デザイン講座</p>
			<h1 class="lesson-hero-section__heading">
				<?php the_title(); ?>
			</h1>
		</section>

		<section class="lesson-section lesson-section--nav">
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

		<section class="lesson-section">
			<div class="lesson-section__inner">
				<p class="lesson-catch">みなさんのデザインが<br>コーディング課題になる！</p>
				<p class="lesson-lead">
					コーディング課題用のデザインを募集します。ハイクオリティまで近づけます。
				</p>
				<div class="lesson-button">
					<a class="button" href="#inquiry">
						ご相談はこちら
					</a>
				</div>
			</div>
		</section>

		<section class="lesson-section" id="content">
			<div class="lesson-section__inner">
				<h2 class="lesson-section__heading">どんな内容？</h2>
				<div class="lesson-content">
					<div class="lesson-content__block">
						<p>皆さんが作ったWebサイトのデザインカンプを、宮崎が徹底的に添削・ブラッシュアップしハイクオリティに仕上げるお手伝いをします。</p>
						<p>圧倒的リーズナブルな価格でサービス提供したします。</p>
						<p>しかも、ココナラ実績がつく＆作成したものはポートフォリオに掲載可能です。</p>
					</div>
					<div class="lesson-content__block">
						<p>超リーズナブルな価格の条件はひとつだけ。作ったデザインを宮崎に使わせてください。将来的にコーディング学習サイトの素材として提供する予定です。</p>
					</div>
				</div>
			</div>
		</section>

		<section class="lesson-section" id="features">
			<div class="lesson-section__inner">
				<h2 class="lesson-section__heading">3つの大きなメリット</h2>
				<ul class="feature-list">
					<li class="feature-list__item">
						<div class="feature-list__icon"><i class="fas fa-question-circle"></i></div>
						<h3 class="feature-list__heading">実務さながらに進行！</h3>
						<p class="feature-list__text">発注から納品まで、実務同様のZOOMでの打ち合わせと添削をしながら進めていきます。</p>
					</li>
					<li class="feature-list__item">
						<div class="feature-list__icon"><i class="fa-solid fa-face-smile"></i></div>
						<h3 class="feature-list__heading">ココナラの実績がつく！</h3>
						<p class="feature-list__text">実案件と同じようにココナラで発注をいたします。納品完了後にはしっかりと評価をつけます。</p>
					</li>
					<li class="feature-list__item">
						<div class="feature-list__icon"><i class="fas fa-info-circle"></i></div>
						<h3 class="feature-list__heading">ポートフォリオに掲載可！</h3>
						<p class="feature-list__text">仕上がったデザインはポートフォリオに実績として掲載できます。</p>
					</li>
				</ul>
			</div>
		</section>

		<section class="lesson-section lesson-section--price" id="price">
			<div class="lesson-section__inner">
				<h2 class="lesson-section__heading">料金</h2>
				<div class="lesson-content lesson-content--mentoring">
					<div class="lesson-box">
						<p class="lesson-price-title">デザインプラン</p>
						<p class="lesson-price"><strong>4,000</strong>円</p>
						<div class="lesson-detail">
							<h3 class="lesson-detail__heading">プランの詳細</h3>
							<div class="lesson-detail__content">
								<ul class="lesson-detail__list">
									<li class="lesson-detail__list-item">ビデオ通話 1時間</li>
									<li class="lesson-detail__list-item">チャットでの無制限質問</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="lesson-box">
						<p class="lesson-price-title">コンプリートプラン</p>
						<p class="lesson-price"><strong>7,000</strong>円</p>
						<div class="lesson-detail">
							<h3 class="lesson-detail__heading">プランに含まれるもの</h3>
							<div class="lesson-detail__content">
								<ul class="lesson-detail__list">
									<li class="lesson-detail__list-item">ビデオ通話 2時間30分</li>
									<li class="lesson-detail__list-item">チャットでの無制限質問</li>
									<li class="lesson-detail__list-item">ビデオ通話での作品の添削</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="lesson-box lesson-box--unavailable">
						<p class="lesson-price-title">コーディングプラン</p>
						<p class="lesson-price"><strong>4,000</strong>円</p>
						<div class="lesson-detail">
							<h3 class="lesson-detail__heading">プランに含まれるもの</h3>
							<div class="lesson-detail__content">
								<ul class="lesson-detail__list">
									<li class="lesson-detail__list-item">ビデオ通話3時間</li>
									<li class="lesson-detail__list-item">チャットでの無制限質問</li>
									<li class="lesson-detail__list-item">ビデオ通話での作品の添削</li>
									<li class="lesson-detail__list-item">チャットでの作品の添削</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="lesson-section" id="flow">
			<div class="lesson-section__inner">
				<h2 class="lesson-section__heading">受講までの流れ</h2>
				<div class="lesson-flow">
					<div class="lesson-flow__item-wrap">
						<dl class="lesson-flow__item">
							<dt class="lesson-flow__item-title"><strong>STEP1</strong>まずはお申し込み</dt>
							<dd class="lesson-flow__item-content">
								下記のご相談フォームかFacebookメッセンジャーなどでご相談ください。
								ココナラのコーディングプランページと料金を教えていただきます。
							</dd>
						</dl>
					</div>
					<div class="lesson-flow__item-wrap">
						<dl class="lesson-flow__item">
							<dt class="lesson-flow__item-title"><strong>STEP2</strong>ココナラを通じて宮崎より制作依頼</dt>
							<dd class="lesson-flow__item-content">
								メールやメッセンジャーでご都合の良い受講の日時を決めます。
								ストアカというサイトで決済をしていただきますので、日程が決定次第、決済用のリンクをお送りします。
							</dd>
						</dl>
					</div>
					<div class="lesson-flow__item-wrap">
						<dl class="lesson-flow__item">
							<dt class="lesson-flow__item-title"><strong>STEP3</strong>ストアカでレッスン受講</dt>
							<dd class="lesson-flow__item-content">
								決済後に届く完了メールにZOOMのリンクが記載されています。
								当日の時間になりましたらリンクからZOOMにお入りください。
							</dd>
						</dl>
					</div>
				</div>
			</div>
		</section>



		<section class="lesson-section" id="flow">
			<div class="lesson-section__inner">
				<h2 class="lesson-section__heading">完成までのステップ</h2>
				<div class="lesson-flow">
					<div class="lesson-flow__item-wrap">
						<dl class="lesson-flow__item">
							<dt class="lesson-flow__item-title"><strong>STEP1</strong>キックオフZOOMミーティング</dt>
							<dd class="lesson-flow__item-content">
								下記のご相談フォームかFacebookメッセンジャーなどでご相談ください。
								ココナラのコーディングプランページと料金を教えていただきます。
							</dd>
						</dl>
					</div>
					<div class="lesson-flow__item-wrap">
						<dl class="lesson-flow__item">
							<dt class="lesson-flow__item-title"><strong>STEP2</strong>ワイヤーと計画書提出</dt>
							<dd class="lesson-flow__item-content">
								メールやメッセンジャーでご都合の良い受講の日時を決めます。
								ストアカというサイトで決済をしていただきますので、日程が決定次第、決済用のリンクをお送りします。
							</dd>
						</dl>
					</div>
					<div class="lesson-flow__item-wrap">
						<dl class="lesson-flow__item">
							<dt class="lesson-flow__item-title"><strong>STEP3</strong>デザイン提出</dt>
							<dd class="lesson-flow__item-content">
								決済後に届く完了メールにZOOMのリンクが記載されています。
								当日の時間になりましたらリンクからZOOMにお入りください。
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