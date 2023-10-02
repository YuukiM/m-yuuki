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
				<p class="lesson-catch">みなさんのデザインが<br>コーディング課題に！</p>
				<p class="lesson-lead">
					コーディング課題用のデザインカンプを募集します。
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
				<h2 class="lesson-section__heading">サービスの概要</h2>
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
						<p class="feature-list__text">発注から納品まで、実際のWeb制作同様のプロセスを取ります。ZOOMでの打ち合わせと添削をしながら進めていきます。</p>
					</li>
					<li class="feature-list__item">
						<div class="feature-list__icon"><i class="fa-solid fa-face-smile"></i></div>
						<h3 class="feature-list__heading">ココナラの実績がつく！</h3>
						<p class="feature-list__text">実案件と同じようにココナラで発注をいたします。納品完了後にはしっかりと評価をいたします。</p>
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
									<li class="lesson-detail__list-item">基本期間：<strong>1カ月間</strong></li>
									<li class="lesson-detail__list-item">デザインカンプのみを制作するプランです。</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="lesson-box">
						<p class="lesson-price-title">コンプリートプラン</p>
						<p class="lesson-price"><strong>7,000</strong>円</p>
						<div class="lesson-detail">
							<h3 class="lesson-detail__heading">プランの詳細</h3>
							<div class="lesson-detail__content">
								<ul class="lesson-detail__list">
									<li class="lesson-detail__list-item">基本期間：<strong>2カ月間</strong></li>
									<li class="lesson-detail__list-item">デザインからコーディングまで行っていただきます。</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="lesson-box lesson-box--unavailable">
						<p class="lesson-price-title">コーディングプラン</p>
						<p class="lesson-price"><strong>4,000</strong>円</p>
						<div class="lesson-detail">
							<h3 class="lesson-detail__heading">プランの詳細</h3>
							<div class="lesson-detail__content">
								<ul class="lesson-detail__list">
									<li class="lesson-detail__list-item">基本期間：<strong>1カ月間</strong></li>
									<li class="lesson-detail__list-item">デザインをもとにコーディングするプランです。現在は受付停止中です</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="lesson-section" id="flow">
			<div class="lesson-section__inner">
				<h2 class="lesson-section__heading">受講から納品の流れ</h2>
				<div class="lesson-flow">
					<div class="lesson-flow__item-wrap">
						<dl class="lesson-flow__item">
							<dt class="lesson-flow__item-title"><span class="lesson-flow__item-step">STEP <strong>1</strong></span>まずはお申し込み</dt>
							<dd class="lesson-flow__item-content">
								下記のお申し込みフォームからお申し込みください。お申し込みフォームにはココナラでのデザインページURLと金額をご記入ください。
								金額は、コーディングアカウント用に設定されている額で結構です。
							</dd>
						</dl>
					</div>
					<div class="lesson-flow__item-wrap">
						<dl class="lesson-flow__item">
							<dt class="lesson-flow__item-title"><span class="lesson-flow__item-step">STEP <strong>2</strong></span>ココナラで制作依頼</dt>
							<dd class="lesson-flow__item-content">
								ココナラを通じて、宮崎より実際に制作のご依頼をいたします。
							</dd>
						</dl>
					</div>
					<div class="lesson-flow__item-wrap">
						<dl class="lesson-flow__item">
							<dt class="lesson-flow__item-title"><span class="lesson-flow__item-step">STEP <strong>3</strong></span>ストアカでレッスン受講</dt>
							<dd class="lesson-flow__item-content">
								ストアカでレッスンの受講をお申し込みください。ご案内はメールにていたします。<br>
								レッスンの受講額はみなさんのココナラでの金額＋プランの額になります。<br>
								例：ココナラでデザインを10,000円で受けられていて、デザインプラン4,000円をお申し込みの場合 → 14,000円のお支払い。
							</dd>
						</dl>
					</div>
					<div class="lesson-flow__item-wrap">
						<dl class="lesson-flow__item">
							<dt class="lesson-flow__item-title"><span class="lesson-flow__item-step">STEP <strong>4</strong></span>キックオフミーティング</dt>
							<dd class="lesson-flow__item-content">
								最初のZOOMミーティングを行います。依頼内容の確認、方向性のすり合わせなどを行います。以降、1週間につき1時間の添削ミーティングを行っていきます。
							</dd>
						</dl>
					</div>
					<div class="lesson-flow__item-wrap">
						<dl class="lesson-flow__item">
							<dt class="lesson-flow__item-title"><span class="lesson-flow__item-step">STEP <strong>6</strong></span>作品の提出</dt>
							<dd class="lesson-flow__item-content">
								作品が仕上がりましたらご提出いただき、問題なければ納品完了となります。
							</dd>
						</dl>
					</div>
					<div class="lesson-flow__item-wrap">
						<dl class="lesson-flow__item">
							<dt class="lesson-flow__item-title"><span class="lesson-flow__item-step">STEP <strong>7</strong></span>ココナラでのお支払い</dt>
							<dd class="lesson-flow__item-content">
								宮崎より、ココナラでお支払いをします。
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
							途中までしかできなかったらどうなりますか
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
							チャットはSlack、オンライン通話はZOOMを使います。それぞれアプリをご用意ください。使い方がわからなければご相談に乗ります。
						</p>
					</details>
					<details class="lesson-faq__group">
						<summary class="lesson-faq__question">
							マンツーマンですか？
						</summary>
						<p class="lesson-faq__answer">
							はい、もちろんマンツーマンです！
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
							ビデオ通話の時間を使いきれなかったときは次月に繰り越しできますか？
						</summary>
						<p class="lesson-faq__answer">
							欠席などの受講生理由によってビデオ通話の時間が余ってしまった際には、次月に繰り越しはできません。できるだけ使いきるようにしましょう。講師理由の際には繰り越しいたします。
						</p>
					</details>
					<details class="lesson-faq__group">
						<summary class="lesson-faq__question">
							ビデオ通話の開催日時はどのように決めますか？
						</summary>
						<p class="lesson-faq__answer">
							ビデオ通話の開催日時は適宜チャット上で講師と受講生の予定をすり合わせて行います。
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
						<details class="lesson-faq__group">
							<summary class="lesson-faq__question">
								スタンダードプランとアドバンスドプランの違いの「添削」って何ですか？
							</summary>
							<p class="lesson-faq__answer">
								「添削」とは、質問を伴わないデザインやコードのチェックのことです。例えば「デザインを作ったので見て欲しい」「コーディングのおかしな点を指摘して欲しい」
								などです。スタンダードプランではビデオ通話でのみ添削可能です。アドバンスドプランはチャット上でも添削可能です。
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
				<h2 class="lesson-section__heading" id="inquiry">お申し込み</h2>

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