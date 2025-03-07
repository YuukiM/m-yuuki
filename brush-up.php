<?php
  /*
   * Template Name: ブラッシュアップ
   *
   * */
?>
<?php if (!post_password_required($post->ID)) : ?>
  <?php get_header(); ?>
  <main class="private-lesson">
    <section class="lesson-hero-section">
      <p class="lesson-sub-heading">ひとつ上のクオリティへ！</p>
      <h1 class="lesson-hero-section__heading">
        <?php the_title(); ?>
      </h1>
    </section>

    <section class="lesson-section lesson-section--nav">
      <nav class="lesson-nav">
        <ul class="lesson-nav-list">
          <li class="lesson-nav-list__item"><a href="#content">概要</a></li>
          <li class="lesson-nav-list__item"><a href="#price">料金</a></li>
          <li class="lesson-nav-list__item"><a href="#features">特徴</a></li>
          <li class="lesson-nav-list__item"><a href="#flow">受講までの流れ</a></li>
          <li class="lesson-nav-list__item"><a href="#inquiry">お問合せ</a></li>
        </ul>
      </nav>
    </section>

    <section class="lesson-section" id="content">
      <div class="lesson-section__inner">
        <h2 class="lesson-section__heading">実務さながらに<br>デザインレッスン！</h2>
        <div class="lesson-content">
          <div class="lesson-content__block">
            <p>皆さんが作ったWebサイトのデザインカンプを、宮崎が徹底的に添削しクオリティアップのお手伝いをします。</p>
            <p>通常であればそれなりの指導料がかかるところを、圧倒的リーズナブルな価格でサービスご提供。</p>
            <p>もちろん、制作物はご自身のポートフォリオに掲載できます。</p>
          </div>
          <div class="lesson-content__block">
            <p>
              超リーズナブルな価格の条件はひとつだけ。作ったデザインを宮崎に使わせてください。<a href="https://codage.studio-lapin.jp/" target="_blank">現在制作中のコーディング学習サイト</a>の課題として提供する予定です。
            </p>
          </div>
          <div class="lesson-button">
            <a class="button" href="#inquiry">
              お申し込みはこちら
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="lesson-section" id="features">
      <div class="lesson-section__inner">
        <h2 class="lesson-section__heading">3つの大きなメリット</h2>
        <ul class="feature-list">
          <li class="feature-list__item">
            <div class="feature-list__icon"><i class="fa-solid fa-1"></i></div>
            <h3 class="feature-list__heading">実務さながらに進行！</h3>
            <p class="feature-list__text">
              発注から納品まで、実際のWeb制作同様か、それに近いプロセスで行っていきます。ZOOMでの打ち合わせとチャットでの修正をしながら進めていきます。
            </p>
          </li>
          <li class="feature-list__item">
            <div class="feature-list__icon"><i class="fa-solid fa-2"></i></i></div>
            <h3 class="feature-list__heading">細かいところまで添削！</h3>
            <p class="feature-list__text">
              Webサイトはどんな見た目にしようが自由！ただし、Webサイトとして使いやすいデザイン、コーディングしやすいデザインとなると話は別。
              しっかりとそれらに配慮したデザインになる様に、細かく添削していきます。
            </p>
          </li>
          <li class="feature-list__item">
            <div class="feature-list__icon"><i class="fa-solid fa-3"></i></div>
            <h3 class="feature-list__heading">ポートフォリオに掲載可！</h3>
            <p class="feature-list__text">
              仕上がったデザインは皆様ご自身のポートフォリオに実績として掲載できます。
              将来的に立ち上げるコーディング練習サイトでも、皆様のお名前、ポートフォリオリンクを掲載する予定です。
            </p>
          </li>
        </ul>
      </div>
    </section>

    <section class="lesson-section" id="service-detail">
      <div class="lesson-section__inner">
        <h2 class="lesson-section__heading">もっと詳しく</h2>
        <div class="lesson-content">
          <h3 class="brush-up-sub-heading">
            <i class="fa-solid fa-paintbrush brush-up-icon"></i> 本格的なWebデザインレッスン
          </h3>
          <p>
            <em><?php the_title(); ?></em>は本格的なWebデザインレッスンです。
            みなさまにはWebサイトのデザインカンプ（もしくはコーディングまで一貫して）を制作していただきます。
            それを宮崎が添削し、誰が見ても恥ずかしくないようなクオリティに仕上げるお手伝いをします。
            クオリティを上げていくため、通常よりも細かく厳しめにチェックしていきます。
          </p>
          <h3 class="brush-up-sub-heading">
            <i class="fa-solid fa-user brush-up-icon"></i> あくまで主体はみなさま
          </h3>
          <p>
            細かく添削はするものの、添削にあたっては宮崎はみなさまの作ったデザインを尊重します。
            つまり、宮崎の好みを押し付けていくのではなく、皆様のデザインをベースとしながら、
            プロ目線で不自然な部分や使い勝手の問題点、コーディングのしづらさなどを改めていきます。
          </p>
          <h3 class="brush-up-sub-heading">
            <i class="fa-solid fa-desktop brush-up-icon"></i> 実務さながらの進行
          </h3>
          <p>
            デザイン添削レッスンという体裁ですが、進行は実際のお仕事と同じように行います。
            宮崎がデザイン業務の発注をし、キックオフミーティングで内容のすり合わせ。
            その後は週に30分程度の添削ミーティングを行いながら完成に近づけていきます。
            また、添削ミーティング以外に、チャットでも質問・やり取りが可能です。
            <a href="#flow">詳しくは「受講から納品の流れ」をご覧ください。</a>
          </p>
          <h3 class="brush-up-sub-heading">
            <i class="fa-solid fa-hand-holding-dollar brush-up-icon"></i> 低価格の理由
          </h3>
          <p>
            これだけのサービスを4,000円からという低価格で実現しているのには訳があります。
            みなさまのデザインを宮崎が<a href="https://codage.studio-lapin.jp/" target="_blank">現在制作中のコーディング学習サイト</a>の素材として使わせていただきたいのです。
            そのためにはデザインのクオリティを担保しなければいけないため、今回のご依頼となります。
          </p>
          <h3 class="brush-up-sub-heading">
            <i class="fa-solid fa-award brush-up-icon"></i> 特典
          </h3>
          <p>
            また、前述の「コーディング学習サイト」にコーディング課題としてデザインを掲載しますが、その際に皆様のお名前とポートフォリオへのリンクを掲載します。 将来的にはそこからお仕事が来ることもあるかも・・・？
            また、希望者にはココナラを通じて発注いたします。その際に納品後は宮崎より評価をします。 適当な案件での高評価保証ではなく、実案件同様の評価と考えていただいて構いません。 そして、制作したデザインは実績としてポートフォリオに掲載可能です。
          </p>
        </div>
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
                  <li class="lesson-detail__list-item">ZOOMミーティング：<strong>30分ｘ4回</strong></li>
                  <li class="lesson-detail__list-item">延長料金：<strong>5,000円/月</strong></li>
                </ul>
                <p class="">デザインカンプのみを制作するプランです。</p>
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
                  <li class="lesson-detail__list-item">ZOOMミーティング：<strong>30分ｘ8回</strong></li>
                  <li class="lesson-detail__list-item">延長料金：<strong>8,000円/月</strong></li>
                </ul>
                <p class="">デザインからコーディングまで行っていただきます。</p>
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
                  <li class="lesson-detail__list-item">ZOOMミーティング：<strong>30分ｘ4回</strong></li>
                  <li class="lesson-detail__list-item">延長料金：<strong>5,000円/月</strong></li>
                </ul>
                <p class="">コーディングのみ。現在は受付停止中です</p>
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
              <dt class="lesson-flow__item-title"><span class="lesson-flow__item-step">STEP <strong>1</strong></span>まずはお申し込み
              </dt>
              <dd class="lesson-flow__item-content">
                下記のお申し込みフォームからお申し込みください。
              </dd>
            </dl>
          </div>
          <div class="lesson-flow__item-wrap">
            <dl class="lesson-flow__item">
              <dt class="lesson-flow__item-title"><span class="lesson-flow__item-step">STEP <strong>2</strong></span>制作依頼
              </dt>
              <dd class="lesson-flow__item-content">
                宮崎より実際に制作のご依頼をいたします。チャットかメールでご依頼します。
              </dd>
            </dl>
          </div>
          <div class="lesson-flow__item-wrap">
            <dl class="lesson-flow__item">
              <dt class="lesson-flow__item-title"><span class="lesson-flow__item-step">STEP <strong>3</strong></span>ストアカでレッスン受講
              </dt>
              <dd class="lesson-flow__item-content">
                決済ページから決済をお願いいたします。チャットかメールにて、金額・決済ページへのご案内をいたします。
              </dd>
            </dl>
          </div>
          <div class="lesson-flow__item-wrap">
            <dl class="lesson-flow__item">
              <dt class="lesson-flow__item-title"><span class="lesson-flow__item-step">STEP <strong>4</strong></span>キックオフミーティング
              </dt>
              <dd class="lesson-flow__item-content">
                ZOOMにてキックオフミーティングを行います。依頼内容の確認・方向性のすり合わせなどを行います。以降、1週間につき30分の添削ミーティングを行っていきます。
              </dd>
            </dl>
          </div>
          <div class="lesson-flow__item-wrap">
            <dl class="lesson-flow__item">
              <dt class="lesson-flow__item-title"><span class="lesson-flow__item-step">STEP <strong>5</strong></span>作品の提出
              </dt>
              <dd class="lesson-flow__item-content">
                作品が仕上がりましたらご提出いただき、問題なければ納品完了となります。
              </dd>
            </dl>
          </div>
        </div>
      </div>
    </section>

    <section class="lesson-section" id="service-detail">
      <div class="lesson-section__inner">
        <h2 class="lesson-section__heading">参加資格とご注意事項</h2>
        <div class="lesson-content">
          <ul class="brush-up-notices">
            <li>
              本レッスンの参加資格：<br>
              デザインプラン：Webページのデザインカンプを1ページ、最後まで仕上げたことがある方。<br>
              コンプリートプラン：Webページ1ページ分のデザインからコーディングまでを、最後まで仕上げたことがある方。
            </li>
            <li>
              本レッスンは、デザインもしくはコーディングが完成するまで宮崎がしっかりとサポートするレッスンです。
              ただし、実際の案件には当然納期が存在します。そのため、本レッスンもデザインプラン、コーディングプランの期限は1カ月間、
              コンプリートプランの期限は2カ月間と定めます。期限までに完成が間に合わない場合、追加料金のお支払いにて期間の延長が可能です。
            </li>
            <li>
              期間内に完成させることができず、延長を希望しない場合、ココナラでの評価は無しとなり、制作物を実績として公開することはできません。
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="lesson-section">
      <div class="lesson-section__inner">
        <h2 class="lesson-section__heading">よくある質問</h2>
        <div class="lesson-faq">
          <details class="lesson-faq__group">
            <summary class="lesson-faq__question">
              期間内に完成できなかったらどうなりますか？
            </summary>
            <p class="lesson-faq__answer">
              期間内に完成できなかった場合、追加料金で延長するか、延長せずに辞めるかを選択できます。
              ただし、延長しない場合にはココナラでの取引をキャンセル、実績掲載不可となります。
            </p>
          </details>
          <details class="lesson-faq__group">
            <summary class="lesson-faq__question">
              デザインを作成するツールはなんですか？
            </summary>
            <p class="lesson-faq__answer">
              Figmaを想定しています。
            </p>
          </details>
          <details class="lesson-faq__group">
            <summary class="lesson-faq__question">
              添削レッスンに使用するツールは何ですか？
            </summary>
            <p class="lesson-faq__answer">
              チャットはSlack、添削レッスンはZOOMを使います。
            </p>
          </details>
          <details class="lesson-faq__group">
            <summary class="lesson-faq__question">
              デザインはどのようなものにするのも自由ですか？
            </summary>
            <p class="lesson-faq__answer">
              はい。デザイン自体は自由です。
              ただし、盛り込む内容はこちらである程度指定指せていただきます。
            </p>
          </details>
          <details class="lesson-faq__group">
            <summary class="lesson-faq__question">
              実在する店舗や商品などのWebサイトを作ることはできますか？
            </summary>
            <p class="lesson-faq__answer">
              いいえ。架空のWebサイトを作ります。
            </p>
          </details>
          <details class="lesson-faq__group">
            <summary class="lesson-faq__question">
              写真などの素材は自分で探すのでしょうか？
            </summary>
            <p class="lesson-faq__answer">
              はい。素材は各自でご用意ください。ただし、有料素材は権利の関係から使用できませんので、無料の物からお選びください。
            </p>
          </details>
          <details class="lesson-faq__group">
            <summary class="lesson-faq__question">
              文章・テキストなどは自分で考えるのですか？
            </summary>
            <p class="lesson-faq__answer">
              はい、ご自身で考えてください。もしくはAIに考えてもらってもよいです。
            </p>
          </details>
          <details class="lesson-faq__group">
            <summary class="lesson-faq__question">
              作業を手伝っていただけますか？
            </summary>
            <p class="lesson-faq__answer">
              いいえ。作業自体はみなさまご自身で行っていただきます。
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
              コーディングプランはいつから可能ですか ？
            </summary>
            <p class="lesson-faq__answer">
              コーディングプランは、数名の受講生がデザインプランを終えてデザインカンプのストックができてからになります。
            </p>
          </details>
          <details class="lesson-faq__group">
            <summary class="lesson-faq__question">
              ZOOMやチャットはマンツーマンですか？
            </summary>
            <p class="lesson-faq__answer">
              はい。いずれもマンツーマンを想定しています。
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

<?php else: ?>
  <?php echo get_the_password_form(); ?>
<?php endif; ?>
