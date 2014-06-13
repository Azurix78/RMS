$( document ).ready(function() {
	if ( $( ".custom-activated" ).html() == "Activé" ) {
		$( ".custom-activated" ).hover(
		  function() {
		  	$( this ).html( 'Désactiver' ).css({'background-color':'#d9534f', 'border-color':'#d43f3a'});
		  }, function() {
		  	$( this ).html( 'Activé' ).css({'background-color':'#5cb85c', 'border-color':'#4cae4c'});
		  }
		);
	} else if ( $(".custom-activated").html() == "Désactivé" ) {
		$(".custom-activated").hover(
		  function() {
		  	$( this ).html( 'Activer' ).css({'background-color':'#5cb85c', 'border-color':'#4cae4c'});
		  }, function() {
		  	$( this ).html( 'Désactivé' ).css({'background-color':'#d9534f', 'border-color':'#d43f3a'});
		  }
		);
	}
	$('img').error(function () {
		$(this).attr('src', '/img/error.png');
	});
});