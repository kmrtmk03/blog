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
        return 120;
    }
    add_filter('excerpt_mblength', 'myLength');

    // 投稿だけを検索対象とする
    function my_search_condition($search) {
    	$search .= " AND (post_type = 'post' OR post_type = 'custompost')";
    	return $search;
    }
    add_filter('posts_search','my_search_condition');


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
