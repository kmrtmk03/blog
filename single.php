<?php get_header(); ?>

<section class="index-main singlepage">
    <!-- コンテンツ -->
    <main class="l-left">
        <!-- 記事 -->
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <artcle class="article-main-wrap">
                <div class="article-main">
                    <div class="article-main-sub">
                        <a class="article-main-date" href="#"><?php the_date(); ?></a>
                        <a class="article-main-category" href="#"><i class="fa fa-folder icon-awesome" aria-hidden="true"></i><?php the_category(); ?></a>
                    </div>
                    <h2 class="article-main-title"><?php the_title(); ?></h2>
                    <div class="article-main-thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="article-main-content">
                        <?php the_content(); ?>
                    </div>


                    <div class="single-share">
                        <a href="https://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>&amp;t=<?php urlencode(the_title()); ?>" class="single-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="http://twitter.com/intent/tweet?text=<?php echo urlencode(the_title("","",0)); ?>&amp;<?php echo urlencode(get_permalink()); ?>&amp;url=<?php echo urlencode(get_permalink()); ?>" class="single-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </div>


                </div>
                <div class="single-move">
                    <?php next_post_link('%link','新しい記事'); ?>
                    <a href="<?php echo home_url(); ?>" class="Margin-Left4 Margin-Right4">ホーム</a>
                    <?php previous_post_link('%link','古い記事'); ?>
                </div>
            </artcle>

        <?php endwhile; endif; ?>


    </main>
    <?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>
