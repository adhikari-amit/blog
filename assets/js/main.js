/*global $, window,*/

$(function () {
    
    "use strict";
    
    var win = $(window),
        htmlBody = $("html, body"),
        scrollToTop = $(".scroll-top"),
        headerInner = $(".header-inner");
	
	/*========== Loading  ==========*/
    $('.loading').delay(200).fadeOut(700, function () {
        $(this).remove();
    });
        
    /*========== Mobile Menu  ==========*/
    $(".header-inner .menu-toggle").on("click", function () {
        headerInner.toggleClass("menu-active");
    });

    $('header .header-inner .navbar-default .navbar-nav li a').removeAttr('title');
    //$('.textwidget').replaceWith($('.textwidget').contents());

    $("header .header-inner .navbar .nav li a").on("click", function (e) {
        if ($(this).attr('href').charAt(0) === "#") {
            e.preventDefault();
        }
        $(this).parent().find('.dropdown-menu').slideToggle();
    });

    /*========== Search Toggle  ==========*/
    $("header .header-inner .search-toggle").on("click", function () {
        $("header .search-area").fadeIn();
    });

    $("header .search-area .close-search").on("click", function () {
        $("header .search-area").fadeOut();
    });

    $('.random-posts').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 2,
        speed: 300,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        dots: false,
        adaptiveHeight: false,
        responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 1
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1
              }
            },
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 1,
                centerMode: false,
                centerPadding: '0'
              }
            }
          ]
    });
    
    /*========== Owl Carousel Categories Js Slider  ==========*/

    $('.category-owl').slick({
        slidesToShow: 4,
        speed: 300,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        responsive: [
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: 3,
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
              }
            },
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 1,
              }
            }
          ]
    });

    /*========== Scroll To Top  ==========*/
    function scrollUp() {
        if (win.scrollTop() >= 1100) {
            scrollToTop.fadeIn();
        } else {
            scrollToTop.fadeOut();
        }
    }
    
    scrollUp();
    
    win.on("scroll", function () {
        scrollUp();
    });
    
    scrollToTop.on("click", function (e) {
        e.preventDefault();
        htmlBody.animate({
            scrollTop: 0
        }, 800);
    });
	
	/*========== Ajax Contact Form  ==========*/
	$('.contact-form').on("submit", function () {
		
		var myForm = $(this),
			data = {};
		
		myForm.find('[name]').each(function() {
			
			var that = $(this),
				name = that.attr('name'),
				value = that.val();
			
			data[name] = value;
			
		});
		
		$.ajax({
			
			url: myForm.attr('action'),
			type: myForm.attr('method'),
			data: data,
			success: function (response) {
				
				if (response == "success") {
								
					$(".contact-form").find(".form-message").addClass("success");
					$(".form-message span").text("Message Sent!");
					
				} else {
					
					$(".contact-form").find(".form-message").addClass("error");
					$(".form-message span").text("Error Sending!");
					
				}
			}
			
		});
		
		return false;
		
	});
});