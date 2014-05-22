<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHd9HZ54CRFr-wBpQM09AsrjeH119num8&sensor=true"></script>
<script type="text/javascript">
  function initialize() {
    var mapOptions = {
      center: new google.maps.LatLng(-34.397, 150.644),
      zoom: 8
    };
    var map = new google.maps.Map(document.getElementById("map-canvas"),
        mapOptions);
  }
  google.maps.event.addDomListener(window, 'load', initialize);
</script>

<h3>Rentrer en contact avec nous</h3>
<p class="instruct">Pour nous contacter, veuillez remplir ce formulaire, nous vous recontacterons ensuite.</p>

<form method="POST">
	<section class="ctnContact">
		<section class="inputs">
			<label>Nom Prénom / Société :</label>
			<input type="text" name="name" placeHolder="Indiquez votre nom et prénom">

			<label>Mail :</label>
			<input type="text" name="mail" placeHolder="Indiquez votre mail">

			<label>Numero de telephone (facultatif) :</label>
			<input type="text" name="tel" placeHolder="(facultatif)">

			<label>Votre objet :</label>
			<input type="text" name="object" placeHolder="L'objet de votre message">
		</section>
		<section class="map">
			<section>
				<div id="map-canvas"></div>
			</section>
		</section>
	</section>
	<section class="textarea">
		<label>Message :</label>
		<textarea name="message" placeHolder="Ecrivez ici votre message"></textarea>

		<input type="submit" value="Envoyer" class="btn">
	</section>
</form>

