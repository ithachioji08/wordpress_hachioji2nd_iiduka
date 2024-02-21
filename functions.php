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
// サムネイル画像
add_theme_support('post-thumbnails');
add_image_size('thumbside', 85, 85, true);
?>