<?php get_header(); ?>

<!-- メイン -->
<main class="main">
  <!-- 星空スポット詳細 -->
  <article class="spots mt130 sm-mt80 pb180 md-pb120 sm-pb90 pos-r">
    <i class="shape-shootingStar w-fc mlr-a pos-a t-100 sm-t-60 r0 l0 z2 js-scroll"><img loading="lazy" src=" <?= get_template_directory_uri(); ?>/assets/images/common/shape-shootingStar.svg" width="157" height="157" alt="流れ星のシェイプ"></i>
    <div class="cols-fluid-full ai-c bdt bdb bdw1 bdc-typography-alpha5">
      <div class="col-7 sm-col-12">
        <figure class="ov-h js-rellax"><img loading="lazy" class="spots-thumb w-max asp-4-3 ob-cv js-scroll scroll-view" src="<?= get_template_directory_uri(); ?>/assets/images/_sample/spots-thumb1.webp" width="800" height="534" alt="サムネイル写真"></figure>
      </div>
      <div class="col-5 sm-col-12 ptb40 md-ptb30 sm-ptb25 plr80 md-plr45 sm-plr30">
        <h1 class="ff-jaSerif fz285 md-fz225 sm-fz180 lh16 js-animation-copy js-scroll">1日1組様限定！リッチに星空鑑賞を楽しむ完全プライベートツアー</h1>
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
          <div class="wp-content js-scroll scroll-view">
            <p><img loading="lazy" src="<?= get_template_directory_uri(); ?>/assets/images/_sample/spots-pic1.webp" width="1040" height="600" alt="#"></p>
            <h2>地元ガイドが提供する、特別な星空体験</h2>
            <p>地元ガイドがご案内するのは、観光客にあまり知られていない“秘密の穴場スポット”。<br>
              季節や宿泊場所に合わせて、もっとも美しい星空が見える場所を丁寧にコーディネートします。<br>
              夜空を見上げると、それはまるで天然のプラネタリウム。美しい星座や流れ星を眺めることができます。</p>
            <h3>星空鑑賞をもっと特別にする工夫</h3>
            <h4>ここだけの記念写真も！</h4>
            <blockquote>
              <p>快適に星空を楽しむために、リラックスチェアや双眼鏡、クーラーボックス、冬場はブランケットなどをご用意。さらに、種子島産安納芋を使ったおやつとドリンクサービスが、ツアーをより贅沢なものにしてくれます。リラクゼーションBGMで癒されるのもよし、自然の音に耳を澄ませるのもよし。自分たちだけの特別な時間を過ごせます！日常では味わえない幻想的なひとときをぜひ楽しんでみてください。</p>
            </blockquote>
            <!-- shame：外部リンクの処理はどうしよう？ -->
          </div>
          <div class="pt65 sm-pt30 ta-r">
            <a class="d-if ai-c cg20 sm-cg15 td-n hov-c-butter hov-hook" href="/spot">
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
