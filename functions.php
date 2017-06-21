<?php
    // 投稿にサムネイル追加
    add_theme_support('post-thumbnails');

    // ユーザープロフィールの項目のカスタマイズ
    function custom_user_profile($wb) {
        $wb['gaiyou'] = 'このブログの概要';
        $wb['keyword-1'] = 'キーワード_1';
        $wb['keyword-2'] = 'キーワード_2';
        $wb['keyword-3'] = 'キーワード_3';
        $wb['keyword-4'] = 'キーワード_4';
        $wb['keyword-5'] = 'キーワード_5';
        $wb['prof-name'] = 'プロフィールでの表示名';
        $wb['one-comment'] = '一言';
        $wb['portfolio'] = 'ポートフォリオサイト';
        $wb['facebook'] = 'Facebook';
        $wb['instagram'] = 'Instagram';
        $wb['github'] = 'Github';

        return $wb;
    }
    add_filter('user_contactmethods', 'custom_user_profile', 10, 1);

    // 概要の文章の表示文字数を指定
    function myLength($length) {
        return 200;
    }
    add_filter('excerpt_mblength', 'myLength');

    //metaタグ - descriptionの出力
    function get_meta_description() {
      global $post;
      $description = "";
      if ( is_home() ) {
        // ホームでは、ブログの説明文を取得
        $description = get_bloginfo( 'description' );
      }
      elseif ( is_category() ) {
        // カテゴリーページでは、カテゴリーの説明文を取得
        $description = category_description();
      }
      elseif ( is_single() ) {
        if ($post->post_excerpt) {
          // 記事ページでは、記事本文から抜粋を取得
          $description = $post->post_excerpt;
        } else {
          // post_excerpt で取れない時は、自力で記事の冒頭100文字を抜粋して取得
          $description = strip_tags($post->post_content);
          $description = str_replace("\n", "", $description);
          $description = str_replace("\r", "", $description);
          $description = mb_substr($description, 0, 100) . "...";
        }
      } else {
        ;
      }
      return $description;
    }
    // metaタグを出力
    function echo_meta_description_tag() {
      if ( is_home() || is_category() || is_single() ) {
        echo '<meta name="description" content="' . get_meta_description() . '" />' . "\n";
      }
    }

    //カテゴリー取得
    function category_list() {
        $cats = get_the_category();
        foreach($cats as $cat) {
            echo '<a href="'.get_category_link($cat->term_id).'" ';
            echo 'class="article-main-category"><i class="fa fa-folder icon-awesome" aria-hidden="true"></i>';
            echo esc_html($cat->name);
            echo '</a>';
        }
    }

    //タグを表示
    function show_tags() {
        $tags = get_the_tags();
        foreach ($tags as $tag) {
            echo '<a href="'.get_tag_link($tag->term_id).'"><i class="fa fa-tag icon-awesome" aria-hidden="true"></i>'.$tag->name.'</a>';
        }
    }

    // ページネーション
    function pagenate() {
        echo paginate_links(array(
                'type' => 'link',
                'prev_text' => '前へ',
                'next_text' => '次へ',
                'end-size' => '1',
                'mid-size' => '1',
            )
        );
    }

    // 続きを読む
    function remove_more_jump_link($link) {
        $offset = strpos($link, '#more-');

        if ($offset) {
            $end = strpos($link, '"',$offset);
        }
        if ($end) {
            $link = substr_replace($link, '', $offset, $end-$offset);
        }

        return $link;
    }
    add_filter('the_content_more_link', 'remove_more_jump_link');


    // JSの読み込み
    function add_script_nav() {
        wp_enqueue_script( 'script-nav', get_stylesheet_directory_uri() . '/js/nav.js', array( 'jquery' ), '', true);
    }
    add_action('wp_enqueue_scripts', 'add_script_nav');

    // CSSの読み込み
    function add_css_main() {
        wp_enqueue_style('style-main', get_template_directory_uri().'/style.css', '', '20170621');
    }
    add_action('wp_enqueue_scripts', 'add_css_main');
