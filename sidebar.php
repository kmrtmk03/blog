<!-- サイドバー -->
<div class="l-right">
    <div class="sidebar">

        <!-- 検索フォーム -->
        <section class="sidebar-section">
            <h2 class="sidebar-midashi"><i class="fa fa-search" aria-hidden="true"></i>サイト内検索</h2>
            <div class="sidebar-search">
                <?php get_search_form(); ?>
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

        <!-- Twitter埋め込み -->
        <section class="sidebar-section">
            <h2 class="sidebar-midashi"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</h2>
            <a class="twitter-timeline" href="https://twitter.com/kmrtmk03" data-width="100%" data-tweet-limit="3" data-chrome="noheader nofooter">Tweets by kmrtmk03</a>
        </section>

        <!-- Instagram埋め込み -->
        <!-- アクセストークン 484075400.7e8de22.b26ed292a67a4078aa27aa1f1163fb20 -->
        <!-- JSONのURL https://api.instagram.com/v1/users/self/media/recent/?access_token=484075400.7e8de22.b26ed292a67a4078aa27aa1f1163fb20 -->
        <section class="sidebar-section sidebar-instagram">
                <h2 class="sidebar-midashi"><i class="fa fa-instagram" aria-hidden="true"></i>Instagram</h2>
                <div class="sidebar-instagram-album">
                    <?php sidebar_Instagram(); ?>
                </div>
        </section>

    </div>
</div>
