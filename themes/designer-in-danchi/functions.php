<?php
//テーマのセットアップ
// HTML5でマークアップさせる
add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
// Feedのリンクを自動で生成する
add_theme_support('automatic-feed-links');
//アイキャッチ画像を使用する設定
add_theme_support('post-thumbnails');

//googleフォント読み込み
function myTheme_enqueue_googleFont()
{
  echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . PHP_EOL;

  echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . PHP_EOL;

  echo '<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;600;700;800;900&family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,200&display=swap" rel="stylesheet">' .
    PHP_EOL;
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
  if (is_singular('LP')) {
    // カスタム投稿タイプ「LP」の場合
    remove_filter('the_content', 'wpautop');
  }
  return $content;
}
add_filter('the_content', 'my_pre_wpautop', 0);

//カテゴリーの追加
function add_blog_categories()
{
  register_taxonomy_for_object_type('category', 'blog');
}
add_action('init', 'add_blog_categories');

//タグの追加
function add_blog_tags()
{
  register_taxonomy_for_object_type('post_tag', 'blog');
}
add_action('init', 'add_blog_tags');

//アイキャッチ画像サポート
function setup_blog_theme()
{
  add_theme_support('post-thumbnails');
  add_post_type_support('blog', 'thumbnail'); // カスタム投稿タイプ 'blog' にアイキャッチ画像のサポートを追加
}
add_action('after_setup_theme', 'setup_blog_theme');

//カッコを非表示にする
function custom_list_categories_output($output, $args)
{
  if (isset($args['show_count']) && $args['show_count']) {
    $output = preg_replace('/\s*\((\d+)\)/', ' $1', $output);
  }
  return $output;
}
add_filter('wp_list_categories', 'custom_list_categories_output', 10, 2);

// パンくずリスト
function custom_breadcrumb()
{
  $home_url = home_url('/');
  echo '<ul class="breadcrumb fw-light p-2">';
  echo '<li class="sl"><a href="' . esc_url($home_url) . '">TOP</a></li>';

  if (is_page()) {
    global $post;
    if ($post->post_parent) {
      $parent_id = $post->post_parent;
      $breadcrumbs = [];
      while ($parent_id) {
        $page = get_post($parent_id); // get_post に変更
        $breadcrumbs[] =
          '<li class="sl"><a href="' .
          esc_url(get_permalink($page->ID)) .
          '">' .
          esc_html(get_the_title($page->ID)) .
          '</a></li>';
        $parent_id = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      foreach ($breadcrumbs as $crumb) {
        echo $crumb;
      }
    }
    echo '<li>' . esc_html(get_the_title()) . '</li>';
  } elseif (is_post_type_archive('blog')) {
    //blogアーカイブページ
    echo '<li>blog</li>';
  } elseif (is_singular() && get_post_type() === 'blog') {
    //blog個別ページ
    echo '<li class="sl"><a href="' . esc_url($home_url . 'blog') . '">blog</a></li>';
    if (is_singular()) {
      //個別ページ
      echo '<li>' . esc_html(get_the_date('Y-m-d')) . '</li>';
    }
  } elseif (is_404()) {
    echo '<li>404 Error</li>';
  } elseif (is_tag()) {
    echo '<li class="sl">Tag: ' . esc_html(single_tag_title('', false)) . '</li>';
  } elseif (is_author()) {
    echo '<li>著者: ' . esc_html(get_the_author()) . '</li>';
  } elseif (is_date()) {
    if (is_day()) {
      echo '<li class="sl">' . esc_html(get_the_time('Y-m-d')) . '</li>';
    } elseif (is_month()) {
      echo '<li class="sl">' . esc_html(get_the_time('Y-m')) . '</li>';
    } elseif (is_year()) {
      echo '<li class="sl">' . esc_html(get_the_time('Y')) . '</li>';
    }
  }

  echo '</ul>';
}
