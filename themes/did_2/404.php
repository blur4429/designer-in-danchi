<?php $url = get_template_directory_uri(); ?>
<div class="cover-container d-flex w-100 h-100 mx-auto flex-column">

    <?php get_header(); ?>
    <main class="h-100 d-flex justify-content-center align-items-center">

        <div class="container notfound">
            <div class="row">
                <div class="col col-xl-6 mx-auto text-center">
                    <h1 class="mb-3"><span>404</span><img src="<?php echo $url;?>/img/404.svg" alt="404"></h1>
                    <p>お探しのページは見つかりませんでした</p>
                </div>
            </div>
    </main>
    <?php get_footer(); ?>
</div>