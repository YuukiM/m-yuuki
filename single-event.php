<?php get_header(); ?>
  <div class="event-page-contents">
    <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
          ?>
          <main class="event-page-main">
            <article class="event-page-article" id="post-<?php the_ID(); ?>">
              <h1 class="event-page-article__heading">
                <?php the_title(); ?>
              </h1>
              <div class="article-inner">
                <?php
                  $thumbnail = get_the_post_thumbnail(get_the_ID());
                  if ($thumbnail):
                    ?>
                    <picture class="event-page-article__attachment">
                      <?php echo $thumbnail; ?>
                    </picture>
                  <?php endif; ?>
                <div class="date-cat">
                  <div class="date">
                    公開日時：<?php the_time('Y/m/d H:i'); ?>
                    <?php if (get_the_modified_date('Y/m/d H:i') != get_the_time('Y/m/d H:i')) : ?>
                      <br>最終更新日時：<?php the_modified_date('Y/m/d H:i') ?>
                    <?php endif; ?>
                  </div>
                  <div class="event-page-article__category">
                    <?php _e('カテゴリー'); ?>: <?php the_category(', '); ?>
                  </div>
                </div>
                <div class="contents-text">
                  <?php the_content(); ?>
                </div>
                <?php
                /*<div class="tags">
                  the_tags();
                </div>*/
                ?>
                <?php //comments_template('', true); ?>
              </div>
            </article>
            <div class="posts-navigation">
              <?php $prevPost = get_previous_post(); ?>
              <?php $nextPost = get_next_post(); ?>
              <?php if ($prevPost): ?>
                <a href="<?php the_permalink($prevPost->ID); ?>" class="posts-navigation__previous"><?php echo $prevPost->post_title; ?></a>
              <?php else: ?>
                <p class="posts-navigation__previous no-post">前の投稿はありません</p>
              <?php endif; ?>
              <?php if ($nextPost): ?>
                <a href="<?php the_permalink($nextPost->ID); ?>" class="posts-navigation__next"><?php echo $nextPost->post_title; ?></a>
              <?php else: ?>
                <p class="posts-navigation__next no-post">次の投稿はありません</p>
              <?php endif; ?>
            </div>
          </main>
          <?php get_sidebar(); ?>
        <?php endwhile; ?>

      <?php else: ?>
        <article class="event-page-article" id="post-<?php the_ID(); ?>">
          <h2>
            <?php _e('ページが見つかりません。'); ?>
          </h2>
          <div class="contents-text">
            <?php _e("他のキーワードで検索して下さい。"); ?>
          </div>
        </article>
      <?php endif; ?>

  </div>
<?php get_footer(); ?>