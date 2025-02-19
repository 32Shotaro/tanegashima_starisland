<!doctype html>
<html class="no-js" lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no, address=no,email=no">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
  <link rel="icon" href="<?= get_template_directory_uri(); ?>/assets/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() . '/assets/css/style.css?' . date("ymdHis", filemtime(ABSPATH . 'assets/css/style.css')); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&family=Josefin+Sans&family=Zen+Kaku+Gothic+New&family=Zen+Old+Mincho&display=swap" rel="stylesheet">
  <meta name="robots" content="index, follow">
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z7LNZ313NW"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-Z7LNZ313NW');
  </script>
</head>

<!-- ヘッダー -->
<header class="header w-max pos-f t0 r0 l0 z10">
  <?php if (is_home()) { ?>
    <h1 class="header-logo"><a class="d-b hov-op65" href="/"><img loading="lazy" class="md-zoom075 sm-zoom055" src="<?= get_template_directory_uri(); ?>/assets/images/common/logo.svg" width="80" height="198" alt="星の島、種子島"></a></h1>
  <?php } elseif (is_single()) { ?>
    <div class="header-logo"><a class="d-b hov-op65" href="/"><img loading="lazy" class="md-zoom075 sm-zoom055" src="<?= get_template_directory_uri(); ?>/assets/images/common/logo.svg" width="80" height="198" alt="星の島、種子島"></a></div>
  <?php } else { ?>
    <h1 class="header-logo"><a class="d-b hov-op65" href="/"><img loading="lazy" class="md-zoom075 sm-zoom055" src="<?= get_template_directory_uri(); ?>/assets/images/common/logo.svg" width="80" height="198" alt="<?= the_title(); ?>"></a></h1>
  <?php } ?>
  <!-- グローバルナビ -->
  <div class="gNav-trigger d-f ai-c cg20 pos-a t30 sm-t15 r30 sm-r15 z2 cur-p js-gNav-trigger">
    <span class="sm-d-n ff-enSans fz85 lh12 ls02">MENU</span>
    <div class="gNav-trigger-icon d-f ai-c jc-c bd bdw1 bdc-typography bdrs-max w70 sm-w60 h70 sm-h60"><i></i><i></i><i></i></div>
  </div>
  <nav class="gNav d-f ai-c jc-c pos-f t0 b0 r0 z1 ov-h">
    <div class="p20">
      <ul class="ff-jaSerif fz185 md-fz145 sm-fz120 lh14">
        <li><a class="d-b ptb10 plr15 td-n hov-c-butter hov-animation-bgfill" href="/">トップページ</a></li>
        <li><a class="d-b ptb10 plr15 td-n hov-c-butter hov-animation-bgfill" href="/spot">星空スポット</a></li>
        <li><a class="d-b ptb10 plr15 td-n hov-c-butter hov-animation-bgfill" href="/event">星空の体験</a></li>
        <li><a class="d-b ptb10 plr15 td-n hov-c-butter hov-animation-bgfill" href="/photo">星空撮影のテクニック</a></li>
        <li><a class="d-b ptb10 plr15 td-n hov-c-butter hov-animation-bgfill" href="/item">おすすめのグッズ</a></li>
      </ul>
      <ul class="d-f cg5 pt15">
        <li><a class="d-f ai-c jc-c bdrs-max w60 h60 td-n hov-bgc-typography-alpha5 hov-c-butter" href="https://www.facebook.com/profile.php?id=100081276648823&locale=ja_JP" target="_blank" rel="noopener"><i class="icon-facebook fz160"></i></a></li>
        <li><a class="d-f ai-c jc-c bdrs-max w60 h60 td-n hov-bgc-typography-alpha5 hov-c-butter" href="https://youtube.com/channel/UC1OGBkf-D8TkQMcPz6E2jNQ?si=3ZZJ7vo743YeE2tL" target="_blank" rel="noopener"><i class="icon-youtube fz160"></i></a></li>
        <li><a class="d-f ai-c jc-c bdrs-max w60 h60 td-n hov-bgc-typography-alpha5 hov-c-butter" href="https://www.instagram.com/tanegashima.travel/" target="_blank" rel="noopener"><i class="icon-instagram fz160"></i></a></li>
      </ul>
    </div>
  </nav>
</header>

<?php if (!is_home()) { ?>
  <ul class="d-f sm-d-n fxd-c ai-c pos-a t260 md-t180 r30 sm-r15 z1">
    <li class="pb10 text-v ff-enSans fz85 lh14 ls02">SNS</li>
    <li><a class="d-f ai-c jc-c bdrs-max w35 h35 td-n hov-bgc-typography-alpha5 hov-c-butter" href="https://www.facebook.com/profile.php?id=100081276648823&locale=ja_JP" target="_blank" rel="noopener"><i class="icon-facebook fz160"></i></a></li>
    <li><a class="d-f ai-c jc-c bdrs-max w35 h35 td-n hov-bgc-typography-alpha5 hov-c-butter" href="https://youtube.com/channel/UC1OGBkf-D8TkQMcPz6E2jNQ?si=3ZZJ7vo743YeE2tL" target="_blank" rel="noopener"><i class="icon-youtube fz160"></i></a></li>
    <li><a class="d-f ai-c jc-c bdrs-max w35 h35 td-n hov-bgc-typography-alpha5 hov-c-butter" href="https://www.instagram.com/tanegashima.travel/" target="_blank" rel="noopener"><i class="icon-instagram fz160"></i></a></li>
  </ul>
<?php } ?>
