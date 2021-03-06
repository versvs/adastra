<?php // Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments"><?php _e('Este post está protegido con contraseña. Introduce la contraseña para ver los comentarios.', 'adastra'); ?></p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
?>

<!-- You can start editing here. -->
<article id="comments">

	<?php if ( have_comments() ) : ?>
		<h2 id="comments-title">
			<?php
				printf( _n( __('Una idea sobre &ldquo;%2$s&rdquo;'), __('%1$s ideas sobre &ldquo;%2$s&rdquo;'), get_comments_number() ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above">
			<h1 class="assistive-text"><?php _e( 'Comment navigation' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Comentarios anteriores' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Comentarios más recientes &rarr;' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

		<ol class="listacomentarios">
			<?php
				/* Bucle para mostrar comentarios  */
				wp_list_comments('type=comment&avatar_size=64');
			?>
		</ol>
		
		<ul class="listapings">
			<?php
				/* Bucle para mostrar pings (trackbacks y pingbacks) */
				wp_list_comments('type=pings');
			?>
		</ul>
		

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below">
			<h1 class="assistive-text"><?php _e( 'Comment navigation' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Comentarios anteriores', 'adastra' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Comentarios más recientes &rarr;', 'adastra' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

	<?php
		/* If there are no comments and comments are closed, let's leave a little note, shall we?
		 * But we don't want the note on pages or post types that do not support comments.
		 */
		elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="nocomments"><?php _e( 'Los comentarios están cerrados.', 'adastra' ); ?></p>
	<?php endif; ?>


	<?php $adastra_textarea = '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" cols="45" rows="4" aria-required="true"></textarea></p><p id="comment-notice">Llevas más de 1000 letras, quizá deberías postear en tu blog y <a rel="nofollow" href="'.get_permalink().'">enlazar esta entrada</a> desde tu post.</p>'; ?>
	<?php comment_form(array('comment_field' => $adastra_textarea)); ?>


</article>
