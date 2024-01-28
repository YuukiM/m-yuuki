<?php get_header(); ?>
  <div class="blog-home-contents">
    <main class="blog-home-main">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <a href="<?php echo get_permalink(get_the_ID()); ?>" class="blog-home-article" id="post-<?php the_ID(); ?>" title="<?php the_title(); ?>">
          <div class="blog-home-article__category">
            <?php
              $category = get_the_category();
              echo $category[0] -> cat_name;
            ?>
          </div>
          <div class="blog-home-article__image">
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
          <h2 class="blog-home-article__heading">
            <?php the_title(); ?>
          </h2>
          <div class="blog-home-article__content">
            <div class="contents-text">
              <?php the_excerpt(); ?>
            </div>
          </div>
          <div class="blog-home-article__bottom">
            <div class="date">
              <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d H:i'); ?></time>
            </div>
          </div>
        </a>
      <?php endwhile; ?>
      <?php else: ?>
        <article class="blog-home-article" id="post-<?php the_ID(); ?>">
          <h1 class="not-found">
            <?php _e("ページが見つかりません"); ?>
          </h1>
          <div class="blog-home-article-content">
            <div class="contents-text">
              <p><?php _e("他のキーワードで検索して下さい。"); ?></p>
            </div>
          </div>
        </article>
      <?php endif; ?>
    </main>

      <?php the_posts_pagination(
        array(
          'mid_size' => 2, // 現在ページの左右に表示するページ番号の数
          'prev_next' => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
          'prev_text' => '<',
          'next_text' => '>',
          'type' => 'list', // 戻り値の指定 (plain/list)
        )
      ); ?>

    <?php //get_sidebar(); ?>
  </div>
<?php get_footer(); ?>