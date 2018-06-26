<?php
     add_theme_support( 'post-thumbnails');
    //アイキャッチ画像の定義と切り抜き
    set_post_thumbnail_size( 600, 432, true );

     function change_posts_per_page($query) {
 /* 管理画面,メインクエリに干渉しないために必須 */
 if( is_admin() || ! $query->is_main_query() ){
     return;
 }
 if ( is_category( 'works' ) ) {
      $query->set( 'posts_per_page', '12' );
    }

 /* カテゴリーページの表示件数を5件にする */
 if ( $query->is_category() ) {
     $query->set( 'posts_per_page', '6' );
     $query->set( 'cat','-3' ); //カテゴリID1を除外
     return;
 }


}
add_action( 'pre_get_posts', 'change_posts_per_page' );

add_filter('redirect_canonical','my_disable_redirect_canonical');

function my_disable_redirect_canonical( $redirect_url ) {

	if ( is_category() ){
		$subject = $redirect_url;
		$pattern = '/\/page\//'; // URLに「/page/」があるかチェック
		preg_match($pattern, $subject, $matches);

		if ($matches){
		//リクエストURLに「/page/」があれば、リダイレクトしない。
		$redirect_url = false;
		return $redirect_url;
		}
	}

}
?>
