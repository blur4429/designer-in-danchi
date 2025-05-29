<?php get_header();
$url = get_template_directory_uri();
?>

<main>
    <div class="pagetitle container-fluid d-md-flex flex-md-wrap align-items-end px-3 px-lg-5 pb-3 bg-blue3">
        <h1 id="fade-title" class="me-4 mb-2 mb-md-1">Blog</h1>
    </div>
    <!--breadcrumb-->
    <div class="container breadcrumb fw-light p-2 mt-5">
        <?php if (function_exists('custom_breadcrumb')) {
      custom_breadcrumb();
    } ?>
    </div>

    <!--最新の投稿-->
    <section class="container">
        <div class="row row-cols-1 row-cols-lg-2 p-2 mb-5">

            <?php
      $args_latest = [
        'post_type' => 'blog',
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'DESC',
      ];
      $query_latest = new WP_Query($args_latest);

      if ($query_latest->have_posts()):
        while ($query_latest->have_posts()):
          $query_latest->the_post();
          // 最新の投稿を表示
          ?>
            <!--left-->
            <div class="col h-auto d-flex align-items-center ps-3 ps-lg-5">
                <div>
                    <p class="fw-light mb-3">
                        <span class="blue3">New</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        <span><?php the_date('Y-n-j'); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="blog-cat">#<?php the_category(', '); ?></span>
                    </p>
                    <h2 class=" fs-5 fw-light mb-3"><a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?></a>
                    </h2>
                </div>
            </div>
            <!--right-->
            <div class="col">
                <div class="mb-3"><?php the_post_thumbnail(); ?></div>
            </div>

            <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
        </div>
        <!--//row-->
    </section>
    <hr>

    <!--最新以外の投稿-->
    <section class="container pt-5">
        <div class="row" data-masonry="{&quot;percentPosition&quot;: true }">
            <?php
      $args_others = [
        'post_type' => 'blog',
        'posts_per_page' => 10,
        'offset' => 1,
        'orderby' => 'date',
        'order' => 'DESC',
      ];
      $query_others = new WP_Query($args_others);

      if ($query_others->have_posts()):
        while ($query_others->have_posts()):
          $query_others->the_post();
          ?>

            <div class="col-sm col-md-6 col-lg-4 smaller mb-5">
                <div class="card px-3">
                    <div class="mb-3"><?php the_post_thumbnail(); ?></div>
                    <ul class="d-flex flex-row smaller fw-light p-0 m-0 mb-2">
                        <li class="pe-3"><?php the_date('Y-n-j'); ?></li>
                        <li class="blog-cat">#<?php the_category(', '); ?></li>
                    </ul>
                    <h2 class="fs-5 fw-light mb-3"><a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?></a>
                    </h2>
                </div>
            </div>

            <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
        </div>
        <!--//row-->
    </section>

    <section class="container">
        <div class="row">
            <!--category-->
            <div class="col mx-auto bg-light rounded p-3 p-md-5 my-5">
                <?php include(get_template_directory() . '/template-parts/category.php'); ?>

            </div>
        </div>
    </section>
</main>

<?php get_footer();