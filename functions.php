<?php
function enqueue_styles(){
	wp_enqueue_style('style', get_stylesheet_uri(), array(), filemtime( get_theme_file_path( 'style.css' ) ));
		if (is_page("home")) {
			wp_enqueue_style('home-style', get_theme_file_uri('/home.css'), array(), filemtime( get_theme_file_path( '/sass/page/home.css' ) ));
		}
		if (is_page('profile')) {
			wp_enqueue_style('profile-style', get_theme_file_uri('/page.css'), array(), filemtime( get_theme_file_path( '/sass/page/page.css' ) ));
		}
		if (is_page('private-lesson-famm')) {
			wp_enqueue_style('famm-style', get_theme_file_uri('/lp.css'), array(), filemtime( get_theme_file_path( '/sass/page/lp.css' ) ));
		}
		if (is_page('reservation')) {
			wp_enqueue_style('reservation-style', get_theme_file_uri('/reservation.css'), array(), filemtime( get_theme_file_path( '/sass/page/reservation.css' ) ));
		}
		if (is_page('lessons') || is_page('private-lesson') || is_page('mentoring') || is_page('brush-up') ) {
			wp_enqueue_style('lesson-style', get_theme_file_uri('/lesson-page.css'), array(), filemtime( get_theme_file_path( '/sass/page/lesson-page.css' ) ));
		}
	}
add_action('wp_enqueue_scripts', 'enqueue_styles');

// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');

add_filter( 'body_class', 'add_page_slug_class_name' );
function add_page_slug_class_name( $classes ) {
    if ( is_page() ) {
        $page = get_post( get_the_ID() );
        $classes[] = $page->post_name;
    }
    return $classes;
}

//「Wordpress本体」の自動更新メール通知を停止する
add_filter('auto_core_update_send_email' , '__return_false');
// 「プラグイン」の自動更新メール通知を停止する
add_filter( 'auto_plugin_update_send_email', '__return_false' );

// 「テーマ」の自動更新メール通知を停止する
add_filter( 'auto_theme_update_send_email', '__return_false' );

function register_my_menus() {
	register_nav_menus( array( //複数のナビゲーションメニューを登録する関数
		//'「メニューの位置」の識別子' => 'メニューの説明の文字列',
		'main-menu' => 'メインメニュー',
		'footer-menu'  => 'フッターメニュー',
		'lesson-page-menu'  => 'レッスンページPC',
		'lesson-page-sp'  => 'レッスンページSP',
	) );
}
add_action( 'after_setup_theme', 'register_my_menus' );