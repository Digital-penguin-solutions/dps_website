$('iframe').load(function() {
  $(this).contents().find('img').css({with: '100%', 'height': '100%'});
});
