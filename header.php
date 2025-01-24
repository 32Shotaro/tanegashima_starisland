<!doctype html>
<html class="no-js" lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no, address=no,email=no">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
  <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() . '/assets/css/style.css?' . date("ymdHis", filemtime(ABSPATH . 'assets/css/style.css')); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&family=Josefin+Sans&family=Zen+Kaku+Gothic+New&family=Zen+Old+Mincho&display=swap" rel="stylesheet">
  <meta name="robots" content="index, follow">
</head>
