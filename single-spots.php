<?php get_header(); ?>

<!-- メイン -->
<main class="main">
  <!-- 星空スポット詳細 -->
  <article class="spots pb180 md-pb120 sm-pb90 pos-r">
    <div class="cols cols-1240">
      <div class="col-12">
        <figure class="sm-mlr-30 js-scroll scroll-view">
          <?php $imgset = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>
          <?php if ($imgset) { ?>
            <img loading="lazy" class="img-fluid-full asp-16-9 ob-cv" src="<?php echo $imgset[0]; ?>" width="1240" height="630" alt="サムネイル写真">
          <?php } else { ?>
            <img loading="lazy" class="img-fluid-full asp-16-9 ob-cv" src="<?= get_template_directory_uri(); ?>/assets/images/common/noimg.webp" width="1240" height="630" alt="サムネイル写真">
          <?php } ?>
        </figure>
        <div class="pos-r">
          <?php get_template_part("_components/parts-shootingStar", null, "pos-a t-60 sm-t-30 r-30 z2"); // 流れ星のシェイプ 
          ?>
          <h1 class="mt-60 sm-mt-30 ff-jaSerif fz500 md-fz320 sm-fz280 lh16 js-animation-copy js-scroll"><?php the_title(); ?></h1>
          <div class="d-f sm-d-b ai-c js-scroll scroll-view">
            <p class="ff-enSans fz130 pt5 sm-fz100"><?php the_field('title_en'); ?></p>
            <ul class="fxw-w g10 sm-g5 sm-pt10 pl20 sm-pl0">
              <li><span class="d-f sm-d-ib ai-c cg20 bgc-butter bdrs-max h30 sm-h30 sm-ptb3 plr15 fz85 c-midnight lh12 lh19">南種子町</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="pt100 md-pt80 sm-pt70">
      <!-- shame：一部スタイルの調整と検証 -->
      <div class="js-scroll scroll-view">
        <div class="cols jc-c gutter100 md-gutter50 sm-gutter30">
          <div class="col-12">
            <div class="bd bdw1 bdc-typography p60 md-p45 sm-p30 pos-r">
              <p class="fz105 sm-fz95"><?php the_field('read'); ?></p>
              <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a t-7 l-7 z1"></i>
              <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a t-7 r-7 z1"></i>
              <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a b-7 r-7 z1"></i>
              <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a b-7 l-7 z1"></i>
            </div>
          </div>
          <div class="col-6 sm-col-12 mt100 sm-mt70"><img loading="lazy" class="img-fuild-full asp-4-3" src="<?php the_field('point_pic'); ?>" width="470" height="300" alt="星空撮影スポット"></div>
          <div class="col-6 sm-col-12 mt120 sm-mt50">
            <p class="ff-enSans">POINT</p>
            <h2 class="ff-jaSerif c-butter fz180 sm-fz140 lh14">星空撮影スポットとしての魅力</h2>
            <p class="mt30"><?php the_field('point_text'); ?></p>
          </div>
          <div class="col-6 sm-col-12 mt100 sm-mt80 pr25 sm-pr15">
            <div
              class="bgc-typography-alpha5 bdrs10 pt45 sm-pt35 pb40 sm-pb25 plr40 sm-plr20 pos-r js-scroll scroll-view">
              <h3 class="c-butter pos-a t-15 l40 sm-l20 z1 ff-jaSerif fz140 sm-fz110">西之表港・空港からのアクセス</h3>
              <div class="d-f fxd-c rg15 sm-fz90">
                <dl class="d-f cg25 sm-cg15">
                  <dt class="fxs0 bgc-butter h-max ptb5 plr15 sm-plr10 c-midnight lh16">西之表港から</dt>
                  <dd class="ptb8 sm-ptb5 lh16"><?php the_field('access_port'); ?></dd>
                </dl>
                <dl class="d-f cg25 sm-cg15">
                  <dt class="fxs0 bgc-butter h-max ptb5 plr15 sm-plr10 c-midnight lh16">種子島空港から</dt>
                  <dd class="ptb8 sm-ptb5 lh16"><?php the_field('access_airport'); ?></dd>
                </dl>
              </div>
            </div>
          </div>
          <div class="col-6 sm-col-12 mt100 sm-mt60 pl25 sm-pl15">
            <div
              class="bgc-typography-alpha5 bdrs10 pt45 sm-pt35 pb40 sm-pb25 plr40 sm-plr20 pos-r js-scroll scroll-view">
              <h3 class="c-butter pos-a t-15 l40 sm-l20 z1 ff-jaSerif fz140 sm-fz110">注意点</h3>
              <div class="wp-content_ulWrapper sm-fz90">
                <?php the_field('warning'); ?>
              </div>
            </div>
          </div>
          <div class="col-12 mt70 sm-mt60 js-scroll scroll-view">
            <div class="d-f sm-d-b">
              <div class="d-f ai-c mr30">
                <p class="mr20">所在地</p>
                <p class="bdw1 bdrs-max bd bdc-butter ptb8 sm-ptb5 plr30 sm-plr20"><?php the_field('location'); ?></p>
              </div>
              <div class="d-f ai-c mr30 sm-mt15">
                <p class="mr20">駐車場</p>
                <p class="bdw1 bdrs-max bd bdc-butter ptb8 sm-ptb5 plr30 sm-plr20"><?php the_field('parking'); ?></p>
              </div>
              <div class="d-f ai-c sm-mt15">
                <p class="mr20">お手洗い</p>
                <p class="bdw1 bdrs-max bd bdc-butter ptb8 sm-ptb5 plr30 sm-plr20"><?php the_field('restroom'); ?></p>
              </div>
            </div>
          </div>
          <div class="col-6 md-col-8 sm-col-12 mt150 sm-mt120">
            <a class="d-f ai-c jc-sb cg15 bd bdw1 bdc-typography ptb20 sm-ptb15 plr40 sm-plr30 lh120 td-n pos-r hov-hook hov-bdc-butter hov-c-butter hov-animation-bgfill" href="/spot">
              <span class="ff-jaSerif fz115 sm-fz100">星空スポット一覧へもどる</span>
              <i class="icon-arrow fz150"></i>
              <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a t-7 l-7 z1 hov-hook-bgc-butter"></i>
              <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a t-7 r-7 z1 hov-hook-bgc-butter"></i>
              <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a b-7 r-7 z1 hov-hook-bgc-butter"></i>
              <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a b-7 l-7 z1 hov-hook-bgc-butter"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  </article>
  <?php get_template_part("_components/pankuzu", null, [["TOP", "/"], ["星空スポット", "/spot"], [get_the_title(), NULL]]); // パンくずリスト 
  ?>
</main>

<?php get_footer(); ?>
