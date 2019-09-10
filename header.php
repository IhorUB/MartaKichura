
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
                    <li class="nav-item">
                        <a class="nav-link smooth" href="#contacts">Контакти</a>
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