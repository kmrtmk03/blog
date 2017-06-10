<?php
    // 投稿にサムネイル追加
    add_theme_support('post-thumbnails');

    // ユーザープロフィールの項目のカスタマイズ
    function custom_user_profile($wb) {
        $wb['twitter'] = 'Twitter';
        $wb['facebook'] = 'Facebook';
        $wb['github'] = 'Github';

        return $wb;
    }
    add_filter('user_contactmethods', 'custom_user_profile', 10, 1);
