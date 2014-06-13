$( document ).ready(function() {
	$(".custom-activated").hover(
	  function() {
	  }, function() {
	  }
	);
	$('img').error(function () {
		$(this).attr('src', '/img/error.png');
	});
});