<footer class="footer">
    <div class="start-learning">
        <div>
            <div class="container">
                <div class="section-contact">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-10 col-xl-8">
                            <div class="header-section text-center">
                                <h2 class="title">Reach out to solve
                                    <span class="dot"></span>
                                </h2>
                                <p class="description">Are you ready for a seamless T24 upgrade?</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="form-contact">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-input">
                                        <i class="fas fa-user"></i>
                                        <input type="text" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input">
                                        <i class="fas fa-envelope"></i>
                                        <input type="text" name="email" placeholder="Oraganization">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input">
                                        <i class="fas fa-phone"></i>
                                        <input type="text" name="phoneNumber" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input">
                                        <i class="fas fa-check"></i>
                                        <input type="text" name="subject" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input">
                                        <i class="fas fa-check"></i>
                                        <input type="text" name="subject" placeholder="Country">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="submit-input text-center">
                                      <button type="submit"> BOOK A ASSESMENT <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-cta-arrow.png" style="width: 10px"/></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="inner">
        <div class="column is-logo">
            <a href="#" class="main-logo">
                <div class="logo">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo-alt-group.png" alt="stackfindover">
                </div>
            </a>
        </div>
        <div class="column is-nav">
        </div>

        <div class="column is-nav">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-linkedin.png">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-facebook.png">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-twitter.png">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-youtube.png">
        </div>

        <div class="column is-nav">
            <ul>
                <li><a href="#">Blogs |</a></li>
                <li><a href="#">Careers |</a></li>
                <li><a href="#">Company |</a></li>
                <li><a href="#">Investors |</a></li>
                <li><a href="#">Newsletters</a></li>
            </ul>
        </div>
    </div>
</footer>




<script>
        function myFunction() {
          var dots = document.getElementById("dots");
          var moreText = document.getElementById("more");
          var btnText = document.getElementById("myBtn");
        
          if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more"; 
            moreText.style.display = "none";
          } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less"; 
            moreText.style.display = "inline";
          }
        }
        </script>
         <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Slick Carousel JS -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script>
    var $carousel = $('.slider');

    var settings = {
      dots: false,
      arrows: true,
      slide: '.slick-slideshow__slide',
      slidesToShow: 3,
      centerMode: true,
      centerPadding: '60px',
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            centerPadding: '40px',
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            centerPadding: '20px',
          }
        }
      ]
    };

    function setSlideVisibility() {
      // Find the visible slides i.e. where aria-hidden="false"
      var visibleSlides = $carousel.find('.slick-slideshow__slide[aria-hidden="false"]');
      // Make sure all of the visible slides have an opacity of 1
      $(visibleSlides).each(function() {
        $(this).css('opacity', 1);
      });

      // Set the opacity of the first and last partial slides.
      $(visibleSlides).first().prev().css('opacity', 0);
    }

    $carousel.slick(settings);
    $carousel.slick('slickGoTo', 1);
    setSlideVisibility();

    $carousel.on('afterChange', function() {
      setSlideVisibility();
    });
  </script>


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-2.1.0.js"></script>
<!-- Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
    (function($) {
        $.fn.menumaker = function(options) {
            var cssmenu = $(this),
                settings = $.extend({
                    format: "dropdown",
                    sticky: false
                }, options);
            return this.each(function() {
                $(this).find(".button").on('click', function() {
                    $(this).toggleClass('menu-opened');
                    var mainmenu = $(this).next('ul');
                    if (mainmenu.hasClass('open')) {
                        mainmenu.slideToggle().removeClass('open');
                    } else {
                        mainmenu.slideToggle().addClass('open');
                        if (settings.format === "dropdown") {
                            mainmenu.find('ul').show();
                        }
                    }
                });
                cssmenu.find('li ul').parent().addClass('has-sub');
                multiTg = function() {
                    cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
                    cssmenu.find('.submenu-button').on('click', function() {
                        $(this).toggleClass('submenu-opened');
                        if ($(this).siblings('ul').hasClass('open')) {
                            $(this).siblings('ul').removeClass('open').slideToggle();
                        } else {
                            $(this).siblings('ul').addClass('open').slideToggle();
                        }
                    });
                };
                if (settings.format === 'multitoggle') multiTg();
                else cssmenu.addClass('dropdown');
                if (settings.sticky === true) cssmenu.css('position', 'fixed');
                resizeFix = function() {
                    var mediasize = 1000;
                    if ($(window).width() > mediasize) {
                        cssmenu.find('ul').show();
                    }
                    if ($(window).width() <= mediasize) {
                        cssmenu.find('ul').hide().removeClass('open');
                    }
                };
                resizeFix();
                return $(window).on('resize', resizeFix);
            });
        };
    })(jQuery);

    (function($) {
        $(document).ready(function() {
            $("#cssmenu").menumaker({
                format: "multitoggle"
            });
        });
    })(jQuery);
</script> 


</body>
</html>