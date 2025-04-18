<!doctype html>
<html <?php language_attributes(); ?>>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php if (is_home()): ?>
    <title>宮崎祐樹のブログ</title>
  <?php elseif(is_single()): ?>
    <title><?php the_title(); ?> | 宮崎祐樹のブログ</title>
  <?php elseif(is_category()): ?>
    <title>カテゴリ：<?php single_cat_title(); ?> | 宮崎祐樹のブログ</title>
  <?php elseif(is_page('naro-kai') || is_singular('event')): ?>
    <title>Webデザイナーになろう会</title>
  <?php else: ?>
    <title>宮崎祐樹・Webデザイン講師｜「わかった！」につなげるWebデザイン講師</title>
  <?php endif; ?>
  <meta name="twitter:site" content="@myuuki_design">
  <meta name="theme-color" content="#117dbf">
  <link rel="icon" href="<?php echo get_theme_file_uri('/favicon.ico'); ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> onscroll="scrollFunction()" id="body">
<?php if (is_home() || is_singular('post') || is_category()): ?>
  <header class="blog-header">
    <div class="title-zone">
      <h1 class="blog-heading">
        <a href="<?php echo esc_url(home_url('/blog/')); ?>" title="<?php bloginfo('name'); ?>">
          My Blog
        </a>
      </h1>
      <div class="blog-description">
        宮崎祐樹のブログ
      </div>
    </div>
    <ul class="blog-gnav">
      <li class="blog-gnav__item">
        <a href="<?php echo esc_url(home_url('/')); ?>">メインサイト</a>
      </li>
      <li class="blog-gnav__item blog-gnav__item--lesson">
        <a href="https://studio-lapin.jp/web-design-support/" target="_blank">レッスンについて</a>
      </li>
    </ul>
  </header>
<?php endif; ?>
<?php if (is_singular('event') || is_page('naro-kai')): ?>
  <header class="naro-kai-header">
    <div class="title-zone">
      <h1 class="naro-kai-heading">
        <a href="<?php echo esc_url(home_url('/naro-kai/')); ?>" title="<?php bloginfo('name'); ?>">
          Webデザイナーになろう会
        </a>
      </h1>
    </div>
  </header>
<?php endif; ?>
<?php if (is_page("home")): ?>
  <header class="header">
    <div class="gnav-wrap">
      <ul class="gnav">
        <li class="gnav__item">
          <a href="#">top</a>
        </li>
        <li class="gnav__item">
          <a href="#Biography">経歴</a>
        </li>
        <li class="gnav__item">
          <a href="#Skills">スキル</a>
        </li>
        <li class="gnav__item">
          <a href="#Blog">ブログ</a>
        </li>
      </ul>
      <a href="https://studio-lapin.jp/web-design-support/" target="_blank" class="lesson-button">レッスンについて</a>
    </div>
    <ul class="era-switcher">
      <li class="era-switcher__item"><a href="#" onclick="eraSwitcher90();">1990s</a></li>
      <li class="era-switcher__item"><a href="#" onclick="eraSwitcher20();">2020s</a></li>
    </ul>
  </header>
<?php elseif (is_page(array('private-lesson-famm', 'profile'))): ?>
  <!--nothing-->

<?php endif; ?>