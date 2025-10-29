/**
 * Slick Custom
 *
 * @package Postali Child
 * @author Postali LLC
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

jQuery( function ( $ ) {
	"use strict";

	$('#award-slider').slick({
		dots: false,
		infinite: true,
		fade: false,
		autoplay: true,
  		autoplaySpeed: 3000,
  		speed: 1300,
		slidesToShow: 6,
		slidesToScroll: 1,
		prevArrow: false,
    	nextArrow: false,
    	swipeToSlide: true,
		cssEase: 'ease-in-out',
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 820,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
	});

    $('#award-scroller-mini').slick({
		dots: false,
		infinite: true,
		fade: false,
		autoplay: true,
  		autoplaySpeed: 3000,
  		speed: 1300,
		slidesToShow: 3,
		slidesToScroll: 1,
		prevArrow: false,
    	nextArrow: false,
    	swipeToSlide: true,
		cssEase: 'ease-in-out',
        responsive: [
            {
                breakpoint: 820,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
	});

    $('#pa-slider').slick({
		vertical: true,
        verticalSwiping: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: false,
        prevArrow: $('.prev-arrow'),
        nextArrow: $('.next-arrow'),
        responsive: [
            {
                breakpoint: 600,
                settings: "unslick"
            }
        ]
	});

    $('#faq-slider').slick({
		dots: false,
		infinite: false,
		fade: false,
		autoplay: false,
  		autoplaySpeed: 5000,
  		speed: 1300,
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: $('.prev-arrow-faq'),
        nextArrow: $('.next-arrow-faq'),
    	swipeToSlide: true,
		cssEase: 'ease-in-out',
        responsive: [
            {
                breakpoint: 600,
                settings: "unslick"
            }
        ]
	});

    $('.serve-for').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        fade: true,
        slidesToScroll: 1,
        slidesToShow: 1,
        arrows: false,
        dots: false,
        asNavFor: '.serve-for-mini',
    });
    
    $('.serve-for-mini').slick({
        autoplay: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.serve-for',
        dots: true,
        focusOnSelect: true,
        variableWidth: true,
        vertical: true,
        autoplaySpeed: 5000,
    });
    
    // Remove active class from all thumbnail slides
    $('.serve-for-mini .slick-slide').removeClass('slick-active');
    
    // Set active class to first thumbnail slides
    $('.serve-for-mini .slick-slide').eq(0).addClass('slick-active');
    
    // On before slide change match active thumbnail to current slide
    $('.serve-for').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        var mySlideNumber = nextSlide;
        $('.serve-for-mini .slick-slide').removeClass('slick-active');
        $('.serve-for-mini .slick-slide').eq(mySlideNumber).addClass('slick-active');
    });
	
});