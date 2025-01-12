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
