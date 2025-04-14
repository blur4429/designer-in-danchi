<?php
get_header();

$page_title = get_the_title();

switch ($page_title) {
    case 'Top':
        include(locate_template('index.php'));
            break;
    case 'About':
        $bg = 'bg-pink';
        $list = '<li class="col-auto"><a class="me-1" href="#profile">⚫︎&nbsp;Profile</a></li>
            <li class="col-auto"><a class="me-1" href="#skills">⚫︎&nbsp;Skills</a></li>';
            include(locate_template('template-parts/second_layer.php'));
            break;
    case 'Works':
        $bg = 'bg-blue';
        $list = ' <li class="col-auto"><a class="me-1" href="#web">⚫︎&nbsp;Web sites</a></li>
            <li class="col-auto"> <a class="me-1" href="#lp">⚫︎&nbsp;Landing page</a></li>
            <li class="col-auto"> <a class="me-1" href="#banners">⚫︎&nbsp;Banners</a></li>
            <li class="col-auto"><a class="" href="#others">⚫︎&nbsp;Others</a></li>';
            include(locate_template('template-parts/second_layer.php'));
        break;
    case 'Contact' || 'thanks':
        $bg = 'bg-green';
        include(locate_template('template-parts/second_layer.php'));
        break;
    default:
        // それ以外のタイトルの場合
        break;
}

get_footer();
?>