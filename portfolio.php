<?php
/*
Template Name: portfolio
*/ 
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Photo-page</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png"/>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body>
    <div class="preloader">
        <div class="preloader-ring">
        <span></span>
    </div>
</div>
<header id="top">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top " id="mainNav">
        <div class="container navigation-header">
            <a class="navbar-brand" href="<?php echo home_url(); ?>"><i class="fas fa-camera-retro"></i> <span class="">MARTA</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarHeader">
                <ul class="navbar-nav">
                    <li><a class="nav-link" href="<?php echo home_url(); ?>">Головна<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">ПОСЛУГИ</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="<?php echo home_url(); ?>/individual">Індивідуальна фотосесія</a>
                            <a class="dropdown-item" href="<?php echo home_url(); ?>/family">Сімейна фотосесія</a>
                            <a class="dropdown-item" href="<?php echo home_url(); ?>/love-story">Love story</a>
                            <a class="dropdown-item" href="<?php echo home_url(); ?>/pregancy">Вагітність</a>
                            <a class="dropdown-item" href="<?php echo home_url(); ?>/nude">Білизна/ню</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo home_url(); ?>/portfolio">Портфоліо</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo home_url(); ?>/testimonials">Відгуки</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo home_url(); ?>/blog">Блог</a>
                    </li>
                </ul>
            <span class="navbar-text">
                    <a href="https://www.facebook.com/marta.kichura"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://instagram.com/marta.kichura_ph?igshid=6suho9vhw3z3"><i class="fab fa-instagram"></i></a>
                    <a href="mailto:martakichura@gmail.com"><i class="fas fa-envelope"></i></a>
                </span>
            </div>
        </div>
    </nav>
</header>

<?php
/*change page-background from admin panel*/  
$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>

<?php if (has_post_thumbnail() ) { // check for img  ?>
<div class="bg-banner" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;">
    <h2>Портфоліо</h2>
</div>
<?php } else { //fallback img ?>
<div class="bg-banner">
    <h2>Портфоліо</h2>
</div>
<?php } ?>
<div class="container">
        <div id="contacts" class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
            <ul>
                <li>
                    <a href="https://www.facebook.com/marta.kichura">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span class="fab fa-facebook-f"></span>
                    </a>
                </li>
                <li>
                    <a href="https://instagram.com/marta.kichura_ph?igshid=6suho9vhw3z3">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span class="fab fa-instagram"></span>
                    </a>
                </li>
                <li>
                    <a href="mailto:martakichura@gmail.com">
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
<div id="galleryherepls">
<!--create dynamic posts from admin panel, using WP-plugin CPT UI and custom fields -->

<?php $loop = new WP_Query( array('post_type' => 'gallery', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page'=>30)); ?>
<?php while ($loop->have_posts()) : $loop->the_post(); ?>
	<?php 
	 	/*variable for custom fields post*/
	 	$title_img = get_field('title_img');
	 	$description_img = get_field('description_img');
	 	$category_img = get_field('category_img');
	 	$img_portfolio = get_field('img_portfolio');
	 	$img_fullscreen = get_field('img_fullscreen');
	?>
	<!--generate  posts with data from wp-admin-->
		
    		<img src="<?php echo $img_portfolio[url]; ?>"
	         alt="<?php echo $img_portfolio[alt]; ?>"
	         title="<?php echo $title_img; ?>"
	         data-desc="<?php echo $description_img; ?>"
	         data-category="<?php echo $category_img; ?>"
	         data-fullsrc="<?php echo $img_portfolio[url]; ?> "/>
	
<?php endwhile; ?>
</div>
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery2.2.4.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/galereya-latest/js/jquery.galereya.min.js"></script>
<script>
    $(function () {
        $('#galleryherepls').galereya();
    });
    /* preloader */
	$(window).on('load', function () {
   		$('.preloader').addClass('complete');
	})
</script>
</body>
</html>