$('#bio-link').on('click', function(e) {
	$('.bio').show();
	$('.resume').hide();
	$('.projects').hide();
	$('.contact').hide();
	$('#bio-link').addClass('active');
	$('#projects-link').removeClass('active');
	$('#resume-link').removeClass('active');
	$('#contact-link').removeClass('active');
});

$('#projects-link').on('click', function(e) {
	$('.projects').show();
	$('.bio').hide();
	$('.resume').hide();
	$('.contact').hide();
	$('#projects-link').addClass('active');
	$('#bio-link').removeClass('active');
	$('#resume-link').removeClass('active');
	$('#contact-link').removeClass('active');
});

$('#resume-link').on('click', function(e) {
	$('.resume').show();
	$('.bio').hide();
	$('.projects').hide();
	$('.contact').hide();
	$('#resume-link').addClass('active');
	$('#projects-link').removeClass('active');
	$('#bio-link').removeClass('active');
	$('#contact-link').removeClass('active');
});

$('#contact-link').on('click', function(e) {
	$('.contact').show();
	$('.bio').hide();
	$('.projects').hide();
	$('.resume').hide();
	$('#contact-link').addClass('active');
	$('#projects-link').removeClass('active');
	$('#resume-link').removeClass('active');
	$('#bio-link').removeClass('active');
});