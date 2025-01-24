<?php $pankuzuLists = $args; ?>
<!-- パンくずリスト（schema.org対応） -->
<nav class="breadcrumbs ptb30 sm-ptb10 plr20" aria-label="breadcrumb">
  <ol class="fz85 lh120 lc1" itemscope itemtype="https://schema.org/BreadcrumbList">
    <?php if ($pankuzuLists != NULL) { ?>
      <?php foreach ($pankuzuLists as $i => $list) { ?>
        <li class="d-i" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <?php if ($list[1] != NULL) { ?>
            <a class="td-n hov-op65" href="/" itemprop="item"><span itemprop="name"><?= $list[0]; ?></span></a>
            <meta itemprop="position" content="<?= $i + 1; ?>">｜
          <?php } else { ?>
            <span itemprop="name"><strong class="fw-b"><?= $list[0]; ?></span>
            <meta itemprop="position" content="<?= $i + 1; ?>">
          <?php } ?>
        </li>
      <?php } ?>
    <?php } ?>
  </ol>
</nav>
