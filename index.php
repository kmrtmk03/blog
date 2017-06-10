    <!-- ヘッダー読み込み -->
    <?php get_header(); ?>
        <!-- メイン -->
        <section class="index-main">
            <!-- コンテンツ -->
            <main class="index-left">
                <!-- 記事 -->
                <div class="index-article-wrap">
                    <?php if(have_posts()): while(have_posts()): the_post(); ?>
                        <!-- 記事個別 -->
                        <article class="index-article" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/shousai.svg)">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                <!-- 記事サムネイル -->
                                <!-- サムネイルの比率は16:9で固定 -->
                                <img class="index-article-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/test.jpg" alt="">
                                <!-- 記事タイトル -->
                                <h3 class="index-article-title"><?php the_title(); ?></h3>
                                <!-- 記事本文（抜粋) -->
                                <div class="index-article-content">
                                    <?php the_excerpt(); ?>
                                </div>
                                <!-- 記事カテゴリー -->
                                <?php
                                    /* カテゴリーを取得 */
                                    $articleCategory = get_the_category();
                                ?>
                                <p class="index-article-category"><?php echo $articleCategory[0]->name; ?></p>
                                <!-- 記事日付 -->
                                <p class="index-article-date"><?php echo get_the_date(); ?></p>
                            </a>
                        </article>
                    <?php endwhile; endif; ?>
                </div>

                <!-- ページネーション -->
                <div class="page-nav-wrap">
                    <?php
                        echo paginate_links(array(
                                'type' => 'link',
                                'prev_text' => '前へ',
                                'next_text' => '次へ',
                                'end-size' => '1',
                                'mid-size' => '1',
                            )
                        )
                    ?>
                </div>
                <!-- <div class="page-nav-wrap">
                    <ul class="page-nav">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">…</a></li>
                        <li><a href="#">8</a></li>
                        <li><a href="#">次へ</a></li>
                    </ul>
                </div> -->
            </main>
            <!-- サイドバー読み込み -->
            <?php get_sidebar(); ?>
        </section>
    <!-- フッター読み込み -->
    <?php get_footer(); ?>
