<?php get_header(); ?>

<!-- メイン -->
<main class="main">
  <!-- ファーストビュー -->
  <div class="pt185 md-pt130 sm-pt80">
    <div class="cols">
      <div class="col-12">
        <p class="ff-enSerif fz500 md-fz395 sm-fz285 lh1 ta-c js-animation-copy js-scroll">ACTIVITY</p>
        <h2 class="pt20 sm-pt10 ff-jaSerif fz180 md-fz160 sm-fz140 c-butter lh14 ls01 ta-c js-animation-copy js-scroll">星空の体験</h2>
      </div>
    </div>
  </div>
  <!-- 星空の体験一覧 -->
  <?php $args = array(
    'post_type' => 'post',
    'posts_per_page' => 9,
    'paged' => $paged,
    'taxonomy' => '',
  ); ?>
  <?php query_posts($args); ?>
  <div class="spot pt90 sm-pt60 pb200 md-pb130 sm-pb60">
    <div class="cols cols-1240">
      <div class="col-12">
        <div class="cols nega gutter40 sm-gutter30 rg80 sm-rg40">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <article class="col-4 md-col-6 sm-col-12 js-scroll scroll-view">
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
          <?php else: ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php if (function_exists('pagination') && $wp_query->max_num_pages > 1) { ?>
      <?php pagination(); ?>
    <?php } ?>
  </div>
  <?php wp_reset_query(); ?>
  <?php get_template_part("_components/pankuzu", null, [["TOP", "/"], ["星空の体験", NULL]]); // パンくずリスト 
  ?>
</main>

<?php get_footer(); ?>
