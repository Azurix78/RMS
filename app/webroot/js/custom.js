$( document ).ready(function() {
	$( ".custom-activated" ).hover(
		if ( $( ".custom-activated" ).html() == "Activé" ) {
			function() {
				$( this ).html( 'Désactiver' ).css({'background-color':'#d9534f', 'border-color':'#d43f3a'});
			}, function() {
				$( this ).html( 'Activé' ).css({'background-color':'#5cb85c', 'border-color':'#4cae4c'});
			}
		} else if ( $( ".custom-activated" ).html() == "Activé" ) {
			function() {
				$( this ).html( 'Activer' ).css({'background-color':'#d9534f', 'border-color':'#d43f3a'});
			}, function() {
				$( this ).html( 'Désactivé' ).css({'background-color':'#5cb85c', 'border-color':'#4cae4c'});
			}
		}
	);
	$('img').error(function () {
		$(this).attr('src', '/img/error.png');
	});
});