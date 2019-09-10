<?php 
// crop img for slider
add_image_size('img_slider_home', 1240, 900, true);
//crop img for Marta img
add_image_size('my-img', 550, 450, true);

// add css style
add_action('wp_enqueue_scripts', 'themeStyle');
function themeStyle() {
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style('gallery', get_template_directory_uri() . '/assets/galereya-latest/css/jquery.galereya.css');
}
// register thumbnails for page-background 
add_theme_support( 'post-thumbnails' );
// length of post description; 
add_filter('excerpt_length', 'my_excerpt_length');
function my_excerpt_length($len) { return 175; }
// blog, read more 
function wpdocs_excerpt_more( $more ) {
    return sprintf( '<a href="%1$s" class="more-link">%2$s</a>',
          esc_url( get_permalink( get_the_ID() ) ),
          sprintf( __( ' читати далі%s',  'wpdocs' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
// register sidebar
add_action( 'widgets_init', 'register_my_widgets' );
function register_my_widgets(){
	register_sidebar( array(
		'name'          => sprintf(__('Sidebar %d'), $i ),
		'id'            => "sidebar-0",
		'description'   => '',
		'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => "</li>\n",
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => "</h4>\n",
	) );
}
// comments 
function mytheme_comment($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
    switch ( $comment->comment_type ) :
        case '' :
?>
       <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
            <div id="comment-<?php comment_ID(); ?>">
             <div id="comment_block">
                <div class="comment-author vcard">
                    <?php echo get_avatar( $comment->comment_author_email, $args['avatar_size']); ?>
                    <?php printf(__('<cite class="fn">%s</cite> <span class="says"></span>'), get_comment_author_link()) ?>   
                  <div class="comment-meta commentmetadata">
                    <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('Змінити '),'&nbsp;&nbsp;','');  delete_comment_link(get_comment_ID());?>
               <div class="coll_comm">Коментарів: <?php commentCount(); ?></div>
               </div>
                </div>
<?php if ($comment->comment_approved == '0') : ?>
                <div class="comment-awaiting-verification"><?php _e('Ваш коментар очікує перевірки модератором.') ?></div>
             <br>
<?php endif; ?><div class="comment_text">
                <?php comment_text() ?>
                </div>
                <div class="reply">
                <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                </div>
                <div class="clear"></div>
            </div>
            </div>
             
 <?php
        break;
        case 'pingback'  :
        case 'trackback' :
?>
            <li class="post pingback">
                <?php comment_author_link(); ?>
                <?php edit_comment_link( __( 'Редагувати' ), ' ' ); ?>
<?php
        break;
    endswitch;
}
 
// sum comments 
function commentCount(){
global $wpdb;
$count = $wpdb->get_var('SELECT COUNT(comment_ID) FROM ' . $wpdb->comments. ' WHERE comment_author_email = "' . get_comment_author_email() . '"');
echo $count . '';
}
// spam and delete
function delete_comment_link($id) {
if (current_user_can('edit_post')) {
echo '| <a href="'.admin_url("comment.php?action=cdc&c=$id").'">Видалити</a> ';
echo '| <a href="'.admin_url("comment.php?action=cdc&dt=spam&c=$id").'">Спам </a>';
}
}
