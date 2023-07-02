<?php
function enqueue_scripts(){
	wp_enqueue_style("style",get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');


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