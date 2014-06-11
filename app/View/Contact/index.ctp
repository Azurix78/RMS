<h3>Rentrer en contact avec nous</h3>
<div class="instruct"><?php echo $data['Param']['param_info_contact']; ?></div>

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
	</section>
	<section class="textarea">
		<label>Message :</label>
		<textarea name="message" placeHolder="Ecrivez ici votre message"></textarea>

		<input type="submit" value="Envoyer" class="btn">
	</section>
</form>

