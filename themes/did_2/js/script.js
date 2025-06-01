// Masonry
const grid = document.querySelector('.grid')
if (grid) {
  imagesLoaded(grid).on('done', () => {
    // grid 要素の幅や高さが正しく計算されているか確認
    if (grid.offsetWidth > 0 && grid.offsetHeight > 0) {
      new Masonry(grid, {
        itemSelector: '.grid-item',
        columnWidth: 200
      })
    }
  })
}

// SP menu
const toggle = document.querySelector('#toggle')
const overlay = document.querySelector('#overlay')
if (toggle && overlay) {
  toggle.addEventListener('click', () => {
    toggle.classList.toggle('active')
    overlay.classList.toggle('open')
  })
}

// Fade in for body
document.addEventListener('DOMContentLoaded', () => {
  document.body.style.display = 'none'
  document.body.style.opacity = 0
  document.body.style.transition = 'opacity 1s ease-in-out'
  document.body.style.display = 'block'
  setTimeout(() => {
    document.body.style.opacity = 1
  }, 100)
})

// Fade logomark and title
// ..On scroll
const fadeTitle = document.querySelector('.fade-title')
const logomark = document.querySelector('.logomark')
const introInfo = document.querySelector('.intro__info')
const initialLogomarkSrc = logomark.getAttribute('src')
const newLogomarkSrc = '/wp-content/themes/did_2/icons/logomark2.svg'
const scrollThreshold = 100
let isLogomarkChanged = false

window.addEventListener('scroll', () => {
  const scrollPosition = window.scrollY

  // fade-title の制御
  if (fadeTitle) {
    fadeTitle.style.opacity = scrollPosition > scrollThreshold ? 0 : 1
  }

  // intro__info の制御 (トップページのみ存在)
  if (introInfo) {
    introInfo.style.opacity = scrollPosition > scrollThreshold ? 0 : 1
  }

  // logomark の制御
  if (logomark) {
    if (scrollPosition > scrollThreshold && !isLogomarkChanged) {
      logomark.setAttribute('src', newLogomarkSrc)
      logomark.style.opacity = 1
      isLogomarkChanged = true
    } else if (scrollPosition <= scrollThreshold && isLogomarkChanged) {
      logomark.setAttribute('src', initialLogomarkSrc)
      logomark.style.opacity = 1
      isLogomarkChanged = false
    } else if (scrollPosition > scrollThreshold) {
      logomark.style.opacity = 1
    } else {
      logomark.style.opacity = 1
    }
  }
})

//prism.js クリップボードAPIを使用して、コードをコピーする
document.addEventListener('DOMContentLoaded', () => {
  const copyButtons = document.querySelectorAll('.copy-button')

  copyButtons.forEach(button => {
    button.addEventListener('click', () => {
      const code =
        button.previousElementSibling.querySelector('code').textContent
      navigator.clipboard.writeText(code)
      button.textContent = 'copied!'
      setTimeout(() => {
        button.innerHTML = 'copy'
      }, 2000)
    })
  })
})

//Prism.js の初期化
document.addEventListener('DOMContentLoaded', () => {
  Prism.highlightAll()
})

const copyButton = document.querySelector('.copy-button')
const code = document.querySelector('code')

//copyButton.addEventListener('click', () => {
//navigator.clipboard.writeText(code.textContent);
//copyButton.textContent = 'copied!';
//setTimeout(() => {
//copyButton.textContent = 'copy';
// }, 2000);
//});

//ScrollSpy　for custom post Blog ０３２５
document.addEventListener('DOMContentLoaded', () => {
  // ScrollSpy の初期化-250531削除

  // サイドバーのリンク要素とコンテンツセクションを取得
  const sidebarLinks = document.querySelectorAll('#sidebar-nav .nav-link')
  const contentSections = document.querySelectorAll(
    '.target-div, .target-div div h4'
  ) // セレクタを修正

  // スクロールイベントを監視
  window.addEventListener('scroll', () => {
    let currentSection = ''

    // 現在のスクロール位置に基づいてアクティブなセクションを判定
    contentSections.forEach(section => {
      const sectionTop = section.offsetTop
      const sectionHeight = section.offsetHeight

      // IDが認識されるタイミングを調整
      if (window.pageYOffset >= sectionTop - 180) {
        currentSection = section.getAttribute('id')
        console.log('Current Section ID:', currentSection) // 追加
      }
    })

    // アクティブなセクションに対応するリストアイテムにアクティブなスタイルを適用
    sidebarLinks.forEach(link => {
      link.classList.remove('active')
      if (link.getAttribute('href').substring(1) === currentSection) {
        link.classList.add('active')
      }
    })
  })

  // サイドバーのリンククリック時の処理
  sidebarLinks.forEach(link => {
    link.addEventListener('click', event => {
      event.preventDefault() // デフォルトのリンク動作をキャンセル

      // クリックされたリンクの href 属性からターゲット ID を取得
      const targetId = link.getAttribute('href').substring(1)
      // ターゲット ID に対応する要素を取得
      const targetElement = document.getElementById(targetId)

      // ターゲット要素が存在する場合、スムーズスクロール
      if (targetElement) {
        targetElement.scrollIntoView({ behavior: 'smooth' })

        // アクティブなスタイルを適用
        sidebarLinks.forEach(link => link.classList.remove('active'))
        link.classList.add('active')
      }
    })
  })
})

//button　to page top
document.addEventListener('scroll', function () {
  const pageTopButton = document.getElementById('page-top')
  if (pageTopButton) {
    if (window.scrollY > 500) {
      pageTopButton.classList.add('show')
    } else {
      pageTopButton.classList.remove('show')
    }
  }
})

//slidein-bottom
$(window).scroll(function () {
  $('.slidein').each(function () {
    var elemPos = $(this).offset().top,
      scroll = $(window).scrollTop(),
      windowHeight = $(window).height()

    if (scroll > elemPos - windowHeight + 50) {
      $(this).addClass('scrollin')
    }
  })
})

//splide.js carousel
var splide = new Splide('.splide', {
  type: 'loop',
  perMove: 1,
  autoplay: false,
  breakpoints: {
    576: {
      perPage: 2
    },
    768: {
      perPage: 2
    },
    992: {
      perPage: 3
    },
    1200: {
      perPage: 5
    },
    10000: {
      //10000px以上の画面幅では、perPage:3を適用する
      perPage: 6
    }
  }
})

splide.mount()

//background-attachment対策
//CSSでviewportの高さを表すカスタムプロパティを定義
//javaScriptで初期ロード時とリサイズ時にviewportの高さを計算し、CSS変数にセット
function setViewportHeight () {
  let vh = window.innerHeight * 0.01
  document.documentElement.style.setProperty('--viewport-height', `${vh}px`)
}

setViewportHeight()
window.addEventListener('resize', setViewportHeight)
