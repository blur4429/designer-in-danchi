<?php
//テーマのセットアップ
function my_theme_setup()
{
  // HTML5でマークアップさせる
  add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
  // Feedのリンクを自動で生成する
  add_theme_support('automatic-feed-links');
  //アイキャッチ画像を使用する設定
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_setup');

//googleフォント読み込み
function myTheme_enqueue_googleFont()
{
  wp_enqueue_style(
    'google-fonts',
    'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;600;700;800;900&family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,200&display=swap',
    [],
    null
  );
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

// 自動整形を無効化
function my_remove_wpautop()
{
  remove_filter('the_content', 'wpautop');
  remove_filter('the_excerpt', 'wpautop'); // 抜粋の自動整形も無効化する場合
}
add_action('init', 'my_remove_wpautop');

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
  } elseif (is_category()) {
    echo '<li class="sl"><a href="' . esc_url($home_url . 'blog') . '">blog</a></li>';
    echo '<li># ' . esc_html(single_cat_title('', false)) . '</li>';
  }

  echo '</ul>';
}

//カテゴリーアーカイブページのURLをリライト
function custom_category_rewrite_rules($wp_rewrite) {
  $rules = array();
  $categories = get_categories(array('hide_empty' => false));
  foreach ($categories as $category) {
    $rules['blog-cat/' . $category->slug . '/?$' ] = 'index.php?category_name=' . $category->slug;
  }
  $wp_rewrite->rules = array_merge($rules, $wp_rewrite->rules);
}
add_action('generate_rewrite_rules', 'custom_category_rewrite_rules');

function custom_category_link($link, $term_id, $taxonomy) {
  if ($taxonomy === 'category') {
    $category = get_term($term_id, $taxonomy);
    $link = str_replace('/category/', '/blog-cat/', $link);
  }
  return $link;
}
add_filter('term_link', 'custom_category_link', 10, 3);

function custom_category_query_vars($public_query_vars) {
  $public_query_vars[] = 'category_name';
  return $public_query_vars;
}
add_filter('query_vars', 'custom_category_query_vars');

//blog投稿をテキストエディタにする
function disable_visual_editor_custom_post_type($settings, $post) {
  if ($post->post_type == 'blog') { // カスタム投稿タイプ名を指定
      $settings['tinymce'] = false; // ビジュアルエディタを無効化
      $settings['quicktags'] = true; // テキストエディタを有効化
      $settings['media_buttons'] = false; // メディアボタンを無効化（必要に応じて）
  }
  return $settings;
}
add_filter('wp_editor_settings', 'disable_visual_editor_custom_post_type', 10, 2);

//250513

function add_module_attribute($tag, $handle, $src) {
    $module_scripts = array(
        'onscroll-typography-index2-main',
        'onscroll-typography-index2-other',
        'onscroll-typography-test',
    );
    if (in_array($handle, $module_scripts)) {
        $tag = '<script type="module" src="' . esc_url($src) . '" id="' . esc_attr($handle) . '-js"></script>';
    }
    return $tag;
}
add_filter('script_loader_tag', 'add_module_attribute', 10, 3);


function my_theme_enqueue_scripts() {

    // JS ファイルを読み込む (import される可能性のあるものを先に)
    wp_enqueue_script( 'onscroll-typography-index2-main', get_template_directory_uri() . '/js/index2.a6ee105b.js', array(), '1.0', true );
    wp_enqueue_script( 'onscroll-typography-index2-other', get_template_directory_uri() . '/js/index2.f3cc60fa.js', array('onscroll-typography-index2-main'), '1.0', true );
    wp_enqueue_script( 'onscroll-typography-test', get_template_directory_uri() . '/js/test.e9a2d1b4.js', array('onscroll-typography-index2-main'), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts' );