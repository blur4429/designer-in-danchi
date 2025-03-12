<?php
//テーマのセットアップ
// HTML5でマークアップさせる
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
// Feedのリンクを自動で生成する
add_theme_support('automatic-feed-links');
//アイキャッチ画像を使用する設定
add_theme_support('post-thumbnails');


//googleフォント読み込み
function myTheme_enqueue_googleFont()
{

  echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . PHP_EOL;

  echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . PHP_EOL;

  echo '<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;600;700;800;900&family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,200&display=swap" rel="stylesheet">' . PHP_EOL;
  //Noto Sans JP + アイコン

}
add_action('wp_enqueue_scripts', 'myTheme_enqueue_googleFont');


//CSS/JSファイル読み込み
function myTheme_enqueue_style_script()
{

  //css読み込み
  wp_enqueue_style('main_style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'myTheme_enqueue_style_script');

function add_page_id_column($columns)
{
  $columns['page_id'] = 'ID';
  return $columns;
}
add_filter('manage_pages_columns', 'add_page_id_column');

function display_page_id($column, $post_id)
{
  if ($column == 'page_id') {
    echo $post_id;
  }
}
add_action('manage_pages_custom_column', 'display_page_id', 10, 2);


//自動整形を無効化
function my_remove_wpautop()
{
  remove_filter('the_content', 'wpautop');
}
add_action('init', 'my_remove_wpautop');

//カスタム投稿タイプ「LP」でのみ自動的に<p>や<br>タグ削除

function my_pre_wpautop($content)
{
  if (is_singular('LP')) { // カスタム投稿タイプ「LP」の場合
    remove_filter('the_content', 'wpautop');
  }
  return $content;
}
add_filter('the_content', 'my_pre_wpautop', 0);

