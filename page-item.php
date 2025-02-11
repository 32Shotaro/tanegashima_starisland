<?php get_header(); ?>

<!-- メイン -->
<main class="main">
  <!-- ファーストビュー -->
  <div class="sm-pt65 pb90 sm-pb45 ov-h">
    <div class="cols-fluid-full">
      <div class="col-7 md-col-9 sm-col-12 ord2 sm-ord1 js-scroll scroll-view"><img loading="lazy" class="w-max asp-16-9 ob-cv" src="<?= get_template_directory_uri(); ?>/assets/images/item/fv-pic.webp" width="900" height="534" alt="サムネイル写真"></div>
      <div class="col-5 md-col-3 sm-col-12 pos-r ord1 sm-ord2">
        <?php get_template_part("_components/parts-shootingStar", null, "pos-a t100 sm-t60 r-30 z2"); // 流れ星のシェイプ 
        ?>
      </div>
    </div>
    <div class="cols-fluid jc-c cols-1240 rg30 mt-30 sm-mt-20">
      <div class="col-5 md-col-10 sm-col-12">
        <p class="ff-enSerif fz500 md-fz400 sm-fz315 lh11 js-animation-copy js-scroll">ITEM LIST</p>
        <h2 class="pt20 sm-pt10 ff-jaSerif fz180 md-fz160 sm-fz140 c-butter lh14 ls01 js-animation-copy js-scroll">星空鑑賞におすすめのグッズ<br>便利情報</h2>
        <ul class="d-f fxd-c rg15 sm-rg10 pt60 md-pt45 sm-pt30 c-butter lh14">
          <li><a class="d-if ai-c cg20 sm-cg15 td-n hov-bgc-typography-alpha5 hov-animation-bgfill js-scroll scroll-view" href="#anchor1"><img loading="lazy" src="<?= get_template_directory_uri(); ?>/assets/images/common/arrow-butter.svg" width="20" height="16" alt="矢印"><span class="td-u">おすすめグッズ</span></a></li>
          <li><a class="d-if ai-c cg20 sm-cg15 td-n hov-bgc-typography-alpha5 hov-animation-bgfill js-scroll scroll-view" href="#anchor2"><img loading="lazy" src="<?= get_template_directory_uri(); ?>/assets/images/common/arrow-butter.svg" width="20" height="16" alt="矢印"><span class="td-u">星空観賞ツアー</span></a></li>
          <li><a class="d-if ai-c cg20 sm-cg15 td-n hov-bgc-typography-alpha5 hov-animation-bgfill js-scroll scroll-view" href="#anchor3"><img loading="lazy" src="<?= get_template_directory_uri(); ?>/assets/images/common/arrow-butter.svg" width="20" height="16" alt="矢印"><span class="td-u">星空マップ</span></a></li>
          <li><a class="d-if ai-c cg20 sm-cg15 td-n hov-bgc-typography-alpha5 hov-animation-bgfill js-scroll scroll-view" href="#anchor4"><img loading="lazy" src="<?= get_template_directory_uri(); ?>/assets/images/common/arrow-butter.svg" width="20" height="16" alt="矢印"><span class="td-u">宿泊・交通のポイント</span></a></li>
          <li><a class="d-if ai-c cg20 sm-cg15 td-n hov-bgc-typography-alpha5 hov-animation-bgfill js-scroll scroll-view" href="#anchor5"><img loading="lazy" src="<?= get_template_directory_uri(); ?>/assets/images/common/arrow-butter.svg" width="20" height="16" alt="矢印"><span class="td-u">おすすめのおみやげ</span></a></li>
          <li><a class="d-if ai-c cg20 sm-cg15 td-n hov-bgc-typography-alpha5 hov-animation-bgfill js-scroll scroll-view" href="#anchor6"><img loading="lazy" src="<?= get_template_directory_uri(); ?>/assets/images/common/arrow-butter.svg" width="20" height="16" alt="矢印"><span class="td-u">島内観光の便利情報</span></a></li>
        </ul>
      </div>
      <div class="col-7 md-col-10 sm-col-12">
        <div class="bd bdw1 bdc-typography p60 md-p45 sm-p30 pos-r js-scroll scroll-view">
          <p class="fz105 sm-fz95">種子島は光害が少なく、星空鑑賞に最適なスポットが数多くあります。満点の星空や天の川を堪能するためには、季節に応じた準備と便利なアイテムが欠かせません。ここでは、星空鑑賞に役立つグッズや、季節ごとの楽しみ方を紹介します。また、星空マップを活用することで、より充実した体験が可能です。</p>
          <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a t-7 l-7 z1"></i>
          <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a t-7 r-7 z1"></i>
          <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a b-7 r-7 z1"></i>
          <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a b-7 l-7 z1"></i>
        </div>
      </div>
    </div>
  </div>
  <!-- 星空鑑賞におすすめのグッズ -->
  <section id="anchor1" class="bdt bdw1 bdc-typography-alpha5 ptb90 sm-ptb60">
    <div class="cols">
      <div class="col-12">
        <h2 class="title-h3 js-scroll scroll-view">星空鑑賞におすすめのグッズ</h2>
        <p class="pt25 sm-pt15 fz105 sm-fz95 ta-c sm-ta-l js-scroll scroll-view">種子島の夜を快適に過ごすためのグッズをリストアップしました。<br class="sm-d-n">これらを準備すれば、星空鑑賞がより楽しくなります！</p>
      </div>
    </div>
    <div class="cols jc-c pt45 sm-pt30">
      <div class="col-11 md-col-11 sm-col-12">
        <div class="bgc-typography-alpha5 bdrs10 pt45 sm-pt35 pb45 sm-pb25 plr60 sm-plr20 pos-r js-scroll scroll-view">
          <h3 class="bgc-butter w-fc ptb6 plr20 c-midnight lh14 pos-a t-15 l20 z1">必須アイテム</h3>
          <ul class="ul">
            <li>懐中電灯（赤色ライト推奨）<br>
              暗闇で手元を照らすために使用。赤色ライトなら暗闇で目が慣れた状態を保てます。</li>
            <li>レジャーシートまたはチェア<br>
              地面に座ったり、寝転んで星空を見上げるのに便利。</li>
            <li>防寒着<br>
              夜は季節を問わず気温が下がるので、薄手のジャケットやブランケットがあると安心。</li>
            <li>虫除けスプレー<br>
              特に夏場は虫が多いので必須アイテム。</li>
            <li>星座早見盤または星座アプリ<br>
              星座や天の川の位置を確認できます。スマホアプリならリアルタイムで星空情報を取得可能です。</li>
            <li>双眼鏡<br>
              星座や天の川をより近くで楽しむことができます。</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="cols jc-c pt60 sm-pt45">
      <div class="col-11 md-col-11 sm-col-12">
        <div class="bgc-typography-alpha5 bdrs10 pt45 sm-pt35 pb45 sm-pb25 plr60 sm-plr20 pos-r js-scroll scroll-view">
          <h3 class="bgc-butter w-fc ptb6 plr20 c-midnight lh14 pos-a t-15 l20 z1">あると便利なアイテム</h3>
          <ul class="ul">
            <li>保温ボトル<br>
              温かい飲み物で体を冷やさないように。</li>
            <li>モバイルバッテリー<br>
              スマホや星座アプリを長時間使う場合の予備電源。</li>
            <li>カメラ<br>
              星空を記録に残したい方は、一眼レフカメラやスマホカメラを準備。</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- グッズの用意が大変な方は‥ -->
  <section id="anchor2" class="bdt bdw1 bdc-typography-alpha5 ptb90 sm-ptb60 pos-r">
    <div class="cols">
      <div class="col-12">
        <h2 class="title-h4 mlr-a js-scroll scroll-view">グッズの用意が大変な方は‥</h2>
        <section class="pt60 sm-pt45">
          <div class="cols ai-c nega rg20">
            <div class="col-5 sm-col-12 js-scroll scroll-view"><img loading="lazy" class="img-fluid" src="<?= get_template_directory_uri(); ?>/assets/images/item/sec2-pic1.webp" width="370" height="316" alt="星空鑑賞ツアー"></div>
            <div class="col-7 sm-col-12 js-scroll scroll-view">
              <h3 class="bgc-butter w-fc ptb8 plr15 ff-jaSerif fz140 sm-fz120 c-midnight lh14 lts01">ガイド付きの<br class="d-n sm-d-i">星空鑑賞ツアーが安心！</h3>
              <div class="texts pt30 sm-pt20 fz105 sm-fz95">
                <p>グッズの用意が大変な方は、島内在住のガイドさんがその日のベストスポットに連れて行ってれる星空鑑賞ツアーに参加してみませんか？</p>
                <p>「満点の星空の下で、アウトドア体験を。」をコンセプトに、リラックスチェアや、双眼鏡、クーラーボックス、冬場はブランケットなど、特別なひと時を演出するアイテムを多数ご用意。癒しのリラクゼーションBGM（希望制・自然の音に耳を澄ませてみるのも◎）や、種子島産安納芋を使ったおやつと、ドリンクサービスもございます。家族と、ご友人と、恋人と...。満点の星空を独り占めしながら、ゆったりと過ごす体験を、心ゆくまでご堪能ください。</p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <div class="cols jc-c pt80 sm-pt60 js-scroll scroll-view">
      <div class="col-6 md-col-8 sm-col-12">
        <a class="d-f ai-c jc-sb cg15 bd bdw1 bdc-typography ptb20 sm-ptb15 plr40 sm-plr30 lh120 td-n pos-r hov-hook hov-bdc-butter hov-c-butter hov-animation-bgfill" href="https://www.asoview.com/item/activity/pln3000044092/" target="_blank" rel="noopener">
          <span class="ff-jaSerif fz115 sm-fz100">星空観賞ツアーの詳細はこちら<span class="fz85"> (アソビュー！)</span></span>
          <i class="icon-arrow fz150"></i>
          <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a t-7 l-7 z1 hov-hook-bgc-butter"></i>
          <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a t-7 r-7 z1 hov-hook-bgc-butter"></i>
          <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a b-7 r-7 z1 hov-hook-bgc-butter"></i>
          <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a b-7 l-7 z1 hov-hook-bgc-butter"></i>
        </a>
      </div>
    </div>
    <div class="js-rellax-wrapper"><img loading="lazy" class="img-bg js-rellax" src="<?= get_template_directory_uri(); ?>/assets/images/item/sec2-bgi.webp" width="1440" height="1640" alt="夜空の背景"></div>
  </section>
  <!-- 星空マップを活用しよう -->
  <section id="anchor3" class="ptb130 sm-ptb90">
    <div class="cols">
      <div class="col-12">
        <h2 class="title-h2 mlr-a js-scroll scroll-view">星空マップを活用しよう</h2>
        <p class="pt45 sm-pt30 fz105 sm-fz95 ta-c sm-ta-l js-scroll scroll-view">種子島で星空鑑賞をより楽しむためには、星空スポットを記載した「星空マップ」を手に入れるのがおすすめです。<br>
          このマップは西之表港や観光案内所で配布されているほか、公式サイトなどからPDFでダウンロードも可能です。<br>
          スマホやタブレットに保存しておくと便利です。</p>
      </div>
    </div>
    <div class="pt60 sm-pt30">
      <?php get_template_part("_components/parts-mapPdfLink"); // 星空の周遊マップリンク
      ?>
    </div>
  </section>
  <!-- 観光の宿泊・交通のポイント -->
  <section id="anchor4" class="pt90 sm-pt60 pb130 sm-pb90 pos-r">
    <div class="cols">
      <div class="col-12">
        <h2 class="title-h2 mlr-a js-scroll scroll-view">観光の宿泊・<br class="d-n sm-d-i">交通のポイント</h2>
        <!-- 宿泊施設は早めに予約！ -->
        <section class="cols nega rg20 pt75 sm-pt45">
          <div class="col-5 sm-col-12">
            <div class="d-f ai-c cg20 sm-cg15 js-scroll scroll-view">
              <img loading="lazy" class="sm-zoom08" src="<?= get_template_directory_uri(); ?>/assets/images/item/sec4-icon1.webp" width="55" height="55" alt="アイコン">
              <h3 class="bgc-butter w-fc ptb8 plr15 ff-jaSerif fz140 sm-fz120 c-midnight lh14 lts01">宿泊施設は早めに予約！</h3>
            </div>
            <p class="pt30 sm-pt15 fz105 sm-fz95 js-scroll scroll-view">種子島にはホテルや民宿が点在していますが、<br class="sm-d-n">特に観光シーズンには予約が埋まりやすいため、<br class="sm-d-n">早めの手配が重要です。</p>
          </div>
          <div class="col-7 sm-col-12">
            <div class="d-f fxd-c rg30 sm-rg20 bgc-typography-alpha5 bdrs10 p50 sm-p30 js-scroll scroll-view">
              <dl>
                <dt class="d-f ai-c jc-c fxs0 bd bdw1 bdc-butter bdrs-max w-fc h40 plr20 c-butter">人気エリア</dt>
                <dd class="texts pt15 fz105 sm-fz95">
                  <p>西之表市・中種子町・南種子町それぞれ観光スポットや飲食店が点在しており、どこの市町もおすすめです！</p>
                </dd>
              </dl>
              <dl>
                <dt class="d-f ai-c jc-c fxs0 bd bdw1 bdc-butter bdrs-max w-fc h40 plr20 c-butter">オプション</dt>
                <dd class="texts pt15 fz105 sm-fz95">
                  <p>コテージやキャンプ場も選択肢に。自然を満喫する滞在が可能です。</p>
                </dd>
              </dl>
            </div>
          </div>
        </section>
        <!-- レンタカーの確保を優先 -->
        <section class="cols nega rg20 pt75 sm-pt45">
          <div class="col-5 sm-col-12">
            <div class="d-f ai-c cg20 sm-cg15 js-scroll scroll-view">
              <img loading="lazy" class="sm-zoom08" src="<?= get_template_directory_uri(); ?>/assets/images/item/sec4-icon2.webp" width="55" height="55" alt="アイコン">
              <h3 class="bgc-butter w-fc ptb8 plr15 ff-jaSerif fz140 sm-fz120 c-midnight lh14 lts01">レンタカーの確保を優先</h3>
            </div>
            <p class="pt30 sm-pt15 fz105 sm-fz95 js-scroll scroll-view">島内の移動にはレンタカーが便利です。<br>
              数が限られているため、<br class="sm-d-n">こちらも早めの予約を心がけましょう。
            </p>
          </div>
          <div class="col-7 sm-col-12">
            <div class="d-f fxd-c rg30 sm-rg20 bgc-typography-alpha5 bdrs10 p50 sm-p30 js-scroll scroll-view">
              <dl>
                <dt class="d-f ai-c jc-c fxs0 bd bdw1 bdc-butter bdrs-max w-fc h40 plr20 c-butter">予約時の注意</dt>
                <dd class="texts pt15 fz105 sm-fz95">
                  <p>空港や港での受け取りが便利です。</p>
                  <p>ネット予約だけでなく、電話予約も活用しましょう！<br>
                    ネット予約をやっていないレンタカー屋さんも島内には複数あります。</p>
                </dd>
              </dl>
            </div>
          </div>
        </section>
      </div>
    </div>
    <div class="js-rellax-wrapper"><img loading="lazy" class="img-bg js-rellax" src="<?= get_template_directory_uri(); ?>/assets/images/item/sec4-bgi.webp" width="1440" height="990" alt="夜空の背景"></div>
  </section>
  <!-- 星空観光におすすめのお土産 -->
  <section id="anchor5" class="pt90 sm-pt60 pb130 sm-pb90 pos-r">
    <div class="cols">
      <div class="col-12">
        <h2 class="title-h2 mlr-a js-scroll scroll-view">星空観光に<br class="d-n sm-d-i">おすすめのお土産</h2>
        <div class="cols nega gutter50 sm-gutter30 rg30 pt90 sm-pt45">
          <div class="col-5 sm-col-12 js-scroll scroll-view"><img loading="lazy" class="img-fluid mlr-a md-zoom08 sm-zoom06" src="<?= get_template_directory_uri(); ?>/assets/images/item/sec5-pic1.webp" width="390" height="390" alt="成澤広幸"></div>
          <div class="col-7 sm-col-12">
            <div class="d-f sm-fxd-c ai-c cg20 sm-cg10 rg15 js-scroll scroll-view">
              <p class="d-f ai-c jc-c fxs0 bd bdw1 bdc-butter bdrs-max w-fc h40 plr30">星空のチョコレート</p>
              <p class="ff-enSans fz250 sm-fz200 c-butter lh1 ls015" style="text-transform: none">Tanesora</p>
            </div>
            <div class="texts pt35 sm-pt20 fz105 sm-fz95 js-scroll scroll-view">
              <p>TANESORAは、鹿児島県種子島産のフルーツを贅沢に使用したボンボンショコラです。各チョコレートには、種子島の美しい風景と星空をテーマにした名前が付けられていて、星空観光のお土産にぴったり！</p>
              <p>例えば、「夕焼けと北斗七星」は自家製苺コンフィチュールと苺ガナッシュを組み合わせた一品です。他にも、自家製パッションコンフィチュールとパッションガナッシュを使用した「雄龍雌龍岩と天の川夏の大三角」など、全5種類のフレーバーが楽しめます。</p>
              <p>TANESORAは、オンラインショップ「tanechoco」から購入可能で、価格は1,566円（税込）です。また、種子島のビジネスホテル・レストラン「公園通り」でも取り扱っています。（訪れる際は事前に電話しておくのがおすすめです）</p>
            </div>
            <div class="cols nega pt45 sm-pt30 js-scroll scroll-view">
              <div class="col-10 md-col-11 sm-col-12">
                <a class="d-f ai-c jc-sb cg15 bd bdw1 bdc-typography ptb20 sm-ptb15 plr40 sm-plr30 lh120 td-n pos-r hov-hook hov-bdc-butter hov-c-butter hov-animation-bgfill" href="https://tanechoco.theshop.jp/items/88079297" target="_blank" rel="noopener">
                  <span class="ff-jaSerif fz115 sm-fz100">コウエンドウリタネガシマ<br class="d-n sm-d-i"><span class="fz85"> (外部リンク)</span></span>
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
        <!-- そのほかにも、こんなお土産が！ -->
        <section class="pt90 sm-pt60">
          <h3 class="bgc-butter w-fc ptb8 plr15 ff-jaSerif fz140 sm-fz120 c-midnight lh14 lts01 js-scroll scroll-view">そのほかにも、こんなお土産が！</h3>
          <div class="cols nega jc-c gutter20 rg30 pt45 sm-pt30">
            <div class="col-4 md-col-6 sm-col-12 js-scroll scroll-view">
              <section class="bgc-typography-alpha5 bdrs15 sm-bdrs10 ptb45 sm-ptb30 plr30 sm-ptb20">
                <h4 class="d-f ai-c jc-c fxs0 bd bdw1 bdc-butter bdrs-max w-fc h40 mlr-a plr20 c-butter">宇宙関連グッズ</h4>
                <p class="pt15 sm-fz95 lh18 ta-c">JAXA公認のお土産は<br>宇宙科学技術館で購入可能。</p>
              </section>
            </div>
            <div class="col-4 md-col-6 sm-col-12 js-scroll scroll-view">
              <section class="bgc-typography-alpha5 bdrs15 sm-bdrs10 ptb45 sm-ptb30 plr30 sm-ptb20">
                <h4 class="d-f ai-c jc-c fxs0 bd bdw1 bdc-butter bdrs-max w-fc h40 mlr-a plr20 c-butter">安納芋スイーツ</h4>
                <p class="pt15 sm-fz95 lh18 ta-c">地元の特産品を使った菓子類は<br>お土産にぴったり。</p>
              </section>
            </div>
            <div class="col-4 md-col-6 sm-col-12 js-scroll scroll-view">
              <section class="bgc-typography-alpha5 bdrs15 sm-bdrs10 ptb45 sm-ptb30 plr30 sm-ptb20">
                <h4 class="d-f ai-c jc-c fxs0 bd bdw1 bdc-butter bdrs-max w-fc h40 mlr-a plr20 c-butter">焼酎</h4>
                <p class="pt15 sm-fz95 lh18 ta-c">瓶詰めされた地元の焼酎は<br>贈り物にも喜ばれます。</p>
              </section>
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>
  <!-- 島内観光の便利情報 -->
  <section id="anchor6" class="bdt bdw1 bdc-typography-alpha5 ptb90 sm-ptb60 pos-r">
    <div class="cols">
      <div class="col-12">
        <h2 class="title-h3 js-scroll scroll-view">島内観光の便利情報</h2>
        <p class="pt25 sm-pt15 fz105 sm-fz95 ta-c sm-ta-l js-scroll scroll-view">種子島は自然・文化・星空を満喫できる魅力あふれる島です。<br class="sm-d-n">早めの準備を心がけて、特別な観光体験を楽しんでください！</p>
        <div class="cols nega gutter50 sm-gutter30 rg30 pt55 sm-pt35">
          <div class="col-6 sm-col-12">
            <section class="bd bdw1 bdc-typography h-max p45 sm-p30 pos-r js-scroll scroll-view">
              <h3 class="bgc-butter w-fc ptb8 plr15 ff-jaSerif fz140 sm-fz120 c-midnight lh14 lts01">観光案内所を活用</h3>
              <p class="pt30 sm-pt15 fz105 sm-fz95">西之表港や主要施設には観光案内所があり、地図やイベント情報を入手可能。</p>
              <div class="pt30 sm-pt15 ta-r">
                <a class="d-if ai-c cg20 sm-cg15 td-n hov-c-butter hov-hook" href="https://tanekan.jp/tanekanoffice/" target="_blank" rel="noopener">
                  <span class="d-b ff-jaSerif fz95 lh1">観光案内所サイト</span>
                  <span class="d-f ai-c jc-c bgc-typography-alpha5 bdrs-max w65 sm-w50 h60 sm-h50 hov-hook-animation-arrowWrapper"><i class="icon-arrow fz150"></i></span>
                </a>
              </div>
              <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a t-7 l-7 z1"></i>
              <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a t-7 r-7 z1"></i>
              <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a b-7 r-7 z1"></i>
              <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a b-7 l-7 z1"></i>
            </section>
          </div>
          <div class="col-6 sm-col-12">
            <section class="bd bdw1 bdc-typography h-max p45 sm-p30 pos-r js-scroll scroll-view">
              <h3 class="bgc-butter w-fc ptb8 plr15 ff-jaSerif fz140 sm-fz120 c-midnight lh14 lts01">星空マップをダウンロード</h3>
              <p class="pt30 sm-pt15 fz105 sm-fz95">事前にPDFをダウンロードしておくか、西之表港で配布されているマップを入手するのがおすすめです。</p>
              <div class="pt30 sm-pt15 ta-r">
                <a class="d-if ai-c cg20 sm-cg15 td-n hov-c-butter hov-hook" href="<?= get_template_directory_uri(); ?>/assets/pdf/map.pdf" target="_blank" rel="noopener">
                  <span class="d-b ff-jaSerif fz95 lh1">星空マップPDFダウンロード</span>
                  <span class="d-f ai-c jc-c bgc-typography-alpha5 bdrs-max w65 sm-w50 h60 sm-h50 hov-hook-animation-arrowWrapper"><i class="icon-arrow fz150"></i></span>
                </a>
              </div>
              <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a t-7 l-7 z1"></i>
              <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a t-7 r-7 z1"></i>
              <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a b-7 r-7 z1"></i>
              <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a b-7 l-7 z1"></i>
            </section>
          </div>
        </div>
      </div>
    </div>
    <div class="js-rellax-wrapper"><img loading="lazy" class="img-bg js-rellax" src="<?= get_template_directory_uri(); ?>/assets/images/item/sec6-bgi.webp" width="1440" height="780" alt="夜空の背景"></div>
  </section>
  <?php get_template_part("_components/pankuzu", null, [["TOP", "/"], ["星空鑑賞におすすめのグッズ", NULL]]); // パンくずリスト 
  ?>
</main>

<?php get_footer(); ?>
