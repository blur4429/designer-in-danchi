<!DOCTYPE html>
<html lang="ja">
<?php $url = get_template_directory_uri(); ?>

<head>
    <title>団地のDesigner | ポートフォリオ | Webデザイナー | 東京都</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="団地ノスタルジア meets Webデザイン。団地から発信するWebデザインの実験室。">
    <meta name="keywords" content="団地から発信, Webデザイナー, ポートフォリオ, 団地のデザイナー, 東京都">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/favicon.ico" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
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

    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-N7QR7S3K');
    </script>
    <!-- End Google Tag Manager -->

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
      
      $catch = 'text-white opacity-50';
    } else {
      switch ($page_title) {
        case 'top':
          $page_class_top = 'active-page';
          break;
        case 'WORKS':
          $page_class_works = 'active-page';
          break;
        case 'CONTACT':
          $page_class_contact = 'active-page';
          break;
        case 'THANKS':
          break;
      }
    }
}
?>

<body class="fadein">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N7QR7S3K" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header class="fixed-top pt-2 px-xl-3 <?php echo $page_title; ?>">
        <nav class="navbar">
            <div class="container-fluid position-relative">
                <a href="/" class="toplogo d-flex align-items-center text-decoration-none ">
                    <img class="logomark" src="<?php echo $url;?>/icons/logomark.svg" alt="logomark">
                    <div class="fade-title">
                        <span class="fs-4 poppins mid">団地のDesigner<br><span
                                class="fw-light &lt;?php echo $catch; ?&gt;">Portfolio
                                Site</span></span>
                    </div>
                </a>
                <div class="button_container" id="toggle">
                    <span class="top"></span>
                    <span class="middle"></span>
                    <span class="bottom"></span>
                </div>
                <div class="overlay" id="overlay">
                    <nav class="overlay-menu">
                        <ul class="col-xl-6 mx-auto gap-5">
                            <li><a href="/"><img src="<?php echo $url;?>/img/top.svg" alt="tops"></a></li>
                            <li><a href="/works"><img src="<?php echo $url;?>/img/works.svg" alt="works"></a></li>
                            <li><a href="/contact"><img src="<?php echo $url;?>/img/contact.svg" alt="contact"></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </nav>
    </header>