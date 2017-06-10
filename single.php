<?php get_header(); ?>

<section class="index-main singlepage">
    <!-- コンテンツ -->
    <main class="index-left">
        <!-- 記事 -->
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <artcle class="article-main-wrap">
                <div class="article-main">
                    <h2 class="article-main-title"><?php the_title(); ?></h2>
                    <div class="article-main-sub">
                        <a class="article-main-category" href="#"><?php the_category(); ?></a>
                        <a class="article-main-date" href="#"><?php the_date(); ?></a>
                    </div>
                    <div class="article-main-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </artcle>
        <?php endwhile; endif; ?>
    </main>
    <?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>
