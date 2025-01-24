<?php get_header(); ?>

<!-- メイン -->
<main class="main">
  <!-- 星空スポット詳細 -->
  <article class="spots mt130 sm-mt80 pb180 md-pb120 sm-pb90 pos-r">
    <?php get_template_part("_components/parts-shootingStar", null, "mlr-a pos-a t-100 sm-t-60 r0 l0 z2"); // 流れ星のシェイプ 
    ?>
    <div class="cols-fluid-full ai-c bdt bdb bdw1 bdc-typography-alpha5">
      <div class="col-7 sm-col-12">
        <figure class="ov-h">
          <?php $imgset = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>
          <?php if ($imgset) { ?>
            <img loading="lazy" class="spots-thumb w-max asp-4-3 ob-cv js-scroll scroll-view" src="<?php echo $imgset[0]; ?>" width="800" height="534" alt="サムネイル写真">
          <?php } else { ?>
            <img loading="lazy" class="spots-thumb w-max asp-4-3 ob-cv js-scroll scroll-view" src="<?= get_template_directory_uri(); ?>/assets/images/common/noimg.webp" width="800" height="534" alt="サムネイル写真なし">
          <?php } ?>
        </figure>
      </div>
      <div class="col-5 sm-col-12 ptb40 md-ptb30 sm-ptb25 plr80 md-plr45 sm-plr30">
        <h1 class="ff-jaSerif fz285 md-fz225 sm-fz180 lh16 js-animation-copy js-scroll"><?php the_title(); ?></h1>
        <ul class="d-f fxw-w g10 sm-g5 pt35 sm-pt20 js-scroll scroll-view">
          <li><span class="d-f ai-c cg20 bgc-butter bdrs-max h30 plr15 fz85 c-midnight lh12">南種子町</span></li>
          <li><span class="d-f ai-c cg20 bgc-butter bdrs-max h30 plr15 fz85 c-midnight lh12">グルメ</span></li>
        </ul>
      </div>
    </div>
    <div class="pt130 md-pt80 sm-pt45">
      <div class="cols">
        <div class="col-12">
          <!-- shame：一部スタイルの調整と検証 -->
          <!-- shame：外部リンクの処理はどうしよう？ -->
          <div class="wp-content js-scroll scroll-view">
            <?php the_content(); ?>
          </div>
          <div class="pt65 sm-pt30 ta-r">
            <a class="d-if ai-c cg20 sm-cg15 td-n hov-c-butter hov-hook" href="/event">
              <span class="d-b ff-jaSerif fz95 lh1">星空の体験一覧へ戻る</span>
              <span class="d-f ai-c jc-c bgc-typography-alpha5 bdrs-max w65 sm-w50 h60 sm-h50 ov-h hov-hook-animation-arrowWrapper"><i class="icon-arrow fz150"></i></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </article>
  <?php get_template_part("_components/pankuzu", null, [["TOP", "/"], ["星空の体験", "/event"], [get_the_title(), NULL]]); // パンくずリスト 
  ?>
</main>

<?php get_footer(); ?>
