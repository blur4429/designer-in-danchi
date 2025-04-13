<!DOCTYPE html>
<html lang="ja">

<head>
    <title>団地のDesigner | ポートフォリオ | Webデザイナー | 東京都</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="団地のデザイナーのポートフォリオサイトです。Webデザイン、UI/UXデザインを中心に、これまでの実績やスキルを紹介しています。お仕事のご依頼・ご相談はお気軽にお問い合わせください。">
    <meta name="keywords" content="Webデザイナー, UI/UXデザイナー, ポートフォリオ, 団地のデザイナー, 東京都">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/favicon.ico" type="image/x-icon">
    <?php wp_head(); ?>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "団地のDesigner",
        "jobTitle": "Webデザイナー",
        "url": "https://designer-in-danchi.tokyo",
        "address": {
            "@type": "PostalAddress",
            "addressRegion": "東京都"
        }
    }
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TR12JZ6YQL"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-TR12JZ6YQL');
    </script>
</head>

<?php
$page_id = get_the_ID();
$page_title = get_the_title();

switch ($page_id) {
  case '1':
    $page_title = 'top';
    break;
  default:
    // IDが1以外のページの処理
    if (is_post_type_archive('blog') || (is_singular() && get_post_type() === 'blog') || is_category()) {
      $bg = 'bg-blue3'; // blogのアーカイブ、詳細、カテゴリー一覧ページの場合
      $catch = 'text-white opacity-50';
    } else {
      switch ($page_title) {
        case 'About':
          $page_class_about = 'border-blue';
          $bg = 'bg-pink';
          break;
        case 'Works':
          $page_class_works = 'border-blue';
          $bg = 'bg-blue';
          break;
        case 'Contact':
          $page_class_contact = 'border-blue';
          $bg = 'bg-green';
          break;
        case 'thanks':
          $bg = 'bg-green';
          break;
      }
    }
}
?>

<body class="fadein">

    <header class="position-fixed w-100 p-3 <?php echo $page_title; ?> <?php echo $bg;?>">
        <div class="d-flex flex-wrap px-lg-4">
            <a href="/" class="toplogo d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none ">
                <span class="fs-4 fw-bold">団地のDesigner<br><span class="fw-light <?php echo $catch; ?>">Portfolio
                        Site</span></span>
            </a>

            <!--show lg-->
            <nav class="lg-menu lg-show d-flex align-items-center py-3">
                <a class="text-decoration-none pb-2 me-3 <?php echo $page_class_about; ?> " href="/about">About</a>
                <a class="text-decoration-none pb-2 me-3 <?php echo $page_class_works; ?> " href="/works">Works</a>
                <a class="text-decoration-none pb-2 me-3 <?php echo $page_class_contact; ?>" href="/contact">Contact</a>
            </nav>

            <!--hide lg-->
            <div class="button_container lg-hide" id="toggle"><span class="top"></span><span class="middle"></span><span
                    class="bottom"></span></div>
            <div class="overlay" id="overlay">
                <nav class="overlay-menu">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/works">Works</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </header>