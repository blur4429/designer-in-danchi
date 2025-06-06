<?php $url = get_template_directory_uri(); ?>

<main>

    <div class="container pagetitle">

        <?php
        $page_title = get_the_title();

        switch ($page_title) {

            case 'WORKS':
                $title = $url . '/img/works.svg';
        break;
            case 'CONTACT':
                $title = $url . '/img/contact.svg';
        break;
               case 'BLOG':
                $title = $url . '/img/blog.svg';
        break;
            case 'THANKS':
                $title = $url . '/img/thanks.svg';
        break;
        default:
        // それ以外のタイトルの場合
        break;
        }?>


        <h1 class="text-center"><img src="<?php echo $title;?>" alt="<?php echo $page_title ?>">
        </h1>
        <ul class="row row-cols-2 row-cols-md-4 justify-content-center poppins s-bold m-0 p-0">
            <?php echo $list;?>
        </ul>
    </div>
    <!--breadcrumb-->
    <?php include(get_template_directory() . '/template-parts/breadcrumb.php'); ?>


    <!--content-->
    <?php
    while (have_posts()) : the_post();
    the_content(); // コンテンツを表示
    endwhile;?>

</main>