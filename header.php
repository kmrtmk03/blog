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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <?php wp_head(); ?>
    </head>
    <body>
        <!-- ヘッダー -->
        <header>
            <!-- ロゴ -->
            <h1>
                <a href="<?php echo esc_url(home_url()); ?>">
                    <img class="header-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="">
                </a>
            </h1>
        </header>
