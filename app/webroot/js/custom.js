$( document ).ready(function() {
	$("#custom-activated").hover(
	  function() {
	  	alert('test');
	  }, function() {
	    $( this ).find( "span:last" ).remove();
	  }
	);
});