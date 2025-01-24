<?php get_header(); ?>

<!-- メイン -->
<main class="main">
  <!-- ファーストビューと直下セクションのラッパー -->
  <div class="top-fv_top-fv-after-wrapper">
    <!-- ファーストビュー -->
    <div class="top-fv d-f ai-c jc-c pos-r">
      <div class="cols">
        <div class="col-12">
          <div class="w-fc mlr-a js-scroll scroll-view"><img loading="lazy" class="md-zoom08 sm-zoom06" src="<?= get_template_directory_uri(); ?>/assets/images/common/logo.svg" width="186" height="961" alt="星の島、種子島"></div>
        </div>
      </div>
      <ul class="d-f fxd-c rg10 sm-rg0 pos-a r30 sm-r15 b60 sm-b30 z1">
        <li><a class="d-f ai-c jc-c bdrs-max w45 h45 td-n hov-bgc-typography-alpha5 hov-c-butter" href="https://www.facebook.com/profile.php?id=100081276648823&locale=ja_JP" target="_blank" rel="noopener"><i class="icon-facebook fz160"></i></a></li>
        <li><a class="d-f ai-c jc-c bdrs-max w45 h45 td-n hov-bgc-typography-alpha5 hov-c-butter" href="https://youtube.com/channel/UC1OGBkf-D8TkQMcPz6E2jNQ?si=3ZZJ7vo743YeE2tL" target="_blank" rel="noopener"><i class="icon-youtube fz160"></i></a></li>
        <li><a class="d-f ai-c jc-c bdrs-max w45 h45 td-n hov-bgc-typography-alpha5 hov-c-butter" href="https://www.instagram.com/tanegashima_starisland/" target="_blank" rel="noopener"><i class="icon-instagram fz160"></i></a></li>
      </ul>
      <!-- スクロールUI -->
      <div class="scroll-ui d-f fxd-c ai-c rg15 pos-a l30 sm-l15 b60 sm-b30">
        <div class="scroll-ui-bar bdl bdc-typography w1 h120 sm-h90 pos-r"></div>
        <div class="scroll-ui-text ff-enSans fz85 sm-fz70 lh11 ls02">SCROLL DOWN</div>
      </div>
      <img loading="lazy" class="img-bg js-rellax" src="<?= get_template_directory_uri(); ?>/assets/images/top/fv-bgi.webp" width="1440" height="1572" alt="夜空の背景">
    </div>
    <!-- FV以下のコンテンツ -->
    <div class="top-fv-after pb120 pos-r ov-h">
      <!-- 宇宙に一番近い島は、日本一の「星空の島」でした。 -->
      <section class="top-about pt60">
        <div class="cols jc-c">
          <div class="col-10 sm-col-12">
            <div class="w-fc ml-a sm-ml-20 pos-r">
              <section class="top-about-item d-f ai-c jc-c pos-r z1 js-scroll scroll-view">
                <div>
                  <p class="ff-enSans fz105 md-fz85 sm-fz75 lh1 ls015 ta-c">ABOUT ISLAND</p>
                  <h2 class="pt20 ff-jaSerif fz200 md-fz160 sm-fz140 c-butter lh16 ls015 ta-c">宇宙に一番近い島は、<br>日本一の「星空の島」でした。</h2>
                  <p class="pt25 sm-pt15 fz105 sm-fz95 ta-c">星空の島へ、ようこそ。<br>
                    種子島は日本で一番<br>
                    星空観測に適していると認定された島。<br>
                    日本でも有数の “公害が少ない島” だから、<br>
                    すごく星空が綺麗に見えるんです。</p>
                </div>
              </section>
              <?php get_template_part("_components/parts-shootingStar", null, "pos-a t-90 sm-t-40 r30 sm-r80 z2"); // 流れ星のシェイプ 
              ?>
            </div>
          </div>
        </div>
      </section>
      <!-- 動画セクション -->
      <section class="top-movie">
        <div class="cols">
          <div class="col-12">
            <div class="pos-r">
              <h2 class="top-movie-copy d-f fxd-rr ai-s cg30 sm-cg15 pos-a l-40 md-l-20 sm-l0 z2">
                <span class="d-b text-v bgc-butter p15 sm-p8 ff-jaSerif fz285 md-fz230 sm-fz180 c-midnight lh1 ls02 pos-r js-scroll scroll-view">日本一の星空を</span>
                <span class="d-b text-v bgc-butter p15 sm-p8 ff-jaSerif fz285 md-fz230 sm-fz180 c-midnight lh1 ls02 pos-r js-scroll scroll-view">贅沢に眺めよう</span>
              </h2>
              <div class="sm-mlr-30 js-scroll scroll-view">
                <video class="img-fluid-full" src="<?= get_template_directory_uri(); ?>/assets/images/top/movie.mp4" poster="<?= get_template_directory_uri(); ?>/assets/images/top/movie-poster.webp" preload="none" controls></video>
              </div>
              <?php get_template_part("_components/parts-shootingStar", null, "pos-a l-80 sm-l-a b-80 sm-r-20 z2"); // 流れ星のシェイプ 
              ?>
            </div>
          </div>
        </div>
      </section>
      <!-- 種子島の星空が美しい理由 -->
      <section class="pt100 sm-pt60 js-scroll scroll-view">
        <div class="cols ai-e rg30">
          <div class="col-6 sm-col-12">
            <p class="ff-enSerif fz500 md-fz400 sm-fz315 lh11 js-animation-copy js-scroll">Why are the<br>Stars beautiful ?</p>
            <h2 class="pt25 sm-pt15 ff-jaSerif fz180 md-fz160 sm-fz140 c-butter lh14 ls015">種子島の星空が美しい理由</h2>
          </div>
          <div class="col-6 sm-col-12">
            <p class="fz105 sm-fz100 lh2">種子島は、日本の離島の中でも「光害」が少なく、環境省により「日本一の星空」に認定された、美しい星空を誇る島です。特別な山登りをしなくても、ビーチや公園など身近な場所から気軽に星空を楽しめるのが魅力。 このサイトでは、特に星空観賞に適したスポットを厳選してご紹介しています。 ぜひ参考にして、種子島での星空の旅を満喫してください。</p>
          </div>
        </div>
      </section>
      <!-- 特殊シェイプの背景 -->
      <div class="js-rellax-wrapper"><img loading="lazy" class="img-bg js-rellax" src="<?= get_template_directory_uri(); ?>/assets/images/top/fv-after-bg.webp" width="1440" height="1640" alt="夜空の背景"></div>
    </div>
  </div>
  <!-- 星空スポット -->
  <section class="pt120 sm-pt80 pb120 sm-pb110">
    <div class="cols">
      <div class="col-12">
        <p class="ff-enSerif fz500 md-fz395 sm-fz285 lh1 ta-c js-animation-copy js-scroll">STAR SPOT</p>
        <h2 class="pt20 sm-pt10 ff-jaSerif fz180 md-fz160 sm-fz140 c-butter lh14 ls01 ta-c js-animation-copy js-scroll">星空スポット</h2>
      </div>
    </div>
    <!-- 星空スポット一覧 -->
    <div class="spot top-spot pt90 sm-pt60">
      <div class="cols-filld-full plr10">
        <div class="col-12">
          <div class="cols nega gutter10 rg70 sm-rg65">
            <?php $args = array(
              'post_type' => 'spots',
              'posts_per_page' => 6,
              'paged' => $paged,
              'taxonomy' => '',
            ); ?>
            <?php $loop = new WP_Query($args); ?>
            <?php if ($loop->have_posts()): while ($loop->have_posts()): $loop->the_post(); ?>
                <article class="col-4 md-col-6 sm-col-12 js-scroll scroll-view">
                  <figure><a class="d-b ov-h hov-hook" href="<?php the_permalink(); ?>">
                      <?php $imgset = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>
                      <?php if ($imgset) { ?>
                        <img loading="lazy" class="img-fluid-full asp-16-9 ob-cv hov-hook-scale" src="<?php echo $imgset[0]; ?>" width="466" height="355" alt="<?php the_title(); ?>">
                      <?php } else { ?>
                        <img loading="lazy" class="img-fluid-full asp-16-9 ob-cv hov-hook-scale" src="<?= get_template_directory_uri(); ?>/assets/images/common/noimg.webp" width="466" height="355" alt="<?php the_title(); ?>">
                      <?php } ?>
                    </a></figure>
                  <?php
                  // 投稿に紐づけられたタクソノミーを取得
                  $terms = get_the_terms(get_the_ID(), 'spots-cat');
                  if (!empty($terms) && !is_wp_error($terms)) {
                    $first_term = $terms[0];
                    // 最初のタクソノミー名を取得
                    $spots_cat_name = $first_term->name;
                  } else {
                    // 未設定の場合のデフォルト値
                    $spots_cat_name = '未設定';
                  }
                  ?>
                  <p class="d-f ai-c jc-c bg-main bdrs10 w-fc h40 mt-40 mlr-a plr45 fz90 c-butter lh12 ta-c pos-r z2"><span class="d-b lc1"><?= esc_html($spots_cat_name); ?></span></p>
                  <div class="bg-main mt-20 mlr30 sm-mlr20 ptb30 plr40 sm-plr25 pos-r z1">
                    <div class="d-f fxw-w ai-c cg15 rg5">
                      <h2 class="ff-jaSerif fz140 sm-fz130 lh14"><?php the_title(); ?></h2>
                      <span class="ff-enSans fz70 lh14"><?php the_field('title_en'); ?></span>
                    </div>
                    <p class="pt15 sm-pt10 fz105 sm-fz100"><span class="lc4 sm-lc3"><?php the_field('read'); ?></span></p>
                  </div>
                  <div class="plr15 ta-r">
                    <a class="d-if ai-c cg20 sm-cg15 td-n hov-c-butter hov-hook" href="<?php the_permalink(); ?>">
                      <span class="d-b ff-enSans fz95 lh1">VIEW MORE</span>
                      <span class="d-f ai-c jc-c bgc-typography-alpha5 bdrs-max w65 sm-w50 h60 sm-h50 ov-h hov-hook-animation-arrowWrapper"><i class="icon-arrow fz150"></i></span>
                    </a>
                  </div>
                </article>
              <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="cols jc-c pt80 sm-pt60 js-scroll scroll-view">
      <div class="col-6 md-col-8 sm-col-12">
        <a class="d-f ai-c jc-sb cg15 bd bdw1 bdc-typography ptb20 sm-ptb15 plr40 sm-plr30 lh120 td-n pos-r hov-hook hov-bdc-butter hov-c-butter hov-animation-bgfill" href="/spot">
          <span class="ff-jaSerif fz115 sm-fz100">すべての星空スポットを見る</span>
          <i class="icon-arrow fz150"></i>
          <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a t-7 l-7 z1 hov-hook-bgc-butter"></i>
          <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a t-7 r-7 z1 hov-hook-bgc-butter"></i>
          <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a b-7 r-7 z1 hov-hook-bgc-butter"></i>
          <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a b-7 l-7 z1 hov-hook-bgc-butter"></i>
        </a>
      </div>
    </div>
  </section>
  <!-- 星空の体験 -->
  <section class="top-event pt85 pb110 pos-r ov-h">
    <div class="cols">
      <div class="col-2 sm-col-12">
        <h2 class="top-event-copy z2 js-scroll scroll-view"><span class="d-b text-v sm-text-h bgc-butter w-fc sm-ml-30 p15 sm-p10 ff-jaSerif fz285 md-fz245 sm-fz200 c-midnight lh1 ls02 pos-r">星空の体験</span></h2>
      </div>
      <div class="col-10 sm-col-12 mt110 md-mt85 sm-mt60">
        <div class="top-event-slide js-top-event-slide js-scroll scroll-view">
          <div class="swiper">
            <div class="swiper-wrapper">
              <?php $args = array(
                'post_type' => 'post',
                'posts_per_page' => 5,
                'paged' => $paged,
                'taxonomy' => '',
              ); ?>
              <?php $loop = new WP_Query($args); ?>
              <?php if ($loop->have_posts()): while ($loop->have_posts()): $loop->the_post(); ?>
                  <article class="swiper-slide">
                    <a class="d-b td-n hov-c-butter hov-hook" href="<?php the_permalink(); ?>">
                      <figure class="ov-h">
                        <?php $imgset = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>
                        <?php if ($imgset) { ?>
                          <img loading="lazy" class="spots-thumb w-max asp-4-3 ob-cv js-scroll scroll-view" src="<?php echo $imgset[0]; ?>" width="360" height="240" alt="サムネイル写真">
                        <?php } else { ?>
                          <img loading="lazy" class="spots-thumb w-max asp-4-3 ob-cv js-scroll scroll-view" src="<?= get_template_directory_uri(); ?>/assets/images/common/noimg.webp" width="360" height="240" alt="サムネイル写真なし">
                        <?php } ?>
                      </figure>
                      <h3 class="pt30 sm-pt25 sm-pt15 ff-jaSerif fz140 sm-fz130 lh140"><?php the_title(); ?></h3>
                      <p class="pt15 sm-pt10 fz105 sm-fz95 lh2 lc4 sm-lc2">
                        <?php
                        $excerpt = get_the_excerpt();
                        echo mb_strlen($excerpt) > 65 ? mb_substr($excerpt, 0, 65) . '...' : $excerpt;
                        ?>
                      </p>
                      <?php
                      // 投稿に紐づけられたカテゴリ（タクソノミー）を取得
                      $terms = get_the_terms(get_the_ID(), 'category'); // 'category' はデフォルトカテゴリタクソノミー
                      if (!empty($terms) && !is_wp_error($terms)) : ?>
                        <ul class="d-f fxw-w g10 sm-g5 pt20 sm-pt15">
                          <?php foreach ($terms as $term) : ?>
                            <li><span class="d-f ai-c cg20 bgc-butter bdrs-max h30 plr15 fz85 c-midnight lh12"><?= esc_html($term->name); ?></span></li>
                          <?php endforeach; ?>
                        </ul>
                      <?php else : ?>
                        <p class="d-f ai-c cg20 bgc-butter bdrs-max h30 mt20 sm-mt15 plr15 fz85 c-midnight lh12">カテゴリが設定されていません。</p>
                      <?php endif; ?>
                    </a>
                  </article>
                <?php endwhile; ?>
              <?php else : ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cols jc-c pt80 sm-pt60 js-scroll scroll-view">
      <div class="col-6 md-col-8 sm-col-12">
        <a class="d-f ai-c jc-sb cg15 bd bdw1 bdc-typography ptb20 sm-ptb15 plr40 sm-plr30 lh120 td-n pos-r hov-hook hov-bdc-butter hov-c-butter hov-animation-bgfill" href="/event">
          <span class="ff-jaSerif fz115 sm-fz100">すべての星空体験を見る</span>
          <i class="icon-arrow fz150"></i>
          <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a t-7 l-7 z1 hov-hook-bgc-butter"></i>
          <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a t-7 r-7 z1 hov-hook-bgc-butter"></i>
          <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a b-7 r-7 z1 hov-hook-bgc-butter"></i>
          <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a b-7 l-7 z1 hov-hook-bgc-butter"></i>
        </a>
      </div>
    </div>
    <div class="js-rellax-wrapper"><img loading="lazy" class="img-bg js-rellax" src="<?= get_template_directory_uri(); ?>/assets/images/top/event-bg.webp" width="1440" height="945" alt="夜空の背景"></div>
  </section>
  <!-- 星の島 種子島へのアクセス -->
  <section class="top-access pt120 sm-pt80">
    <div class="cols">
      <div class="col-12">
        <p class="ff-enSerif fz500 md-fz395 sm-fz285 lh1 ta-c js-animation-copy js-scroll">ACCESS</p>
        <h2 class="pt20 sm-pt10 ff-jaSerif fz180 md-fz160 sm-fz140 c-butter lh14 ls01 ta-c js-animation-copy js-scroll">星の島 種子島へのアクセス</h2>
      </div>
    </div>
    <div class="cols rg90 md-rg70 sm-rg55 pt80 md-pt45 sm-pt30">
      <div class="col-6 md-col-5 sm-col-12 ord2 sm-ord1 pos-r">
        <picture class="d-f ai-c jc-c w-fc mtb-a mlr-a pos-a sm-pos-s t0 r0 b0 l0 js-scroll scroll-view">
          <source srcset="<?= get_template_directory_uri(); ?>/assets/images/top/access-map-sm.webp" media="(max-width: 767px)" width="156" height="390" type="image/webp">
          <img loading="lazy" class="md-zoom08 sm-zoom1" src="<?= get_template_directory_uri(); ?>/assets/images/top/access-map.webp" width="268" height="672" alt="種子島の地図">
        </picture>
      </div>
      <div class="col-6 md-col-7 sm-col-12 d-f fxd-c rg55 sm-rg45 ord1 sm-ord2">
        <dl class="js-scroll scroll-view">
          <dt class="d-f ai-c jc-sb cg15">
            <p class="bgc-butter ptb8 sm-ptb6 plr15 sm-plr10 ff-jaSerif fz140 sm-fz105 c-midnight lh12 lts015">飛行機</p>
            <p class="d-f cg15 sm-cg10"><a class="d-f ai-c cg20 sm-cg15 bd bdw1 bdc-butter bdrs-max h30 plr15 sm-plr10 fz85 c-butter lh12 td-n hov-bgc-typography-alpha5" href="https://www.jac.co.jp/tourism/tanegashima/" target="_blank" rel="noopener">JAC<i class="d-b bgc-butter bdrs-max w5 h5"></i></a></p>
          </dt>
          <dd class="d-f ai-c cg20 pt15 fz105 sm-fz100 lh140">
            <p class="fxs0 lc1">鹿児島空港</p>
            <i class="fxg1 bdt bdw1 bdc-typography"></i>
            <p class="d-f fxs0 cg30">
              <span class="lc1">種子島空港</span>
              <span class="lc1">40分</span>
            </p>
          </dd>
        </dl>
        <dl class="js-scroll scroll-view">
          <dt class="d-f ai-c jc-sb cg15">
            <p class="bgc-butter ptb8 sm-ptb6 plr15 sm-plr10 ff-jaSerif fz140 sm-fz105 c-midnight lh12 lts015">高速船</p>
            <p class="d-f cg15 sm-cg10">
              <a class="d-f ai-c cg20 sm-cg15 bd bdw1 bdc-butter bdrs-max h30 plr15 sm-plr10 fz85 c-butter lh12 td-n hov-bgc-typography-alpha5" href="https://www.tykousoku.jp/fare_time/" target="_blank" rel="noopener">高速船<i class="d-b bgc-butter bdrs-max w5 h5"></i></a>
            </p>
          </dt>
          <dd class="d-f ai-c cg20 pt15 fz105 sm-fz100 lh140">
            <p class="fxs0 lc1">鹿児島港</p>
            <i class="fxg1 bdt bdw1 bdc-typography"></i>
            <p class="d-f fxs0 cg30">
              <span class="lc1">西之表港</span>
              <span class="lc1">1時間35分</span>
            </p>
          </dd>
        </dl>
        <dl class="js-scroll scroll-view">
          <dt class="d-f ai-c jc-sb cg15">
            <p class="bgc-butter ptb8 sm-ptb6 plr15 sm-plr10 ff-jaSerif fz140 sm-fz105 c-midnight lh12 lts015">フェリー</p>
            <p class="d-f cg15 sm-cg10">
              <a class="d-f ai-c cg20 sm-cg15 bd bdw1 bdc-butter bdrs-max h30 plr15 sm-plr10 fz85 c-butter lh12 td-n hov-bgc-typography-alpha5" href="https://cosmoline.jp/" target="_blank" rel="noopener">わかさ<i class="d-b bgc-butter bdrs-max w5 h5"></i></a>
              <a class="d-f ai-c cg20 sm-cg15 bd bdw1 bdc-butter bdrs-max h30 plr15 sm-plr10 fz85 c-butter lh12 td-n hov-bgc-typography-alpha5" href="https://www.yakushimaferry.com/" target="_blank" rel="noopener">ハイビスカス<i class="d-b bgc-butter bdrs-max w5 h5"></i></a>
            </p>
          </dt>
          <dd class="d-f ai-c cg20 pt15 fz105 sm-fz100 lh140">
            <p class="fxs0 lc1">鹿児島港</p>
            <i class="fxg1 bdt bdw1 bdc-typography"></i>
            <p class="d-f fxs0 cg30">
              <span class="lc1">西之表港</span>
              <span class="lc1">3時間30分</span>
            </p>
          </dd>
        </dl>
      </div>
      <div class="col-12 ord3 sm-ord3 js-scroll scroll-view">
        <section class="bgc-typography-alpha2 bdrs10 pt40 pb40 sm-pb30 plr40 sm-plr30 pos-r">
          <h3 class="ff-jaSerif fz130 sm-fz115 c-butter lh140 ls015 pos-a t-10 l40 sm-l30">鹿児島までのアクセス</h3>
          <div class="d-f fxd-c rg15 sm-fz85">
            <dl class="d-f cg15">
              <dt class="fxs0 bgc-butter h-max ptb8 sm-ptb5 plr15 sm-plr10 c-midnight lh16">飛行機</dt>
              <dd class="ptb8 sm-ptb5 lh16">羽田空港 ー 鹿児島空港<br class="d-n sm-d-i">約2時間</dd>
            </dl>
            <dl class="d-f cg15">
              <dt class="fxs0 bgc-butter h-max ptb8 sm-ptb5 plr15 sm-plr10 c-midnight lh16">新幹線</dt>
              <dd class="ptb8 sm-ptb5 lh16">東京駅 ー 博多 ー 鹿児島中央駅<br class="d-n sm-d-i">約5時間＋約1時間40分</dd>
            </dl>
          </div>
        </section>
      </div>
    </div>
  </section>
  <!-- 星空の周遊マップ -->
  <div class="pt160 md-fz110 sm-pt60 pb200 md-pb130 sm-pb60">
    <?php get_template_part("_components/parts-mapPdfLink"); // 星空の周遊マップリンク
    ?>
  </div>
</main>

<?php get_footer(); ?>
