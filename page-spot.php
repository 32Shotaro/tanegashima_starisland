<?php get_header(); ?>

<!-- メイン -->
<main class="main">
  <!-- ファーストビュー -->
  <div class="pt185 md-pt130 sm-pt80">
    <div class="cols">
      <div class="col-12">
        <p class="ff-enSerif fz500 md-fz395 sm-fz285 lh1 ta-c js-animation-copy js-scroll">STAR SPOT</p>
        <h2 class="pt20 sm-pt10 ff-jaSerif fz180 md-fz160 sm-fz140 c-butter lh14 ls01 ta-c js-animation-copy js-scroll">星空スポット</h2>
        <ul class="d-f fxw-w jc-c g10 sm-g8 pt70 sm-pt45 sm-mlr-20">
          <li><a class="d-f ai-c cg20 bd bdw1 bdc-butter bdrs-max h30 plr15 fz85 lh12 td-n hov-bgc-typography-alpha5 hov-c-butter active-bgc-butter active-c-midnight is-active" href="/spot">すべて</a></li>
          <?php
          $terms = get_terms(array(
            'taxonomy' => 'spots-cat',
          ));
          if (!empty($terms) && !is_wp_error($terms)) : ?>
            <?php foreach ($terms as $term) : ?>
              <li><a class="d-f ai-c cg20 bd bdw1 bdc-butter bdrs-max h30 plr15 fz85 lh12 td-n hov-bgc-typography-alpha5 hov-c-butter active-bgc-butter active-c-midnight" href="<?= esc_url(get_term_link($term)); ?>"><?= esc_html($term->name); ?></a></li>
            <?php endforeach; ?>
          <?php else : ?>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </div>
  <!-- 星空スポット一覧 -->
  <?php $args = array(
    'post_type' => 'spots',
    'posts_per_page' => 6,
    'paged' => $paged,
    'taxonomy' => '',
  ); ?>
  <?php query_posts($args); ?>
  <div class="spot pt90 sm-pt60">
    <div class="cols-filld-full plr10">
      <div class="col-12">
        <div class="cols nega gutter10 rg70 sm-rg65">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
          <?php else: ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php if (function_exists('pagination') && $wp_query->max_num_pages > 1) { ?>
      <?php pagination(); ?>
    <?php } ?>
    <?php wp_reset_query(); ?>
  </div>
  <!-- 星空の周遊マップ -->
  <div class="pt160 md-fz110 sm-pt60 pb200 md-pb130 sm-pb60">
    <?php get_template_part("_components/parts-mapPdfLink"); // 星空の周遊マップリンク
    ?>
  </div>
  <?php get_template_part("_components/pankuzu", null, [["TOP", "/"], ["星空スポット", NULL]]); // パンくずリスト 
  ?>
</main>

<?php get_footer(); ?>
