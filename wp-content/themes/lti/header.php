

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LTI</title>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
</head>
<body>
    <div class="container-fluid">
    <div id="slider-home" class="carousel slide" data-ride="carousel" data-pause="false">
            <ul class="carousel-indicators">
                <li data-target="#slider-home" data-slide-to="0" class="active"></li>
                <li data-target="#slider-home" data-slide-to="1"></li>
                <li data-target="#slider-home" data-slide-to="2"></li>
            </ul>
            <div class="header-main">
                <div class="container">
                    <nav id="cssmenu">
                        <div class="logo">
                            <a href="">
                                <ul><li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png"></li><li> <span style="border-left: 2px solid #fff;
    margin-left: 17px;"></span></li><li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/syncordis.png"/></li></ul></a>
                        </div>
                        <div id="head-mobile"></div>
                        <div class="button"></div>
                        
                    </nav>
                </div>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/banner-img01.jpg" class="d-block w-100" alt="Slide 1">
                    <div class="carousel-caption">
                        <h3><?php the_field('banner_heading'); ?></h3>
                        <span><?php the_field('banner_main_heading'); ?></span>
                        <p><?php the_field('banner_paragraph'); ?></p>
                        <a class="btn" href="<?php the_field('button_url'); ?>"><?php the_field('book_a_assigment'); ?><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-cta-arrow.png" style="width: 10px;margin-left:5px;
                        "></a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/banner-img02.jpg"  class="d-block w-100" alt="Slide 2">
                    <div class="carousel-caption">
                    <h3><?php the_field('banner_heading'); ?></h3>
                        <span><?php the_field('banner_main_heading'); ?></span>
                        <p><?php the_field('banner_paragraph'); ?></p>
                        <a class="btn" href="<?php the_field('button_url'); ?>"><?php the_field('book_a_assigment'); ?><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-cta-arrow.png" style="width: 10px;margin-left:5px;
                        "></a>
                        </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/banner-img03.jpg"  class="d-block w-100" alt="Slide 3">
                    <div class="carousel-caption">
                    <h3><?php the_field('banner_heading'); ?></h3>
                        <span><?php the_field('banner_main_heading'); ?></span>
                        <p><?php the_field('banner_paragraph'); ?></p>
                        <a class="btn" href="<?php the_field('button_url'); ?>"><?php the_field('book_a_assigment'); ?><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-cta-arrow.png" style="width: 10px;margin-left:5px;
                        "></a>
                        </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#slider-home" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#slider-home" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>