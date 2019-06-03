<?php add_theme_support( 'post-thumbnails' ); ?>
<?php
// 記事の自動整形を無効化
remove_filter('the_content', 'wpautop');
// 抜粋の自動整形を無効化
remove_filter('the_excerpt', 'wpautop');

//記事ビュー数メタデータの作成・更新する関数
function setPostViews(){
    $post_id = get_the_ID();
    $custom_key = 'post_views_count';
    $view_count = get_post_meta($post_id,$custom_key,true);//現在のビュー数を取得
    //すでにメタデータがあるかどうかで処理を分ける
    if($view_count === ''){
        delete_post_meta($post_id,$custom_key);
        add_post_meta($post_id,$custom_key,'0');
    }else{
        $view_count++;
        update_post_meta($post_id,$custom_key,$view_count);
    }

}

//記事の自動保存無効化
function autosave_off() {
    wp_deregister_script('autosave');
  }
  add_action( 'wp_print_scripts', 'autosave_off' );
