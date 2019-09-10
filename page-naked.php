<?php
/*
Template Name: naked
*/ 
get_header();
$nude = get_field('nude');
/*change page-background from admin panel*/  
$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>
<?php if (has_post_thumbnail() ) { // check for img  ?>
<div class="bg-banner" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover; background-position: center center;">
    <h2>Білизна/НЮ</h2>
</div>
<?php } else { //fallback img ?>
<div class="bg-banner">
    <h2>Білизна/НЮ</h2>
</div>
<?php } ?>
<div class="main-page-content container">
    <?php echo $nude; ?>
</div>
<?php get_footer(); ?>