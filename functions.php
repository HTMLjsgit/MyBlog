<?php add_theme_support("menus") ?>
<?php add_theme_support('post-thumbnails'); ?>
<?php 
    function widget_sidebar_init(){
        register_sidebar(array(
            'name' => "Sidebar",
            'id' => 'side-widget',
            'before_widget' => '
            <div id="%1$s" class="sidebar-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h5 class="sidebar-title">',
            'after_title' => '</h5>'
        ));
    }
    function widget_sidebar_init2(){
        register_sidebar(array(
            'name' => "Profile",
            'id' => 'side-widget2',
            'before_widget' => '
            <div id="%1$s" class="sidebar-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h5 class="sidebar-title">',
            'after_title' => '</h5>'
        ));     
    }
    function comment_input_change_order($fields){
        $email_comment_field = $fields['email'];
        unset($fields['email']);
        $fields['email']  = $email_comment_field;
        // コメント

        //　メール
        $comment_field = $fields['comment'];
        unset($fields['comment']);
        $fields['comment'] = $comment_field;
        return $fields;
    }

    function custom_comment_form($args, $user_identity) {
        $args['comment_notes_before'] = ''; //コメントタイトルの後に表示されるテキスト
        $args['comment_notes_after'] =  ''; //コメント欄の後に表示されるデフォルトでは大体非表示のテキスト
      return $args;
    }
    //フリースペース
    function change_excerpt_length($length){
        return 50;
    }
    function change_more_text($more){
        return '...';
    }

    // add_filter('comment_form_defaults', 'custom_comment_form');
    add_action('widgets_init', 'widget_sidebar_init');
    add_filter('comment_form_fields', 'comment_input_change_order');
    add_action('widgets_init', 'widget_sidebar_init2');
    add_filter('excerpt_length', 'change_excerpt_length', 999);
    add_filter('excerpt_more', 'change_more_text');
?>