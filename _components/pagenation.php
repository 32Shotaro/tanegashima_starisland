<!-- WPページネーション -->
<div class="pt120 sm-pt60 js-scroll scroll-view">
  <div class="cols">
    <div class="col-12">
      <?php
      // ページネーションの設定
      global $wp_query;
      $big = 999999999; // 大きい数値を指定して置換する
      $current_page = max(1, get_query_var('paged'));
      $total_pages = $wp_query->max_num_pages;

      // ページネーションリンクを生成
      $pagination_links = paginate_links(array(
        'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format'    => '?paged=%#%',
        'current'   => $current_page,
        'total'     => $total_pages,
        'prev_text' => '&lt;',
        'next_text' => '&gt;',
        'type'      => 'array', // 配列でリンクを返す
      ));

      if ($pagination_links) : ?>
        <!-- 現在のページ / 総ページ数 -->
        <p class="ff-enSans fz180 sm-fz150 lh12 ta-c"><?php echo $current_page . ' / ' . $total_pages; ?></p>
        <ul class="d-f fxw-w jc-c g10 pt20">
          <?php foreach ($pagination_links as $link) : ?>
            <li>
              <?php
              // aタグとspanタグに共通のクラスを設定
              $common_classes = 'd-f ai-c jc-c bd bdw1 bdc-typography bdrs-max w50 h50 ff-enSans fz115 lh1 td-n hov-bgc-typography-alpha5 hov-bdc-butter hov-c-butter';

              // spanタグの場合にクラスを追加
              if (strpos($link, '<span') !== false) {
                $link = str_replace('<span', '<span class="' . $common_classes . '"', $link);
              } else {
                // aタグの場合もデフォルトクラスを追加
                $link = str_replace('<a', '<a class="' . $common_classes . '"', $link);
              }

              echo $link;
              ?>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>
</div>
