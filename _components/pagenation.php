<div class="cms-pagenation">
  <?php
  //短縮形で出力
  function getLink($nowage)
  {
    echo get_pagenum_link($nowage);
  }
  global $paged; //今のページ番号
  global $wp_query; //今のクエリ情報
  $now = $paged;
  if (empty($now)) $now = 1;
  $nowosts_query = $wp_query->query_vars;
  $p1p = $nowosts_query['posts_per_page'];
  $all = $wp_query->max_num_pages;
  if (!$all) {
    $all = 1; //全ページ番号
  }
  if (1 != $all) { //ページネーションが必要な場合、下のコードを出力
  ?>

    <!-- PC時 -->
    <div class="md-d-n">

      <!-- 次の●件へボタン -->
      <?php if ($now < $all) { ?>
        <div><a class="btn" href="<?= getLink($now + 1) ?>">次の<?= $p1p; ?>件へ</a></div>
      <?php } ?>

      <ul>
        <!-- １つ前 -->
        <li><a class="<?= $now == 1 ? "null" : "" ?>" href="<?= getLink($now - 1) ?>">◀</a></li>

        <!-- 前の数字 -->
        <?php if ($now <= 5) { ?>
          <?php for ($i = 1; $i <= $now - 1; $i++) { ?>
            <li><a href="<?= getLink($i); ?>"><?= $i ?></a></li>
          <?php } ?>
        <?php } else { ?>
          <li><a href="<?= getLink(1) ?>">1</a></li>
          <li class="elps">...</li>
          <li><a href="<?= getLink($now - 2) ?>"><?= ($now - 2) ?></a></li>
          <li><a href="<?= getLink($now - 1) ?>"><?= ($now - 1) ?></a></li>
        <?php } ?>
        <!-- 今の数字 -->
        <li><a class="act" href="<?= getLink($now) ?>"><?= $now ?></a></li>
        <!-- 後の数字 -->
        <?php if (($all - $now) <= 4) { ?>
          <?php for ($i = $now + 1; $i <= $all; $i++) { ?>
            <li><a href="<?= getLink($i) ?>"><?= $i ?></a></li>
          <?php } ?>
        <?php } else { ?>
          <li><a href="<?= getLink($now + 1) ?>"><?= ($now + 1) ?></a></li>
          <li><a href="<?= getLink($now + 2) ?>"><?= ($now + 2) ?></a></li>
          <li class="elps">...</li>
          <li><a href="<?= getLink($all) ?>"><?= $all ?></a></li>
        <?php } ?>

        <!-- 次 -->
        <li><a class="<?= $now == $all ? "null" : "" ?>" href="<?= getLink($now + 1) ?>">▶</a></li>
      </ul>
    </div>

    <!-- タブレット・スマホ時 -->
    <div class="d-n md-d-b">
      <p class="pagenum"><?= $now ?>ページ目（全<?= $all ?>ページ中）</p>
      <ul>
        <li><a class="<?= $now == 1 ? "null" : "" ?>" href="<?= getLink(1) ?>">|&lt;</a></li>
        <li><a class="<?= $now == 1 ? "null" : "" ?>" href="<?= getLink($now - 1) ?>">&lt; 前のページ</a></li>
        <li><a class="<?= $now == $all ? "null" : "" ?>" href="<?= getLink($now + 1) ?>">次のページ &gt;</a></li>
        <li><a class="<?= $now == $all ? "null" : "" ?>" href="<?= getLink($all) ?>">&gt;|</a></li>
      </ul>
    </div>
</div>

<?php } ?>
