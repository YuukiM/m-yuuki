<?php
/*
 * Template Name: メンタリングサービス
 *
 * */
?>

<?php get_header(); ?>
	<main class="private-lesson">
		<section class="lesson-hero-section">
			<h1 class="lesson-hero-section__heading">
				<?php the_title(); ?>
			</h1>
		</section>
		<section class="lesson-section">
			<div class="lesson-section__inner">
				<p class="lesson-catch">いつでも<br class="sp-only">教えてくれる人がいる<br>絶対的な安心感</p>
				<p class="lesson-lead">
					メンタリングサービスは、月々定額をお支払いいただくことで、いつでも質問できるチャットと定期ZOOMレッスンが受けられるサービスです。
					プライベートレッスンよりもお得に、継続して勉強できます。
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
					<li class="lesson-nav-list__item"><a href="#comparison">プラン比較</a></li>
					<li class="lesson-nav-list__item"><a href="#features">特徴</a></li>
					<li class="lesson-nav-list__item"><a href="#voices">契約者の声</a></li>
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
						<p>案件が入ったけど、一人で納品できる自信がない！</p>
						<p>一人だと勉強しないから定期的に見てもらいたい！</p>
						<p>など、ご相談ください。</p>
					</div>
					<div class="lesson-content__block">
						<p>単発でご受講を希望の方は<a href="https://m-yuuki.com/private-lesson/" title="Web制作プライベートレッスン">プライベートレッスン</a>をお勧めしています。
						</p>
					</div>
				</div>
			</div>
		</section>

		<section class="lesson-section lesson-section--price" id="price">
			<div class="lesson-section__inner">
				<h2 class="lesson-section__heading">料金</h2>
				<div class="lesson-content lesson-content--mentoring">
					<div class="lesson-box">
						<p class="lesson-price-title">ライトプラン</p>
						<p class="lesson-price">月 <strong>5,000</strong>円</p>
						<div class="lesson-detail">
							<h3 class="lesson-detail__heading">プランに含まれるもの</h3>
							<div class="lesson-detail__content">
								<ul class="lesson-detail__list">
									<li class="lesson-detail__list-item">ビデオ通話１時間</li>
									<li class="lesson-detail__list-item">チャットでの質問</li>
								</ul>
								<a class="lesson-detail__link" href="https://www.street-academy.com/subscription/services/2605?conversion_name=direct_message&tracking_code=25b2398615054ed9fe3f39b4235e0d2e" target="_blank">
									<span>ストアカでプランを見る</span>
								</a>
							</div>
						</div>
					</div>
					<div class="lesson-box lesson-box--recommended">
						<p class="lesson-box__fukidashi">
							&emsp;おすすめ！
						</p>
						<p class="lesson-price-title">スタンダードプラン</p>
						<p class="lesson-price">月 <strong>10,000</strong>円</p>
						<div class="lesson-detail">
							<h3 class="lesson-detail__heading">プランに含まれるもの</h3>
							<div class="lesson-detail__content">
								<ul class="lesson-detail__list">
									<li class="lesson-detail__list-item">ビデオ通話2時間30分</li>
									<li class="lesson-detail__list-item">チャットでの質問</li>
									<li class="lesson-detail__list-item">ビデオ通話での作品の添削</li>
								</ul>
								<a class="lesson-detail__link" href="https://www.street-academy.com/subscription/services/2607?conversion_name=direct_message&tracking_code=73d78411ab559313fcb8affbee0beb72" target="_blank">
									<span>ストアカでプランを見る</span>
								</a>
							</div>
						</div>
					</div>
					<div class="lesson-box">
						<p class="lesson-price-title">アドバンスドプラン</p>
						<p class="lesson-price">月 <strong>15,000</strong>円</p>
						<div class="lesson-detail">
							<h3 class="lesson-detail__heading">プランに含まれるもの</h3>
							<div class="lesson-detail__content">
								<ul class="lesson-detail__list">
									<li class="lesson-detail__list-item">ビデオ通話3時間</li>
									<li class="lesson-detail__list-item">チャットでの質問</li>
									<li class="lesson-detail__list-item">ビデオ通話での作品の添削</li>
									<li class="lesson-detail__list-item">チャットでの作品の添削</li>
								</ul>
								<a class="lesson-detail__link" href="https://www.street-academy.com/subscription/services/2608?conversion_name=direct_message&tracking_code=f389b41e157b494f5f645768b5002816" target="_blank">
									<span>ストアカでプランを見る</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="lesson-section" id="comparison">
			<div class="lesson-section__inner">
				<h2 class="lesson-section__heading">プライベートレッスンと各プランの比較</h2>
				<div class="lesson-section__comparison-table">
					<img src="<?php echo get_theme_file_uri('/images/comparison.png'); ?>" loading="lazy" alt="プライベートレッスンと各プランの比較表">
				</div>
			</div>
		</section>
		<section class="lesson-section" id="features">
			<div class="lesson-section__inner">
				<h2 class="lesson-section__heading">メンタリングの<br class="sp-only">いいところ</h2>
				<ul class="feature-list">
					<li class="feature-list__item">
						<div class="feature-list__icon"><i class="fas fa-question-circle"></i></div>
						<h3 class="feature-list__heading">いつでも質問できる</h3>
						<p class="feature-list__text">メンタリングサービスではいつでもチャットを使って講師に質問ができます。ちょっとわからないことが出たときなどにすぐ聞けます。</p>
					</li>
					<li class="feature-list__item">
						<div class="feature-list__icon"><i class="fa-solid fa-face-smile"></i></div>
						<h3 class="feature-list__heading">やる気を後押し</h3>
						<p class="feature-list__text">一人だけだとやる気を出せない、さぼってしまう…。メンタリングでは定期手にに進捗を伺うなど、やる気を後押しします。</p>
					</li>
					<li class="feature-list__item">
						<div class="feature-list__icon"><i class="fas fa-info-circle"></i></div>
						<h3 class="feature-list__heading">単発レッスンよりお得</h3>
						<p class="feature-list__text">一回だけのプライベートレッスンと比較すると、わずか+500円でチャットサービスがついたメンタリングをご利用になれます。</p>
					</li>
				</ul>
			</div>
		</section>

		<section class="lesson-section" id="voices">
			<div class="lesson-section__inner">
				<h2 class="lesson-section__heading">メンタリングを<br class="sp-only">契約された方の声</h2>
				<ul class="feature-list">
					<li class="feature-list__item">
						<div class="feature-list__icon feature-list__icon--voice"><i class="fas fa-user"></i></div>
						<p class="feature-list__text">
							コーディングのご指導はもちろん、クライアントとのやりとりで不安なことやイレギュラーへの対応など、ご経験からアドバイスをいただけて大変有難いです。
						</p>
					</li>
					<li class="feature-list__item">
						<div class="feature-list__icon feature-list__icon--voice"><i class="fas fa-user"></i></div>
						<p class="feature-list__text">
							Webサイト制作の相談をさせてもらっております。いつも丁寧に対応してくださり、コミュニケーションを取りやすいです。
						</p>
					</li>
					<li class="feature-list__item">
						<div class="feature-list__icon feature-list__icon--voice"><i class="fas fa-user"></i></div>
						<p class="feature-list__text">
							納品までフォローアップありがとうございました！自分だけでは解決できなかった箇所たくさんありました。とても心強かったです！
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
								下記のご相談フォーム・もしくは<a href="https://www.street-academy.com/steachers/66562#subscription_service" target="_blank">ストアカ</a>からご相談ください(ストアカの登録が必要です)。
								できればその際に現在のご状況やご希望のレッスン内容などをご連絡ください。
								宮崎から改めてご連絡差し上げます。<br>
							</dd>
						</dl>
					</div>
					<div class="lesson-flow__item-wrap">
						<dl class="lesson-flow__item">
							<dt class="lesson-flow__item-title"><strong>STEP2</strong> 無料ヒアリングの実施</dt>
							<dd class="lesson-flow__item-content">
								30分ほどのZOOMミーティングで、ヒアリングを実施します。現在のご状況、ご希望の内容を伺い、プラン選択のアドバイスを行います。ご納得できましたら、次のステップに進んでいただきます。
							</dd>
						</dl>
					</div>
					<div class="lesson-flow__item-wrap">
						<dl class="lesson-flow__item">
							<dt class="lesson-flow__item-title"><strong>STEP3</strong> ご契約・サービス開始</dt>
							<dd class="lesson-flow__item-content">
								ストアカサイトにて、ご契約いただきます。ご契約次第、チャットにご招待します（場合によってはチャット用のメールアドレスを伺います）。初回ZOOMの日程を決め、サービス開始です。
							</dd>
						</dl>
					</div>
				</div>
			</div>
		</section>

		<section class="lesson-section">
			<div class="lesson-section__inner">
				<h2 class="lesson-section__heading">よくある質問</h2>
				<div class="lesson-faq">
					<details class="lesson-faq__group">
						<summary class="lesson-faq__question">
							メンタリング・メンターとは何ですか？
						</summary>
						<p class="lesson-faq__answer">
							メンターは簡単に言えば「学習の相談に乗ってくれる人」です。メンタリングとはそのメンターと学習者のやり取りを通じて、学習者を育成する制度のことをいいます。
						</p>
					</details>
					<details class="lesson-faq__group">
						<summary class="lesson-faq__question">
							メンタリングに使用するツールは何ですか？
						</summary>
						<p class="lesson-faq__answer">
							チャットはSlack、オンライン通話はZOOMを使います。
						</p>
					</details>
					<details class="lesson-faq__group">
						<summary class="lesson-faq__question">
							各プランのビデオ通話は規定時間を通しで行いますか？
						</summary>
						<p class="lesson-faq__answer">
							ビデオ通話の時間は分割できます。
							例えばスタンダードプランの2時間30分のビデオ通話は、1時間＋1時間＋30分のように複数に分けられます。現在ご契約の方は皆さん分割を選択していますが、もちろん月に一回のみ、通しで行ってもかまいません。
						</p>
					</details>
					<details class="lesson-faq__group">
						<summary class="lesson-faq__question">
							契約はどのように行いますか？
						</summary>
						<p class="lesson-faq__answer">
							メンタリングサービスは「ストリートアカデミー（以下、ストアカ）」というサービスを使用してしていますので、ご契約はストアカのウェブサイト上で行っていただきます。
						</p>
					</details>
					<details class="lesson-faq__group">
						<summary class="lesson-faq__question">
							契約期間の1カ月とは、月初から月末までですか？
						</summary>
						<p class="lesson-faq__answer">
							いいえ。契約期間の1カ月はご契約日から翌月の前日までです。例えば、7月10日にご契約の場合、期間は7月10日から8月9日までです。
						</p>
					</details>
					<details class="lesson-faq__group">
						<summary class="lesson-faq__question">
							契約は自動更新ですか？
						</summary>
						<p class="lesson-faq__answer">
							はい。特にお申し出や解約操作がない限り、契約は自動更新となります。
						</p>
					</details>
					<details class="lesson-faq__group">
						<summary class="lesson-faq__question">
							いつでも解約できますか？
						</summary>
						<p class="lesson-faq__answer">
							はい。いつでも解約が可能です。
							ただし、契約期間の途中で解約される場合にはその期間の最終日までは契約有効となります。日割り返金などは行いません。
						</p>
					</details>
					<details class="lesson-faq__group">
						<summary class="lesson-faq__question">
							チャットでの質問の回答はどれくらいで返ってきますか？
						</summary>
						<p class="lesson-faq__answer">
							講師の稼働状況に寄りますが、遅くても24時間以内にはご返信するようにしています。
						</p>
					</details>
					<details class="lesson-faq__group">
						<summary class="lesson-faq__question">
							1から学習できるカリキュラムはありますか？
						</summary>
						<p class="lesson-faq__answer">
							現在、1から学習できるオリジナルのカリキュラムはご用意がありませんが、ご相談いただければ、最適な学習方法などを一緒に考えて、サポートいたします。
						</p>
					</details>
					<details class="lesson-faq__group">
						<summary class="lesson-faq__question">
							必要な時に1カ月間だけ契約・・・のような使い方もできますか？
						</summary>
						<p class="lesson-faq__answer">
							もちろん可能です！ご相談ください。
						</p>
					</details>
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