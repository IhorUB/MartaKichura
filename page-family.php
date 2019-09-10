<?php
/*
Template Name: family
*/ 
get_header();
$family_description = get_field('family_description');
/*change page-background from admin panel*/  
$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>
<?php if (has_post_thumbnail() ) { // check for img  ?>
<div class="bg-banner" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover; background-position: center center;">
	<h2>Сімейна фотосесія</h2>
</div>
<?php } else { //fallback img ?>
<div class="bg-banner">
    <h2>Сімейна фотосесія</h2>
</div>
<?php } ?>

<div class="main-page-content container"><?php echo $family_description; ?></div>
<?php get_footer(); ?>