<?php get_header(); ?>

<div class="index-main">

    <div class="l-left">
        <div class="search-result">
            <h2 class="search-midashi">『<span class="search-word"><?php echo get_search_query(); ?></span>』での検索結果一覧</h2>
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>
                    <h3 class="search-result-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php the_excerpt(); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <p>検索条件にヒットした記事はありませんでした。</p>
            <?php endif; ?>
        </div>
    </div>


    <?php get_sidebar(); ?>
</div>


<?php get_footer(); ?>
