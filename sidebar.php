<!-- サイドバー -->
<section class="index-right">
    <div class="sidebar">
        <!-- リンク -->
        <div class="sidebar-link-wrap">
            <h2 class="sidebar-midashi">LINK</h2>
            <a class="sidebar-link sidebar-facebook" href="<?php the_author_meta('facebook'); ?>" target="_blank">Facebook</a>
            <a class="sidebar-link sidebar-twitter" href="<?php the_author_meta('twitter'); ?>" target="_blank">Twitter</a>
            <a class="sidebar-link sidebar-github" href="<?php the_author_meta('github'); ?>" target="_blank">Github</a>
        </div>
        <!-- 新着記事 -->
        <div class="newarticle-wrap">
            <h2 class="sidebar-midashi">NEW</h2>
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
        </div>
        <!-- カテゴリー -->
        <div class="newarticle-wrap">
            <h2 class="sidebar-midashi">CATEGORY</h2>
            <ul class="newarticle-list-parent">
                <?php
                    $showCategory = array(
                        'title_li' => null,
                        'show_count' => '1',
                    );
                    wp_list_categories($showCategory);
                 ?>
            </ul>
        </div>
    </div>
</section>
