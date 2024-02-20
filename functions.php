<?php
//カスタムメニュー
register_nav_menus( 
	array(
	'place_global' => 'グローバル',
	'place_utility' => 'ユーティリティ',
	'place_sidebar' => 'サイドメニュー',
	'place_footer' => 'フッター',
	)
);
add_theme_support('post-thumbnails');
add_image_size('thumbside', 85, 85, true);
add_action( 'parse_query', 'my_parse_query' );
function my_parse_query( $query ) {
  if ( ! isset( $query->query_vars['paged'] ) && isset( $query->query_vars['page'] ) )
    $query->query_vars['paged'] = $query->query_vars['page'];
}
?>