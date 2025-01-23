$(document).ready(function () {
  // グローバルナビのトリガー
  const $trigger = $('.js-gNav-trigger');
  const $nav = $('.gNav');

  if ($trigger.length && $nav.length) {
    $trigger.on('click', function () {
      // トリガーに .is-active をトグル
      $(this).toggleClass('is-active');

      // ナビゲーションに .is-visible をトグル
      $nav.toggleClass('is-visible');
    });
  }

  // ページ内アンカーのスムーススクロール
  $('a[href^="#"]').on('click', function (e) {
    const targetId = $(this).attr('href');
    const $targetElement = $(targetId);

    if ($targetElement.length) {
      e.preventDefault();

      // スムーススクロール
      $('html, body').animate(
        {
          scrollTop: $targetElement.offset().top,
        },
        600 // アニメーションの速度 (ミリ秒)
      );
    }
  });

  //// 読み込み時、スクロール時にアニメーションさせるためのクラス付与
  // 読み込み時に画面内に入っていたら、要素の順番にアニメーション表示
  Position = $(window).height() + $(window).scrollTop();
  $('.js-scroll').each(function (i) {
    if (Position > $(this).offset().top) {
      $(this)
        .delay(60 * i)
        .queue(function () {
          $(this).addClass('is-scrolled');
        });
    }
  });
  // スクロールして、画面内にきたらclass付与
  $(window).scroll(function () {
    scrollPosition = $(window).height() + $(window).scrollTop();
    $('.js-scroll').each(function () {
      if (scrollPosition - 150 > $(this).offset().top) {
        $(this).addClass('is-scrolled');
      }
    });
  });

  //// h4見出しの装飾用のDOM操作
  // .wp-content内のh4要素
  if ($('.wp-content h4').length) {
    $('.wp-content h4').each(function () {
      $(this).append('<i class="js-titleH4-downArrow"></i>');
    });
  }
  // .title-h4 要素
  if ($('.title-h4').length) {
    $('.title-h4').each(function () {
      $(this).append('<i class="js-titleH4-downArrow"></i>');
    });
  }

  // パララックス
  if (document.querySelectorAll('.js-rellax').length) {
    var rellax = new Rellax('.js-rellax', {
      speed: -2,
    });
  }

  // トップページ：コピーライトのアニメーション用JS
  if ($('.js-animation-copy').length) {
    $('.js-animation-copy').each(function () {
      var $this = $(this);
      var htmlContent = $this.html();
      var newText = '';
      var delay = 0;
      var animationDuration = 800;

      // <br> または <br をそのまま維持しつつ、文字だけを処理
      var charArray = htmlContent.split(/(<br\s*\/?>)/gi);

      charArray.forEach(function (chunk) {
        if (chunk.match(/<br\s*\/?>/gi)) {
          // <br> タグはそのまま追加
          newText += chunk;
        } else {
          // 通常の文字を1文字ずつ処理
          for (var i = 0; i < chunk.length; i++) {
            var char = chunk[i] === ' ' ? '&nbsp;' : chunk[i];
            newText += `<span style="animation-delay: ${delay}ms">${char}</span>`;
            delay += animationDuration / htmlContent.replace(/<br\s*\/?>/gi, '').length;
          }
        }
      });

      // 処理後のHTMLを設定
      $this.html(newText);
    });
  }

  // トップページのスワイパー
  if ($('.js-top-event-slide').length) {
    var swiper = new Swiper('.js-top-event-slide .swiper', {
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
