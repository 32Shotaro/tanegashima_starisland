<?php

//==============================================
//	基本設定
//==============================================

// もしメンテナンスモードにしたい場合
// if ( strstr($_SERVER['REQUEST_URI'], 'login' )) {
// 	wp_die('ただいまメンテナンス中です。<br>サイトは問題なく表示されますが、管理画面からの更新を一時的に行えないように設定しております。<br>恐れ入りますが、少々お待ちください。');
// }

//rel="prev"を無効
add_filter('wpseo_prev_rel_link', '__return_false');
//rel="next"を無効
add_filter('wpseo_next_rel_link', '__return_false');

//wp-block-library読み込み停止
function remove_unuse_css()
{
  wp_dequeue_style('wp-block-library');
  wp_dequeue_style('remove_global-styles_inline');
  wp_dequeue_style('global-styles');
}
add_action('wp_enqueue_scripts', 'remove_unuse_css', 9999);

//admin barを消す
function disable_admin_bar()
{
  return false;
}
add_filter('show_admin_bar', 'disable_admin_bar');


// WordPressから送信されるメールの表示名をサイト名に変更
add_filter('wp_mail_from_name', 'custom_wp_mail_from_name');
function custom_wp_mail_from_name($original_email_from)
{
  return get_bloginfo('name') . "サイト"; // サイト名を表示名として使用
}

//自動でアップグレード無効化
add_filter('automatic_updater_disabled', '__return_true');

//headから情報を消す
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);

//管理画面上で、選択したカテゴリが上に表示される現象を削除
function keep_category_order($args, $post_id = null)
{
  $args['checked_ontop'] = false;
  return $args;
}
add_action('wp_terms_checklist_args', 'keep_category_order');

//ダッシュボードの表示を消す。
function example_remove_dashboard_widgets()
{
  global $wp_meta_boxes;
  unset($wp_meta_boxes['dashboard']);
}
add_action('wp_dashboard_setup', 'example_remove_dashboard_widgets');


//ダッシュボードに表示を追加。
function my_dashboard_setup()
{
  global $wp_meta_boxes;
  unset($wp_meta_boxes['dashboard']);
  wp_add_dashboard_widget('welcome', 'ようこそ', 'welcome_widget');
}
function welcome_widget()
{
  echo 'ダッシュボードへようこそ！左のメニューから記事を更新してください。';
}
add_action('wp_dashboard_setup', 'my_dashboard_setup');


//4.2から標準搭載のtwemoji.jsのjsとcssを無効化
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles', 10);

//セルフピンバックを送らない
function no_self_ping(&$links)
{
  $home = home_url();
  foreach ($links as $l => $link)
    if (0 === strpos($link, $home))
      unset($links[$l]);
}
add_action('pre_ping', 'no_self_ping');


//エディター拡張関係
//ビジュアルエディタボタン拡張
function ilc_mce_buttons($buttons)
{
  array_push($buttons, "backcolor", "copy", "cut", "paste", "fontsizeselect");
  return $buttons;
}
add_filter("mce_buttons", "ilc_mce_buttons");
//エディターの設定
function change_editor_font()
{
  echo "<style type='text/css'>
	#wp-content-wrap textarea#content.wp-editor-area {
	  font-family: \"ヒラギノ角ゴ Pro W3\",
		\"Hiragino Kaku Gothic Pro\",
		Osaka,
		\"ＭＳ Ｐゴシック\",
		sans-serif;
	  font-size:14px;
	  color:#333;
	}
	</style>";
}
add_action("admin_print_styles", "change_editor_font");

//リビジョンを最大5までに制限
function set_revision_store_number($num)
{
  return 5;
}
add_filter('wp_revisions_to_keep', 'set_revision_store_number');

//投稿詳細ページのみ、パーマリンクをリライトする。
function add_article_post_permalink($permalink)
{
  $permalink = '/posts' . $permalink;
  return $permalink;
}
add_filter('pre_post_link', 'add_article_post_permalink');
function add_article_post_rewrite_rules($post_rewrite)
{
  $return_rule = array();
  foreach ($post_rewrite as $regex => $rewrite) {
    $return_rule['posts/' . $regex] = $rewrite;
  }
  return $return_rule;
}
add_filter('post_rewrite_rules', 'add_article_post_rewrite_rules');

//ページネーション
function pagination()
{
  get_template_part("_components/pagenation");
}

//管理画面に独自CSSの使用
function admin_css()
{
  echo '<link rel="stylesheet" type="text/css" href="' . site_url() . '/css/_admin.css">';
}
add_action('login_head', 'admin_css');
add_action('admin_head', 'admin_css');

if (!current_user_can('level_10')) {

  //バージョンアップを消す
  add_filter('pre_site_transient_update_core', '__return_zero');
  remove_action('wp_version_check', 'wp_version_check');
  remove_action('admin_init', '_maybe_update_core');


  //フッターのバージョン情報を非表示
  function remove_footer_version()
  {
    remove_filter('update_footer', 'core_update_footer');
  }
  add_action('admin_menu', 'remove_footer_version');

  // 管理バーの項目を非表示
  function remove_admin_bar_menu($wp_admin_bar)
  {
    $wp_admin_bar->remove_menu('wp-logo'); // WordPressシンボルマーク
    $wp_admin_bar->remove_menu('my-account'); // マイアカウント
    $wp_admin_bar->remove_menu('comments'); // コメント
    $wp_admin_bar->remove_menu('new-content'); // 新規
  }
  add_action('admin_bar_menu', 'remove_admin_bar_menu', 201);


  // 管理バーのヘルプメニューを非表示にする
  function my_admin_head()
  {
    echo '<style type="text/css">#contextual-help-link-wrap{display:none;}</style>';
  }
  add_action('admin_head', 'my_admin_head');


  // 管理バーにログアウトを追加
  function add_new_item_in_admin_bar()
  {
    global $wp_admin_bar;
    $wp_admin_bar->add_menu(array(
      'id' => 'new_item_in_admin_bar',
      'title' => __('ログアウト'),
      'href' => wp_logout_url()
    ));
  }
  add_action('wp_before_admin_bar_render', 'add_new_item_in_admin_bar');


  //フッターにwordpressの表記をしない。
  function custom_admin_footer()
  {
    echo '';
  }
  add_filter('admin_footer_text', 'custom_admin_footer');


  //パーマリンクを表示しない。
  function my_return_false()
  {
    return false;
  }
  add_filter('get_sample_permalink_html', 'my_return_false');
}

//固定ページ一覧でパーマリンクの列を追加
function add_permalink_column_to_pages($columns)
{
  $columns['permalink'] = 'パーマリンク';
  return $columns;
}
function show_permalink_column_for_pages($column, $post_id)
{
  if ('permalink' === $column) {
    $permalink = get_permalink($post_id);
    $relative_permalink = wp_make_link_relative($permalink);
    echo '<a href="' . $permalink . '" target="_blank">' . $relative_permalink . '</a>';
  }
}
add_filter('manage_pages_columns', 'add_permalink_column_to_pages');
add_action('manage_pages_custom_column', 'show_permalink_column_for_pages', 10, 2);


//==============================================
//	任意設定(全ユーザー)
//==============================================

//投稿の名称変更
function customize_menu()
{
  global $menu;
  global $submenu;
  //add_menu_page('固定ページ名', '固定ページ名', 'publish_pages', 'post.php?post=54&action=edit', '', '', '6.5');
  $menu[5][0] = '星空の体験';
  $submenu['edit.php'][5][0] = '星空の体験';
  $submenu['edit.php'][10][0] = '星空の体験を追加する';
}
add_action('admin_menu', 'customize_menu');


//投稿一覧ページのカラムを削除
function custom_columns($columns)
{
  //unset($columns['cb']); // チェックボックス
  //unset($columns['title']); // タイトル
  //unset($columns['author']); // 作成者
  //unset($columns['categories']); // カテゴリー
  unset($columns['tags']); // タグ
  unset($columns['comments']); // コメント
  //unset($columns['date']); // 日付
  return $columns;
}
add_filter('manage_posts_columns', 'custom_columns');



//==============================================
//	任意設定(編集者用)
//==============================================

if (!current_user_can('level_10')) {

  //   ユーザーのメニューを消す		
  function remove_menus()
  {
    global $menu;
    //unset($menu[2]);//ダッシュボード
    unset($menu[4]); //メニューの線1
    //unset($menu[5]);//投稿
    //remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=category'); // 投稿 -> カテゴリ
    remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag'); // 投稿 -> タグ
    //remove_menu_page('edit.php?post_type=excursions');
    //remove_submenu_page('edit.php?post_type=voices', 'edit-tags.php?taxonomy=voices-cat&amp;post_type=voices'); // URLの"&"は、"&amp;"に書き換えないとダメ
    //unset($menu[10]); //メディア
    unset($menu[15]); //リンク
    unset($menu[20]); //ページ
    unset($menu[25]); //コメント
    unset($menu[59]); //メニューの線2
    unset($menu[60]); //テーマ
    unset($menu[65]); //プラグイン
    unset($menu[70]); //プロフィール
    unset($menu[75]); //ツール
    unset($menu[80]); //設定
    unset($menu[90]); //メニューの線3
    unset($menu["99.6084"]); //YOAST SEOのメニュー除外(変更がありえる)
  }
  add_action('admin_menu', 'remove_menus');


  //標準投稿の詳細ページから不要な機能を【無効化】
  function remove_post_supports()
  {
    //remove_post_type_support( 'post', 'title' ); // タイトル
    //remove_post_type_support( 'post', 'editor' ); // 本文欄
    remove_post_type_support('post', 'author'); // 作成者
    //remove_post_type_support('post', 'thumbnail'); // アイキャッチ
    remove_post_type_support('post', 'excerpt'); // 抜粋
    remove_post_type_support('post', 'trackbacks'); // トラックバック
    remove_post_type_support('post', 'custom-fields'); // カスタムフィールド
    remove_post_type_support('post', 'comments'); // コメント
    remove_post_type_support('post', 'revisions'); // リビジョン
    remove_post_type_support('post', 'page-attributes'); // ページ属性
    remove_post_type_support('post', 'post-formats'); // 投稿フォーマット

    //unregister_taxonomy_for_object_type( 'category', 'post' ); // カテゴリ
    //unregister_taxonomy_for_object_type( 'post_tag', 'post' ); // タグ
  }
  add_action('init', 'remove_post_supports');

  /* 標準投稿の詳細ペーから不要な項目を【非表示】 */
  function my_remove_meta_boxes()
  {
    // remove_meta_box('postexcerpt', 'post', 'normal');      // 抜粋
    // remove_meta_box('trackbacksdiv', 'post', 'normal');    // トラックバック
    // remove_meta_box('slugdiv', 'post', 'normal');           // スラッグ
    // remove_meta_box('postcustom', 'post', 'normal');       // カスタムフィールド
    // remove_meta_box('commentsdiv', 'post', 'normal');      // コメント
    // remove_meta_box('submitdiv','post','normal' );        // 公開
    // remove_meta_box('categorydiv','post','normal');       // カテゴリー
    remove_meta_box('tagsdiv-post_tag', 'post', 'normal'); // タグ
    // remove_meta_box('commentstatusdiv', 'post', 'normal'); // ディスカッション
    // remove_meta_box('authordiv', 'post', 'normal');        // 作成者
    // remove_meta_box('revisionsdiv', 'post', 'normal');     // リビジョン
    // remove_meta_box('formatdiv', 'post', 'normal');        // フォーマット
    // remove_meta_box('pageparentdiv', 'post', 'normal');    // 属性
  }
  add_action('admin_menu', 'my_remove_meta_boxes');

  //YOAST SEOのメタボックスを削除
  function my_remove_wp_seo_meta_box()
  {
    remove_meta_box('wpseo_meta', 'page', 'normal');
  }
  add_action('add_meta_boxes', 'my_remove_wp_seo_meta_box', 100000);
}


//==============================================
//	オプション設定
//==============================================


//アイキャッチを使えるようにする。
add_theme_support('post-thumbnails');

//画像サイズ登録
//add_image_size('fixwidth', 固定する値, 9999)
//add_image_size('fixheight', 9999, 固定する値)
//add_image_size('size110110', 110, 110, true);

// カスタムポストを、ループで登録する
$vals = array(
  'spots' => array(
    'name' => '星空スポット',
    'slug' => 'spots',
    'support' => array('title', 'editor', 'thumbnail')
  ),
);
foreach ($vals as $key => $val) {
  add_action('init', function () use ($key, $val) {
    $labels = array(
      'name' => _x($val['name'], 'post type general name'),
      'singular_name' => _x($val['name'], 'post type singular name'),
    );
    $args = array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_in_rest' => false,  // これがブロックエディターを有効にします
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => array('slug' => $val['slug'], 'with_front' => false),
      'capability_type' => 'post',
      'hierarchical' => false, // Set to false unless you need a hierarchical structure (like pages)
      'menu_position' => 5, // Adjust position in admin menu if necessary
      'supports' => $val['support']
    );
    register_post_type($key, $args);

    //投稿タイプのパーマリンク書き換え
    //※※この設定をした後、必ず管理画面より「パーマリンク設定」を更新すること※※
    global $wp_rewrite;
    $queryarg = 'post_type=' . $key . '&p=';
    $wp_rewrite->add_rewrite_tag('%' . $key . '_id%', '([^/]+)', $queryarg);
    $wp_rewrite->add_permastruct($key, '/' . $val['slug'] . '/%' . $key . '_id%', false);

    add_filter('post_type_link', function ($post_link, $id = 0) use ($key, $wp_rewrite) {
      $post = get_post($id);
      if (is_wp_error($post) || $post->post_type != $key)
        return $post_link;

      $newlink = $wp_rewrite->get_extra_permastruct($post->post_type);
      $newlink = str_replace('%' . $post->post_type . '_id%', $post->ID, $newlink);
      return home_url(user_trailingslashit($newlink));
    }, 1, 3);
  });
}

// カスタムタクソノミーを、ループで登録する
$vals = array(
  'spots-cat' => array(
    'name' => 'カテゴリー',
    'slug' => 'spots'
  ),
);
foreach ($vals as $taxonomy => $value) {
  register_taxonomy(
    $taxonomy, // タクソノミースラッグ
    $value['slug'], // ここで配列の'slug'キーの値を使用
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'labels' => array(
        'name' => $value['name'],
        'add_new_item' => __('カテゴリーを追加', 'my-plugin'),
        'parent_item' => __('親カテゴリー', 'my-plugin'),
        'edit_item' => __('カテゴリーを編集', 'my-plugin'),
        'update_item' => __('カテゴリーを更新', 'my-plugin'),
        'name_field_description' => __('サイト上に表示される名前です。', 'my-plugin'),
        'slug_field_description' => __('「スラッグ」は URL に適した形式の名前です。通常はすべて半角小文字で、英数字とハイフンのみが使われます。', 'my-plugin'),
        'parent_field_description' => __('タグとは異なり、カテゴリーは階層構造を持つことができます。たとえば、ジャズというカテゴリーの下にビバップやビッグバンドという子カテゴリーを作る、といったようなことです。これはオプションです。', 'my-plugin'),
        'desc_field_description' => __('デフォルトではこの説明は目立つ使われ方はしませんが、テーマによっては表示されます。', 'my-plugin'),
      ),
      'public' => true,
      'show_ui' => true,
      'show_in_rest' => true,
    )
  );
  // 管理画面の一覧ページにタクソノミーの列を追加する関数
  add_filter("manage_edit-{$value['slug']}_columns", function ($columns) use ($taxonomy, $value) {
    $columns[$taxonomy] = $value['name'];
    return $columns;
  });
  // カラムの内容を表示する関数
  add_action("manage_{$value['slug']}_posts_custom_column", function ($column, $post_id) use ($taxonomy) {
    if ($column === $taxonomy) {
      $terms = get_the_terms($post_id, $taxonomy);
      if ($terms && !is_wp_error($terms)) {
        $term_links = array();
        foreach ($terms as $term) {
          $term_links[] = sprintf(
            '<a href="%s">%s</a>',
            esc_url(get_admin_url(null, 'edit.php?post_type=' . get_post_type($post_id) . '&' . $taxonomy . '=' . $term->slug)),
            esc_html($term->name)
          );
        }
        echo join(", ", $term_links);
      }
    }
  }, 10, 2);
}

//固定ページ＋投稿で、クラシックエディターを使用する
add_filter('use_block_editor_for_post_type', 'hide_block_editor', 10, 10);

function hide_block_editor($use_block_editor, $post_type)
{
  if ($post_type === 'post' || $post_type === 'page') return false;
  return $use_block_editor;
}
