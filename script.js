$('.open-modal').click(function() {
  var el = $(this)[0],
      classes = el.className.split(/\s+/);
  for(var i = 0; i < classes.length; i++) {
    if(classes[i].match(/modal-/)) {
      var modalClass = classes[i];
      $('.modal.' + modalClass).fadeIn('fast');
    }
  }
});

$('.close-modal').click(function() {
  $(this).closest('.modal').fadeOut('fast');
});