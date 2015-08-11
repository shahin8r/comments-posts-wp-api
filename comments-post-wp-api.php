<?php
/**
 * Plugin Name: Comments Posts WP API
 * Description: Plugs comments data into the /posts endpoint in WordPress JSON API (WP-API)
 * Author: shahin8r
 * Version: 1.0.0
 */

class PostCommentsWPAPI {
	function __construct() {
		if ( isset($_GET['withcomments'] ) ) {
			add_filter( 'json_prepare_post', array( &$this, 'get_comments_for_posts' ), 10, 3 );
		}
	}

	function get_comments_for_posts( $data, $post, $context ) {
		$comments = get_comments( $post->ID) ;

		foreach ( $comments as $comment ) {
			$user_id = $comment->user_id;

			$author = [
				'ID' => $user_id,
				'username' => get_the_author_meta( 'user_login', $user_id ),
				'name' => get_the_author_meta( 'display_name', $user_id ),
				'first_name' => get_the_author_meta( 'first_name', $user_id ),
				'last_name' => get_the_author_meta( 'last_name', $user_id ),
				'avatar' => get_avatar_url( $user_id ),
				'description' => get_the_author_meta( 'description', $user_id )
			];

			$data['comments'][] = [
				'ID' => $comment->comment_ID,
				'post' => $comment->comment_post_ID,
				'content' => $comment->comment_content,
				'author' => $author,
				'date' => $comment->comment_date,
				'date_gmt' => $comment->comment_date_gmt
			];
		}

		return $data;
	}
}

$PostCommentsWPAPI = new PostCommentsWPAPI();
