let t
import './index2.a6ee105b.js'
var e =
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
  a = e.parcelRequire2524
null == a &&
  (((a = function (t) {
    if (t in r) return r[t].exports
    if (t in o) {
      var e = o[t]
      delete o[t]
      var a = { id: t, exports: {} }
      return (r[t] = a), e.call(a.exports, a, a.exports), a.exports
    }
    var l = Error("Cannot find module '" + t + "'")
    throw ((l.code = 'MODULE_NOT_FOUND'), l)
  }).register = function (t, e) {
    o[t] = e
  }),
  (e.parcelRequire2524 = a)),
  a.register
var l = a('5IQP4'),
  c = a('92jPu'),
  n = a('1oYLf'),
  i = a('aV8T4'),
  s = a('jPLxl')
n.gsap.registerPlugin(i.ScrollTrigger), (s && s.__esModule ? s.default : s)()
let g = [
    ...document.querySelectorAll(
      '.content__title[data-splitting][data-effect16]'
    )
  ],
  p = [
    ...document.querySelectorAll(
      '.content__title[data-splitting][data-effect17]'
    )
  ],
  f = [
    ...document.querySelectorAll(
      '.content__title[data-splitting][data-effect18]'
    )
  ],
  u = [
    ...document.querySelectorAll(
      '.content__title[data-splitting][data-effect19]'
    )
  ],
  d = [
    ...document.querySelectorAll(
      '.content__title[data-splitting][data-effect20]'
    )
  ],
  m = [
    ...document.querySelectorAll(
      '.content__title[data-splitting][data-effect21]'
    )
  ],
  h = [
    ...document.querySelectorAll(
      '.content__title[data-splitting][data-effect22]'
    )
  ],
  y = [
    ...document.querySelectorAll(
      '.content__title[data-splitting][data-effect23]'
    )
  ],
  b = [
    ...document.querySelectorAll(
      '.content__title[data-splitting][data-effect24]'
    )
  ],
  M = [
    ...document.querySelectorAll(
      '.content__title[data-splitting][data-effect25]'
    )
  ],
  q = [
    ...document.querySelectorAll(
      '.content__title[data-splitting][data-effect26]'
    )
  ],
  w = [
    ...document.querySelectorAll(
      '.content__title[data-splitting][data-effect27]'
    )
  ],
  A = [
    ...document.querySelectorAll(
      '.content__title[data-splitting][data-effect28]'
    )
  ],
  S = [
    ...document.querySelectorAll(
      '.content__title[data-splitting][data-effect29]'
    )
  ],
  T = () => {
    //250514
    ;(t = new (0, c.default)({ lerp: 0.2, smooth: false })).on('scroll', () =>
      i.ScrollTrigger.update()
    )
    let e = r => {
      t.raf(r), requestAnimationFrame(e)
    }
    requestAnimationFrame(e)
  },
  _ = () => {
    g.forEach(t => {
      n.gsap.fromTo(
        t,
        { transformOrigin: '0% 50%', rotate: 3 },
        {
          ease: 'none',
          rotate: 0,
          scrollTrigger: {
            trigger: t,
            start: 'top bottom',
            end: 'top top',
            scrub: !0
          }
        }
      ),
        n.gsap.fromTo(
          t.querySelectorAll('.word'),
          { 'will-change': 'opacity', opacity: 0.1 },
          {
            ease: 'none',
            opacity: 1,
            stagger: 0.05,
            scrollTrigger: {
              trigger: t,
              start: 'top bottom-=20%',
              end: 'center top+=20%',
              scrub: !0
            }
          }
        )
    }),
      p.forEach(t => {
        let e = t.querySelectorAll('.char')
        e.forEach(t => n.gsap.set(t.parentNode, { perspective: 1e3 })),
          n.gsap.fromTo(
            e,
            {
              'will-change': 'opacity, transform',
              opacity: 0,
              rotateX: () => n.gsap.utils.random(-120, 120),
              z: () => n.gsap.utils.random(-200, 200)
            },
            {
              ease: 'none',
              opacity: 1,
              rotateX: 0,
              z: 0,
              stagger: 0.02,
              scrollTrigger: {
                trigger: t,
                start: 'top bottom',
                end: 'bottom top',
                scrub: !0
              }
            }
          )
      }),
      f.forEach(t => {
        let e = t.querySelectorAll('.char')
        e.forEach(t => n.gsap.set(t.parentNode, { perspective: 1e3 })),
          n.gsap.fromTo(
            e,
            { 'will-change': 'opacity, transform', opacity: 0.2, z: -800 },
            {
              ease: 'back.out(1.2)',
              opacity: 1,
              z: 0,
              stagger: 0.04,
              scrollTrigger: {
                trigger: t,
                start: 'top bottom',
                end: 'bottom top',
                scrub: !0
              }
            }
          )
      }),
      u.forEach(t => {
        let e = t.querySelectorAll('.char')
        e.forEach(t => n.gsap.set(t.parentNode, { perspective: 1e3 })),
          n.gsap.fromTo(
            e,
            {
              'will-change': 'opacity, transform',
              transformOrigin: '50% 0%',
              opacity: 0,
              rotationX: -90,
              z: -200
            },
            {
              ease: 'power1',
              opacity: 1,
              stagger: 0.05,
              rotationX: 0,
              z: 0,
              scrollTrigger: {
                trigger: t,
                start: 'center bottom',
                end: 'bottom top+=20%',
                scrub: !0
              }
            }
          )
      }),
      d.forEach(t => {
        let e = t.querySelectorAll('.char')
        e.forEach(t => n.gsap.set(t.parentNode, { perspective: 1e3 })),
          n.gsap.fromTo(
            e,
            {
              'will-change': 'opacity, transform',
              transformOrigin: '50% 100%',
              opacity: 0,
              rotationX: 90
            },
            {
              ease: 'power4',
              opacity: 1,
              stagger: { each: 0.03, from: 'random' },
              rotationX: 0,
              scrollTrigger: {
                trigger: t,
                start: 'center bottom',
                end: 'bottom top+=20%',
                scrub: !0
              }
            }
          )
      }),
      m.forEach(t => {
        for (let e of [...t.querySelectorAll('.word')]) {
          let t = e.querySelectorAll('.char')
          t.forEach(t => n.gsap.set(t.parentNode, { perspective: 2e3 })),
            n.gsap.fromTo(
              t,
              {
                'will-change': 'opacity, transform',
                opacity: 0,
                y: (t, e, r) => -40 * Math.abs(t - r.length / 2),
                z: () => n.gsap.utils.random(-1500, -600),
                rotationX: () => n.gsap.utils.random(-500, -200)
              },
              {
                ease: 'power1.inOut',
                opacity: 1,
                y: 0,
                z: 0,
                rotationX: 0,
                stagger: { each: 0.06, from: 'center' },
                scrollTrigger: {
                  trigger: e,
                  start: 'top bottom',
                  end: 'top top+=15%',
                  scrub: !0
                }
              }
            )
        }
      }),
      h.forEach(t => {
        for (let e of [...t.querySelectorAll('.word')]) {
          let t = e.querySelectorAll('.char'),
            r = t.length
          t.forEach(t => n.gsap.set(t.parentNode, { perspective: 1e3 })),
            n.gsap.fromTo(
              t,
              {
                'will-change': 'transform',
                x: t => {
                  let e =
                    t < Math.ceil(r / 2)
                      ? t
                      : Math.ceil(r / 2) - Math.abs(Math.floor(r / 2) - t) - 1
                  return (
                    (r % 2
                      ? Math.abs(Math.ceil(r / 2) - 1 - e)
                      : Math.abs(Math.ceil(r / 2) - e)) *
                    200 *
                    (t < r / 2 ? -1 : 1)
                  )
                },
                y: t =>
                  60 *
                  (t < Math.ceil(r / 2)
                    ? t
                    : Math.ceil(r / 2) - Math.abs(Math.floor(r / 2) - t) - 1),
                rotationY: -270,
                rotationZ: t => {
                  let e =
                    t < Math.ceil(r / 2)
                      ? t
                      : Math.ceil(r / 2) - Math.abs(Math.floor(r / 2) - t) - 1
                  return t < r / 2
                    ? 8 * Math.abs(e - r / 2)
                    : -1 * Math.abs(e - r / 2) * 8
                }
              },
              {
                ease: 'power2.inOut',
                x: 0,
                y: 0,
                rotationZ: 0,
                rotationY: 0,
                scale: 1,
                scrollTrigger: {
                  trigger: e,
                  start: 'top bottom+=40%',
                  end: 'top top+=15%',
                  scrub: !0
                }
              }
            )
        }
      }),
      y.forEach(t => {
        for (let [e, r] of [...t.querySelectorAll('.word')].entries())
          n.gsap.fromTo(
            r.querySelectorAll('.char'),
            {
              'will-change': 'transform',
              scale: 0.01,
              x: (t, r, o) => (e % 2 ? 50 * t : -((o.length - t - 1) * 50))
            },
            {
              ease: 'power4',
              scale: 1,
              x: 0,
              scrollTrigger: {
                trigger: r,
                start: 'center bottom',
                end: 'bottom top-=40%',
                scrub: !0
              }
            }
          )
      }),
      b.forEach(t => {
        let e = t.querySelectorAll('.char'),
          r = e.length
        n.gsap.fromTo(
          e,
          {
            'will-change': 'transform',
            y: t => {
              let e =
                t < Math.ceil(r / 2)
                  ? t
                  : Math.ceil(r / 2) - Math.abs(Math.floor(r / 2) - t) - 1
              return (r / 2 - e + 6) * 130
            }
          },
          {
            ease: 'elastic.out(.4)',
            y: 0,
            stagger: { amount: 0.1, from: 'center' },
            scrollTrigger: {
              trigger: t,
              start: 'top bottom',
              end: 'bottom top-=50%',
              scrub: !0
            }
          }
        )
      }),
      M.forEach(t => {
        n.gsap.fromTo(
          t.querySelectorAll('.char'),
          {
            'will-change': 'transform',
            transformOrigin: '50% 100%',
            scaleY: 0
          },
          {
            ease: 'power3.in',
            opacity: 1,
            scaleY: 1,
            stagger: 0.05,
            scrollTrigger: {
              trigger: t,
              start: 'center center',
              end: '+=500%',
              scrub: !0,
              pin: t.parentNode
            }
          }
        )
      }),
      q.forEach(t => {
        let e = [...t.querySelectorAll('.word')],
          r = n.gsap.timeline({
            scrollTrigger: {
              trigger: t,
              start: 'center center',
              end: '+=100%',
              scrub: !0,
              pin: t.parentNode
            }
          })
        for (let [t, o] of e.entries())
          r.fromTo(
            o.querySelectorAll('.char'),
            {
              'will-change': 'transform',
              transformOrigin: () => (!t % 2 ? '50% 0%' : '50% 100%'),
              scaleY: 0
            },
            {
              ease: 'power1.inOut',
              scaleY: 1,
              stagger: { amount: 0.3, from: 'center' }
            },
            0
          )
      }),
      w.forEach(t => {
        let e = [...t.querySelectorAll('.word')]
        e.forEach(t => n.gsap.set(t.parentNode, { perspective: 1e3 })),
          n.gsap.fromTo(
            e,
            {
              'will-change': 'opacity, transform',
              z: () => n.gsap.utils.random(500, 950),
              opacity: 0,
              xPercent: t => n.gsap.utils.random(-100, 100),
              yPercent: t => n.gsap.utils.random(-10, 10),
              rotationX: () => n.gsap.utils.random(-90, 90)
            },
            {
              ease: 'expo',
              opacity: 1,
              rotationX: 0,
              rotationY: 0,
              xPercent: 0,
              yPercent: 0,
              z: 0,
              scrollTrigger: {
                trigger: t,
                start: 'center center',
                end: '+=300%',
                scrub: !0,
                pin: t.parentNode
              },
              stagger: { each: 0.006, from: 'random' }
            }
          )
      }),
      A.forEach(t => {
        for (let e of [...t.querySelectorAll('.word')]) {
          let t = e.querySelectorAll('.char'),
            r = t.length
          n.gsap.fromTo(
            t,
            {
              'will-change': 'transform, filter',
              transformOrigin: '50% 100%',
              scale: t => {
                let e =
                  t < Math.ceil(r / 2)
                    ? t
                    : Math.ceil(r / 2) - Math.abs(Math.floor(r / 2) - t) - 1
                return n.gsap.utils.mapRange(0, Math.ceil(r / 2), 0.5, 2.1, e)
              },
              y: t => {
                let e =
                  t < Math.ceil(r / 2)
                    ? t
                    : Math.ceil(r / 2) - Math.abs(Math.floor(r / 2) - t) - 1
                return n.gsap.utils.mapRange(0, Math.ceil(r / 2), 0, 60, e)
              },
              rotation: t => {
                let e =
                  t < Math.ceil(r / 2)
                    ? t
                    : Math.ceil(r / 2) - Math.abs(Math.floor(r / 2) - t) - 1
                return t < r / 2
                  ? n.gsap.utils.mapRange(0, Math.ceil(r / 2), -4, 0, e)
                  : n.gsap.utils.mapRange(0, Math.ceil(r / 2), 0, 4, e)
              },
              filter: 'blur(12px) opacity(0)'
            },
            {
              ease: 'power2.inOut',
              y: 0,
              rotation: 0,
              scale: 1,
              filter: 'blur(0px) opacity(1)',
              scrollTrigger: {
                trigger: e,
                start: 'top bottom+=40%',
                end: 'top top+=15%',
                scrub: !0
              },
              stagger: { amount: 0.15, from: 'center' }
            }
          )
        }
      }),
      S.forEach(t => {
        for (let [e, r] of [...t.querySelectorAll('.word')].entries()) {
          let t = r.querySelectorAll('.char')
          n.gsap.fromTo(
            t,
            {
              'will-change': 'transform',
              transformOrigin: `${e % 2 ? 0 : 100}% ${e % 2 ? 100 : 0}%`,
              scale: 0
            },
            {
              ease: 'power4',
              scale: 1,
              stagger: { each: 0.03, from: e % 2 ? 'end' : 'start' },
              scrollTrigger: {
                trigger: r,
                start: 'top bottom-=10%',
                end: 'top top',
                scrub: !0
              }
            }
          )
        }
      })
  }
;(0, l.preloadFonts)('cvn8slu').then(() => {
  document.body.classList.remove('loading'), T(), _()
})
