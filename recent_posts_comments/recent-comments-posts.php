<?php
/*
Plugin Name: Recent_posts_comments
Plugin URI: http://reviewstuff.com/NewBlogs/?p=83
Description: Retrieves a list of the most recent comments and the most recent posts.
Version: 1.00
Author: Rajesh Valluri
Author URI: http://reviewstuff.com/newblogs
*/


function valluri_latest_posts($postcount)
{
global $wpdb;
global $post;

$today = current_time('mysql', 1);

if ( $recentposts = $wpdb->get_results("SELECT ID, post_title FROM $wpdb->posts WHERE post_status = 'publish' AND post_date_gmt < '$today' ORDER BY post_date DESC LIMIT $postcount") )

foreach ($recentposts as $post)
 {
	if ($post->post_title == '')
		$post->post_title = sprintf(__('Post #%s'), $post->ID);
	echo "<a href='?p=$post->ID'>";
	the_title();
	echo '</a><br>';
  }

}



function valluri_latest_comments($commentcount)
{

global $wpdb;
global $comment;
$comments = $wpdb->get_results("SELECT comment_author, comment_author_url, comment_ID, comment_post_ID FROM $wpdb->comments WHERE comment_approved = '1' ORDER BY comment_date_gmt DESC LIMIT $commentcount");

$numcomments = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->comments WHERE comment_approved = '0'");

if ( $comments )

foreach ($comments as $comment)
	{
 echo '' . sprintf(__('%1$s on %2$s'), get_comment_author_link($comment->comment_post_ID), '<a href="'. get_permalink($comment->comment_post_ID) . '#comment-' . $comment->comment_ID . '">' . get_the_title($comment->comment_post_ID) . '</a>');
		edit_comment_link(__("Edit"), ' <small>(', ')</small>');
		echo '<br>';
	}

 }

?>









