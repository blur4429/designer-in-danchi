let e
import './index2.a6ee105b.js'
var t =
    'undefined' != typeof globalThis
      ? globalThis
      : 'undefined' != typeof self
      ? self
      : 'undefined' != typeof window
      ? window
      : 'undefined' != typeof global
      ? global
      : {},
  r = {},
  o = {},
  a = t.parcelRequire2524
null == a &&
  (((a = function (e) {
    if (e in r) return r[e].exports
    if (e in o) {
      var t = o[e]
      delete o[e]
      var a = { id: e, exports: {} }
      return (r[e] = a), t.call(a.exports, a, a.exports), a.exports
    }
    var l = Error("Cannot find module '" + e + "'")
    throw ((l.code = 'MODULE_NOT_FOUND'), l)
  }).register = function (e, t) {
    o[e] = t
  }),
  (t.parcelRequire2524 = a)),
  a.register
var l = a('5IQP4'),
  c = a('92jPu'),
  n = a('1oYLf'),
  i = a('aV8T4'),
  s = a('jPLxl')
n.gsap.registerPlugin(i.ScrollTrigger)
let g = (e, t, r) => {
  e.forEach(e => {
    let o = document.createElement(t)
    ;(o.classList = r), e.parentNode.appendChild(o), o.appendChild(e)
  })
}
;(s && s.__esModule ? s.default : s)()
let p = [
    ...document.querySelectorAll(
      '.content__title[data-splitting][data-effect1]'
    )
  ],
  f = [
    ...document.querySelectorAll(
      '.content__title[data-splitting][data-effect2]'
    )
  ],
  d = [
    ...document.querySelectorAll(
      '.content__title[data-splitting][data-effect3]'
    )
  ],
  u = [
    ...document.querySelectorAll(
      '.content__title[data-splitting][data-effect4]'
    )
  ],
  m = [
    ...document.querySelectorAll(
      '.content__title[data-splitting][data-effect5]'
    )
  ],
  y = [
    ...document.querySelectorAll(
      '.content__title[data-splitting][data-effect6]'
    )
  ],
  h = [
    ...document.querySelectorAll(
      '.content__title[data-splitting][data-effect7]'
    )
  ],
  b = [
    ...document.querySelectorAll(
      '.content__title[data-splitting][data-effect8]'
    )
  ],
  T = [
    ...document.querySelectorAll(
      '.content__title[data-splitting][data-effect9]'
    )
  ],
  q = [
    ...document.querySelectorAll(
      '.content__title[data-splitting][data-effect10]'
    )
  ],
  w = [
    ...document.querySelectorAll(
      '.content__title[data-splitting][data-effect11]'
    )
  ],
  A = [
    ...document.querySelectorAll(
      '.content__title[data-splitting][data-effect12]'
    )
  ],
  S = [
    ...document.querySelectorAll(
      '.content__title[data-splitting][data-effect13]'
    )
  ],
  _ = [
    ...document.querySelectorAll(
      '.content__title[data-splitting][data-effect14]'
    )
  ],
  x = [
    ...document.querySelectorAll(
      '.content__title[data-splitting][data-effect15]'
    )
  ],
  P = () => {
    //250514
    ;(e = new (0, c.default)({ lerp: 0.2, smooth: false })).on('scroll', () =>
      i.ScrollTrigger.update()
    )
    let t = r => {
      e.raf(r), requestAnimationFrame(t)
    }
    requestAnimationFrame(t)
  },
  E = () => {
    p.forEach(e => {
      let t = e.querySelectorAll('.char')
      n.gsap.fromTo(
        t,
        {
          'will-change': 'opacity, transform',
          opacity: 0,
          scale: 0.6,
          rotationZ: () => n.gsap.utils.random(-20, 20)
        },
        {
          ease: 'power4',
          opacity: 1,
          scale: 1,
          rotation: 0,
          stagger: 0.4,
          scrollTrigger: {
            trigger: e,
            start: 'center+=20% bottom',
            end: '+=50%',
            scrub: !0
          }
        }
      )
    }),
      f.forEach(e => {
        let t = e.querySelectorAll('.char')
        n.gsap.fromTo(
          t,
          {
            'will-change': 'opacity, transform',
            opacity: 0,
            yPercent: 120,
            scaleY: 2.3,
            scaleX: 0.7,
            transformOrigin: '50% 0%'
          },
          {
            duration: 1,
            ease: 'back.inOut(2)',
            opacity: 1,
            yPercent: 0,
            scaleY: 1,
            scaleX: 1,
            stagger: 0.03,
            scrollTrigger: {
              trigger: e,
              start: 'center bottom+=50%',
              end: 'bottom top+=40%',
              scrub: !0
            }
          }
        )
      }),
      d.forEach(e => {
        let t = e.querySelectorAll('.char')
        n.gsap.fromTo(
          t,
          { 'will-change': 'transform', transformOrigin: '50% 0%', scaleY: 0 },
          {
            ease: 'back',
            opacity: 1,
            scaleY: 1,
            yPercent: 0,
            stagger: 0.03,
            scrollTrigger: {
              trigger: e,
              start: 'center bottom-=5%',
              end: 'top top-=20%',
              scrub: !0
            }
          }
        )
      }),
      u.forEach(e => {
        for (let t of e.querySelectorAll('.word')) {
          let e = t.querySelectorAll('.char')
          n.gsap.fromTo(
            e,
            {
              'will-change': 'opacity, transform',
              x: (e, t, r) => 150 * (e - r.length / 2)
            },
            {
              ease: 'power1.inOut',
              x: 0,
              stagger: { grid: 'auto', from: 'center' },
              scrollTrigger: {
                trigger: t,
                start: 'center bottom+=30%',
                end: 'top top+=15%',
                scrub: !0
              }
            }
          )
        }
      }),
      m.forEach(e => {
        let t = e.querySelectorAll('.char')
        n.gsap.fromTo(
          t,
          {
            'will-change': 'opacity, transform',
            opacity: 0,
            xPercent: () => n.gsap.utils.random(-200, 200),
            yPercent: () => n.gsap.utils.random(-150, 150)
          },
          {
            ease: 'power1.inOut',
            opacity: 1,
            xPercent: 0,
            yPercent: 0,
            stagger: { each: 0.05, grid: 'auto', from: 'random' },
            scrollTrigger: {
              trigger: e,
              start: 'center bottom+=10%',
              end: 'bottom center',
              scrub: 0.9
            }
          }
        )
      }),
      y.forEach(e => {
        for (let t of e.querySelectorAll('.word')) {
          let e = t.querySelectorAll('.char')
          e.forEach(e => n.gsap.set(e.parentNode, { perspective: 2e3 })),
            n.gsap.fromTo(
              e,
              {
                'will-change': 'opacity, transform',
                opacity: 0,
                rotationX: -90,
                yPercent: 50
              },
              {
                ease: 'power1.inOut',
                opacity: 1,
                rotationX: 0,
                yPercent: 0,
                stagger: { each: 0.03, from: 0 },
                scrollTrigger: {
                  trigger: t,
                  start: 'center bottom+=40%',
                  end: 'bottom center-=30%',
                  scrub: 0.9
                }
              }
            )
        }
      }),
      h.forEach(e => {
        for (let t of e.querySelectorAll('.word')) {
          let e = t.querySelectorAll('.char')
          e.forEach(e => n.gsap.set(e.parentNode, { perspective: 2e3 })),
            n.gsap.fromTo(
              e,
              {
                'will-change': 'opacity, transform',
                transformOrigin: '100% 50%',
                opacity: 0,
                rotationY: -90,
                z: -300
              },
              {
                ease: 'expo',
                opacity: 1,
                rotationY: 0,
                z: 0,
                stagger: { each: 0.06, from: 'end' },
                scrollTrigger: {
                  trigger: t,
                  start: 'bottom bottom+=20%',
                  end: 'bottom top',
                  scrub: 1
                }
              }
            )
        }
      })
    let e = [
      'a',
      'b',
      'c',
      'd',
      'e',
      'f',
      'g',
      'h',
      'i',
      'j',
      'k',
      'l',
      'm',
      'n',
      'o',
      'p',
      'q',
      'r',
      's',
      't',
      'u',
      'v',
      'w',
      'x',
      'y',
      'z',
      '!',
      '@',
      '#',
      '$',
      '%',
      '^',
      '&',
      '*',
      '-',
      '_',
      '+',
      '=',
      ';',
      ':',
      '<',
      '>',
      ','
    ]
    b.forEach(t => {
      t.querySelectorAll('.char').forEach((r, o) => {
        let a = r.innerHTML
        n.gsap.fromTo(
          r,
          { opacity: 0 },
          {
            duration: 0.03,
            innerHTML: () => e[Math.floor(Math.random() * e.length)],
            repeat: 1,
            repeatRefresh: !0,
            opacity: 1,
            repeatDelay: 0.03,
            delay: (o + 1) * 0.18,
            onComplete: () => n.gsap.set(r, { innerHTML: a, delay: 0.03 }),
            scrollTrigger: {
              trigger: t,
              start: 'top bottom',
              end: 'bottom center',
              toggleActions: 'play resume resume reset',
              onEnter: () => n.gsap.set(r, { opacity: 0 })
            }
          }
        )
      })
    }),
      T.forEach(e => {
        for (let t of e.querySelectorAll('.word')) {
          let e = t.querySelectorAll('.char')
          n.gsap.fromTo(
            e,
            {
              'will-change': 'transform',
              scaleX: 0,
              x: (e, t) =>
                window.innerWidth / 2 - t.offsetLeft - t.offsetWidth / 2
            },
            {
              ease: 'power1.inOut',
              scaleX: 1,
              x: 0,
              scrollTrigger: {
                trigger: t,
                start: 'top bottom',
                end: 'top top',
                scrub: !0
              }
            }
          )
        }
      }),
      q.forEach(e => {
        let t = e.querySelectorAll('.char')
        n.gsap.fromTo(
          t,
          { 'will-change': 'opacity', opacity: 0, filter: 'blur(20px)' },
          {
            duration: 0.25,
            ease: 'power1.inOut',
            opacity: 1,
            filter: 'blur(0px)',
            stagger: { each: 0.05, from: 'random' },
            scrollTrigger: {
              trigger: e,
              start: 'top bottom',
              end: 'center center',
              toggleActions: 'play resume resume reset'
            }
          }
        )
      }),
      w.forEach(e => {
        let t = e.querySelectorAll('.char')
        g(t, 'span', 'char-wrap'),
          n.gsap.fromTo(
            t,
            {
              'will-change': 'transform',
              transformOrigin: '0% 50%',
              xPercent: 105
            },
            {
              duration: 1,
              ease: 'expo',
              xPercent: 0,
              stagger: 0.042,
              scrollTrigger: {
                trigger: e,
                start: 'top bottom',
                end: 'top top+=10%',
                toggleActions: 'play resume resume reset'
              }
            }
          )
      }),
      A.forEach(e => {
        let t = e.querySelectorAll('.char')
        g(t, 'span', 'char-wrap'),
          n.gsap.fromTo(
            t,
            {
              'will-change': 'transform',
              xPercent: -250,
              rotationZ: 45,
              scaleX: 6,
              transformOrigin: '100% 50%'
            },
            {
              duration: 1,
              ease: 'power2',
              xPercent: 0,
              rotationZ: 0,
              scaleX: 1,
              stagger: -0.06,
              scrollTrigger: {
                trigger: e,
                start: 'top bottom+=10%',
                end: 'bottom top+=10%',
                scrub: !0
              }
            }
          )
      }),
      S.forEach(e => {
        let t = e.querySelectorAll('.char')
        t.forEach(e => n.gsap.set(e.parentNode, { perspective: 2e3 })),
          n.gsap.fromTo(
            t,
            {
              'will-change': 'opacity, transform',
              opacity: 0,
              rotationY: 180,
              xPercent: -40,
              yPercent: 100
            },
            {
              ease: 'power4.inOut()',
              opacity: 1,
              rotationY: 0,
              xPercent: 0,
              yPercent: 0,
              stagger: { each: -0.03, from: 0 },
              scrollTrigger: {
                trigger: e,
                start: 'center bottom',
                end: 'bottom center-=30%',
                scrub: 0.9
              }
            }
          )
      }),
      _.forEach(e => {
        let t = e.querySelectorAll('.char')
        n.gsap
          .timeline()
          .fromTo(
            e,
            { 'will-change': 'transform', xPercent: 100 },
            {
              ease: 'none',
              xPercent: 0,
              scrollTrigger: {
                trigger: e,
                scrub: !0,
                start: 'center center',
                end: '+=100%',
                pin: e.parentNode
              }
            }
          )
          .fromTo(
            t,
            { 'will-change': 'transform', scale: 3, yPercent: -900 },
            {
              ease: 'back(2)',
              scale: 1,
              yPercent: 0,
              stagger: 0.05,
              scrollTrigger: {
                trigger: e,
                start: 'center center',
                end: '+=100%',
                scrub: 1.9
              }
            },
            0
          )
      }),
      x.forEach(e => {
        let t = e.querySelectorAll('.char')
        t.forEach(e => n.gsap.set(e.parentNode, { perspective: 2e3 })),
          n.gsap
            .timeline()
            .fromTo(
              e,
              { 'will-change': 'transform', xPercent: -80 },
              {
                ease: 'none',
                xPercent: 0,
                scrollTrigger: {
                  trigger: e,
                  scrub: !0,
                  start: 'center center',
                  end: '+=100%',
                  pin: e.parentNode
                }
              }
            )
            .fromTo(
              t,
              {
                'will-change': 'opacity, transform',
                transformOrigin: '50% 50% -200px',
                rotationX: 380,
                opacity: 0
              },
              {
                ease: 'expo.inOut',
                rotationX: 0,
                z: 0,
                opacity: 1,
                stagger: -0.03,
                scrollTrigger: {
                  trigger: e,
                  start: 'center center',
                  end: '+=140%',
                  scrub: 1.2
                }
              },
              0
            )
      })
  }
;(0, l.preloadFonts)('cvn8slu').then(() => {
  document.body.classList.remove('loading'), P(), E()
})
