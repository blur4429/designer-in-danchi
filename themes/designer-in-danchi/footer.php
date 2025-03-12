<?php
$page_id = get_the_ID();
if ($page_id == 19 || $page_id == 17 || $page_id == 21) {
?>
  <div class="container">
    <footer class="py-2 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="/" class="nav-link px-2 text-body-secondary">Home</a></li>
        <li class="nav-item"><a href="/about" class="nav-link px-2 text-body-secondary">About</a></li>
        <li class="nav-item"><a href="/works" class="nav-link px-2 text-body-secondary">Works</a></li>
        <li class="nav-item"><a href="/contact" class="nav-link px-2 text-body-secondary">Contact</a></li>
      </ul>
      <p class="smaller text-center text-body-secondary">©&nbsp;&nbsp;2025&nbsp;&nbsp;<?php echo get_bloginfo('name') ?></p>
      <button id="scrollTopButton" onclick="scrollToTop()" style="display: none; position: fixed; bottom: 20px; right: 20px;">トップに戻る</button>
    </footer>
  </div>

<?php
}
?>

<?php wp_footer(); ?>
<!--bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
<script>
  //初期化
  var msnry = new Masonry('.grid', {
    // options...
    itemSelector: '.grid-item',
    columnWidth: 200
  });

  // 画像読み込み完了後に再レイアウト
  var imgLoad = imagesLoaded('.grid');
  imgLoad.on('done', function(instance) {
    msnry.layout();
  });
</script>
<!--fadein-->
<script>
  $(function() {
    $('body').fadeIn(1000);
  });
</script>

<!--sp menu-->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script id="rendered-js">
  $("#toggle").click(function() {
    $(this).toggleClass("active");
    $("#overlay").toggleClass("open");
  });
</script>

<!--smooth scroll-->
<script>
  const headerHeight = document.querySelector('header').offsetHeight; // get header height

  window.addEventListener('hashchange', function(e) {
    const targetId = location.hash; // ハッシュを取得
    const targetElement = document.querySelector(targetId); // get target element

    if (targetElement) {
      const targetOffsetTop = targetElement.offsetTop - headerHeight; // Scroll position taking header height into account
      window.scrollTo({
        top: targetOffsetTop,
        behavior: 'smooth'
      });
    }
  });
</script>

<!--slick-->
<script
  type="text/javascript"
  src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
  $('.responsive').slick({
    dots: true,
    arrows: true,
    prevArrow: '<div class="slide-arrow prev-arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/chevron-right.svg" alt="arrow"></div>',
    nextArrow: '<div class="slide-arrow next-arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/chevron-right.svg" alt="arrow"></div>',
    autoplay: false,
    infinite: true,
    centerMode: true,
    centerPadding: "30px",
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
</script>

<!--scroll to top-->
<p id="page-top"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/icons/arrow-bar-up.svg" alt="up"></a></p>

<script>
  $(function() {
    var pagetop = $('#page-top');
    pagetop.hide();
    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
        pagetop.fadeIn();
      } else {
        pagetop.fadeOut();
      }
    });
  });
</script>

</body>

</html>