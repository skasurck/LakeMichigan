<?php
// Comments

function move_comment_field( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}

add_filter( 'comment_form_fields', 'move_comment_field' );

function fastfood_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
			?>
		    <li class="comment">
		        <p><?php _e( 'Pingback:', 'fastfood' ); ?> <?php comment_author_link(); ?>
		        	<?php edit_comment_link( __( '(Edit)', 'fastfood' ), ' ' ); ?></p>
		    	<?php
		    break;

		default : ?>
			<li <?php comment_class('comment'); ?> id="li-comment-<?php comment_ID(); ?>">
				<article id="comment-<?php comment_ID(); ?>">
					<div class="comment-meta">
		                <div class="comment-author vcard">

		                	<?php $args = [
		                        "class" => "avatar avatar-60 photo"
		                    ];
		                    echo get_avatar( $comment, 60 ); ?>

		                    <?php
		                    printf( __( '<b class="fn">%s</b> <span class="says hide">says:</span>', 'fastfood' ),
	                    	sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) );
	                    	?>

	                    	<div class="comment-content">
	                    		<?php comment_text(); ?>
	                    	</div>

	                    	<div class="comment-metadata">
                    			<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
		                            <time pubdate datetime="<?php comment_time( 'c' ); ?>">
		                                <?php
		                                /* translators: 1: date, 2: time */
		                                printf(
		                                	__( '%1$s at %2$s', 'fastfood' ),
		                                	get_comment_date(),
		                                	get_comment_time() );
		                                ?>
		                            </time>
		                        </a>
		                        <?php edit_comment_link( __( '(Edit)', 'fastfood' ), ' ' ); ?>
	                    	</div>

	                    	<div class="reply">
                    			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth ) ) ); ?>
	                    	</div>

	                    	<?php if ( $comment->comment_approved == '0' ) : ?>
	                    		<em><?php _e( 'Your comment is awaiting moderation.', 'fastfood' ); ?></em>
	                    	<?php endif; ?>

		                </div>
		            </div>
				</article>
			</li>
			<?php
			break;
	endswitch;
}
