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
        <div class="row g-5" data-masonry="{&quot;percentPosition&quot;: true }">

            <!--loop-->
            <?php
            // WP_Query の引数を設定
            $args = [
              'post_type' => 'blog', // 投稿タイプを指定
              'posts_per_page' => 12, // 1ページに表示する投稿数を指定
            ];
            // WP_Query を実行
            $query = new WP_Query($args);

            // ループ処理
            if ($query->have_posts()):
              while ($query->have_posts()):
                $query->the_post(); ?>
                    <div class="col-sm col-md-6 col-lg-4 smaller mb-5" style="position: absolute; left: 0%; top: 0px;">
                        <div class="card">
                            <div class="mb-3"><?php the_post_thumbnail(); ?></div>

                            <ul class="d-flex flex-row smaller fw-light p-0 m-0 mb-2">
                                <li class="pe-3"><?php the_date('Y-n-j'); ?></li>
                                <li><?php the_category(', '); ?></li>
                            </ul>
                            <h2 class="fs-5 fw-light mb-3"><a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?></a>
                            </h2>
                        </div>
                    </div>
            <?php
              endwhile;
            endif;
            // 投稿データをリセット
            wp_reset_postdata();
            ?>

        </div>
        <!--category-->
        <div class="col mx-auto bg-light p-3 p-md-5 my-5">
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
