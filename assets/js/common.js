// グローバルナビのトリガー
document.addEventListener('DOMContentLoaded', function () {
  const trigger = document.querySelector('.js-gNav-trigger');
  const nav = document.querySelector('.gNav');

  if (!trigger || !nav) {
    console.error('必要な要素が見つかりません: .js-gNav-trigger または .gNav');
    return; // 要素が存在しない場合は処理を終了
  }

  trigger.addEventListener('click', function () {
    // トリガーに .is-active をトグル
    this.classList.toggle('is-active');

    // ナビゲーションに .is-visible をトグル
    nav.classList.toggle('is-visible');
  });
});

// トップページのスワイパー
// shame：.js-top-event-slideが無いページでのエラー回避
document.addEventListener('DOMContentLoaded', function () {
  const topEventSlides = document.querySelectorAll('.js-top-event-slide');

  if (topEventSlides.length > 0) {
    // .js-top-event-slide が存在する場合のみ処理を進める
    topEventSlides.forEach((topEventSlide) => {
      const swiperContainer = topEventSlide.querySelector('.swiper');

      if (swiperContainer) {
        // スワイパーを初期化
        const swiper = new Swiper(swiperContainer, {
          slidesPerView: 1.3,
          spaceBetween: 15,
          speed: 1000,
          autoplay: {
            delay: 4000,
          },
          breakpoints: {
            999: {
              slidesPerView: 2.8,
              spaceBetween: 40,
            },
            768: {
              slidesPerView: 2.095,
              spaceBetween: 30,
            },
          },
        });
      }
    });
  }
});

// ページ内アンカーのスムーススクロール
document.addEventListener('DOMContentLoaded', function () {
  const anchorLinks = document.querySelectorAll('a[href^="#"]');

  anchorLinks.forEach((anchor) => {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      const targetElement = document.querySelector(targetId);

      if (targetElement) {
        e.preventDefault();

        // スムーススクロール
        window.scrollTo({
          top: targetElement.offsetTop,
          behavior: 'smooth',
        });
      }
    });
  });
});
