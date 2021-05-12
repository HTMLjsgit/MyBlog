<?php 
    if(comments_open()):
        $args = array(
            'type' => 'all',
            'reply_text' => "返信",
            'per_page' => '10',
            'avatar_size' => 32,
            'format' => 'html5'
        )
?>
    <div id="comments">
            <?php comment_form(); ?>
            <?php if (have_comments()): ?>
                <div class="comments-list">
                    <?php wp_list_comments($args); ?>
                </div>
            <?php endif; ?>
    </div>
<?php endif; ?>