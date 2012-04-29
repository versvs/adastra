<?php

  /**
  *@desc Included at the bottom of post.php and single.php, deals with all comment layout
  */

  if ( !empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) :
?>
<p><?php _e('Enter your password to view comments.'); ?></p>
<?php return; endif; ?>


<div id="comments" class="comments single-post-comments clearfix">

<?php 	
$post_comments = get_comments(array('type' => 'comments','post_id' => $post->ID));

if ( 0 < ( count($post_comments) ) ) {
?>		

	<h2 class="titulo"><?php comments_number(__('No comments'), __('1 Comment'), __('% Comments')); ?></h2>

<?php } ?>
	
	<?php if ( have_comments() ) : ?>
		<ol class="listacomentarios">
			<?php
				/* Bucle para mostrar comentarios  */
			wp_list_comments('type=comment&avatar_size=64');
			?>
		</ol>
		
		
<?php 	
$post_trackbacks = get_comments(array('type' => 'trackback','post_id' => $post->ID));
$post_pingbacks = get_comments(array('type' => 'pingback','post_id' => $post->ID));

if ( 0 < ( count($post_trackbacks) + count($post_pingbacks) ) ) {
?>		
		
		<h4>Referencias a esta entrada en otros blogs</h4>
		<?php } ?>

		<ul class="listapings">
			<?php
				/* Bucle para mostrar pings (trackbacks y pingbacks) */
				wp_list_comments('type=pings');
			?>
		</ul>
	<?php else : // If there are no comments yet ?>
	<!--	<p><?php _e('Puedes ser el primero en dejar un comentario'); ?></p> -->
	<?php endif; ?>
	
	<?php if ( comments_open() ) : ?>
		<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
			<p>
				<?php printf(__('You must be <a href="%s">logged in</a> to post a comment.'), get_option('siteurl')."/wp-login.php?redirect_to=".urlencode(get_permalink()));?>
			</p>
		<?php else : ?>
		<h2 class="titulo">Deja un comentario:</h2>
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="clearfix">
				<div id="comentario-texto" class="comentario-texto cuerpo">
					<textarea name="comment" id="comment" cols="100%" rows="10" tabindex="1"></textarea>
				</div>
				
				<?php if ( $user_ID ) : ?>
					<p>
						<?php printf(__('Logged in as %s.'), '<a href="'.get_option('siteurl').'/wp-admin/profile.php">'.$user_identity.'</a>'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account') ?>"><?php _e('Logout &raquo;'); ?></a>
					</p>
				<?php else : ?>
					<div id="comentario-autor" class="comentario-autor campo primero alignleft">
						<label for="author"><small><?php _e('Name'); ?> <?php if ($req) _e('(*)'); ?></small></label>
						<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="2" />
					</div>
					
					<div id="comentario-email" class="comentario-email campo alignleft">
						<label for="email"><small><?php _e('e-Mail (no ser&aacute; publicado)');?> <?php if ($req) _e('(*)'); ?></small></label>
						<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="3" />
					</div>	

					<div id="comentario-url" class="comentario-url campo ultimo alignleft">
						<label for="url"><small><?php _e('Website'); ?></small></label>
						<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="4" />
					</div>
				
				<?php endif; ?>
				<!--<p><small><strong>XHTML:</strong> <?php printf(__('You can use these tags: %s'), allowed_tags()); ?></small></p>-->
					<div id="comentario-enviar" class="comentario-enviar campo alignright">
						<input name="submit" type="submit" id="submit" class="enviar alignright" tabindex="5" value="Enviar" />
						<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
					</div>
				<?php do_action('comment_form', $post->ID); ?>
			</form>
		<?php endif; // If registration required and not logged in ?>
	<p class="comentarios-rss-link">
		<?php comments_rss_link(__('<abbr title="Really Simple Syndication">RSS</abbr> feed for comments on this post.')); ?>
		<?php if ( pings_open() ) : ?>
			<a class="invisible" href="<?php trackback_url() ?>" rel="trackback"><?php _e('TrackBack <abbr title="Universal Resource Locator">URL</abbr>'); ?></a>
		<?php endif; ?>
	</p>

	<?php else : // Comments are closed ?>
		<?php _e('Sorry, the comment form is closed at this time.'); ?>
	<?php endif; ?>

</div>