<!-- サイドバー -->
<div class="l-right">
    <div class="sidebar">
        <!-- プロフィール -->
        <section class="sidebar-section">
            <h2 class="sidebar-midashi">プロフィール</h2>
            <div class="sidebar-prof">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/prof.jpg" alt="" class="prof-img">
                <p class="prof-name"><?php the_author_meta('prof-name'); ?></p>
                <p class="prof-moji">和歌山出身。1993年生まれ。<br>フロントエンドエンジニアをしています。</p>
                <a class="prof-link" href="https://kmrtmk03.sakura.ne.jp/pt/" target="_blank">ポートフォリオサイト</a>
                <div class="prof-sns">
                    <a class="footer-link footer-facebook" href="<?php the_author_meta('facebook'); ?>" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                    <a class="footer-link footer-instagram" href="<?php the_author_meta('instagram'); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a class="footer-link footer-github" href="<?php the_author_meta('github'); ?>" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
                </div>
            </div>
        </section>
        <!-- 新着記事 -->
        <section class="sidebar-section">
            <h2 class="sidebar-midashi">新着記事</h2>
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
            <h2 class="sidebar-midashi">カテゴリー</h2>
            <ul class="newarticle-list-parent">
                <?php
                    $showCategory = array(
                        'title_li' => null,
                        'show_count' => '1',
                    );
                    wp_list_categories($showCategory);
                 ?>
            </ul>
        </section>
        <!-- 検索フォーム -->
        <section class="sidebar-section">
            <h2 class="sidebar-midashi">サイト内検索</h2>
            <div class="sidebar-search">
                <?php get_search_form(); ?>
            </div>
        </section>
    </div>
</div>
