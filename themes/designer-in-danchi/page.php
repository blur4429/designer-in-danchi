<?php
get_header();

$page_title = get_the_title();

if ($page_title == 'About') {
    include(locate_template('template-parts/about.php'));
} elseif ($page_title == 'Works') {
    include(locate_template('template-parts/works.php'));
} elseif ($page_title == 'Contact') {
    include(locate_template('template-parts/contact.php'));
} elseif ($page_title == 'thanks') {
    include(locate_template('template-parts/thanks.php'));
} else {
    // それ以外のタイトルの場合
    while (have_posts()) : the_post();
        the_content(); // コンテンツを表示
    endwhile;
}

get_footer();
