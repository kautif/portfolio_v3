$('#bio-link').on('click', function(e) {
	$('.bio').toggle();
	$('.resume').hide();
	$('.projects').hide();
	$('.contact').hide();
});

$('#projects-link').on('click', function(e) {
	$('.projects').toggle();
	$('.bio').hide();
	$('.resume').hide();
	$('.contact').hide();
});

$('#resume-link').on('click', function(e) {
	$('.resume').toggle();
	$('.bio').hide();
	$('.projects').hide();
	$('.contact').hide();
});

$('#contact-link').on('click', function(e) {
	$('.contact').toggle();
	$('.bio').hide();
	$('.projects').hide();
	$('.resume').hide();
});