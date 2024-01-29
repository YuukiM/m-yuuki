<?php
  /*
   * Template Name: トップ
   *
   * */
?>
<?php get_header(); ?>
  <main class="main">
    <div id="js-content" class="main-content">
      <section class="above-the-fold">
        <p class="above-the-fold__sup-letters">Webデザイン講師</p>
        <p class="above-the-fold__letters">Miyazaki Yûki</p>
        <div class="button-wrap">
          <a href="<?php echo esc_url(home_url('/lessons/')); ?>" target="_blank" class="button button--ghost">
            <span class="button__inner">レッスンご希望の方</span>
          </a>
        </div>
        <a class="scroll-button pc-only" href="#Introduction"><span class="scroll__icon"></span>Scroll</a>
      </section>
      <section class="section introduction">
        <div class="contents introduction__contents" id="Introduction">
          <h1 class="title">
          <span class="title__top">
            Webデザイン講師
          </span>
          <span class="title__bottom">
            <span class="title__name">宮崎祐樹</span>です
          </span>
          </h1>
          <div class="introduction__image">
            <img src="<?php echo get_theme_file_uri('/images/teacher.jpg'); ?>" alt="宮崎祐樹">
          </div>
          <div class="introduction__lead">
            <p>
              こんにちは！Webデザイン講師の宮崎祐樹です。
            </p>
            <p>
              web業界で15年以上の経験を持ち、webデザイナーとしてもコーダーとしても豊富な経験を持っています。
            </p>
            <p>
              2020年からwebデザイン講師として活動しており、これまで600名以上の方々にwebデザインの楽しさを伝えてきました。受講生からは「わかりやすい」「楽しい」「丁寧」という声をたくさんいただいています。
            </p>
            <p>
              webデザインの世界は正直、ラクではありません。厳しい事も多いです。でも、まず初学者には「Web制作って楽しい！」と思ってもらうことが重要だと考えています。私と一緒にwebの世界を探検しましょう！
            </p>
          </div>

          <?php /*<div class="introduction__socials">
						<a class="facebook" href="https://www.facebook.com/WebDesignMY" title="Facebookページ" target="_blank">
								<svg id="Layer_1" xmlns="http://www.w3.org/2000/svg"
										 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 viewBox="0 0 1024 1024" xml:space="preserve">
										<g>
												<path class="st0" d="M1024,512C1024,229.2,794.8,0,512,0S0,229.2,0,512c0,255.6,187.2,467.4,432,505.8V660H302V512h130V399.2
														C432,270.9,508.4,200,625.4,200c56,0,114.6,10,114.6,10v126h-64.6c-63.6,0-83.4,39.5-83.4,80v96h142l-22.7,148H592v357.8
														C836.8,979.4,1024,767.6,1024,512z"/>
												<path class="st1" d="M711.3,660L734,512H592v-96c0-40.5,19.8-80,83.4-80H740V210c0,0-58.6-10-114.6-10
														c-117,0-193.4,70.9-193.4,199.2V512H302v148h130v357.8c26.1,4.1,52.8,6.2,80,6.2s53.9-2.1,80-6.2V660H711.3z"/>
										</g>
								</svg>
						</a>
						<a class="line" href="https://lin.ee/zH6ZIni" title="LINE公式" target="_blank">
								<svg id="line" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
										 y="0px" viewBox="0 0 1000 1000" xml:space="preserve">
									 <g>
											 <circle class="st0" cx="500.2" cy="499.8" r="500.2"/>
											 <g id="TYPE_A_19_">
													 <g>
															 <path class="st1" d="M832.8,469.8c0-148.9-149.2-270-332.7-270c-183.4,0-332.7,121.1-332.7,270c0,133.5,118.4,245.2,278.2,266.4
																c10.8,2.3,25.6,7.1,29.3,16.4c3.4,8.4,2.2,21.6,1.1,30.1c0,0-3.9,23.5-4.7,28.5c-1.4,8.4-6.7,32.9,28.8,17.9
																c35.5-15,191.6-112.8,261.4-193.2h0C809.7,583,832.8,529.4,832.8,469.8"/>
															 <g>
																<path class="st0" d="M432.6,397.9h-23.3c-3.6,0-6.5,2.9-6.5,6.5v145c0,3.6,2.9,6.5,6.5,6.5h23.3c3.6,0,6.5-2.9,6.5-6.5v-145
																		C439,400.8,436.1,397.9,432.6,397.9"/>
																<path class="st0" d="M593.2,397.9h-23.3c-3.6,0-6.5,2.9-6.5,6.5v86.1l-66.4-89.7c-0.2-0.2-0.3-0.4-0.5-0.7c0,0,0,0,0,0
																		c-0.1-0.1-0.3-0.3-0.4-0.4c0,0-0.1-0.1-0.1-0.1c-0.1-0.1-0.2-0.2-0.3-0.3c-0.1,0-0.1-0.1-0.2-0.1c-0.1-0.1-0.2-0.2-0.3-0.2
																		c-0.1,0-0.1-0.1-0.2-0.1c-0.1-0.1-0.2-0.1-0.3-0.2c-0.1,0-0.1-0.1-0.2-0.1c-0.1-0.1-0.2-0.1-0.4-0.2c-0.1,0-0.1-0.1-0.2-0.1
																		c-0.1,0-0.3-0.1-0.4-0.1c-0.1,0-0.1,0-0.2-0.1c-0.1,0-0.2-0.1-0.4-0.1c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.3,0
																		c-0.1,0-0.2,0-0.3,0c-0.1,0-0.1,0-0.2,0h-23.3c-3.6,0-6.5,2.9-6.5,6.5v145c0,3.6,2.9,6.5,6.5,6.5h23.3c3.6,0,6.5-2.9,6.5-6.5
																		v-86.1l66.5,89.8c0.5,0.6,1,1.2,1.6,1.6c0,0,0,0,0.1,0.1c0.1,0.1,0.3,0.2,0.4,0.2c0.1,0,0.1,0.1,0.2,0.1
																		c0.1,0.1,0.2,0.1,0.3,0.2c0.1,0,0.2,0.1,0.3,0.1c0.1,0,0.1,0.1,0.2,0.1c0.2,0.1,0.3,0.1,0.4,0.1c0,0,0.1,0,0.1,0
																		c0.5,0.1,1.1,0.2,1.7,0.2h23.3c3.6,0,6.5-2.9,6.5-6.5v-145C599.7,400.8,596.8,397.9,593.2,397.9"/>
																<path class="st0" d="M376.3,519.5h-63.4V404.4c0-3.6-2.9-6.5-6.5-6.5h-23.3c-3.6,0-6.5,2.9-6.5,6.5v144.9v0
																		c0,1.7,0.7,3.3,1.8,4.5c0,0,0.1,0.1,0.1,0.1c0,0,0.1,0.1,0.1,0.1c1.2,1.1,2.7,1.8,4.5,1.8h0h93.2c3.6,0,6.5-2.9,6.5-6.5V526
																		C382.8,522.4,379.9,519.5,376.3,519.5"/>
																<path class="st0" d="M722,434.2c3.6,0,6.5-2.9,6.5-6.5v-23.3c0-3.6-2.9-6.5-6.5-6.5h-93.2h0c-1.7,0-3.3,0.7-4.5,1.8
																		c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1c-1.1,1.2-1.8,2.7-1.8,4.5v0v144.9v0c0,1.7,0.7,3.3,1.8,4.5c0,0,0.1,0.1,0.1,0.1
																		c0,0,0.1,0.1,0.1,0.1c1.2,1.1,2.7,1.8,4.5,1.8h0H722c3.6,0,6.5-2.9,6.5-6.5V526c0-3.6-2.9-6.5-6.5-6.5h-63.4V495H722
																		c3.6,0,6.5-2.9,6.5-6.5v-23.3c0-3.6-2.9-6.5-6.5-6.5h-63.4v-24.5H722z"/>
														</g>
											 </g>
										</g>
										</g>
								</svg>

						</a>
				</div>*/ ?>

        </div>
        <div class="image-area introduction__image">
          <div class="letters">
            <p class="letters__top visible">
              Miyazaki Yûki
            </p>
            <p class="letters__bottom visible">
              vous enseigne le web design.
            </p>
          </div>
        </div>
      </section>
      <section class="section biography">
        <div class="contents biography__contents" id="Biography">
          <h2 class="section__heading">
            経歴
          </h2>
          <div class="section__wrap">
            <ul class="biography-list">
              <li class="biography-list__item">
                <dl class="biography-list__text">
                  <dt>2023</dt>
                  <dd>講師歴3年。600名以上の受講生に教えてきました。</dd>
                </dl>
              </li>
              <li class="biography-list__item">
                <dl class="biography-list__text">
                  <dt>2020</dt>
                  <dd>Webデザイン講師としてデビュー。</dd>
                </dl>
              </li>
              <li class="biography-list__item">
                <dl class="biography-list__text">
                  <dt>2017 – 2020</dt>
                  <dd>
                    フリーランスWebデザイナーとして活動開始。アパレル系ECサイトのコーディングや大手企業のLP、製品ページのコーディングなど。
                  </dd>
                </dl>
              </li>
              <li class="biography-list__item">
                <dl class="biography-list__text">
                  <dt>2013 - 2016</dt>
                  <dd>
                    外資系企業にて、大手ソフトウェアメーカーの公式ECサイトやLPなどのフロント開発を行う。個人では中小企業向けのサイトをWordpressで制作。デザインからテーマの開発、実装まで手掛ける。
                  </dd>
                </dl>
              </li>
              <li class="biography-list__item">
                <dl class="biography-list__text">
                  <dt>2010 - 2013</dt>
                  <dd>
                    都内ウェブ制作会社にて、Wordpressを使用したウェブサイトの制作を受け持つ。デザインからテーマの開発、実装までを担当。
                  </dd>
                </dl>
              </li>
              <li class="biography-list__item">
                <dl class="biography-list__text">
                  <dt>2008</dt>
                  <dd>Webクリエイターとして活動を始める。</dd>
                </dl>
              </li>
              <li class="biography-list__item">
                <dl class="biography-list__text">
                  <dt>2001</dt>
                  <dd>フランスに語学留学。4年半滞在。</dd>
                </dl>
              </li>
              <li class="biography-list__item">
                <dl class="biography-list__text">
                  <dt>1998</dt>
                  <dd>高校2年生。はじめてHTMLでウェブサイトを作る。</dd>
                </dl>
              </li>
            </ul>
            <div class="button-wrap">
              <a href="<?php echo esc_url(home_url('/profile/')); ?>" target="_blank" class="button">
                <span class="button__inner">詳しい職務経歴</span>
              </a>
            </div>
          </div>
        </div>
        <div class="image-area biography__image">
          <div class="letters">
            <p class="letters__top js-fade-in">
              Biographie
            </p>
            <p class="letters__bottom js-fade-in">
              ma vie professionnelle
            </p>
          </div>
        </div>
      </section>
      <section class="section skills">
        <div class="contents skills__contents" id="Skills">
          <h2 class="section__heading">
            スキル
          </h2>
          <div class="section__wrap">
            <ul class="skills__primary">
              <li class="skill-item">
                <div class="skill-item__text">
                  <h3 class="skill-item__heading item-heading">
                    Webデザイン講師
                  </h3>
                  <div class="skill-item__detail">
                    <p>
                      オンライン、対面レッスンに対応しています。
                    </p>
                    <p>
                      女性向けWebデザインスクールで「非常に良い」との評価を多数いただいています。
                    </p>
                    <p>
                      大手オンラインスクールの評価でも、総合評価で5点中4.6点をいただきました。
                    </p>
                  </div>
                </div>
                <svg class="skill-item__img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24" xml:space="preserve">
                <path d="M7.5 21.5v-1h4v-3H3c-.3 0-.5-.2-.5-.5V4c0-.3.2-.5.5-.5h18c.3 0 .5.2.5.5v13c0 .3-.2.5-.5.5h-8.5v3h4v1h-9zm-4-5h17v-12h-17v12z"/>
                  <path d="M14.1 11.2c0 2.7-4.3 2.7-4.2 0-.1-2.7 4.3-2.7 4.2 0zm1.1 5.3c.1-4.1-6.4-4.1-6.4 0h6.4z" 　style="stroke-width:.5;stroke-miterlimit:10"/>
              </svg>
              </li>
            </ul>
            <ul class="skills__secondary">
              <li class="skill-item">
                <div class="skill-item__text">
                  <h3 class="skill-item__heading item-heading">
                    コーディング
                  </h3>
                  <div class="skill-item__detail">
                    <p>
                      HTML Living
                      Standard、CSS、jQueryを用いて、メンテナンス性を考慮したサイト構築を目指します。BEMや、Sassも使用できます。使用ツールはPHPStorm、VSCodeなど
                    </p>
                  </div>
                </div>
                <svg class="skill-item__img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24" xml:space="preserve">
								<path d="M9.3 18.4 14 5.6h.8l-4.7 12.8h-.8zM.7 12l4.9-4.9.7.7L2.1 12l4.2 4.2-.6.8-5-5zm16.9 4.2 4.2-4.2-4.2-4.2.7-.7 5 4.9-5 5-.7-.8z"/>
							</svg>
              </li>
              <li class="skill-item">
                <div class="skill-item__text">
                  <h3 class="skill-item__heading item-heading">
                    Wordpress
                  </h3>
                  <p class="skill-item__detail">
                    Wordpress歴10年以上。バージョン2.3の時代からWPでのサイト構築、オリジナルテーマを使用したサイト作成をしています。テンプレートの様々な導入パターンにも柔軟に対応可能です。
                  </p>
                </div>
                <svg class="skill-item__img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24" xml:space="preserve">
								<path d="M12 21.8c-2.6 0-5.1-1-6.9-2.9C3.2 17 2.2 14.6 2.2 12c0-2.6 1-5.1 2.9-6.9S9.4 2.2 12 2.2c2.6 0 5.1 1 6.9 2.9 1.9 1.9 2.9 4.3 2.9 6.9 0 2.6-1 5.1-2.9 6.9-1.8 1.9-4.3 2.9-6.9 2.9zm-2.7-1.3.2.1c.8.2 1.6.4 2.5.4 1 0 2-.2 3-.5l.2-.1-.2-.4-2.9-7.8-2.8 8.3zM3.9 8.4c-.5 1.1-.8 2.3-.8 3.6 0 3.4 1.9 6.5 5 8l.4.2L4.1 7.9l-.2.5zm15.9-.7c0 1-.8 3.4-1 4L16 19.9l.5-.3c1.3-.8 2.5-1.9 3.2-3.2.8-1.3 1.2-2.9 1.2-4.4 0-1.5-.4-3-1.1-4.3zM7.6 7.3c.1 0 .2.1.2.2 0 0 0 .1-.1.2 0 0-.5.1-1 .1h-.3L9.8 18l2.1-6.3-1.4-3.9h-.1c-.3 0-.6 0-.9-.1-.1 0-.2-.1-.1-.2 0 0 0-.2.2-.2.1 0 1.5.1 2.3.1.9 0 2.3-.1 2.3-.1.2 0 .2.1.2.2 0 0 0 .1-.1.2 0 0-.5.1-1 .1H13L16.4 18l1.1-3.8c.3-1.1.6-1.9.6-2.6 0-1.1-.4-1.9-.7-2.5l-.1-.2c-.4-.6-.7-1.2-.7-1.8 0-.6.5-1.3 1.3-1.3h.6l-.5-.3c-1.6-1.5-3.8-2.3-6-2.3-1.5 0-2.9.4-4.2 1.1-1.3.6-2.4 1.6-3.2 2.8l-.2.3h.9c.9 0 2.3-.1 2.3-.1z"/>
							</svg>
              </li>
              <li class="skill-item">
                <div class="skill-item__text">
                  <h3 class="skill-item__heading item-heading">
                    Webデザイン
                  </h3>
                  <p class="skill-item__detail">
                    Figma、PS、XDなどを使用したWebデザインをしています。コーディングのしやすさやサイトとしての使いやすさを考慮したシンプルでわかりやすいデザインを得意としています。
                  </p>
                </div>
                <svg class="skill-item__img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                     style="enable-background:new 0 0 24 24" xml:space="preserve"><path
                    d="M11.5 20.5c-3.1 0-7-1.2-9.3-2.4l-.3-.1.2-.2c2.5-2.1 2.6-3.7 2.7-5 0-.4.1-.7.2-1.1.8-3.1 3.4-5.1 6.5-5.1.6 0 1.1.1 1.7.2l.2.1 5.1-4c.1-.1.2-.1.3-.1.1 0 .3.1.4.1l3 3c.2.2.2.5 0 .7l-4 5.1.1.2c.3 1.1.3 2.3 0 3.5-.9 3-3.6 5.1-6.8 5.1zm-7.2-2.6c2.5 1 5.1 1.5 7.2 1.5 2.7 0 5.1-1.8 5.8-4.4.5-2 0-4.2-1.5-5.7l-.1-.1c-.8-.7-1.7-1.2-2.6-1.5-.5-.1-1-.2-1.6-.2-2.6 0-4.8 1.8-5.5 4.4-.1.2-.1.4-.1.9-.2 1.9-.6 3.2-1.7 4.4l-.5.5.6.2zM14.5 7.1c1.4.8 2.5 1.9 3.3 3.3l3.3-4.3-2.4-2.4-4.2 3.4z"/></svg>
              </li>
            </ul>

            <div class="button-wrap">
              <a href="<?php echo esc_url(home_url('/portfolio/')); ?>" target="_blank" class="button">ポートフォリオ</a>
            </div>

          </div>
        </div>
        <div class="image-area skills__images">
          <div class="letters">
            <p class="letters__top js-fade-in">
              Compétences
            </p>
            <p class="letters__bottom js-fade-in">
              voici ce que je peux faire
            </p>
          </div>
        </div>
      </section>
      <section class="section blog">
        <div class="contents services-prices__contents" id="Blog">
          <h2 class="section__heading">
            ブログ
          </h2>
          <div class="section__wrap front-blog-section">
            <?php
              $the_query = new WP_Query(
                array(
                  'post_type' => 'post',
                  'posts_per_page' => 3
                )
              );
              if ($the_query->have_posts()) :
                while ($the_query->have_posts()) :
                  $the_query->the_post();
                  ?>
                  <a href="<?php echo esc_url(get_permalink(get_the_ID())); ?>" class="front-blog-article" id="post-<?php the_ID(); ?>" title="<?php the_title(); ?>">
                    <div class="front-blog-article__category">
                      <?php
                        $category = get_the_category();
                        echo $category[0]->cat_name;
                      ?>
                    </div>
                    <div class="front-blog-article__image">
                      <?php
                        $thumbnail = get_the_post_thumbnail(get_the_ID());
                        if ($thumbnail):
                          ?>
                          <picture class="post-image">
                            <?php echo $thumbnail; ?>
                          </picture>
                        <?php else: ?>
                          <picture class="post-image">
                            <img src="<?php echo get_theme_file_uri('/images/no-image.png'); ?>" alt="画像はありません">
                          </picture>
                        <?php endif; ?>
                    </div>
                    <h2 class="front-blog-article__heading">
                      <?php the_title(); ?>
                    </h2>
                    <div class="front-blog-article__bottom">
                      <div class="date">
                        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d H:i'); ?></time>
                      </div>
                    </div>
                  </a>

                <?php endwhile; ?>
              <?php else : ?>
                <li>投稿はありません。</li>
              <?php endif; ?>
          </div>
          <div class="button-wrap">
            <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="button" target="_blank">
              <span class="button__inner">ブログへ</span>
            </a>
          </div>
        </div>
        <div class="image-area ">
          <div class="letters">
            <p class="letters__top js-fade-in">
              Blog
            </p>
            <p class="letters__bottom js-fade-in">
              ce à quoi je pense...
            </p>
          </div>
        </div>
      </section>
    </div>
  </main>
<?php get_footer(); ?>