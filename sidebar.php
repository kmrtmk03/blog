<!-- サイドバー -->
<div class="l-right">
    <div class="sidebar">
        <!-- 新着記事 -->
        <section class="sidebar-section">
            <h2 class="sidebar-midashi"><i class="fa fa-newspaper-o" aria-hidden="true"></i>新着記事</h2>
            <?php
                $postArray = array(
                    'posts_per_page'=>5, 'order'=>'DESC', 'orderby'=>'date'
                );
                $newpostQuery = new WP_Query($postArray);
                if($newpostQuery->have_posts()):
            ?>
            <ul class="newarticle-list-parent">
                <?php while($newpostQuery->have_posts()): $newpostQuery->the_post(); ?>
                    <li class="newarticle-list-child"><a href="<? the_permalink(); ?>" title="<? the_title_attribute(); ?>"><? the_title(); ?></a></li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>
        </section>
        <!-- カテゴリー -->
        <section class="sidebar-section">
            <h2 class="sidebar-midashi"><i class="fa fa-folder" aria-hidden="true"></i>カテゴリー</h2>
            <ul class="newarticle-list-parent">
                <?php
                    $showCategory = array(
                        'title_li' => null,
                        'show_count' => '0',
                    );
                    wp_list_categories($showCategory);
                 ?>
            </ul>
        </section>
        <!-- 検索フォーム -->
        <section class="sidebar-section">
            <h2 class="sidebar-midashi"><i class="fa fa-search" aria-hidden="true"></i>サイト内検索</h2>
            <div class="sidebar-search">
                <?php get_search_form(); ?>
            </div>
        </section>
    </div>
</div>
