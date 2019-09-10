<?php
/*
Template Name: testimonials
*/ 
get_header();
/*change page-background from admin panel*/  
$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>
<?php if (has_post_thumbnail() ) { // check for img  ?>
<div class="bg-banner" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;">
	<h2>Відгуки</h2>
</div>
<?php } else { //fallback img ?>
<div class="bg-banner">
    <h2>Відгуки</h2>
</div>
<?php } ?>
  <div class="testimonials">
<!--create dynamic posts from admin panel, using WP-plugin CPT UI and custom fields -->

<?php $loop = new WP_Query( array('post_type' => 'comment', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page'=>100)); ?>
<?php while ($loop->have_posts()) : $loop->the_post(); ?>
	<?php 
	 	/*variable for custom fields post*/
	$user_name = get_field("user_name");
	$user_comment = get_field("user_comment");
	$user_img = get_field("user_img");
	$user_link = get_field("user_link");
	?>
	<!--generate  posts with data from wp-admin-->
        <div class="comment-item">
            <div class="comment-box">
                <div class="user-img">
                    <a href="<?php echo $user_link ?>" target="_blank"><img src="<?php echo $user_img["url"];?>" alt="<?php echo $user_img["alt"]; ?>" class="img-responsive"></a>
                </div>
                <p><?php echo $user_comment; ?></p>
                <a href="<?php echo $user_link ?>" target="_blank"><h5><?php echo $user_name; ?></h5></a>
            </div>
        </div>
<?php endwhile; ?>
</div>
<div class="mt-15 form-section container">
    <h5 class="mt-15">Залишити відгук</h5>
        <form>
        	<?php echo do_shortcode('[contact-form-7 id="453" title="відгук"]') ?>
        </form>
    </div>
<div class="container">
        <div id="contacts" class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
            <ul>
                <li>
                    <a href="#">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span class="fab fa-facebook-f"></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span class="fab fa-instagram"></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span><i class="fab fa-google"></i></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

<div class="sub-footer">
    <div class="container">
        <footer>
            <p>
                Сайт Марти Кічури. Всі права захищено. Львів
                <br>
                <a href="tel:+380979876532">+38 (097) 987 65 32</a>
                <br>
                <a href="mailto:martakichura@gmail.com">martakichura@gmail.com</a>
                <br>
                <a href="codempora.com">Codempora</a>
            </p>
            <a href="#top" class="smooth" id="scrollUp"><i class="fas fa-arrow-circle-up"></i></a>
        </footer>
    </div>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>

<!--Bootstrap library and init carousel-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script>
    $('.carousel').carousel();
</script>
<!--END Bootstrap library and init carousel-->

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/scroll-nav.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/mansoryGridComments.js"></script>
<?php wp_footer(); ?>
</body>
</html>