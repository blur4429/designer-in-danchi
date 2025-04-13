
// Masonry
const grid = document.querySelector('.grid');
if (grid) {
  imagesLoaded(grid).on('done', () => {
    // grid 要素の幅や高さが正しく計算されているか確認
    if (grid.offsetWidth > 0 && grid.offsetHeight > 0) {
      new Masonry(grid, {
        itemSelector: '.grid-item',
        columnWidth: 200,
      });
    }
  });
}

// SP menu
const toggle = document.querySelector('#toggle');
const overlay = document.querySelector('#overlay');
if (toggle && overlay) {
  toggle.addEventListener('click', () => {
    toggle.classList.toggle('active');
    overlay.classList.toggle('open');
  });
}

// Fade in
document.addEventListener('DOMContentLoaded', () => {
  document.body.style.display = 'none';
  document.body.style.opacity = 0;
  document.body.style.transition = 'opacity 1s ease-in-out';
  document.body.style.display = 'block';
  setTimeout(() => {
    document.body.style.opacity = 1;
  }, 100);
});

// Fade title
const fadeTitle = document.querySelector('#fade-title');
if (fadeTitle) {
  window.addEventListener('scroll', () => {
    const scrollPosition = window.scrollY;
    fadeTitle.style.opacity = scrollPosition > 1 ? 0 : 1;
  });
}

// Smooth scroll
const header = document.querySelector('header');
if (header) {
  const headerHeight = header.offsetHeight;
  window.addEventListener('hashchange', (e) => {
    const targetId = location.hash;
    const targetElement = document.querySelector(targetId);
    if (targetElement) {
      const targetOffsetTop = targetElement.offsetTop - headerHeight;
      window.scrollTo({
        top: targetOffsetTop,
        behavior: 'smooth',
      });
    }
  });
}

// Slick
$(document).ready(function () {
  $('.responsive').slick({
    dots: true,
    arrows: true,
    prevArrow:
      '<div class="slide-arrow prev-arrow"></div>',
    nextArrow:
      '<div class="slide-arrow next-arrow"></div>',
    autoplay: false,
    infinite: true,
    centerMode: true,
    centerPadding: '30px',
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
});

// Scroll to top
const pageTop = document.querySelector('#page-top');
if (pageTop) {
  pageTop.style.display = 'none';
  window.addEventListener('scroll', () => {
    if (window.scrollY > 100) {
      pageTop.style.display = 'block';
    } else {
      pageTop.style.display = 'none';
    }
  });


}

//クリップボードAPIを使用して、コードをコピーする
document.addEventListener('DOMContentLoaded', () => {
  const copyButtons = document.querySelectorAll('.copy-button');

  copyButtons.forEach(button => {
    button.addEventListener('click', () => {
      const code = button.previousElementSibling.querySelector('code').textContent;
      navigator.clipboard.writeText(code);
      button.textContent = 'copied!';
      setTimeout(() => {
        button.innerHTML = 'copy';
      }, 2000);
    });
  });
});

//Prism.js の初期化
document.addEventListener('DOMContentLoaded', () => {
  Prism.highlightAll();
});

const copyButton = document.querySelector('.copy-button');
const code = document.querySelector('code');

copyButton.addEventListener('click', () => {
  navigator.clipboard.writeText(code.textContent);
  copyButton.textContent = 'copied!';
  setTimeout(() => {
    copyButton.textContent = 'copy';
  }, 2000);
});


//ScrollSpy　for custom post Blog ０３２５
document.addEventListener('DOMContentLoaded', () => {
  // ScrollSpy の初期化
  const scrollSpy = new bootstrap.ScrollSpy(document.body, {
    target: '#content-scroll',
    offset: 100 // offset オプションを調整
  });

  // サイドバーのリンク要素とコンテンツセクションを取得
  const sidebarLinks = document.querySelectorAll('#sidebar-nav .nav-link');
  const contentSections = document.querySelectorAll('.target-div, .target-div div h4'); // セレクタを修正

  // スクロールイベントを監視
  window.addEventListener('scroll', () => {
    let currentSection = '';

    // 現在のスクロール位置に基づいてアクティブなセクションを判定
    contentSections.forEach(section => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.offsetHeight;

      // IDが認識されるタイミングを調整
      if (window.pageYOffset >= sectionTop - 180) {
        currentSection = section.getAttribute('id');
      }
    });

    // アクティブなセクションに対応するリストアイテムにアクティブなスタイルを適用
    sidebarLinks.forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('href').substring(1) === currentSection) {
        link.classList.add('active');
      }
    });
  });

  // サイドバーのリンククリック時の処理
  sidebarLinks.forEach(link => {
    link.addEventListener('click', (event) => {
      event.preventDefault(); // デフォルトのリンク動作をキャンセル

      // クリックされたリンクの href 属性からターゲット ID を取得
      const targetId = link.getAttribute('href').substring(1);
      // ターゲット ID に対応する要素を取得
      const targetElement = document.getElementById(targetId);

      // ターゲット要素が存在する場合、スムーズスクロール
      if (targetElement) {
        targetElement.scrollIntoView({ behavior: 'smooth' });

        // アクティブなスタイルを適用
        sidebarLinks.forEach(link => link.classList.remove('active'));
        link.classList.add('active');
      }
    });
  });
});