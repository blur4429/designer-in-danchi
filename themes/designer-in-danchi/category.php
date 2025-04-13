<?php get_header();
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

    <section class="container">
        <!--カテゴリ名-->
        <h1 class="fs-3 fw-light mb-5">Category:&nbsp;&nbsp;<?php single_term_title(); ?></h1>

        <div class="row" data-masonry="{&quot;percentPosition&quot;: true }">

            <?php
            $paged = get_query_var('paged') ?: 1;
            $category = get_queried_object();
            $args = array(
                'paged' => $paged,
                'posts_per_page' => 9,
                'post_status' => 'publish',
                'cat' => $category->term_id,
                'post_type' => 'blog', // 投稿タイプを明示的に指定
                'orderby' => 'date',
                'order' => 'DESC',
                'no_found_rows' => false, // 追加
            );

            $the_query = new WP_Query($args);
            if ($the_query->have_posts()):

                global $previousday;
                while ($the_query->have_posts()):
                    $the_query->the_post();
                    $previousday = '';
                    ?>

            <div class="col-sm col-md-6 col-lg-4 smaller mb-5" style="position: absolute; left: 0%; top: 0px;">
                <div class="card p-3">
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

            <?php endwhile;
                wp_reset_postdata();
            else:
                echo '<p>投稿が見つかりませんでした。</p>';
            endif;
            the_posts_pagination(array('query' => $the_query)); ?>

        </div>

    </section>

    <section class="container">
        <div class="row">
            <!--category-->
            <div class="col mx-auto bg-light rounded p-3 p-md-5 my-5">
                <?php include(get_template_directory() . '/template-parts/category.php'); ?>

            </div>
        </div>
    </section>

    <?php get_footer(); ?>