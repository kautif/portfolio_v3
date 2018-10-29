$(document).ready(function() {

	$(".to-top").click(function() {
	    $('html, body').animate({scrollTop: $("#top").offset().top}, 1000);
	});

	$(".scroll-code").click(function() {
	    $('html, body').animate({scrollTop: $("#code-point").offset().top}, 1000);
	});

	$(".scroll-wp").click(function() {
	    $('html, body').animate({scrollTop: $("#wp-point").offset().top}, 1000);
	});

	$(".scroll-resume").click(function() {
	    $('html, body').animate({scrollTop: $("#resume").offset().top}, 1000);
	});

	$(".scroll-testimonial").click(function() {
	    $('html, body').animate({scrollTop: $("#testimonials").offset().top}, 1000);
	});

	$(".scroll-bio").click(function() {
	    $('html, body').animate({scrollTop: $("#bio").offset().top}, 1000);
	});
});


// $(window).scroll(function (event) {
//     var scroll = $(window).scrollTop();
//     console.log(scroll);
// });