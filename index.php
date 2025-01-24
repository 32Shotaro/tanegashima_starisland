<?php get_header(); ?>

<?php get_template_part('_components/globalNav'); ?>

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
              <i class="shape-shootingStar pos-a t-90 sm-t-40 r30 sm-r80 z2 js-scroll"><img loading="lazy" src="<?= get_template_directory_uri(); ?>/assets/images/common/shape-shootingStar.svg" width="157" height="157" alt="流れ星のシェイプ"></i>
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
              <i class="shape-shootingStar pos-a l-80 sm-l-a b-80 sm-r-20 z2 js-scroll"><img loading="lazy" src="<?= get_template_directory_uri(); ?>/assets/images/common/shape-shootingStar.svg" width="157" height="157" alt="流れ星のシェイプ"></i>
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
            <article class="col-4 md-col-6 sm-col-12 js-scroll scroll-view">
              <figure><a class="d-b ov-h hov-hook" href="#"><img loading="lazy" class="img-fluid-full asp-16-9 ob-cv hov-hook-scale" src="<?= get_template_directory_uri(); ?>/assets/images/_sample/spot-cape_kadokura.webp" width="466" height="355" alt="門倉岬"></a></figure>
              <p class="d-f ai-c jc-c bg-main bdrs10 w-fc h40 mt-40 mlr-a plr45 fz90 c-butter lh12 ta-c pos-r z2"><span class="d-b lc1">南種子町</span></p>
              <div class="bg-main mt-20 mlr30 sm-mlr20 ptb30 plr40 sm-plr25 pos-r z1">
                <div class="d-f fxw-w ai-c cg15 rg5">
                  <h2 class="ff-jaSerif fz140 sm-fz130 lh14">門倉岬</h2>
                  <span class="ff-enSans fz70 lh14">Cape Kadokura</span>
                </div>
                <p class="pt15 sm-pt10 fz105 sm-fz100">人工光が少なく、展望台から満天の星空を望めます。海面に映る星々が幻想的で、撮影スポットとしても人気です。</p>
              </div>
              <div class="plr15 ta-r">
                <a class="d-if ai-c cg20 sm-cg15 td-n hov-c-butter hov-hook" href="#">
                  <span class="d-b ff-enSans fz95 lh1">VIEW MORE</span>
                  <span class="d-f ai-c jc-c bgc-typography-alpha5 bdrs-max w65 sm-w50 h60 sm-h50 ov-h hov-hook-animation-arrowWrapper"><i class="icon-arrow fz150"></i></span>
                </a>
              </div>
            </article>
            <article class="col-4 md-col-6 sm-col-12 js-scroll scroll-view">
              <figure><a class="d-b ov-h hov-hook" href="#"><img loading="lazy" class="img-fluid-full asp-16-9 ob-cv hov-hook-scale" src="<?= get_template_directory_uri(); ?>/assets/images/_sample/spot-yokino_beach.webp" width="466" height="355" alt="能野海水浴場"></a></figure>
              <p class="d-f ai-c jc-c bg-main bdrs10 w-fc h40 mt-40 mlr-a plr45 fz90 c-butter lh12 ta-c pos-r z2"><span class="d-b lc1">西之表市</span></p>
              <div class="bg-main mt-20 mlr30 sm-mlr20 ptb30 plr40 sm-plr25 pos-r z1">
                <div class="d-f fxw-w ai-c cg15 rg5">
                  <h2 class="ff-jaSerif fz140 sm-fz130 lh14">能野海水浴場</h2>
                  <span class="ff-enSans fz70 lh14">Yokino Beach</span>
                </div>
                <p class="pt15 sm-pt10 fz105 sm-fz100">波音に包まれながら静かな星空観測を楽しめます。海と空が一体となる幻想的な風景が広がります。（冬場は風が強い傾向がありますので、春〜夏がおすすめです）</p>
              </div>
              <div class="plr15 ta-r">
                <a class="d-if ai-c cg20 sm-cg15 td-n hov-c-butter hov-hook" href="#">
                  <span class="d-b ff-enSans fz95 lh1">VIEW MORE</span>
                  <span class="d-f ai-c jc-c bgc-typography-alpha5 bdrs-max w65 sm-w50 h60 sm-h50 ov-h hov-hook-animation-arrowWrapper"><i class="icon-arrow fz150"></i></span>
                </a>
              </div>
            </article>
            <article class="col-4 md-col-6 sm-col-12 js-scroll scroll-view">
              <figure><a class="d-b ov-h hov-hook" href="#"><img loading="lazy" class="img-fluid-full asp-16-9 ob-cv hov-hook-scale" src="<?= get_template_directory_uri(); ?>/assets/images/_sample/spot-amamegakura_park.webp" width="466" height="355" alt="天女ヶ倉公園展望所"></a></figure>
              <p class="d-f ai-c jc-c bg-main bdrs10 w-fc h40 mt-40 mlr-a plr45 fz90 c-butter lh12 ta-c pos-r z2"><span class="d-b lc1">西之表市</span></p>
              <div class="bg-main mt-20 mlr30 sm-mlr20 ptb30 plr40 sm-plr25 pos-r z1">
                <div class="d-f fxw-w ai-c cg15 rg5">
                  <h2 class="ff-jaSerif fz140 sm-fz130 lh14">天女ヶ倉公園展望所</h2>
                  <span class="ff-enSans fz70 lh14">Amamegakura Park</span>
                </div>
                <p class="pt15 sm-pt10 fz105 sm-fz100">高台から広がる360度の星空が魅力。天の川や流星群を観測でき、また公園内の遊具は面白い形をしており、それを活用した星空撮影も人気です。</p>
              </div>
              <div class="plr15 ta-r">
                <a class="d-if ai-c cg20 sm-cg15 td-n hov-c-butter hov-hook" href="#">
                  <span class="d-b ff-enSans fz95 lh1">VIEW MORE</span>
                  <span class="d-f ai-c jc-c bgc-typography-alpha5 bdrs-max w65 sm-w50 h60 sm-h50 ov-h hov-hook-animation-arrowWrapper"><i class="icon-arrow fz150"></i></span>
                </a>
              </div>
            </article>
            <article class="col-4 md-col-6 sm-col-12 js-scroll scroll-view">
              <figure><a class="d-b ov-h hov-hook" href="#"><img loading="lazy" class="img-fluid-full asp-16-9 ob-cv hov-hook-scale" src="<?= get_template_directory_uri(); ?>/assets/images/_sample/spot-kanehama_beach.webp" width="466" height="355" alt="鉄浜海岸"></a></figure>
              <p class="d-f ai-c jc-c bg-main bdrs10 w-fc h40 mt-40 mlr-a plr45 fz90 c-butter lh12 ta-c pos-r z2"><span class="d-b lc1">西之表市</span></p>
              <div class="bg-main mt-20 mlr30 sm-mlr20 ptb30 plr40 sm-plr25 pos-r z1">
                <div class="d-f fxw-w ai-c cg15 rg5">
                  <h2 class="ff-jaSerif fz140 sm-fz130 lh14">鉄浜海岸</h2>
                  <span class="ff-enSans fz70 lh14">Kanehama Beach</span>
                </div>
                <p class="pt15 sm-pt10 fz105 sm-fz100">静かな海岸には特徴的な岩があり、フォトスポットとして人気です。街灯がほとんどなく、足元が歩きにくいため注意が必要です。</p>
              </div>
              <div class="plr15 ta-r">
                <a class="d-if ai-c cg20 sm-cg15 td-n hov-c-butter hov-hook" href="#">
                  <span class="d-b ff-enSans fz95 lh1">VIEW MORE</span>
                  <span class="d-f ai-c jc-c bgc-typography-alpha5 bdrs-max w65 sm-w50 h60 sm-h50 ov-h hov-hook-animation-arrowWrapper"><i class="icon-arrow fz150"></i></span>
                </a>
              </div>
            </article>
            <article class="col-4 md-col-6 sm-col-12 js-scroll scroll-view">
              <figure><a class="d-b ov-h hov-hook" href="#"><img loading="lazy" class="img-fluid-full asp-16-9 ob-cv hov-hook-scale" src="<?= get_template_directory_uri(); ?>/assets/images/_sample/spot-maenohama_beach_park.webp" width="466" height="355" alt="前之浜海浜公園"></a></figure>
              <p class="d-f ai-c jc-c bg-main bdrs10 w-fc h40 mt-40 mlr-a plr45 fz90 c-butter lh12 ta-c pos-r z2"><span class="d-b lc1">南種子町</span></p>
              <div class="bg-main mt-20 mlr30 sm-mlr20 ptb30 plr40 sm-plr25 pos-r z1">
                <div class="d-f fxw-w ai-c cg15 rg5">
                  <h2 class="ff-jaSerif fz140 sm-fz130 lh14">前之浜海浜公園</h2>
                  <span class="ff-enSans fz70 lh14">Maenohama Beach Park</span>
                </div>
                <p class="pt15 sm-pt10 fz105 sm-fz100">広々とした芝生広場で星空を堪能できます。家族やカップルで寝転びながら夜空を眺めるのにもおすすめです！ロケットの発射場を見ることもできます。</p>
              </div>
              <div class="plr15 ta-r">
                <a class="d-if ai-c cg20 sm-cg15 td-n hov-c-butter hov-hook" href="#">
                  <span class="d-b ff-enSans fz95 lh1">VIEW MORE</span>
                  <span class="d-f ai-c jc-c bgc-typography-alpha5 bdrs-max w65 sm-w50 h60 sm-h50 ov-h hov-hook-animation-arrowWrapper"><i class="icon-arrow fz150"></i></span>
                </a>
              </div>
            </article>
            <article class="col-4 md-col-6 sm-col-12 js-scroll scroll-view">
              <figure><a class="d-b ov-h hov-hook" href="#"><img loading="lazy" class="img-fluid-full asp-16-9 ob-cv hov-hook-scale" src="<?= get_template_directory_uri(); ?>/assets/images/_sample/spot-ebinoe_park.webp" width="466" height="355" alt="恵美之江展望公園"></a></figure>
              <p class="d-f ai-c jc-c bg-main bdrs10 w-fc h40 mt-40 mlr-a plr45 fz90 c-butter lh12 ta-c pos-r z2"><span class="d-b lc1">南種子町</span></p>
              <div class="bg-main mt-20 mlr30 sm-mlr20 ptb30 plr40 sm-plr25 pos-r z1">
                <div class="d-f fxw-w ai-c cg15 rg5">
                  <h2 class="ff-jaSerif fz140 sm-fz130 lh14">恵美之江展望公園</h2>
                  <span class="ff-enSans fz70 lh14">Ebinoe Park</span>
                </div>
                <p class="pt15 sm-pt10 fz105 sm-fz100">ロケットの発射場が最も美しくみられるスポットで、種子島らしい風景を楽しめます。す。星空も美しく、満点の星空が楽しめます。</p>
              </div>
              <div class="plr15 ta-r">
                <a class="d-if ai-c cg20 sm-cg15 td-n hov-c-butter hov-hook" href="#">
                  <span class="d-b ff-enSans fz95 lh1">VIEW MORE</span>
                  <span class="d-f ai-c jc-c bgc-typography-alpha5 bdrs-max w65 sm-w50 h60 sm-h50 ov-h hov-hook-animation-arrowWrapper"><i class="icon-arrow fz150"></i></span>
                </a>
              </div>
            </article>
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
              <article class="swiper-slide">
                <a class="d-b td-n hov-c-butter hov-hook" href="#">
                  <figure class="ov-h"><img loading="lazy" class="img-fluid-full asp-4-3 hov-hook-scale" src="<?= get_template_directory_uri(); ?>/assets/images/_sample/event-thumb1.webp" width="360" height="240" alt="サムネイル"></figure>
                  <h3 class="pt30 sm-pt25 sm-pt15 ff-jaSerif fz140 sm-fz130 lh140">菓子処渡辺</h3>
                  <p class="pt15 sm-pt10 fz105 sm-fz95 lh2 lc4 sm-lc2">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
                  <ul class="d-f fxw-w g10 sm-g5 pt20 sm-pt15">
                    <li><span class="d-f ai-c cg20 bgc-butter bdrs-max h30 plr15 fz85 c-midnight lh12">南種子町</span></li>
                    <li><span class="d-f ai-c cg20 bgc-butter bdrs-max h30 plr15 fz85 c-midnight lh12">グルメ</span></li>
                  </ul>
                </a>
              </article>
              <article class="swiper-slide">
                <a class="d-b td-n hov-c-butter hov-hook" href="#">
                  <figure class="ov-h"><img loading="lazy" class="img-fluid-full asp-4-3 hov-hook-scale" src="<?= get_template_directory_uri(); ?>/assets/images/_sample/event-thumb2.webp" width="360" height="240" alt="サムネイル"></figure>
                  <h3 class="pt30 sm-pt25 sm-pt15 ff-jaSerif fz140 sm-fz130 lh140">星空のチョコレート｜tanesora</h3>
                  <p class="pt15 sm-pt10 fz105 sm-fz95 lh2 lc4 sm-lc2">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
                  <ul class="d-f fxw-w g10 sm-g5 pt20 sm-pt15">
                    <li><span class="d-f ai-c cg20 bgc-butter bdrs-max h30 plr15 fz85 c-midnight lh12">南種子町</span></li>
                    <li><span class="d-f ai-c cg20 bgc-butter bdrs-max h30 plr15 fz85 c-midnight lh12">グルメ</span></li>
                  </ul>
                </a>
              </article>
              <article class="swiper-slide">
                <a class="d-b td-n hov-c-butter hov-hook" href="#">
                  <figure class="ov-h"><img loading="lazy" class="img-fluid-full asp-4-3 hov-hook-scale" src="<?= get_template_directory_uri(); ?>/assets/images/_sample/event-thumb3.webp" width="360" height="240" alt="サムネイル"></figure>
                  <h3 class="pt30 sm-pt25 sm-pt15 ff-jaSerif fz140 sm-fz130 lh140">星を鑑賞！陶芸体験</h3>
                  <p class="pt15 sm-pt10 fz105 sm-fz95 lh2 lc4 sm-lc2">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
                  <ul class="d-f fxw-w g10 sm-g5 pt20 sm-pt15">
                    <li><span class="d-f ai-c cg20 bgc-butter bdrs-max h30 plr15 fz85 c-midnight lh12">南種子町</span></li>
                    <li><span class="d-f ai-c cg20 bgc-butter bdrs-max h30 plr15 fz85 c-midnight lh12">グルメ</span></li>
                  </ul>
                </a>
              </article>
              <article class="swiper-slide">
                <a class="d-b td-n hov-c-butter hov-hook" href="#">
                  <figure class="ov-h"><img loading="lazy" class="img-fluid-full asp-4-3 hov-hook-scale" src="<?= get_template_directory_uri(); ?>/assets/images/_sample/event-thumb1.webp" width="360" height="240" alt="サムネイル"></figure>
                  <h3 class="pt30 sm-pt25 sm-pt15 ff-jaSerif fz140 sm-fz130 lh140">菓子処渡辺</h3>
                  <p class="pt15 sm-pt10 fz105 sm-fz95 lh2 lc4 sm-lc2">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
                  <ul class="d-f fxw-w g10 sm-g5 pt20 sm-pt15">
                    <li><span class="d-f ai-c cg20 bgc-butter bdrs-max h30 plr15 fz85 c-midnight lh12">南種子町</span></li>
                    <li><span class="d-f ai-c cg20 bgc-butter bdrs-max h30 plr15 fz85 c-midnight lh12">グルメ</span></li>
                  </ul>
                </a>
              </article>
              <article class="swiper-slide">
                <a class="d-b td-n hov-c-butter hov-hook" href="#">
                  <figure class="ov-h"><img loading="lazy" class="img-fluid-full asp-4-3 hov-hook-scale" src="<?= get_template_directory_uri(); ?>/assets/images/_sample/event-thumb2.webp" width="360" height="240" alt="サムネイル"></figure>
                  <h3 class="pt30 sm-pt25 sm-pt15 ff-jaSerif fz140 sm-fz130 lh140">星空のチョコレート｜tanesora</h3>
                  <p class="pt15 sm-pt10 fz105 sm-fz95 lh2 lc4 sm-lc2">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
                  <ul class="d-f fxw-w g10 sm-g5 pt20 sm-pt15">
                    <li><span class="d-f ai-c cg20 bgc-butter bdrs-max h30 plr15 fz85 c-midnight lh12">南種子町</span></li>
                    <li><span class="d-f ai-c cg20 bgc-butter bdrs-max h30 plr15 fz85 c-midnight lh12">グルメ</span></li>
                  </ul>
                </a>
              </article>
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
  <div class="pt130 md-fz110 sm-pt60 pb200 sm-pb130 js-scroll scroll-view">
    <div class="cols">
      <div class="col-12">
        <a class="d-f md-fxd-c ai-c jc-sb rg20 bd bdw1 bdc-typography mt20 sm-mt40 sm-mlr-10 pt60 md-pt45 sm-pt30 pb60 md-pb40 sm-pb20 plr65 md-plr45 sm-plr30 td-n pos-r hov-hook hov-bdc-butter hov-c-butter hov-animation-bgfill" href="<?= get_template_directory_uri(); ?>/assets/pdf/map.pdf" target="_blank" rel="noopener">
          <p class="d-f fxd-rr ai-s cg10 pos-a t-20 sm-t-40 r60 sm-r30 z2">
            <span class="d-b text-v bgc-typography p10 ff-jaSerif fz105 c-midnight lh1 ls02">リバーシブルで</span>
            <span class="d-b text-v bgc-typography p10 ff-jaSerif fz105 c-midnight lh1 ls02">昼夜楽しめる</span>
          </p>
          <p class="d-n md-d-b w-max pb15 ff-jaSerif fz170 c-butter lh14 ls01">星空の<br>周遊マップ</p>
          <div class="cols nega gutter15 rg15">
            <figure class="col-6"><img loading="lazy" src="<?= get_template_directory_uri(); ?>/assets/images/spot/pdf-thumb1.webp" width="284" height="200" alt="星空の周遊マップPDFのサムネイル1"></figure>
            <figure class="col-6"><img loading="lazy" src="<?= get_template_directory_uri(); ?>/assets/images/spot/pdf-thumb2.webp" width="284" height="200" alt="星空の周遊マップPDFのサムネイル2"></figure>
          </div>
          <div class="md-w-max">
            <p class="md-d-n ff-jaSerif fz200 c-butter lh14 ls01">星空の<br>周遊マップ</p>
            <div class="pt15 sm-pt0 ta-r">
              <div class="d-if ai-c cg20 sm-cg15 td-n hov-c-butter hov-hook" href="#">
                <span class="d-b fz95 lh1">PDF ダウンロード</span>
                <span class="d-f ai-c jc-c bgc-typography-alpha5 bdrs-max w65 sm-w50 h60 sm-h50 hov-hook-animation-arrowWrapper"><i class="icon-arrow fz150"></i></span>
              </div>
            </div>
          </div>
          <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a t-7 l-7 z1 hov-hook-bgc-butter"></i>
          <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a t-7 r-7 z1 hov-hook-bgc-butter"></i>
          <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a b-7 r-7 z1 hov-hook-bgc-butter"></i>
          <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a b-7 l-7 z1 hov-hook-bgc-butter"></i>
        </a>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
