$('.bio-link').on('click', function(e) {
	$('.bio').show();
	$('.resume').hide();
	$('.projects').hide();
	$('.games').hide();
	$('.contact').hide();
	$('.bio-link').addClass('active');
	$('.projects-link').removeClass('active');
	$('.games-link').removeClass('active');
	$('.resume-link').removeClass('active');
	$('.contact-link').removeClass('active');
});

$('.projects-link').on('click', function(e) {
	$('.projects').show();
	$('.games').hide();
	$('.bio').hide();
	$('.resume').hide();
	$('.contact').hide();
	$('.projects-link').addClass('active');
	$('.games-link').removeClass('active');
	$('.bio-link').removeClass('active');
	$('.resume-link').removeClass('active');
	$('.contact-link').removeClass('active');
});

$('.games-link').on('click', function(e) {
	$('.games').show();	
	$('.projects').hide();
	$('.bio').hide();
	$('.resume').hide();
	$('.contact').hide();
	$('.games-link').addClass('active');
	$('.projects-link').removeClass('active');
	$('.bio-link').removeClass('active');
	$('.resume-link').removeClass('active');
	$('.contact-link').removeClass('active');
});

$('.resume-link').on('click', function(e) {
	$('.resume-link').addClass('active');
	$('.projects-link').removeClass('active');
	$('.games-link').removeClass('active');
	$('.bio-link').removeClass('active');
	$('.contact-link').removeClass('active');
});

$('.contact-link').on('click', function(e) {
	$('.contact').show();
	$('.bio').hide();
	$('.projects').hide();
	$('.games').hide();
	$('.resume').hide();
	$('.contact-link').addClass('active');
	$('.projects-link').removeClass('active');
	$('.games-link').removeClass('active');
	$('.resume-link').removeClass('active');
	$('.bio-link').removeClass('active');
});