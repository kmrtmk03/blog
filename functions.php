<?php
    // 投稿にサムネイル追加
    add_theme_support('post-thumbnails');

    // ユーザープロフィールの項目のカスタマイズ
    function custom_user_profile($wb) {
        $wb['prof-name'] = 'プロフィールでの表示名';
        $wb['one-comment'] = '一言';
        $wb['portfolio'] = 'ポートフォリオサイト';
        $wb['facebook'] = 'Facebook';
        $wb['instagram'] = 'Instagram';
        $wb['github'] = 'Github';

        return $wb;
    }
    add_filter('user_contactmethods', 'custom_user_profile', 10, 1);

    // 概要の文章の表示文字数を指定
    function myLength($length) {
        return 120;
    }
    add_filter('excerpt_mblength', 'myLength');

    // 投稿だけを検索対象とする
    function my_search_condition($search) {
    	$search .= " AND (post_type = 'post' OR post_type = 'custompost')";
    	return $search;
    }
    add_filter('posts_search','my_search_condition');
