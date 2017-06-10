<!DOCTYPE html>
<html>
    <head>
        <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
        <!-- 文字コート設定 -->
        <meta charset="<?php bloginfo('charset'); ?>">
        <!-- viewport設定 -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- スタイルシート読み込み -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
        <?php wp_head(); ?>
    </head>
    <body>
        <!-- ヘッダー -->
        <header>
            <!-- ロゴ -->
            <h1><a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo('name') ?></a></h1>
        </header>
