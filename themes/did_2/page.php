<?php $url = get_template_directory_uri(); 

get_header();

$page_title = get_the_title();

switch ($page_title) {
    case 'top':
        include(locate_template('index.php'));
            break;
    
    case 'WORKS':
        $list = ' <li class="col p-2 p-md-0"><a class="me-1" href="#web">WEB</a></li>
<li class="col p-2 p-md-0"> <a class="me-1" href="#lp">LANDING PAGE</a></li>
<li class="col p-2 p-md-0"> <a class="me-1" href="#banners">BANNERS</a></li>
<li class="col p-2 p-md-0"><a class="me-1" href="#other">OTHER</a></li>';
include(locate_template('template-parts/second_layer.php'));
break;
case 'CONTACT' || 'THANKS':

include(locate_template('template-parts/second_layer.php'));
break;
default:
// それ以外のタイトルの場合
break;
}

get_footer();
?>