<?php

// 管理画面の「投稿」を非表示
function my_remove_post_menu() {
    remove_menu_page('edit.php'); // 投稿
}
add_action('admin_menu', 'my_remove_post_menu');

// サムネイルを使う
add_theme_support('post-thumbnails');

// カスタム投稿
function create_custom_post_type() {
  register_post_type(
    'news', // 投稿タイプ名（半角小文字・20文字以内）
    array(
      'labels' => array(
        'name'          => '新着情報',
        'singular_name' => '新着情報',
      ),
      'public'        => true,
      'has_archive'   => true,
      'menu_position' => 5,
      'menu_icon'     => 'dashicons-megaphone', // アイコン
      'supports'      => array('title', 'editor', 'thumbnail'),
      'show_in_rest'  => true,
    )
  );
  register_taxonomy(
    'news-cat',
    'news',
    array(
      'label' => 'カテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );
  register_post_type(
    'staff', // 投稿タイプ名（半角小文字・20文字以内）
    array(
      'labels' => array(
        'name'          => 'スタッフ紹介',
        'singular_name' => 'スタッフ紹介',
      ),
      'public'        => true,
      'has_archive'   => true,
      'menu_position' => 5,
      'menu_icon'     => 'dashicons-megaphone', // アイコン
      'supports'      => array('title'),
    )
  );
  register_post_type(
    'case', // 投稿タイプ名（半角小文字・20文字以内）
    array(
      'labels' => array(
        'name'          => 'ご利用事例',
        'singular_name' => 'ご利用事例',
      ),
      'public'        => true,
      'has_archive'   => true,
      'menu_position' => 5,
      'menu_icon'     => 'dashicons-megaphone', // アイコン
      'supports'      => array('title'),
    )
  );
}
add_action('init', 'create_custom_post_type');



// 閲覧数セット
function setPostViews($postID) {
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);

	if($count==""){
		$count = 0;
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
	} else {
		$count++;
		update_post_meta($postID, $count_key, $count);
	}
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

// クローラーカウントしない場合は追加
function is_bot() {
	$ua = $_SERVER['HTTP_USER_AGENT'];
	
	$bot = array(
		'Googlebot',
		'Yahoo! Slurp',
		'Mediapartners-Google',
		'msnbot',
		'bingbot',
		'MJ12bot',
		'Ezooms',
		'pirst; MSIE 8.0;',
		'Google Web Preview',
		'ia_archiver',
		'Sogou web spider',
		'Googlebot-Mobile',
		'AhrefsBot',
		'YandexBot',
		'Purebot',
		'Baiduspider',
		'UnwindFetchor',
		'TweetmemeBot',
		'MetaURI',
		'PaperLiBot',
		'Showyoubot',
		'JS-Kit',
		'PostRank',
		'Crowsnest',
		'PycURL',
		'bitlybot',
		'Hatena',
		'facebookexternalhit',
		'NINJA bot',
		'YahooCacheSystem',
		'NHN Corp.',
		'Steeler',
		'DoCoMo',
	);

	foreach( $bot as $bot ) {
		if (stripos( $ua, $bot ) !== false){
			return true;
		}
	}
	
	return false;	
}

// 閲覧数取得
function getPostViews($postID){
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);

	if($count==""){ //カウントがなければ0をセット
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
		return "0 View";
	}

	return $count.' Views';
}

// 管理画面に閲覧数項目を追加する
function count_add_column( $columns ) {
    $columns['views'] = '閲覧数';
    return $columns;
}
add_filter( 'manage_posts_columns', 'count_add_column' ); // 投稿ページに追加


// 管理画面にページビュー数を表示する
function count_add_column_data( $column, $post_id ) {
    switch ( $column ) {
        case 'views' :
					echo getPostViews($post_id); // 閲覧数を取得する
				break;
    }
}
add_action( 'manage_posts_custom_column' , 'count_add_column_data', 10, 2 ); // 投稿ページに追加

// 閲覧数項目を並び替えれる要素にする
function my_add_sort($columns){
  $columns['views'] = 'views_sort';
  return $columns;
}
add_action( 'pre_get_posts', 'my_add_sort_by_meta', 1 );

// 閲覧数クリックで並び替えを実行
function my_add_sort_by_meta( $query ) {
  if ( $query->is_main_query() && ( $orderby = $query->get( 'orderby' ) ) ) {
    switch( $orderby ) {
      case 'views_sort':
        $query->set( 'meta_key', 'post_views_count' );
        $query->set( 'orderby', 'meta_value_num' );
        break;
    }
  }
}
add_filter( 'manage_edit-post_sortable_columns', 'column_views_sortable' ); // 投稿ページに追加


// 出力変更
function custom_previous_post_link($output) {
    return str_replace('<a href=', '<a class="news__pager__prev" href=', $output); 
}
add_filter('previous_post_link', 'custom_previous_post_link');

function custom_next_post_link($output) {
	return str_replace('<a href=', '<a class="news__pager__next" href=', $output); 
}
add_filter('next_post_link', 'custom_next_post_link');