var $=jQuery.noConflict();
 
(function($){
	"use strict";
	$(function(){
 
		/*------------------------------------*\
			#GLOBAL
		\*------------------------------------*/

		$(document).ready(function() {
			footerBottom();
			imageMasonry();
			/* Animation */
			var wow = new WOW( {
				boxClass:     'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset:       0,          // distance to the element when triggering the animation (default is 0)
				mobile:       true,       // trigger animations on mobile devices (default is true)
				live:         true,       // act on asynchronously loaded content (default is true)
				callback:     function(box) {
				// the callback is fired every time an animation is started
				// the argument that is passed in is the DOM node being animated
			},
			scrollContainer: null // optional scroll container selector, otherwise use window
			} );
			wow.init();
		});
 
		$(window).on('resize', function(){
			footerBottom();
			imageMasonry();
		});
 
		$(document).scroll(function() {

		});
 
		// if( parseInt( isHome ) ){

		// } 

		// if( parseInt( isSingular ) ){

		// } 

		$(".item-scroll").click(function() {
			console.log('init');
			var idLink = $(this).attr('id');
			var sectionID = $('#section-'+idLink);
			$('html, body').animate({
	            scrollTop: sectionID.offset().top -100
	        }, 600);

		    /*if ( sectionID == 'initial' ){
		        $('html, body').animate({
		            scrollTop: sectionID.offset().top
		        }, 600);
		    } else {
		        $('html, body').animate({
		            scrollTop: sectionID.offset().top -300
		        }, 600);
		    }*/
		});

		// Nav Mobile
		$("#open-nav").click(function() {
			$('.js-header nav').addClass('open');
			$('body').addClass('overflow-hide');
		});
		$(".close-nav").click(function() {
			$('.js-header nav').removeClass('open');
			$('body').removeClass('overflow-hide');
		});

		// Modal
		$(".open-modal").click(function() {
			var idModal = $(this).attr('id');
			$('#modal-' + idModal).show();
			$('body').addClass('overflow-hide');
		});
		$(".close-modal, .exit-modal").click(function() {
			console.log('click');
			$('.modal').hide();
			$('body').removeClass('overflow-hide');
		});

		// Tarjeta dirección
		$("#tmptnj-tarjeta_btnubicacion").click(function() {
			if ($("#tmptnj-tarjeta_btnubicacion").hasClass("active")) {
				$('#tmptnj-tarjeta_btnubicacion, #tmptnj-tarjeta_mapubicacion').removeClass('active');
			} else {
				$('#tmptnj-tarjeta_btnubicacion, #tmptnj-tarjeta_mapubicacion').addClass('active');
			}			
		});

	});
})(jQuery);
 
/**
 * Fija el footer abajo
 */
function footerBottom(){
	var alturaFooter = getFooterHeight();
	var alturaHeader = getHeaderHeight();
	$('.main-body').css({
		paddingBottom: alturaFooter,
		paddingTop: alturaHeader,
		minHeight: "calc(100vh)"
	});
}
function getHeaderHeight(){
	return $('.js-header').outerHeight();
}// getHeaderHeight
function getFooterHeight(){
	return $('footer').outerHeight();
}// getFooterHeight

/*Masonry galería*/
function imageMasonry(){
	// init Packery
	var $grid = $('.grid-images').packery({
		itemSelector: '.grid-item',
		percentPosition: true
	});
	// layout Packery after each image loads
	$grid.imagesLoaded().progress( function() {
		$grid.packery();
	}); 
}










//Scroll to section
function scrollToSection(clickedElement){
    var item = clickedElement;
            //elemento al que se le da clic (<a href="#our_process" class="item [ estilos ]" data-section="our_process" itemprop="actionOption">Our process</a>)
    var sectionName = clickedElement.data('section');
            //Obtener el nombre de la seccion a la que debe ir esta ancla (data-section="our_process",  data-section="about_us, etc.")
    var sectionID = $('#'+sectionName);
            //Guardar el nombre de la sección como id

    $('.item').removeClass('active');
            //Remueve la clase activa (si es que está función ya corrio anteriormente, sino no hace nada)

    if ( sectionID == 'initial' ){
        $('html, body').animate({
            scrollTop: sectionID.offset().top
        }, 600);
    } else {
        $('html, body').animate({
            scrollTop: sectionID.offset().top -300
        }, 600);
    }
    item.addClass('active');
}