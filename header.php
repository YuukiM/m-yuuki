<!doctype html>
<html <?php language_attributes(); ?>>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>宮崎祐樹・Webデザイン講師｜「わかった！」につなげるWebデザイン講師</title>
  <meta name="twitter:site" content="@myuuki_design">
  <meta name="theme-color" content="#117dbf">
  <link rel="icon" href="<?php echo get_theme_file_uri('/favicon.ico'); ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if (is_page("home")): ?>
  <header class="header">
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
        <a href="#Service">レッスンと料金</a>
      </li>
    </ul>
  </header>
<?php elseif (is_page('private-lesson-famm') || is_page('profile')): ?>
  <!--nothing-->
<?php elseif (is_page('lessons') || is_page('private-lesson') || is_page('mentoring')): ?>
<header class="lesson-header">
  <h1 class="lesson-header__inner">
    <a href="/lessons" class="lesson-header__heading">
      Yûki's Web Design Lessons
    </a>
    <span class="lesson-header__sub-heading">宮崎祐樹のWeb制作レッスン</span>
  </h1>
  <div class="lesson-gnav">
	  <?php
		  wp_nav_menu(array(
			  'theme_location' => 'lesson-page-menu'
		  ));
	  ?>
  </div>
  <a class="header-button" href="#inquiry">
    無料カウンセリング！
  </a>
  <input type="checkbox" class="drawer" id="drawer">
  <label for="drawer" class="drawer-open">
    <span></span>
  </label>
  <label for="drawer" class="drawer-close"></label>
  <div class="lesson-nav-sp">
	  <?php
		  wp_nav_menu(array(
			  'theme_location' => 'lesson-page-sp'
		  ));
	  ?>
  </div>
</header>

<?php endif; ?>