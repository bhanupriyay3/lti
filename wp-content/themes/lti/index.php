<!-- ADD HEADER -->
<?php
/*
/* Template Name: Home
 *
 * Displays Only Home template
 *
 * @package WordPress
 * @subpackage lti
 * @since lti 1.0
 */
 get_header(); ?>

    <div class="container-fluid">
        <div class="container intro">
            <div class="row p-8">
                <div class="col-lg-6"><h2><?php the_field('about_heading_thin'); ?><br><span><?php the_field('about_heading_bold'); ?> </span></h2><br>
                <h4><?php the_field('about_sub_heading'); ?></h4></div>
                <div class="col-lg-6"><p><?php the_field('about_para'); ?>
                <span id="dots">...</span><p id="more"><?php the_field('readmore'); ?></p></p>
                    <button onclick="myFunction()" id="myBtn" class="read">Read more</button>
                    </div>
                    <span class="hor"></span>
                    <div>
                    <h3 class="head-3">Here's a glimpse of our upgrade offerings: </h3>
                </div><br>
                    <div class="row mr">
                    <div class="col-lg-4 point"> 
                    <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/strategy.png" class="mr-gt"></li>
                    <li> <?php the_field('about_point1'); ?></li>
                   </div>
                    <div class="col-lg-4 point"><li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/business.png" class="mr-gt"></li><li><?php the_field('about_point2'); ?></li> </div>
                    <div class="col-lg-4 point"><li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/management.png" class="mr-gt"></li> <li> <?php the_field('about_point3'); ?></li> </div>
                </div><br>
                <div class="row mr">
                    <div class="col-lg-4 point"><li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/service.png" class="mr-gt"></li><li> <?php the_field('about_point4'); ?></li> </div>
                    <div class="col-lg-4 point"><li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/functional.png" class="mr-gt"> </li><li><?php the_field('about_point5'); ?></li></div>
                    <div class="col-lg-4 point"><li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/testing.png" class="mr-gt"></li> <li><?php the_field('about_point6'); ?> </li>  </div>
                </div>
                </div> 
        </div>
    </div>
    <div class="container-fluid bg-maroon">
        <div class="container">
        <div class="row"><h2><?php the_field('slider_heading_thin'); ?><br><span> <?php the_field('slider_heading_bold'); ?></span></h2>
        <p class="para"><?php the_field('slider_heading_para'); ?>
        </div>
        <h3 class="para-h3"><?php the_field('slider_sub-heading'); ?></h3>
        <div class="slider">
            <div class="slick-slideshow__slide col-lg-4">
                <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-auto-discovery.png" alt=""></li>
             <li> <h3><?php the_field('about_point1'); ?></h3>
              <p><?php the_field('slider1_para'); ?></p></li>
            </div>
            <div class="slick-slideshow__slide col-lg-4">
                <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-auto-conversion.png" alt=""></li>
                <li>
              <h3><?php the_field('slider2_heading'); ?></h3>
              <p><?php the_field('slider2_para'); ?></p>
            </li>
            </div>
            <div class="slick-slideshow__slide col-lg-4">
                <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-auto-authorize.png"></li>
             <li> <h3> <?php the_field('slider3_heading'); ?></h3>
              <p> <?php the_field('slider3_para'); ?>
            </p></li>
            </div>
             <div class="slick-slideshow__slide col-lg-4">
                <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-auto-discovery.png"></li>
                <li> <h3><?php the_field('slider4_heading'); ?> </h3>
                 <p><?php the_field('slider4_para'); ?>
               </p></li>
            </div>
            <div class="slick-slideshow__slide col-lg-4">
                <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-auto-discovery.png"></li>
                <li> <h3><?php the_field('slider4_heading'); ?> </h3>
                 <p><?php the_field('slider4_para'); ?>
               </p></li>
            </div>
            <div class="slick-slideshow__slide col-lg-4">
                <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-auto-discovery.png"></li>
                <li> <h3><?php the_field('slider4_heading'); ?> </h3>
                 <p><?php the_field('slider4_para'); ?>
               </p></li>
            </div>
    </div>
</div>
</div>
</div>
<div class="container-fluid bg2">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 sec3">
            <h2><?php the_field('journey_heading'); ?><br><strong><?php the_field('journey_heading_bold'); ?></strong></h2>
            <p><?php the_field('journey_para'); ?></p>

            <div class="row mr">
                <div class="col-lg-6 point2"> 
                <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-value.png" class="mr-gt"></li>
                <li><?php the_field('journey_point1'); ?></li>
               </div>
                <div class="col-lg-6 point2"><li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-market.png" class="mr-gt"></li>
                    <li><?php the_field('journey_point2'); ?> </li>
                </div>
            <div class="col-lg-6 point2"><li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-upgrade.png" class="mr-gt"></li> 
                <li><?php the_field('journey_point3'); ?></li>
            </div>
            <div class="col-lg-6 point2"><li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-resource.png" class="mr-gt"></li> 
                <li><?php the_field('journey_point4'); ?> </li>
            </div>
            <div class="col-lg-6 point2"><li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-time.png" class="mr-gt"></li> 
                <li><?php the_field('journey_point5'); ?> </li>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="container-fluid bg3">
    <div class="container p-8 text-center">
     <h2><?php the_field('upgrade_heading_thin'); ?><br><span><?php the_field('upgrade_heading_bold'); ?> </span><br> 
    </h2>
     <strong><?php the_field('journey_subheading'); ?></strong>
     <p class="pd-bottom"><?php the_field('upgrade_heading_para'); ?> </p>
    </div>
</div>
<div class="gap"></div>


<!-- ADD FOOTER -->
<?php get_footer(); ?>