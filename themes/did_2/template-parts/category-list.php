<div class="col border border-dark rounded-3 p-3 p-md-5 my-5">
    <h3 class="fs-3 fw-light text-center poppins light mb-4">CATEGORY</h3>
    <ul class="row row-cols-2 row-cols-md-4 category d-lg-flex justify-content-center text-center fw-light">
        <?php wp_list_categories([
        'taxonomy' => 'category', // カテゴリータクソノミーを指定
        'show_count' => 1, // 投稿数を表示
        'title_li' => '', // タイトルを非表示
    ]); ?>
    </ul>
</div>