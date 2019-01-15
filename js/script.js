$('#bio-link').on('click', function(e) {
	$('.bio').show().css('transition', '1000ms');
	$('.resume').hide().css('transition', '1000ms');
	$('.projects').hide().css('transition', '1000ms');
	$('.contact').hide().css('transition', '1000ms');
});

$('#projects-link').on('click', function(e) {
	$('.projects').show();
	$('.bio').hide();
	$('.resume').hide();
	$('.contact').hide();
});

$('#resume-link').on('click', function(e) {
	$('.resume').show();
	$('.bio').hide();
	$('.projects').hide();
	$('.contact').hide();
});

$('#contact-link').on('click', function(e) {
	$('.contact').show();
	$('.bio').hide();
	$('.projects').hide();
	$('.resume').hide();
});