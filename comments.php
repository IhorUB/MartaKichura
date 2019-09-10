
<?php // DO NOT DELETE THESE LINES
    if (post_password_required()) {           
            echo '<p class="nocomments">Цей запис захищений паролем. Введіть пароль щоб побачити коментарі.</p>';
            return;
        }
    $oddcomment = "graybox";
?>
<?php if ($comments) : ?>
   <h6 class="comments"><?php comments_number('Коментар  %' );?></h6>
    <?php $args = array(
     'avatar_size'       => 50,
     'reply_text'       => 'відповісти',
     'callback'          => 'mytheme_comment',
       ); 
       ?>
         
  
    <ul class="comments-list"><?php wp_list_comments($args); ?></ul>
    <div id="comment-nav-above">
    <?php paginate_comments_links() ?>
    </div>
<?php else:?>
    <?php if (comments_open()) : ?>
    <?php elseif (!is_page()) : // COMMENTS ARE CLOSED ?>
        <h4>Коментарі заборонені.</h4>
     <?php endif; ?>
<?php endif; ?>
<?php if (comments_open()) : ?>
<?php $comments_args = array(
         
        'comment_notes_after' => '',
         
); ?>
<?php 
$args = array(
        'comment_notes_before' => '<p class="comment-notes"><a id="reg" href="/wp-login.php">Войдите</a>Заповніть поля нижче. Ваш e-mail не буде опублікований. Обовязкові  поля відмічені *</p>',
        'comment_field'        => '<p class="comment-form-comment "><label for="comment" >' . _x( 'Comment', 'noun' ) . '</label><br /> <textarea id="comment" name="comment" rows="8"  aria-required="true"></textarea></p>',
        'comment_notes_after'  => '',
        'id_submit'            => '',
        'label_submit'         => __( 'Надіслати' ),
);
comment_form( $args );
?>
<?php endif; ?>
