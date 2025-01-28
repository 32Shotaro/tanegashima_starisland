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
  if ($('.js-rellax').length) {
    $(document).ready(function () {
      // 読み込み直後に初期位置を設定
      $('.img-bg.js-rellax').each(function () {
        const $this = $(this);
        const section = $this.parent(); // .img-bg が存在するセクション
    
        // セクションの位置を取得
        const sectionTop = section.offset().top;
        const sectionHeight = section.outerHeight();
        const windowHeight = $(window).height();
        const scrollTop = $(window).scrollTop();
    
        // 初期位置計算
        const scrollRange = sectionHeight + windowHeight;
        const sectionScrollTop = scrollTop - (sectionTop - windowHeight);
        const percentage = Math.min(Math.max(sectionScrollTop / scrollRange, 0), 1);
        const translateY = -20 + percentage * 20; // 初期位置を -20% ~ 0% に設定
    
        // 初期位置を適用
        $this.css({
          transform: `translateY(${translateY}%)`,
          transition: 'none', // 初期位置設定時はアニメーションを無効化
        });
      });
    
      // 初期位置設定後に transition を有効化
      setTimeout(function () {
        $('.img-bg.js-rellax').css('transition', 'transform 100ms linear');
      }, 50); // 微小な遅延を加えて transition を有効化
    
      // スクロール時の更新処理
      function updateParallax() {
        const scrollTop = $(window).scrollTop();
        const windowHeight = $(window).height();
    
        $('.img-bg.js-rellax').each(function () {
          const $this = $(this);
          const section = $this.parent();
          const sectionTop = section.offset().top;
          const sectionHeight = section.outerHeight();
          const sectionBottom = sectionTop + sectionHeight;
    
          const scrollRange = sectionHeight + windowHeight;
          const sectionScrollTop = scrollTop - (sectionTop - windowHeight);
          const percentage = Math.min(Math.max(sectionScrollTop / scrollRange, 0), 1);
    
          const translateY = -20 + percentage * 20;
    
          $this.css('transform', `translateY(${translateY}%)`);
        });
      }
    
      $(window).on('scroll', updateParallax);
      updateParallax(); // 初期化処理
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
          // <br> タグを .js-animation-copy-breakに変換
          newText += `<span class="js-animation-copy-break"></span>`;
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
