<?php
/*
Template Name: home
*/ 

//ADVANCED CUSTOM FIELDS

//about section
$title_about = get_field("title_about");
$description_about = get_field("description_about");
$my_photo = get_field("my_photo");
$card_description = get_field("card_description");
$reason_1_title = get_field("reason_1_title");
$reason_1_description = get_field("reason_1_description");
$reason_2_title = get_field("reason_2_title");
$reason_2_description = get_field("reason_2_description");
$reason_3_title = get_field("reason_3_title");
$reason_3_description = get_field("reason_3_description");

get_header(); ?>
<main>
    <div id="container-carousel">
        <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <?php $i=0; while(have_rows('slider')) {
                    the_row();
                    $img = get_sub_field('image');
                    // var_dump( $img);
                 ?>
                <div class="carousel-item <?php if($i==0) echo 'active'; ?>" style="background-image: url(<?php echo $img['sizes']['img_slider_home']; ?>)">
                    <div class="carousel-caption  d-md-block">
                        <h2><?php the_sub_field('title'); ?></h2>
                    </div>
                </div>
            <?php $i++; } ?>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container">
        <div id="about-me">
            <h1><?php echo $title_about; ?></h1>
            <p><?php echo $description_about; ?></p>
            <div class="row">
                <div class="col-md-6 photo">
                    <div class="team-card wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                        <div class="img-box">
                        	<!--if user upload the img-->
                        	<?php if (!empty($my_photo)) : ?>
                        		 <img src="<?php echo $my_photo['sizes']['my-img']; ?>">
                        	<?php endif; ?>                           
                        </div>
                        <div class="team-content ">
                            <h1>Марта Кічура</h1>
                            <p><?php echo $card_description; ?>
                            </p>
                            <ul>
                                <li><a href="https://www.facebook.com/marta.kichura"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="https://instagram.com/marta.kichura_ph?igshid=6suho9vhw3z3"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 skills">
                    <div class="service">
                        <div class="icon">
                            <a href="#"><i class="fas fa-camera-retro"></i></a>
                        </div>
                        <div class="text">
                            <h4><?php echo $reason_1_title; ?></h4>
                            <p><?php echo $reason_1_description; ?></p>
                        </div>
                        <div class="divide"></div>
                    </div>
                    <div class="service">
                        <div class="icon">
                            <a href="#"><i class="fas fa-heart"></i></a>
                        </div>
                        <div class="text">
                            <h4><?php echo $reason_2_title; ?></h4>
                            <p><?php echo $reason_2_description; ?></p>
                        </div>
                        <div class="divide"></div>
                    </div>
                    <div class="service">
                        <div class="icon">
                            <a href="#"><i class="fas fa-camera"></i></a>
                        </div>
                        <div class="text">
                            <h4><?php echo $reason_3_title; ?></h4>
                            <p><?php echo $reason_3_description; ?></p>
                        </div>
                        <div class="divide"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
<?php get_footer(); ?>