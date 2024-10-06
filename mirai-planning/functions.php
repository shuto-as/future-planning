<?php

//-------------------------------------------
// 不要タグの削除
//-------------------------------------------
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');

// 絵文字関連タグ
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');
add_filter('emoji_svg_url', '__return_false');

function theme_enqueue() {
    wp_deregister_style('dashicons');
    wp_dequeue_style('global-styles');
    wp_dequeue_style('classic-theme-styles');
    if (!is_admin()) {
        wp_dequeue_style('wp-block-library');
    }
}
add_action('wp_enqueue_scripts', 'theme_enqueue');

//-------------------------------------------
// 初期処理
//-------------------------------------------
add_action('init', function(){
    remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');
});

add_action('after_setup_theme', function(){
    add_theme_support('post-thumbnails');
});

//-------------------------------------------
// アーカイブページの作成
//-------------------------------------------
function post_has_archive($args, $post_type) {
    if ('post' == $post_type) {
        $args['rewrite'] = [
            'with_front' => false,
        ];
        $args['has_archive'] = 'news';
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

//-------------------------------------------
// ACF WYSIWYG エディターのツールバーをカスタマイズ
//-------------------------------------------
function acf_toolbars($toolbars) {
	$toolbars['customize'] = [];
	$toolbars['customize'][1] = [
        'forecolor', // 文字色
        'bold', // 太字
        'underline', // 下線
        'fontsizeselect', // フォントサイズ
        'link', // リンク
    ];

	return $toolbars;
}
add_filter('acf/fields/wysiwyg/toolbars', 'acf_toolbars');

//-------------------------------------------
// リダイレクト
//-------------------------------------------
function is404_redirect() {
    if (is_404()) {
        wp_safe_redirect(home_url('/'), 301);
        exit();
    }
}
add_action('template_redirect', 'is404_redirect');