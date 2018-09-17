<?php
//テーマのセットアップ
// titleタグをhead内に生成する
add_theme_support('title-tag');
// HTML5でマークアップさせる
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
// Feedのリンクを自動で生成する
add_theme_support('automatic-feed-links');
//アイキャッチ画像を使用する設定
add_theme_support('post-thumbnails');

function get_current_link() {
 return (is_ssl() ? 'https' : 'http') . '://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
}

function pagination($pages = '', $range = 2) {
  $showitems = ($range * 2) + 1;

  global $paged;
  if(empty($paged)) $paged = 1;

  if($pages == '') {
    global $wp_query;
    $pages = $wp_query->max_num_pages;

    if(!$pages) {
      $pages = 1;
    }
  }

  if(1 != $pages) {
    echo '<ul id="page_nav">';

    if ($paged > 1 && $showitems < $pages) {
      echo sprintf('<li><a href=""><img src="%s" alt="prev"></a></li>', DIR_IMG . '/page_p.png');
    }

    for ($i = 1; $i <= $pages; $i++) {
      if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems )) {
        if ($paged == $i) {
          echo sprintf('<li class="current"><a href="">%d</a></li>', $i);
        } else {
          echo sprintf('<li><a href="">%d</a></li>', $i);
        }
      }
    }

    if ($paged < $pages && $showitems < $pages) {
      echo sprintf('<li><a href=""><img src="%s" alt="next"></a></li>', DIR_IMG . '/page_n.png');
    }

    echo '</ul>';
  }
}

function get_next_page() {
    $get_adjacent_page = new get_adjacent_page();
    return $get_adjacent_page->get_next_page();
}
function get_previous_page() {
    $get_adjacent_page = new get_adjacent_page();
    return $get_adjacent_page->get_previous_page();
}

/**
 * get_adjacent_page
 * 前後の固定ページ（同階層）を取得するクラス
 */
class get_adjacent_page {
    private $post = null;
    private $wpdb = null;
    private $op = '';
    private $orderby = '';
 
    /**
     * __construct
     */
    public function __construct() {
        global $post;
        global $wpdb;
        $this->post = $post;
        $this->wpdb = $wpdb;
    }
 
    /**
     * get_next_page
     * 後の固定ページを取得する
     * @return  null or $post
     */
    public function get_next_page() {
        $this->op = '>=';
        $this->orderby = 'ASC';
        return $this->get_adjacent_post( 'next' );
    }
 
    /**
     * get_previous_page
     * 前の固定ページを取得する
     * @return  null or $post
     */
    public function get_previous_page() {
        $this->op = '<=';
        $this->orderby = 'DESC';
        return $this->get_adjacent_post( 'previous' );
    }
 
    /**
     * get_adjacent_post
     * get_adjacent_post関数を実行
     * @params  next or previous
     * @return  null or $post
     */
    private function get_adjacent_post( $adjacent ) {
        if ( !in_array( $adjacent, array( 'previous', 'next' ) ) ) return;
        $previous = ( $adjacent === 'previous' ) ? true : false;
        add_filter( 'get_'.$adjacent.'_post_join', array( $this, 'get_page_join' ), 10, 3 );
        add_filter( 'get_'.$adjacent.'_post_where', array( $this, 'get_page_where' ), 10, 3 );
        add_filter( 'get_'.$adjacent.'_post_sort', array( $this, 'get_page_sort' ) );
        return get_adjacent_post( false, '', $previous );
    }
 
    /**
     * get_page_join
     * get_{$adjacent}_post_joinにフックさせる関数
     * @return  null
     */
    public function get_page_join( $join, $in_same_cat, $excluded_categories ) {
        return;
    }
 
    /**
     * get_page_where
     * get_{$adjacent}_post_whereにフックさせる関数
     * @return  String  where文
     */
    public function get_page_where( $where, $in_same_cat, $excluded_categories ) {
        $where = $this->wpdb->prepare( "WHERE
            p.ID != %s AND
            p.post_parent = %s AND
            ( p.menu_order $this->op %s OR ( p.menu_order = %s AND p.post_title $this->op %s ) ) AND
            p.post_type = %s AND
            p.post_status = 'publish'",
            $this->post->ID, $this->post->post_parent, $this->post->menu_order, $this->post->menu_order, $this->post->post_title, $this->post->post_type
        );
        return $where;
    }

    /**
     * get_page_sort
     * get_{$adjacent}_post_sortにフックさせる関数
     * @return  String  order by, limit文
     */
    public function get_page_sort( $sort ) {
        return "ORDER BY p.menu_order $this->orderby, p.post_title $this->orderby LIMIT 1";
    }
}

add_action('init','add_categories_for_pages'); 

function add_categories_for_pages() {
  register_taxonomy_for_object_type('category', 'page');
}

add_action( 'pre_get_posts', 'nobita_merge_page_categories_at_category_archive' ); 

function nobita_merge_page_categories_at_category_archive($query) {
  if ($query->is_category== true && $query->is_main_query()) {
    $query->set('post_type', array( 'post', 'page', 'nav_menu_item'));
  }
}

function member_to_photo($member) {
  $photo_list = [
    '荒木 伸哉' => DIR_IMG  . '/m05.jpg',
    '加藤 渓一' => DIR_IMG  . '/m02.jpg',
    '坂田 裕貴' => DIR_IMG  . '/m01.jpg',
    '中田 裕一' => DIR_IMG  . '/m03.jpg',
    '山崎 大輔' => DIR_IMG  . '/m04.jpg',
    '中田 理恵' => DIR_IMG  . '/m10.jpg',
    '佐伯 太市' => DIR_IMG  . '/m06.jpg',
    '大石 義高' => DIR_IMG  . '/m09.jpg',
    '須藤 直紀' => DIR_IMG  . '/m07.jpg',
    '多久 美聡' => DIR_IMG  . '/m08.jpg'
  ];

  return $photo_list[$member];
}

function member_last_name($member) {
  return explode(" ", $member)[0];
}

add_filter('wpcf7_load_js', '__return_false');
add_filter('wpcf7_load_css', '__return_false');
