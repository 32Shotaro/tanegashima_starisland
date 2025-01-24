<?php get_header(); ?>

<!-- メイン -->
<main class="main">
  <!-- ファーストビュー -->
  <div class="pt185 md-pt130 sm-pt80">
    <div class="cols">
      <div class="col-12">
        <p class="ff-enSerif fz500 md-fz395 sm-fz285 lh1 ta-c js-animation-copy js-scroll">404 ERROR</p>
        <h2 class="pt20 sm-pt10 ff-jaSerif fz180 md-fz160 sm-fz140 c-butter lh14 ls01 ta-c js-animation-copy js-scroll">ページが見つかりません</h2>
      </div>
    </div>
  </div>
  <!-- メインコンテンツ -->
  <div class="mt120 sm-mt100">
    <div class="cols">
      <div class="col-12 js-scroll scroll-view">
        <p class="ta-c">ご覧いただいているURLには<br class="d-n sm-d-b">ページはありません。<br>
          URLの入力間違いか、<br class="d-n sm-d-b">ページが移動している可能性があります。</p>
        <div class="pt100 sm-pt50 ta-c">
          <a class="d-if ai-c cg20 sm-cg15 td-n hov-c-butter hov-hook" href="/">
            <span class="d-b ff-jaSerif fz95 lh1">トップページへもどる</span>
            <span class="d-f ai-c jc-c bgc-typography-alpha5 bdrs-max w65 sm-w50 h60 sm-h50 ov-h hov-hook-animation-arrowWrapper"><i class="icon-arrow fz150"></i></span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <?php get_template_part("_components/pankuzu", null, [["TOP", "/"], ["404 NOT FOUND", NULL]]); // パンくずリスト 
  ?>
</main>


<?php get_footer(); ?>
