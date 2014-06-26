$( document ).ready(function() {
	$('.slider-home').slick({
  		slidesToShow: 1,
  		slidesToScroll: 1,
  		arrows: false,
  		autoplay: true,
  		autoplaySpeed: 10000,
  		speed: 1000,
      dots: true,
	});

	$('.slider-partners').slick({
  		slidesToShow: 4,
  		slidesToScroll: 4,
  		arrows: true,
  		autoplay: true,
  		autoplaySpeed: 5000,
  		speed: 3000,
	});

  $( ".accueil .slick-slide .img-sliders" ).each(function( index ) {
    $(this).css('width', $(this).children('.img-slider').width());
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

  // function fixHeght(){
  //   $('body').css('min-height', $(window).height() - $('.footer').height() + 'px');
  //   $('body').css('padding-bottom', $('.footer').height() + 10 + 'px');
  //   console.log($(window).height());
  // }

  // $(window).resize(fixHeght());

  // fixHeght();

  $(window).scroll(function() {
    if($(window).scrollTop() > 0)
    {
      $('.header').addClass('sticky-nav')
      $('body').css('margin-top',$('.header').height() + 'px' );
    }
    else
    {
      $('.header').removeClass('sticky-nav')
      $('body').css('margin-top','0px' );
    }
  });

});