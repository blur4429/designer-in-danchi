<main>

    <div class="pagetitle container-fluid d-md-flex flex-md-wrap align-items-end px-3 px-lg-5 pb-3 <?php echo $bg;?>">
        <h1 id="fade-title" class="me-4 mb-2 mb-md-0"><?php echo $page_title;?></h1>
        <ul class="row align-items-end pb-2">
            <?php echo $list;?>
        </ul>
    </div>
    <!--breadcrumb-->
    <div class="container breadcrumb fw-light p-2 mt-5">
        <?php if (function_exists('custom_breadcrumb')) {
          custom_breadcrumb();
        } ?>
    </div>

    <!--content-->
    <?php
    while (have_posts()) : the_post();
    the_content(); // コンテンツを表示
    endwhile;?>

</main>