<?php get_header(); ?>

<h1 class="category-tag-midashi"><span><i class="fa fa-folder icon-awesome" aria-hidden="true"></i><?php single_term_title(); ?></span>の記事</h1>
<section class="index-main">
    <main class="l-left">
        <div class="index-article-wrap">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <div class="index-article">
                    <!-- 見出し -->
                    <div class="article-midashi">
                        <span class="article-date"><?php echo get_the_date(); ?></span>
                        <h3 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="article-subtitle">
                            <?php category_list(); ?>
                            <?php show_tags(); ?>
                        </div>
                    </div>
                    <div class="article-content">
                        <!-- サムネイル（16:9で固定） -->
                        <div class="index-article-img"><?php the_post_thumbnail('null'); ?></div>
                        <!-- 本文（抜粋) -->
                        <div class="index-article-content"><?php the_content('続きを読む'); ?></div>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>
        <!-- ページネーション -->
        <div class="page-nav-wrap">
            <?php pagenate(); ?>
        </div>
    </main>
    <?php get_sidebar(); ?>
</section>


<?php get_footer(); ?>
