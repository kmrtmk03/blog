<div class="comments_area">
    <ul class="leave-comment">
        <?php if(have_comments()): ?>
            <?php wp_list_comments('avatar_size=48'); ?>
        <?php endif; ?>
    </div>
    <div class="send-comment">
        <?php $args = array(
            'title_reply' => 'コメントする',
            'label_submit' => '送信',
            'comment_notes_before' => '<p class="commentNotesBefore">入力エリアすべてが必須項目です。<br>メールアドレスが公開されることはありません。</p>',
            'comment_notes_after'  => '<p class="commentNotesAfter">内容をご確認の上、送信してください。</p>',
            'fields' => array(
                'author' => '<p class="comment-form-author">' .
                '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' placeholder="名前を入力してください" /></p>',
                'email'  => '<p class="comment-form-email">' .
                '<input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . 'placeholder="メールアドレスを入力してください" /></p>',
                'url'    => '',
            ),
            'comment_field' => '<p class="comment-form-comment">' . '<textarea id="comment" name="comment" cols="50" rows="6" aria-required="true"' . $aria_req . ' placeholder="コメント" /></textarea></p>',
        );
        comment_form( $args ); ?>
    </div>
</div>
