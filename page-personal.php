<?php
/*
Template Name: individual
*/ 
get_header();
$individual_descr = get_field('individual_descr');
/*change page-background from admin panel*/  
$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>
<?php if (has_post_thumbnail() ) { // check for img  ?>
	<div class="test">
<div class="bg-banner" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover; background-position: center center;">
    <h2>Індивідуальна фотосесія</h2>
</div></div>
<?php } else { //fallback img ?>
<div class="bg-banner">
    <h2>Індивідуальна фотосесія</h2>
</div>
<?php } ?>
<div class="main-page-content container">
    <?php echo $individual_descr; ?>
</div>
<?php get_footer(); ?>