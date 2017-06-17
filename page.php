<?php get_header(); ?>

<!-- メインセクション -->
<section class="index-main singlepage">
    <!-- コンテンツ -->
    <main class="l-left">
        <!-- 記事ループ開始 -->
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <artcle class="article-main-wrap">
                <div class="article-main">
                    <div class="article-midashi">
                        <h1 class="article-title"><?php the_title(); ?></h1>
                    </div>
                    <div class="article-main-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </artcle>
        <!-- 記事ループ終了 -->
        <?php endwhile; endif; ?>
    </main>
    <!-- サイドバー読み込み -->
    <?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>
