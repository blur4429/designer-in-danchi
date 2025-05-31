<?php 
get_header();
$url = get_template_directory_uri();
?>
<!--blogの投稿一覧ページ-->
<main class="archive-blog">
    <div class="pagetitle">
        <h1 class="poppins s-bold me-4 mb-2 mb-md-1"><img src="<?php echo $url;?>/img/blog.svg" alt="blog"></h1>
    </div>
    <!--breadcrumb-->
    <?php include(get_template_directory() . '/template-parts/breadcrumb.php'); ?>

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
                        <span class="new">New</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        <span><?php the_date('Y-n-j'); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="blog-cat">#<?php the_category(', '); ?></span>
                    </p>
                    <h2 class=" fs-4 fw-light mb-3"><a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?></a>
                    </h2>
                </div>
            </div>
            <!--right-->
            <div class="col">
                <div class="thumb mb-3"><?php the_post_thumbnail(); ?></div>
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
    <section class="container overflow-hidden blog-previous pt-5">
        <div class="row gx-5" data-masonry="{&quot;percentPosition&quot;: true }">
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
                <div class="card">
                    <div class="mb-3"><?php the_post_thumbnail(); ?></div>
                    <ul class="d-flex flex-row smaller fw-light p-0 m-0 mb-2">
                        <li class="pe-3"><?php the_date('Y-n-j'); ?></li>
                        <li class="blog-cat">#<?php the_category(', '); ?></li>
                    </ul>
                    <h2 class="fs-6 fw-light mb-3"><a href="<?php the_permalink(); ?>">
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
            <!--category-list-->
            <?php include(get_template_directory() . '/template-parts/category-list.php'); ?>
        </div>
    </section>
</main>

<?php get_footer();