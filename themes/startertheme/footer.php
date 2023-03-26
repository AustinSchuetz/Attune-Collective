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

	<footer>
        <div class="footer-wrapper">
            <div class="top-footer">
                <h2>Tagline,</h2>
                <h2>Let's make this work</h2>
                <div class="btn-holder">
                    <a href="#" class="cta-btn">CTA Button</a>
                </div>
            </div>
            <div class="footer-content">
                <div class="footer-item">
                    <a href="#" class="footer-link-title">Site Section 1</a>
                    <a href="#">Inner</a>
                    <a href="#">Site Section 1</a>
                    <a href="#">Longer Title Link Section 1</a>                
                </div>
                <div class="footer-item">
                    <a href="#" class="footer-link-title">Section 2</a>
                    <a href="#">Site Section 2</a>
                    <a href="#">Longer Title Link Section 2</a>               
                    <a href="#">Inner</a>    
                </div>
                <div class="footer-item">
                    <a href="#" class="footer-link-title">Site Section 3</a>
                    <a href="#">Longer Title Link Section 3</a>       
                    <a href="#">Inner Link</a>
                    <a href="#">Site Section 3</a>        
                </div>
                <div class="footer-item">
                    <a href="/contact/" class="footer-link-title">Contact Us</a>
                    <p>Address line 1<br>
                    Address line 2 ZipCode<br>
                    Phone: ###-###-####<br>
                    email@company.com</p>         
                </div>
            </div>
            <div class="sub-footer">
                <a href="/">
                    <img src="https://via.placeholder.com/350x150" alt="Logo">                
                </a>
                <div>
                    <p>© <script type="text/javascript">
                          document.write(new Date().getFullYear());
                        </script> Company Inc.</p>
                    <div class="preheader-right footer-social">
                        <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                        <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>                    
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
    $(document).on('click', '.request-quote-btn', function(event) {
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
