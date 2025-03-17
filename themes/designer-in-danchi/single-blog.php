<?php get_header();
$url = get_template_directory_uri();
?>

<main>
    <div class="pagetitle container-fluid d-md-flex flex-md-wrap align-items-end px-3 px-lg-5 pb-3 bg-blue3">
        <h1 class="me-4 mb-2 mb-md-1">Blog</h1>
    </div>
    <!--breadcrumb-->
    <div class="container breadcrumb fw-light p-2 mt-5">
        <?php if (function_exists('custom_breadcrumb')) {
          custom_breadcrumb();
        } ?>
    </div>

    <section class="container">

        <div class="row">
            <div class="col col-lg-10 mx-auto mb-5">

                <?php while (have_posts()):
                  the_post(); ?>
                    <ul class="d-flex flex-row smaller fw-light p-0 m-0 mb-2">
                        <li class="pe-3"><?php the_date('Y-n-j'); ?></li>
                        <li><?php the_category(', '); ?></li>
                    </ul>
                    <h2 class="fs-2 fw-light p-0 m-0 mb-5"><?php the_title(); ?></h2>

                    <?php
                    if (has_post_thumbnail()): ?>
                        <div class="post-thumbnail mb-5">
                            <?php the_post_thumbnail(); ?>
                        </div>
                <?php endif;
                    the_content();

                endwhile; ?>

            </div>
            </div>
          <!--category-->
          <div class="col col-lg-10 mx-auto bg-light p-3 p-md-5 my-5">
            
                <h3 class="text-center mb-4">Category</h3>
                <ul class="row row-cols-2 row-cols-md-4 category d-lg-flex justify-content-center text-center fw-light">
                    <?php wp_list_categories([
                      'taxonomy' => 'category', // カテゴリータクソノミーを指定
                      'show_count' => 1, // 投稿数を表示
                      'title_li' => '', // タイトルを非表示
                    ]); ?>
                </ul>
            </div>
    </section>
</main>

<?php get_footer();
