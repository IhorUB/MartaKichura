<?php
/*
Template Name: love-story
*/ 
get_header();
$lovestory = get_field('love_story_descr');
/*change page-background from admin panel*/  
$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>
<?php if (has_post_thumbnail() ) { // check for img  ?>
<div class="bg-banner" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover; background-position: center center;">
    <h2>love Story</h2>
</div>
<?php } else { //fallback img ?>
<div class="bg-banner">
    <h2>love Story</h2>
</div>
<?php } ?>
<div class="main-page-content container">
    <?php echo $lovestory; ?>
</div>
<?php get_footer(); ?>