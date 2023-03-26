<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StarterTheme
 */

?>

	</div><!-- #content -->

        <div id="fd-form-64041aece53da0b99ec98af4"></div>
<script>
  window.fd('form', {
    formId: '64041aece53da0b99ec98af4',
    containerEl: '#fd-form-64041aece53da0b99ec98af4'
  });
</script>

	<footer>
        <div class="footer-wrapper">
            <div class="top-footer">
                <h2>We help leaders build positive, productive workplaces through behavioral insights and Organization Science.</h2>
                <div class="btn-holder">
                    <a href="mailto:contact@attune-collective.com" class="cta-btn">Contact Us <i class="fa fa-envelope-o"></i></a>
                </div>
            </div>
            <div class="footer-content">
                <div class="footer-item">
                    <a href="/meet-the-team/" class="footer-link-title">Meet the Team</a>
                </div>
                <div class="footer-item">
                    <a href="/services/" class="footer-link-title">Our Services</a>
                    <a href="/services/change-navigation-leadership-coaching/">Change Navigation Leadership Coaching</a>
                    <a href="/services/building-high-thriving-teams/">Building High Thriving Teams</a>
                    <a href="/services/change-navigation/">Change Navigation</a>
                </div>
                <div class="footer-item">
                    <a href="/thought-leadership/" class="footer-link-title">Thought Leadership</a>
                    <a href="/our-impact/" class="footer-link-title">Our Impact</a>
<!--                </div>-->
<!--                <div class="footer-item">-->
<!--                    <a href="/resources/" class="footer-link-title">Resources</a>-->
<!--                </div>-->
<!--                <div class="footer-item">-->
<!--                    <a href="/frequently-asked-questions/">FAQ</a>-->
<!--                </div>-->
            </div>
            <div class="sub-footer">
                <a href="/">
                    <img src="/assets/AttuneCollectiveLogo-White.png" alt="Attune Collective Logo">
                </a>
                <div>
                    <p>© <script type="text/javascript">
                          document.write(new Date().getFullYear());
                        </script> Attune Collective LLC</p>
                    <div class="preheader-right footer-social">
                        <a target="_blank" href="https://www.linkedin.com/company/attune-collective"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
        
        
<script>
    $(document).ready(function(){
	$('#nav-icon').click(function(){
		$(this).toggleClass('open');
        $('.main-nav').toggleClass('menu-open');
        $('body').toggleClass('mobile-opened');
	});
});
$(function() {
    $(document).on('click', '.hero-content .basic-cta-hero', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
$(window).scroll(function() {
    if ($(this).scrollTop()) {
        $('.sticky-header').addClass('sticky-header-locked');
    } else {
        $('.sticky-header').removeClass('sticky-header-locked');
    }
});
    $(document).ready(function(){
    if ($(this).scrollTop()) {
        $('.sticky-header').addClass('sticky-header-locked');
    } else {
        $('.sticky-header').removeClass('sticky-header-locked');
    }
});

// hover onload so menu isn't buggy
$(document).ready(function(){
    $(".main-nav-item").addClass("main-nav-item-ready");
});    

    
    
    
$(document).ready(function(){
  if ($(window).width() <= 850) {
    $(".left-nav .main-nav-item > a").addClass("mobile-top-level");
    $(".inner-nav").addClass("mobile-second-level-ul");
      
    $(".main-nav-item").removeClass("main-nav-item-ready");
    $(".main-nav-item-ready").removeClass("main-nav-item-hovered");    
    $(".mobile-second-level-ul").hide();

$('.mobile-top-level').click(function(){
     $(this).next(".mobile-second-level-ul").slideToggle(200);    
});
  } else {
    $(".main-nav-item-ready").hover(function(){
        $(this).toggleClass("main-nav-item-hovered");  //Toggle the active class to the area is hovered
    });
  }
});    

    
var mql = window.matchMedia('(max-width: 850px)');    
    
function screenTest(e) {
  if (e.matches) {
    $(".left-nav .main-nav-item > a").addClass("mobile-top-level");
    $(".inner-nav").addClass("mobile-second-level-ul");
    $(".main-nav-item").removeClass("main-nav-item-ready");
    $(".mobile-second-level-ul").hide();

$('.mobile-top-level').click(function(){
     $(this).next(".mobile-second-level-ul").slideToggle(200);    
});
    
  } else {     
      
		$('#nav-icon').removeClass('open');
        $('.main-nav').removeClass('menu-open');
        $('body').removeClass('mobile-opened');
      
    $('.mobile-second-level-ul').show();
    $(".main-nav-item").addClass("main-nav-item-ready");  
    $(".left-nav").removeClass("mobile-top-level");
    $(".inner-nav ul").removeClass("mobile-second-level-ul");
    $(".main-nav-item-ready").hover(function(){
        $(this).toggleClass("main-nav-item-hovered");  //Toggle the active class to the area is hovered
    });
  }
}

mql.addListener(screenTest);





<!-- Initialize Swiper -->
var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    loop: true,
    autoplay: {
        delay: 9500,
      },

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
        clickable: true
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  })

</script>



<?php wp_footer(); ?>
</div><!-- #page -->

</body>
</html>
