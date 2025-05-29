<?php get_header();
?>

<main>
    <div class="pagetitle">
        <h1 class="poppins s-bold me-4 mb-2 mb-md-1">BLOG</h1>
    </div>
    <!--breadcrumb-->
    <?php include(get_template_directory() . '/template-parts/breadcrumb.php'); ?>

    <section class="container">
        <div class="row">

            <div class="col">

                <!--title row2-->
                <div class="row row-cols-1 row-cols-lg-2 blog-title">
                    <!--left-->
                    <div class="col col-lg-6 h-auto d-flex align-items-center">

                        <?php while (have_posts()):
                            the_post();
                            $categories = get_the_category(); // カテゴリーオブジェクトの配列を取得
                            ?>
                        <div>
                            <p class="fw-light mb-2">
                                <span class="pe-3"><?php the_date('Y-n-j'); ?></span>
                                <span class="blog-cat">#
                                    <?php
                                        if (!empty($categories)) {
                                            foreach ($categories as $category) {
                                                echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" rel="category tag">' . esc_html($category->name) . '</a>';
                                            }
                                        }
                                        ?>
                                </span>
                            </p>
                            <h2 class="fs-2 fw-light p-0 m-0 mb-5"><?php the_title(); ?></h2>
                        </div>
                    </div>
                    <!--right-->
                    <div class="col col-lg-6">
                        <?php the_post_thumbnail(); ?>

                    </div>
                </div>
                <!--//title row2-->

                <!--post row2-->
                <div class="row row-cols-1 row-cols-lg-2 mb-5">
                    <?php
                        the_content();
                        endwhile; ?>

                    <div class="postnav fw-light ps-lg-5">
                        <!--back and forth-->
                        <div class="d-flex justify-content-between smaller px-lg-4">
                            <div class="nav-previous"><?php previous_post_link('%link', '< %date'); ?></div>
                            <div class="nav-next"><?php next_post_link('%link', '%date >'); ?></div>
                        </div>
                        <!--category-->
                        <div class="col border-top border-bottom p-3 p-md-5 my-5">
                            <?php include(get_template_directory() . '/template-parts/category.php'); ?>
                        </div>
                    </div>

                </div>
                <!--//col-lg-9-->
            </div>
            <!--//post row2-->

        </div>
        <!--//col★-->
        </div>
        <!--//row-->

    </section>
</main>

<?php get_footer(); ?>