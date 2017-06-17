<!DOCTYPE html>
<html>
    <head>
        <meta name="google-site-verification" content="H016rxPRztqni50_Dr7hGH5Vbw3FTCLLiCFH4txZf4o" />
        <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="キムラトモキ">
        <meta name="keywords" content="web制作, HTML, CSS, JavaScript, PHP, WordPress, デザイン, カメラ, IoT">
        <!-- metaタグ-description -->
        <?php echo_meta_description_tag(); ?>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
        <script src="https://use.fontawesome.com/df5c304689.js"></script>
        <?php wp_head(); ?>
    </head>
    <body>
        <!-- ヘッダー -->
        <header>
            <!-- ロゴ -->
            <h2>
                <a href="<?php echo esc_url(home_url()); ?>">
                    <img class="header-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="">
                </a>
            </h2>
            <div class="show-nav"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<?php wp_nav_menu( array( 'menu_class' => 'nav-menu', 'container' => false ) ); ?>
        </header>
