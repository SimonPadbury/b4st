<?php
/*
 * Custom Feedback
 * ===============
 * https://codex.wordpress.org/Function_Reference/wp_list_comments#Comments_Only_With_A_Custom_Comment_Display
*/

function b4st_comment($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment;
  extract($args, EXTR_SKIP);
  if ( 'div' == $args['style'] ) {
      $tag = 'div';
      $add_below = 'comment';
  } else {
      $tag = 'li';
      $add_below = 'div-comment';
  }
?>

<<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
<?php if ( 'div' != $args['style'] ) : ?>
  <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
<?php endif; ?>

  <div class="comment-author vcard">
    <div class="float-left pr-3">
      <?php echo get_avatar( $comment->comment_author_email, $size = '52'); ?>
    </div>
    <div>
      <h4 class="m-0"><?php comment_author(); ?></h4>
      <p class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf('%1$s ' . __('at', 'b4st') . ' %2$s', get_comment_date(), get_comment_time()) ?></a></p>
      <?php if ($comment->comment_approved == '0') : ?>
        <p><em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'b4st') ?></em></p>
      <?php endif; ?>
    </div>
  </div>

  <div>
      <?php comment_text() ?>
  </div>

  <div class="reply">
      <p>
          <?php comment_reply_link( array_merge( $args, array(
              'add_below' => $add_below,
              'reply_text' => __('<i class="fas fa-reply"></i> Reply', 'textdomain'),
              'depth' => $depth,
              'max_depth' => $args['max_depth']
              ))
          ); ?>
          <?php edit_comment_link('<span class="btn btn-info">' . __('<i class="fas fa-edit"></i> Edit this reply', 'b4st') . '</span>',' ','' ); ?>
      </p>
  </div>

<?php if ( 'div' != $args['style'] ) : ?>
</div>
<?php endif; }

/**!
 * Custom Comments Form
 */

// Do not delete this section
if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])){
  die ('Please do not load this page directly. Thanks!'); }
if ( post_password_required() ) { ?>
  <div class="alert alert-warning">
    <?php _e('This post is password protected. Enter the password to view comments.', 'b4st'); ?>
  </div>
<?php
  return;
} // End do not delete section

if (have_comments()) : ?>

<h3 class="mt-5 mb-3">
  <?php printf(
    /* translators: 1: title. */
    esc_html__( 'Feedback', 'b4st' ),
    '<span>' . get_the_title() . '</span>'
  );?>
</h3>

<p><i class="far fa-comment"></i> <?php
    $comment_count = get_comments_number();
    if ( '1' === $comment_count ) {
      printf(
        /* translators: 1: title. */
        esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'b4st' ),
        '<span>' . get_the_title() . '</span>'
      );
    } else {
      printf(
        /* translators: 1: comment count number, 2: title. */
        esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'b4st' ) ),
        number_format_i18n( $comment_count ),
        '<span>' . get_the_title() . '</span>'
      );
    }
  ?>
</p>

<ol class="commentlist">
  <?php wp_list_comments('type=comment&callback=b4st_comment');?>
</ol>

<p class="text-muted">
  <?php paginate_comments_links(); ?>
</p>

<?php
  else :
	  if (comments_open()) :
  echo '<p class="alert alert-info mt-5">' . __('Be the first to write a comment.', 'b4st') . '</p>';
		else :
			echo '<p class="alert alert-warning">' . __('Comments are closed for this post.', 'b4st') . '</p>';
		endif;
	endif;
?>

<?php if (comments_open()) : ?>
<section id="respond">

  <h3 class="mt-5"><?php comment_form_title(__('Leave a Reply', 'b4st'), __('Responses to %s', 'b4st')); ?></h3>
  <p><?php cancel_comment_reply_link(); ?></p>
  <?php if (get_option('comment_registration') && !is_user_logged_in()) : ?>
  <p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.', 'b4st'), wp_login_url(get_permalink())); ?></p>
  <?php else : ?>

  <form action="<?php echo site_url('/wp-comments-post.php') ?>" method="post" id="commentform">

    <?php if (is_user_logged_in()) : ?>
    <p>
      <?php printf(__('Logged in as', 'b4st') . ' <a href="%s/wp-admin/profile.php">%s</a>.', get_option('url'), $user_identity); ?>
      <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php __('Log out of this account', 'b4st'); ?>"><?php echo __('Log out', 'b4st') . ' <i class="fas fa-arrow-right"></i>'; ?></a>
    </p>
    <?php else : ?>

    <div class="form-group">
      <label for="author"><?php _e('Your name', 'b4st'); if ($req) echo ' <span class="text-muted">' . __('(required)', 'b4st') . '</span>'; ?></label>
      <input type="text" class="form-control" name="author" id="author" placeholder="<?php _e('Your name', 'b4st'); ?>" value="<?php echo esc_attr($comment_author); ?>" <?php if ($req) echo 'aria-required="true"'; ?>>
    </div>

    <div class="form-group">
      <label for="email"><?php _e('Your email address', 'b4st'); if ($req) echo '&nbsp;<span class="text-muted">' . _e('(required, but will not be published)', 'b4st') . '</span>'; ?></label>
      <input type="email" class="form-control" name="email" id="email" placeholder="<?php _e('Your email address', 'b4st'); ?>" value="<?php echo esc_attr($comment_author_email); ?>" <?php if ($req) echo 'aria-required="true"'; ?>>
    </div>

    <div class="form-group">
      <label for="url"><?php echo __('Your website', 'b4st') . ' <span class="text-muted">' . __('if you have one (not required)', 'b4st') . '</span>'; ?></label>
      <input type="url" class="form-control" name="url" id="url" placeholder="<?php _e('Your website url', 'b4st'); ?>" value="<?php echo esc_attr($comment_author_url); ?>">
    </div>

    <?php endif; ?>

    <div class="form-group">
      <label for="comment"><?php _e('Your comment', 'b4st'); ?></label>
      <textarea name="comment" class="form-control" id="comment" placeholder="<?php _e('Your comment', 'b4st'); ?>" rows="8" aria-required="true"></textarea>
    </div>

    <p><input name="submit" class="btn btn-default" type="submit" id="submit" value="<?php _e('Post comment', 'b4st'); ?>"></p>

    <?php comment_id_fields(); ?>
    <?php do_action('comment_form', $post->ID); ?>
  </form>
  <?php endif; ?>

</section>
<?php endif; ?>
