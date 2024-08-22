<?php get_header(); ?>
  <main class="naro-kai-main">
    <img src="<?php echo get_theme_file_uri('/images/laptop.jpg'); ?>" alt="Webデザイナーになろう会">

    <section class="naro-kai-lead-container">
      <h2 class="naro-kai-welcome">
        「Webデザイナーになろう会」へようこそ！
      </h2>
      <div class="naro-kai-lead-inner">
        <p>
          この会では、Webデザイナーになりたい皆様のために、イベント・講座などを行っています。<br>現在は特定の方のみご加入いただけます。
        </p>
      </div>
    </section>
    <section class="naro-kai-container">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
      <?php endif; ?>
    </section>
  </main>

<?php get_footer(); ?>