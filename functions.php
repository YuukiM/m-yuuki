<?php
  function enqueue_styles()
  {
    wp_enqueue_style('style', get_stylesheet_uri(), array(), filemtime(get_theme_file_path('style.css')));
    if (is_page("home")) {
      wp_enqueue_style('home-style', get_theme_file_uri('/home.css'), array(), filemtime(get_theme_file_path('/home.css')));
      wp_enqueue_style('home-style-90s', get_theme_file_uri('/home-90s.css'), array(), filemtime(get_theme_file_path('/home-90s.css')));
    }
    if (is_page('profile')) {
      wp_enqueue_style('profile-style', get_theme_file_uri('/page.css'), array(), filemtime(get_theme_file_path('/page.css')));
    }
    if (is_home() || is_single() || is_category()) {
      wp_enqueue_style('blog-style', get_theme_file_uri('/blog.css'), array(), filemtime(get_theme_file_path('/blog.css')));
    }
    if (is_page(array('private-lesson-famm', 'naro-kai'))) {
      wp_enqueue_style('famm-style', get_theme_file_uri('/lp.css'), array(), filemtime(get_theme_file_path('/lp.css')));
    }
    if (is_page('reservation')) {
      wp_enqueue_style('reservation-style', get_theme_file_uri('/reservation.css'), array(), filemtime(get_theme_file_path('/reservation.css')));
    }
    if (is_page('lessons') || is_page('private-lesson') || is_page('mentoring') || is_page('brush-up')) {
      wp_enqueue_style('lesson-style', get_theme_file_uri('/lesson-page.css'), array(), filemtime(get_theme_file_path('/lesson-page.css')));
    }
  }

  add_action('wp_enqueue_scripts', 'enqueue_styles');

  if (!is_admin()) {
    function my_scripts()
    {
      wp_deregister_script('jquery');
      wp_deregister_script('jquery-migrate');
      wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '3.7.1', false);
      wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), '1.0', true);
    }

    add_action('wp_enqueue_scripts', 'my_scripts');
  }

// アイキャッチ画像を有効にする。
  add_theme_support('post-thumbnails');

  add_filter('body_class', 'add_page_slug_class_name');
  function add_page_slug_class_name($classes)
  {
    if (is_page()) {
      $page = get_post(get_the_ID());
      $classes[] = $page->post_name;
    }
    return $classes;
  }

//「Wordpress本体」の自動更新メール通知を停止する
  add_filter('auto_core_update_send_email', '__return_false');
// 「プラグイン」の自動更新メール通知を停止する
  add_filter('auto_plugin_update_send_email', '__return_false');

// 「テーマ」の自動更新メール通知を停止する
  add_filter('auto_theme_update_send_email', '__return_false');

// 「保護中」表示を消す
  add_filter('protected_title_format', 'remove_protected');
  function remove_protected($title)
  {
    return '%s';
  }


  function my_password_form()
  {
    return '<p>このページをご覧になるには、パスワードを入力して「送信する」を押してください。</p>
<form class="post_password" action="' . home_url() . '/wp-login.php?action=postpass" method="post">
パスワード <input name="post_password" type="password" size="24" /> <input type="submit" name="Submit" value="' . esc_attr__("送信する") . '" />
</form>';
  }

  add_filter('the_password_form', 'my_password_form');

  function register_my_menus()
  {
    register_nav_menus(array( //複数のナビゲーションメニューを登録する関数
      //'「メニューの位置」の識別子' => 'メニューの説明の文字列',
      'main-menu' => 'メインメニュー',
      'footer-menu' => 'フッターメニュー',
      'lesson-page-menu' => 'レッスンページPC',
      'lesson-page-sp' => 'レッスンページSP',
    ));
  }

  add_action('after_setup_theme', 'register_my_menus');


  if (function_exists('register_sidebar')) {
    register_sidebar(array(
      'name' => 'Sidebar %d',
      'id' => 'sidebar-1',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h2>',
      'after_title' => '</h2>'
    ));
  }

  /* Get the first image of each post */

  function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
    if(empty($first_img)){
      // 記事内で画像がなかったときのためのデフォルト画像を指定
      $first_img = "/images/default.jpg";
    }
    return $first_img;
  }

  function twpp_change_excerpt_length( $length ) {
    return 70;
  }
  add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );