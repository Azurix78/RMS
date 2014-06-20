<h3>Rentrer en contact avec nous</h3>
<div class="instruct"><?php echo $data['Param']['param_info_contact']; ?></div>

<form method="POST">
	<section class="ctnContact">
		<section class="inputs">
			<label>Nom Prénom / Société :</label>
			<input type="text" name="name" placeHolder="Indiquez votre nom et prénom">
			<span class="e"><?php echo isset($errors['name'][0]) ? $errors['name'][0] : ""; ?></span>

			<label>Mail :</label>
			<input type="text" name="mail" placeHolder="Indiquez votre mail">
			<span class="e"><?php echo isset($errors['mail'][0]) ? $errors['mail'][0] : ""; ?></span>

			<label>Numero de telephone (facultatif) :</label>
			<input type="text" name="tel" placeHolder="(facultatif)">
			<span class="e"><?php echo isset($errors['tel'][0]) ? $errors['tel'][0] : ""; ?></span>

			<label>Votre objet :</label>
			<input type="text" name="object" placeHolder="L'objet de votre message">
			<span class="e"><?php echo isset($errors['object'][0]) ? $errors['object'][0] : ""; ?></span>

		</section>
	</section>
	<section class="textarea">
		<label>Message :</label>
		<textarea name="message" placeHolder="Ecrivez ici votre message"></textarea>
		<span class="e"><?php echo isset($errors['message'][0]) ? $errors['message'][0] : ""; ?></span>

		<section class="ctnContact">
			<section class="inputs">
				<label>Recopier le texte de l'image :</label>
				<img src="/img/captcha<?php echo $captcha ?>.png" alt="">
				<input type="text" placeHolder="Êtes-vous humain?" value="" name="captcha">

			</section>
		</section>

		<input type="submit" value="Envoyer" class="btn">
	</section>
</form>

