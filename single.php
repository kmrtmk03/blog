<!-- ヘッダー読み込みs -->
<?php get_header(); ?>

<?php get_template_part('pankuzu'); ?>

<!-- メインセクション -->
<section class="index-main singlepage">
    <!-- コンテンツ -->
    <main class="l-left">
        <!-- 記事ループ開始 -->
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <artcle class="article-main-wrap">
                <div class="article-main">
                    <div class="article-midashi">
                        <a class="article-date" href="#"><?php the_date(); ?></a>
                        <h1 class="article-title"><?php the_title(); ?></h1>
                        <div class="article-subtitle">
                            <!-- カテゴリー表示 -->
                            <?php category_list(); ?>
                            <?php show_tags(); ?>
                        </div>
                    </div>

                    <!-- タグを表示 -->

                    <div class="article-main-thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="article-main-content">
                        <?php the_content(); ?>
                    </div>
                    <!-- シェアボタン -->
                    <div class="single-share">
                        <a href="https://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>&amp;t=<?php urlencode(the_title()); ?>" class="single-facebook">Facebookでシェア</a>
                        <a href="http://twitter.com/intent/tweet?text=<?php echo urlencode(the_title("","",0)); ?>&amp;<?php echo urlencode(get_permalink()); ?>&amp;url=<?php echo urlencode(get_permalink()); ?>" class="single-twitter">Twitterでシェア</a>
                        <a class="single-line" href="http://line.me/R/msg/text/?<?php urlencode(the_title()); ?><?php echo urlencode(get_permalink()); ?>">LINEでシェア</a>
                    </div>
                </div>
                <!-- ページナビゲーション -->
                <ul class="single-move">
                    <li><?php next_post_link('%link'); ?></li>
                    <li><a href="<?php echo home_url(); ?>" class="Margin-Left4 Margin-Right4"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li><?php previous_post_link('%link'); ?></li>
                </ul>
            </artcle>
        <!-- 記事ループ終了 -->
        <?php endwhile; endif; ?>
    </main>
    <!-- サイドバー読み込み -->
    <?php get_sidebar(); ?>
</section>
<!-- フッター読み込み -->
<?php get_footer(); ?>
