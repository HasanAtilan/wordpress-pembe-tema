/**
 * Welcome to your Workbox-powered service worker!
 *
 * You'll need to register this file in your web app and you should
 * disable HTTP caching for this file too.
 * See https://goo.gl/nhQhGp
 *
 * The rest of the code is auto-generated. Please don't update this file
 * directly; instead, make changes to your Workbox build configuration
 * and re-run your build process.
 * See https://goo.gl/2aRDsh
 */

importScripts("gece/workbox-sw.js");
workbox.setConfig({modulePathPrefix: "gece"});

workbox.core.setCacheNameDetails({prefix: "eleventy-plugin-pwa"});

workbox.core.skipWaiting();

workbox.core.clientsClaim();

/**
 * The workboxSW.precacheAndRoute() method efficiently caches and responds to
 * requests for URLs in the manifest.
 * See https://goo.gl/S9QRab
 */
self.__precacheManifest = [
  {
    "url": "404.html",
    "revision": "d423891d3e0890b1686ac9e1594f977c"
  },
  {
    "url": "about/index.html",
    "revision": "cc47f0eadc8b24b489c2d82855d0b402"
  },
  {
    "url": "admin/index.html",
    "revision": "3c072cd98d85aa3866c79a13c8bb2d47"
  },
  {
    "url": "article/index.html",
    "revision": "9b4fcba1ccadb696bcefd779e2093eba"
  },
  {
    "url": "article/once-upon-a-time-in-hollywood-review/index.html",
    "revision": "7c1f8af0d779906bc62d7922baa35518"
  },
  {
    "url": "article/tags/all/index.html",
    "revision": "158d2b006da7f35dae51c3203bcbea20"
  },
  {
    "url": "article/tags/index.html",
    "revision": "813261fac354df80ba2db8616b57b8b7"
  },
  {
    "url": "article/tags/posts/index.html",
    "revision": "06f7380af7426a1af96f3c58193f10b6"
  },
  {
    "url": "article/tags/random/index.html",
    "revision": "03fce806fc161359c4c433aea861a5b8"
  },
  {
    "url": "article/tags/tags/index.html",
    "revision": "46d3b96170eeefc1c486e9c0b0a0cfc1"
  },
  {
    "url": "article/we-need-to-talk/index.html",
    "revision": "71ed0fdcf9ae04d5dcc35bcbc2db60ec"
  },
  {
    "url": "assets/fonts/FiraCode-Medium.woff",
    "revision": "4dee11c0d1acf3da2be1957cb5299315"
  },
  {
    "url": "assets/fonts/FiraCode-Medium.woff2",
    "revision": "d293dc7c066d907f308b9924a60f1700"
  },
  {
    "url": "assets/img/book.svg",
    "revision": "ea78ab6d27377107c787f3cb3d1f997d"
  },
  {
    "url": "assets/img/contents/once-upon-a-time-in-hollywood.jpg",
    "revision": "8a9a2803228a23408ce924241d30e075"
  },
  {
    "url": "assets/img/logo.svg",
    "revision": "6895274f2279755eeeef2d27c560b822"
  },
  {
    "url": "assets/img/me.png",
    "revision": "b3b34fc2162bec018cfc0b30cb8ae8c9"
  },
  {
    "url": "assets/img/twitter.svg",
    "revision": "508fa6921dca4ae723d36ddeb46bd12f"
  },
  {
    "url": "assets/js/Okitavera.js",
    "revision": "e70aac4e6f89fd51bf619c8af03be910"
  },
  {
    "url": "assets/js/Okitavera.mjs",
    "revision": "203eea3fb8ddb337a6c30548fee98c3f"
  },
  {
    "url": "assets/js/polyfills/ScrollBehaviour.js",
    "revision": "2d99b0a60863d4bbc2e6bea8e6ba819e"
  },
  {
    "url": "google086b6e7273283dfb.html",
    "revision": "7cbb9049d97fcd7c2e13699739e1bbc0"
  },
  {
    "url": "index.html",
    "revision": "d4cbc9e7dc5b14e6e2b5861380534fcc"
  },
  {
    "url": "webmanifest.json",
    "revision": "a946d08d8c3e76b53e14fec5dcc7fbe2"
  }
].concat(self.__precacheManifest || []);
workbox.precaching.precacheAndRoute(self.__precacheManifest, {});

workbox.routing.registerRoute(/^.*\.(html|jpg|png|gif|webp|ico|svg|woff2|woff|eot|ttf|otf|ttc|json)$/, new workbox.strategies.StaleWhileRevalidate(), 'GET');
workbox.routing.registerRoute(/^https?:\/\/fonts\.googleapis\.com\/css/, new workbox.strategies.StaleWhileRevalidate(), 'GET');
