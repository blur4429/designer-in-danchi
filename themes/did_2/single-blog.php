<?php 
$url = get_template_directory_uri();
get_header();
?>

<main class="single-blog">
    <div class="pagetitle">
        <h1 class="poppins s-bold me-4 mb-2 mb-md-1"><img src="<?php echo $url;?>/img/blog.svg" alt="blog"></h1>
    </div>
    <!--breadcrumb-->
    <?php include(get_template_directory() . '/template-parts/breadcrumb.php'); ?>

    <section class="container">
        <div class="row">
            <div class="col ">

                <!--title row2-->
                <div class="row row-cols-1 row-cols-lg-2 blog-post-title">
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
                    <div class="col col-lg-6 thumb">
                        <?php the_post_thumbnail(); ?>

                    </div>
                </div>
                <!--//title row2-->

                <!--*** post row2 ***-->
                <div class="row row-cols-1 row-cols-xl-2 col-xl-10 mx-auto postrow mb-5">
                    <?php
                        the_content();
                        endwhile; ?>

                    <!--postnav-->
                    <div class="postnav fw-light w-100">
                        <!--back and forth-->
                        <div class="d-flex justify-content-between smaller px-lg-4">
                            <div class="nav-previous"><?php previous_post_link('%link', '< %date'); ?></div>
                            <div class="nav-next"><?php next_post_link('%link', '%date >'); ?></div>
                        </div>
                        <!--category-list-->
                        <?php include(get_template_directory() . '/template-parts/category-list.php'); ?>
                    </div>


                </div>
                <!--//*** post row2 ***-->

            </div>
            <!--//col★-->
        </div>
        <!--//row-->

    </section>
</main>

<?php get_footer(); ?>