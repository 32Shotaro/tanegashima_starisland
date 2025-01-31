<?php get_header(); ?>

<!-- メイン -->
<main class="main">
  <!-- ファーストビュー -->
  <div class="sm-pt65 pb90 sm-pb45 ov-h">
    <div class="cols-fluid-full">
      <div class="col-7 md-col-9 sm-col-12 js-scroll scroll-view"><img loading="lazy" class="w-max asp-16-9 ob-cv" src="<?= get_template_directory_uri(); ?>/assets/images/photo/fv-pic.webp" width="900" height="534" alt="サムネイル写真"></div>
      <div class="col-5 md-col-3 sm-col-12 pos-r">
        <?php get_template_part("_components/parts-shootingStar", null, "pos-a t100 sm-t60 l185 md-l120 sm-l280 z2"); // 流れ星のシェイプ 
        ?>
      </div>
    </div>
    <div class="cols-fluid jc-c cols-1240 rg30 mt-30 sm-mt-20">
      <div class="col-5 md-col-10 sm-col-12">
        <p class="ff-enSerif fz500 md-fz400 sm-fz315 lh11 js-animation-copy js-scroll">TECHNIQUE</p>
        <h2 class="pt20 sm-pt10 ff-jaSerif fz180 md-fz160 sm-fz140 c-butter lh14 ls01 js-animation-copy js-scroll">星空撮影のテクニック</h2>
        <ul class="d-f fxd-c rg15 sm-rg10 pt60 md-pt45 sm-pt30 c-butter lh14">
          <li><a class="d-if ai-c cg20 sm-cg15 td-n hov-bgc-typography-alpha5 hov-animation-bgfill js-scroll scroll-view" href="#anchor1"><i class="icon-arrow fz150"></i><span class="td-u">必要なアイテム</span></a></li>
          <li><a class="d-if ai-c cg20 sm-cg15 td-n hov-bgc-typography-alpha5 hov-animation-bgfill js-scroll scroll-view" href="#anchor2"><i class="icon-arrow fz150"></i><span class="td-u">一眼カメラでの星空撮影</span></a></li>
          <li><a class="d-if ai-c cg20 sm-cg15 td-n hov-bgc-typography-alpha5 hov-animation-bgfill js-scroll scroll-view" href="#anchor3"><i class="icon-arrow fz150"></i><span class="td-u">スマホでの星空撮影</span></a></li>
          <li><a class="d-if ai-c cg20 sm-cg15 td-n hov-bgc-typography-alpha5 hov-animation-bgfill js-scroll scroll-view" href="#anchor4"><i class="icon-arrow fz150"></i><span class="td-u">天の川に関する豆知識</span></a></li>
        </ul>
      </div>
      <div class="col-7 md-col-10 sm-col-12">
        <div class="bd bdw1 bdc-typography p60 md-p45 sm-p30 pos-r js-scroll scroll-view">
          <p class="fz105 sm-fz95">夜空に広がる星々や天の川を写真に収める星空撮影は、誰にでも挑戦できる感動的な体験です。特に光害が少ない種子島は、星空撮影に最適な場所です。本記事では、成澤広幸さんのアドバイスをもとに、一眼カメラとスマホを使った星空撮影のポイントをわかりやすく解説します。また、天体に関する豆知識や必要なアイテムについても紹介します。</p>
          <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a t-7 l-7 z1"></i>
          <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a t-7 r-7 z1"></i>
          <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a b-7 r-7 z1"></i>
          <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a b-7 l-7 z1"></i>
        </div>
      </div>
    </div>
  </div>
  <!-- 星空撮影に必要なアイテム -->
  <section id="anchor1" class="bdt bdw1 bdc-typography-alpha5 ptb90 sm-ptb60">
    <div class="cols">
      <div class="col-12">
        <h2 class="title-h3 js-scroll scroll-view">星空撮影に必要なアイテム</h2>
        <p class="pt25 sm-pt15 fz105 sm-fz95 ta-c sm-ta-l js-scroll scroll-view">星空を美しく撮影するには、以下の道具が欠かせません。<br class="sm-d-n">一眼カメラ・スマホ問わず活用できます。</p>
      </div>
    </div>
    <div class="cols jc-c pt45 sm-pt30">
      <div class="col-11 md-col-11 sm-col-12">
        <div class="bgc-typography-alpha5 bdrs10 ptb45 sm-ptb25 plr60 sm-plr20 js-scroll scroll-view">
          <ul class="ul">
            <li>三脚<br>
              カメラやスマホをしっかり固定してブレを防ぐ。風ブレをおこさないよう丈夫なものを選ぼう。</li>
            <li>雲台<br>
              雲台も丈夫なものを選ぼう。3wayを使用する場合は前後を反対にすると上を向けやすいです。</li>
            <li>リモートシャッターまたはセルフタイマー<br>
              シャッターを切る際のブレ防止。セルフタイマーランプは周囲の撮影者に不快感を与えるため、ランプをオフにすること。できない機種の場合はランプに厚めのテープを貼って光の漏れをなくそう。シャッターディレイ搭載機種もあるので確認しておきましょう。</li>
            <li>広角レンズ（一眼カメラの場合）<br>
              広範囲を明るく撮れるレンズが最適。（35mm換算で24mmよりもワイドで、F2.8よりも明るいレンズがおすすめ）</li>
            <li>星座アプリ<br>
              星座や天の川の位置を確認できるアプリ。</li>
            <li>モバイルバッテリー<br>
              長時間撮影をする際に便利。</li>
            <li>防寒着や虫除け<br>
              屋外での環境対策として必須。靴や帽子、手袋なども暖かいものを準備すると安心です。</li>
            <li>弱い電球色ライト<br>
              暗闇で手元を照らしながら、目が暗闇に慣れるのを妨げない暗いライトがおすすめです。ビクセン「天体観測用ライトSG-02」が人気があります。赤色ライトは周囲の撮影者に映り込み易いため星景写真ではNGとされているので気を付けよう。夜間に歩くようの明るめのライトも別途あるとよいでしょう。</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- 一眼カメラでの星空撮影 -->
  <!-- スマホでの星空撮影 -->
  <div class="pos-r">
    <section id="anchor2" class="bdt bdw1 bdc-typography-alpha5 ptb90 sm-ptb60">
      <div class="cols">
        <div class="col-12">
          <h2 class="title-h2 js-scroll scroll-view">一眼カメラでの星空撮影</h2>
          <section class="pt60 sm-pt30">
            <h3 class="ff-jaSerif fz130 sm-fz115 lh14 ls015 js-scroll scroll-view">[ 基本設定 ]</h3>
            <ul class="d-f fxd-c rg10 sm-rg15 pt25 sm-pt15">
              <li class="js-scroll scroll-view">
                <dl class="d-f sm-fxd-c ai-c sm-ai-s cg25 sm-cg15 rg10">
                  <dt class="d-f ai-c jc-c fxs0 bd bdw1 bdc-butter bdrs-max w180 h40"><span class="lc1">モード</span></dt>
                  <dd class="fxg1">
                    <p>マニュアルモード（Mモード）を使用して設定を細かく調整。</p>
                  </dd>
                </dl>
              </li>
              <li class="js-scroll scroll-view">
                <dl class="d-f sm-fxd-c ai-c sm-ai-s cg25 sm-cg15 rg10">
                  <dt class="d-f ai-c jc-c fxs0 bd bdw1 bdc-butter bdrs-max w180 h40"><span class="lc1">ISO感度</span></dt>
                  <dd class="fxg1">
                    <p>1600〜6400（カメラの性能に合わせて調整）。</p>
                  </dd>
                </dl>
              </li>
              <li class="js-scroll scroll-view">
                <dl class="d-f sm-fxd-c ai-c sm-ai-s cg25 sm-cg15 rg10">
                  <dt class="d-f ai-c jc-c fxs0 bd bdw1 bdc-butter bdrs-max w180 h40"><span class="lc1">シャッタースピード</span></dt>
                  <dd class="fxg1">
                    <p>10〜30秒（撮影後に画像を確認して、星が流れを許容できる感じを探そう）。焦点距離にもよりますが、シャッタースピードを20秒程度に抑えておくのが目安になるでしょう。</p>
                  </dd>
                </dl>
              </li>
              <li class="js-scroll scroll-view">
                <dl class="d-f sm-fxd-c ai-c sm-ai-s cg25 sm-cg15 rg10">
                  <dt class="d-f ai-c jc-c fxs0 bd bdw1 bdc-butter bdrs-max w180 h40"><span class="lc1">絞り（F値）</span></dt>
                  <dd class="fxg1">
                    <p>できるだけ明るく（最低でもF2.8の明るさを推奨）。</p>
                  </dd>
                </dl>
              </li>
              <li class="js-scroll scroll-view">
                <dl class="d-f sm-fxd-c ai-c sm-ai-s cg25 sm-cg15 rg10">
                  <dt class="d-f ai-c jc-c fxs0 bd bdw1 bdc-butter bdrs-max w180 h40"><span class="lc1">ピント</span></dt>
                  <dd class="fxg1">
                    <p>無限遠に合わせる（ライブビューを拡大し、マニュアルフォーカスで微調整）。</p>
                  </dd>
                </dl>
              </li>
            </ul>
          </section>
        </div>
      </div>
    </section>
    <section id="anchor3" class="bdt bdw1 bdc-typography-alpha5 ptb90 sm-ptb60">
      <div class="cols">
        <div class="col-12">
          <h2 class="title-h2 js-scroll scroll-view">スマホでの星空撮影</h2>
          <section class="pt60 sm-pt30">
            <h3 class="ff-jaSerif fz130 sm-fz115 lh14 ls015 js-scroll scroll-view">[ 基本設定 ]</h3>
            <ul class="d-f fxd-c rg10 sm-rg15 pt25 sm-pt15">
              <li class="js-scroll scroll-view">
                <dl class="d-f sm-fxd-c ai-c sm-ai-s cg25 sm-cg15 rg10">
                  <dt class="d-f ai-c jc-c fxs0 bd bdw1 bdc-butter bdrs-max w180 h40"><span class="lc1">モード</span></dt>
                  <dd class="fxg1">
                    <p>ナイトモードまたは長時間露光モード（星空撮影をサポートするモード）を使用。</p>
                  </dd>
                </dl>
              </li>
              <li class="js-scroll scroll-view">
                <dl class="d-f sm-fxd-c ai-c sm-ai-s cg25 sm-cg15 rg10">
                  <dt class="d-f ai-c jc-c fxs0 bd bdw1 bdc-butter bdrs-max w180 h40"><span class="lc1">ISO感度</span></dt>
                  <dd class="fxg1">
                    <p>800〜1600に調整可能ならその範囲を目安に。</p>
                  </dd>
                </dl>
              </li>
              <li class="js-scroll scroll-view">
                <dl class="d-f sm-fxd-c ai-c sm-ai-s cg25 sm-cg15 rg10">
                  <dt class="d-f ai-c jc-c fxs0 bd bdw1 bdc-butter bdrs-max w180 h40"><span class="lc1">露光時間</span></dt>
                  <dd class="fxg1">
                    <p>15〜30秒を設定（対応アプリを活用）。</p>
                  </dd>
                </dl>
              </li>
              <li class="js-scroll scroll-view">
                <dl class="d-f sm-fxd-c ai-c sm-ai-s cg25 sm-cg15 rg10">
                  <dt class="d-f ai-c jc-c fxs0 bd bdw1 bdc-butter bdrs-max w180 h40"><span class="lc1">ブレ防止</span></dt>
                  <dd class="fxg1">
                    <p>三脚とスマホホルダーで安定させて撮影。</p>
                  </dd>
                </dl>
              </li>
            </ul>
          </section>
          <section class="pt60 sm-pt30">
            <h3 class="ff-jaSerif fz130 sm-fz115 lh14 ls015 js-scroll scroll-view">[ 推奨アプリ ]</h3>
            <ul class="d-f fxd-c rg10 sm-rg15 pt25 sm-pt15">
              <li class="js-scroll scroll-view">
                <dl class="d-f sm-fxd-c ai-c sm-ai-s cg25 sm-cg15 rg10">
                  <dt class="d-f ai-c jc-c fxs0 bd bdw1 bdc-butter bdrs-max w230 h40"><span class="lc1">NightCap Camera</span></dt>
                  <dd class="fxg1">
                    <p>iPhone向けの高感度撮影アプリ。</p>
                  </dd>
                </dl>
              </li>
              <li class="js-scroll scroll-view">
                <dl class="d-f sm-fxd-c ai-c sm-ai-s cg25 sm-cg15 rg10">
                  <dt class="d-f ai-c jc-c fxs0 bd bdw1 bdc-butter bdrs-max w230 h40"><span class="lc1">Star Walk</span></dt>
                  <dd class="fxg1">
                    <p>天の川の位置を確認できる星座アプリ。</p>
                  </dd>
                </dl>
              </li>
            </ul>
          </section>
        </div>
      </div>
    </section>
    <div class="js-rellax-wrapper"><img loading="lazy" class="img-bg js-rellax" src="<?= get_template_directory_uri(); ?>/assets/images/photo/sec1-bgi.webp" width="1440" height="1496" alt="夜空の背景"></div>
  </div>
  <!-- 撮影環境の選定 -->
  <section class="bdt bdw1 bdc-typography-alpha5 ptb90 sm-ptb60">
    <div class="cols">
      <div class="col-12">
        <h2 class="title-h3 js-scroll scroll-view">撮影環境の選定</h2>
        <div class="cols nega jc-c gutter15 rg20 pt45 sm-pt30">
          <div class="col-4 md-col-6 sm-col-12 js-scroll scroll-view">
            <section class="bgc-typography-alpha5 bdrs-max h-max pt30 sm-ptb30 plr60 sm-plr30 pb45">
              <i class="d-f ai-c jc-c w60 h60 mlr-a"><img loading="lazy" src="<?= get_template_directory_uri(); ?>/assets/images/photo/sec3-icon1.webp" width="50" height="50" alt="アイコン"></i>
              <h3 class="pt20 sm-pt10 ff-jaSerif fz140 sm-fz130 c-butter lh14 ls01 ta-c">光害の少ない場所</h3>
              <p class="pt15 sm-fz95 lh18 sm-ta-c">街明かりや光の影響が少ない<br class="d-n sm-d-i">場所を選ぶ。街灯や自動販売機が<br class="d-n sm-d-i">ないことも重要です。</p>
            </section>
          </div>
          <div class="col-4 md-col-6 sm-col-12 js-scroll scroll-view">
            <section class="bgc-typography-alpha5 bdrs-max h-max pt30 sm-ptb30 plr60 sm-plr30 pb45">
              <i class="d-f ai-c jc-c w60 h60 mlr-a"><img loading="lazy" src="<?= get_template_directory_uri(); ?>/assets/images/photo/sec3-icon2.webp" width="63" height="63" alt="アイコン"></i>
              <h3 class="pt20 sm-pt10 ff-jaSerif fz140 sm-fz130 c-butter lh14 ls01 ta-c">天候条件</h3>
              <p class="pt15 sm-fz95 lh18 sm-ta-c">雲が少なく、湿度の低い空気が<br class="d-n sm-d-i">澄んでいる夜が最適。</p>
            </section>
          </div>
          <div class="col-4 md-col-6 sm-col-12 js-scroll scroll-view">
            <section class="bgc-typography-alpha5 bdrs-max h-max pt30 sm-ptb30 plr60 sm-plr30 pb45">
              <i class="d-f ai-c jc-c w60 h60 mlr-a"><img loading="lazy" src="<?= get_template_directory_uri(); ?>/assets/images/photo/sec3-icon3.webp" width="47" height="47" alt="アイコン"></i>
              <h3 class="pt20 sm-pt10 ff-jaSerif fz140 sm-fz130 c-butter lh14 ls01 ta-c">月齢の確認</h3>
              <p class="pt15 sm-fz95 lh18 sm-ta-c">新月前後の2週間は月明かりが<br class="d-n sm-d-i">少なく、星空が鮮明に見える。</p>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- 撮影テクニック -->
  <section class="bdt bdw1 bdc-typography-alpha5 ptb90 sm-ptb60">
    <div class="cols">
      <div class="col-12">
        <h2 class="title-h3 js-scroll scroll-view">撮影テクニック</h2>
        <div class="cols nega jc-c gutter35 rg30 pt45 sm-pt30">
          <section class="col-4 md-col-6 sm-col-12 js-scroll scroll-view">
            <figure><img loading="lazy" class="img-fluid-full" src="<?= get_template_directory_uri(); ?>/assets/images/photo/sec4-pic1.webp" width="323" height="240" alt="構図の工夫"></figure>
            <h3 class="pt20 sm-pt15 ff-jaSerif fz140 sm-fz130 c-butter lh14 ls01">構図の工夫</h3>
            <p class="pt15 sm-fz95 lh18">前景に山や木などの風景を入れることで、写真に深みを持たせる。星をたくさんいれた構図と、風景を多めに入れた構図の２つを意識して撮影してみましょう。</p>
          </section>
          <section class="col-4 md-col-6 sm-col-12 js-scroll scroll-view">
            <figure><img loading="lazy" class="img-fluid-full" src="<?= get_template_directory_uri(); ?>/assets/images/photo/sec4-pic2.webp" width="323" height="240" alt="ホワイトバランスの調整"></figure>
            <h3 class="pt20 sm-pt15 ff-jaSerif fz140 sm-fz130 c-butter lh14 ls01">ホワイトバランスの調整</h3>
            <p class="pt15 sm-fz95 lh18">星空の色合いを好みに合わせて調整する。青すぎると星の色が消されてしまうので気を付けよう。</p>
          </section>
          <section class="col-4 md-col-6 sm-col-12 js-scroll scroll-view">
            <figure><img loading="lazy" class="img-fluid-full" src="<?= get_template_directory_uri(); ?>/assets/images/photo/sec4-pic3.webp" width="323" height="240" alt="ノイズ除去"></figure>
            <h3 class="pt20 sm-pt15 ff-jaSerif fz140 sm-fz130 c-butter lh14 ls01">ノイズ除去</h3>
            <p class="pt15 sm-fz95 lh18">高感度撮影によるノイズを、現像ソフトで適切に処理する。</p>
          </section>
        </div>
      </div>
    </div>
  </section>
  <!-- 天の川に関する豆知識 -->
  <section id="anchor4" class="pt90 sm-pt60 pb130 sm-pb90 pos-r">
    <?php get_template_part("_components/parts-shootingStar", null, "pos-a t-30 r150 z2"); // 流れ星のシェイプ 
    ?>
    <div class="cols">
      <div class="col-12">
        <h2 class="title-h2 mlr-a js-scroll scroll-view">天の川に関する豆知識</h2>
        <p class="pt45 sm-pt30 fz105 sm-fz95 ta-c sm-ta-l js-scroll scroll-view">天の川は季節ごとに見える方角や姿が異なります。<br class="sm-d-n">種子島での撮影時に役立つ情報を以下にまとめました。</p>
        <section class="pt30">
          <h3 class="title-h4 js-scroll scroll-view">天の川が見られる季節</h3>
          <p class="pt45 sm-pt30 fz105 sm-fz95 js-scroll scroll-view">天の川は地球の周囲を一周しているため <span class="fz85">(天の川銀河の中に地球がある)</span>、一年中見ることができますが、<br class="md-d-n">季節によって見えるエリアが変わります。</p>
          <div class="cols nega gutter45 sm-gutter30 rg45 sm-rg30 pt45 sm-pt30">
            <div class="col-6 sm-col-12 js-scroll scroll-view">
              <section class="bd bdw1 bdc-typography h-max p45 sm-p30 pos-r">
                <h4 class="w-fc ptb8 plr15 lh12" style="background-color: #db7f81">春 ( 3月～5月 )</h4>
                <div class="texts pt20 sm-pt15 fz105 sm-fz95">
                  <p>夜半前(0時前)は冬の天の川が西の空に見えます。夜半を過ぎると夏の天の川(銀河の中心部)が南東の空から昇ってきます。夏の天の川を狙うと朝方の撮影になるため多少ハードですが、低い夏の天の川が風景と絡めやすくとても人気のあるシーズンです。</p>
                  <p>方角：夜半前は西、夜半後は南から南東の空。</p>
                </div>
                <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a t-7 l-7 z1"></i>
                <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a t-7 r-7 z1"></i>
                <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a b-7 r-7 z1"></i>
                <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a b-7 l-7 z1"></i>
              </section>
            </div>
            <div class="col-6 sm-col-12 js-scroll scroll-view">
              <section class="bd bdw1 bdc-typography h-max p45 sm-p30 pos-r">
                <h4 class="w-fc ptb8 plr15 lh12" style="background-color: #4b7fa3">夏 ( 6月〜8月 )</h4>
                <div class="texts pt20 sm-pt15 fz105 sm-fz95">
                  <p>銀河の中心部（銀河核）が早い時間に高い位置で見えるようになり、気候も温暖になるため観測・撮影に最適なシーズンになります。</p>
                  <p>方角：南～南西</p>
                </div>
                <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a t-7 l-7 z1"></i>
                <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a t-7 r-7 z1"></i>
                <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a b-7 r-7 z1"></i>
                <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a b-7 l-7 z1"></i>
              </section>
            </div>
            <div class="col-6 sm-col-12 js-scroll scroll-view">
              <section class="bd bdw1 bdc-typography h-max p45 sm-p30 pos-r">
                <h4 class="w-fc ptb8 plr15 lh12" style="background-color: #b35732">秋 ( 9月〜11月 )</h4>
                <div class="texts pt20 sm-pt15 fz105 sm-fz95">
                  <p>夜半前には西に沈む夏～秋の天の川、夜半後は冬の天の川が昇ってきます。過ごしやすい気候になり、日照時間が短くなって夏～秋～冬の天の川を楽しめることから、ベストシーズンと言えます。</p>
                  <p>方角：夜半前は南西～西、夜半後は東の空。</p>
                </div>
                <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a t-7 l-7 z1"></i>
                <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a t-7 r-7 z1"></i>
                <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a b-7 r-7 z1"></i>
                <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a b-7 l-7 z1"></i>
              </section>
            </div>
            <div class="col-6 sm-col-12 js-scroll scroll-view">
              <section class="bd bdw1 bdc-typography h-max p45 sm-p30 pos-r">
                <h4 class="w-fc ptb8 plr15 lh12" style="background-color: #3a6c48">冬 ( 12月〜2月 )</h4>
                <div class="texts pt20 sm-pt15 fz105 sm-fz95">
                  <p>淡い冬の天の川が楽しめるシーズンです。<br>
                    気温は下がりますが、空気の透明度の高いシーズンであり、晴天率も高く、撮影が楽しみやすい時期でしょう。</p>
                  <p>方角：東から北東の空。</p>
                </div>
                <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a t-7 l-7 z1"></i>
                <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a t-7 r-7 z1"></i>
                <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a b-7 r-7 z1"></i>
                <i class="d-b bgc-typography bd bdw4 bdc-midnight bdrs-max w14 h14 pos-a b-7 l-7 z1"></i>
              </section>
            </div>
          </div>
        </section>
        <section class="pt90 sm-pt60">
          <div class="cols ai-c nega rg20">
            <div class="col-5 sm-col-12 js-scroll scroll-view"><img loading="lazy" class="img-fluid" src="<?= get_template_directory_uri(); ?>/assets/images/photo/sec5-pic1.webp" width="370" height="220" alt="新月の夜"></div>
            <div class="col-7 sm-col-12 js-scroll scroll-view">
              <h3 class="bgc-butter w-fc ptb8 plr15 ff-jaSerif fz140 sm-fz120 c-midnight lh14 lts01">撮影のタイミングは<br class="d-n sm-d-i">新月の夜がおすすめ！</h3>
              <p class="pt30 sm-pt20 fz105 sm-fz95">月明かりの影響が少なく、雲が少ない、星空がはっきり見える夜がおすすめ。<br>
                新月の前後２週間は比較的月が細く影響が少ないので星空の撮影シーズンです。</p>
            </div>
          </div>
        </section>
      </div>
    </div>
    <div class="js-rellax-wrapper"><img loading="lazy" class="img-bg js-rellax" src="<?= get_template_directory_uri(); ?>/assets/images/photo/sec5-bgi.webp" width="1440" height="1640" alt="夜空の背景"></div>
  </section>
  <!-- 成澤広幸先生について -->
  <section class="ptb130 sm-ptb90 pos-r">
    <div class="cols">
      <div class="col-12">
        <h2 class="title-h4 mlr-a js-scroll scroll-view">アドバイスをくれたのは‥</h2>
        <div class="cols nega gutter50 sm-gutter30 rg30 pt60 sm-pt30">
          <div class="col-5 sm-col-12 js-scroll scroll-view"><img loading="lazy" class="img-fluid mlr-a md-zoom08 sm-zoom06" src="<?= get_template_directory_uri(); ?>/assets/images/photo/sec7-pic1.webp" width="390" height="390" alt="成澤広幸"></div>
          <div class="col-7 sm-col-12 js-scroll scroll-view">
            <div class="bgc-typography-alpha5 bdrs10 p50 sm-p30">
              <p class="d-f ai-c jc-c fxs0 bd bdw1 bdc-butter bdrs-max w160 h40">風景写真家</p>
              <h3 class="pt20 sm-pt15 ff-jaSerif fz180 sm-fz145 c-butter lh14 ls01">成澤 広幸 先生</h3>
              <div class="texts pt30 sm-pt15 fz105 sm-fz95">
                <p>1980年5月31日生まれ。北海道留萌市出身。埼玉県在住。<br>
                  星空写真家・タイムラプスクリエイター・Youtuber。</p>
                <ul class="ul">
                  <li>公益社団法人日本写真家協会(JPS)正会員</li>
                  <li>ニコンNPS会員</li>
                  <li>Blackmagic Design 「DaVinci Resolve」認定トレーナー</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <p class="pt60 sm-pt30 fz105 sm-fz95 js-scroll scroll-view">オンラインサロン「成澤広幸の撮影研究塾『STAVE』」を運営。全国各地で撮影セミナー、動画編集セミナーを多数開催。天文雑誌・カメラ雑誌・webマガジンなどで連載を担当。星空写真全般(星景・天体)と、幅広い被写体のタイムラプスを撮影。特に「Holy Grail」と呼ばれる夕焼け〜星空〜朝焼けのタイムラプス表現を得意とする。<br>
          写真スタジオ、天体望遠鏡メーカーでの勤務の後、2020年4月に独立。動画撮影・編集技術を磨くべくYoutuberとしての活動をスタート。自然写真家・田中雅美氏、タイムラプスフォトグラファー・岡浩一郎氏に師事。</p>
        <div class="cols nega gutter40 sm-gutter30 rg30 pt60 sm-pt30">
          <section class="col-5 md-col-6 sm-col-12 js-scroll scroll-view">
            <h3 class="bgc-butter w-fc ptb6 plr20 c-midnight lh14">著書</h3>
            <ul class="pt20 sm-pt15 fz105 sm-fz95">
              <li>「成澤広幸の星空撮影塾 決定版」</li>
              <li>「プロが教えるタイムラプスの教科書」など。</li>
            </ul>
          </section>
          <section class="col-5 md-col-6 sm-col-12 js-scroll scroll-view">
            <h3 class="bgc-butter w-fc ptb6 plr20 c-midnight lh14">メディア出演</h3>
            <ul class="pt20 sm-pt15 fz105 sm-fz95">
              <li>日本テレビ「ヒルナンデス！」夏休み絶景特集出演</li>
              <li>テレビ東京 「Youは何しに日本へ？」</li>
              <li>NHK総合「朝ごはんLab」など</li>
            </ul>
          </section>
          <section class="col-5 md-col-6 sm-col-12 js-scroll scroll-view">
            <h3 class="bgc-butter w-fc ptb6 plr20 c-midnight lh14">連載</h3>
            <ul class="pt20 sm-pt15 fz105 sm-fz95">
              <li>月刊天文ガイド「星空に会いに行く・撮りに行く」</li>
            </ul>
          </section>
        </div>
      </div>
    </div>
    <div class="js-rellax-wrapper"><img loading="lazy" class="img-bg js-rellax" src="<?= get_template_directory_uri(); ?>/assets/images/photo/sec7-bgi.webp" width="1440" height="1447" alt="夜空の背景"></div>
  </section>
  <?php get_template_part("_components/pankuzu", null, [["TOP", "/"], ["星空撮影のテクニック", NULL]]); // パンくずリスト 
  ?>
</main>

<?php get_footer(); ?>
