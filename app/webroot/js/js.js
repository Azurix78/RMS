$( document ).ready(function() {
	$('.slider-home').slick({
  		slidesToShow: 1,
  		slidesToScroll: 1,
  		arrows: false,
  		autoplay: true,
  		autoplaySpeed: 10000,
  		speed: 1000,
	});

	$('.slider-partners').slick({
  		slidesToShow: 4,
  		slidesToScroll: 4,
  		arrows: true,
  		autoplay: true,
  		autoplaySpeed: 5000,
  		speed: 3000,
	});

  $(document).on('click', '.left-nav li', function(event) {
    $( ".left-nav li" ).each(function() {
      $( this ).removeClass( "active" );
    });

    $( this ).addClass( "active" );

    $('.actions-content-container').fadeOut(function(){
      $('.actions-content-container').fadeIn();
    });
  });

});