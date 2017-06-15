<!-- サイドバー -->
<div class="l-right">
    <div class="sidebar">
        <!-- プロフィール -->
        <section class="sidebar-section">
            <div class="sidebar-prof">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/prof.jpg" alt="" class="prof-img">
                <p class="prof-name"><?php the_author_meta('prof-name'); ?></p>
                <p class="prof-moji">1993年生まれ。<br>WEB制作が好きです</p>
                <div class="prof-link-wrap">
                    <a class="prof-link my-prof" href="<?php the_author_meta('portfolio'); ?>" target="_blank">ポートフォリオサイト</a>
                    <a class="prof-link sns-facebook" href="<?php the_author_meta('facebook'); ?>" target="_blank">Facebook</a>
                    <a class="prof-link sns-instagram" href="<?php the_author_meta('instagram'); ?>" target="_blank">Instagram</a>
                    <a class="prof-link sns-github" href="<?php the_author_meta('github'); ?>" target="_blank">Github</a>
                </div>
            </div>
        </section>
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
