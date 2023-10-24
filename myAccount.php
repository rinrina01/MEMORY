<?php
$page = "myAccount";
require 'utils/common.php';
require_once SITE_ROOT . 'utils/database.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<?php
	require SITE_ROOT . 'partials/head.php';
	require SITE_ROOT . 'partials/header.php';
	?>
	<title> Login </title>
</head>



<body>

	<!-------------------------- BANNER --------------------------->
	<div class="top-banner-container">
		<img src="ASSETS/IMAGES/2814.jpg" style="width:100%;height:300px;object-fit: cover;opacity: 0.3;">
		<div class="top-banner-centered"> MON COMPTE </div>
	</div>
	<!------------------------------------------------------------->




	<div class="account-box">
		<h2 style="margin-bottom:15px"> Changer votre email </h2>
		<div class="contact-password-form">
			<input type="email" name="Email" placeholder="Email actuel" id="email">
			<input type="email" name="NewEmail" placeholder="Nouvel email" id="newemail">
			<input type="password" name="MotDePasse" placeholder="Mot de passe" id="password">
			<div class="contact-form-button">
				<button class="button"> Changer l'email </button>
			</div>
		</div>
	</div>


	<div class="account-box">
		<h2 style="margin-bottom:15px">Changer votre mot de passe</h2>
		<div class="contact-password-form">
			<input type="password" name="AncienMotDePasse" placeholder="Ancien mot de passe" id="olgpassword">
			<input type="password" name="MotDePasse" placeholder="Nouveau mot de passe" id="password">
			<input type="password" name="NewMotDePasse" placeholder="Confirmez le mot de passe" id="newpassword">
			<div class="contact-form-button">
				<button class="button"> Changer le mot de passe </button>
			</div>
		</div>
	</div>


	<!-------------------------- FOOTER --------------------------->
	<main>
		<footer>
			<?php
			require SITE_ROOT . 'partials/footer.php';
			?>
		</footer>
	</main>
	<!------------------------------------------------------------->


	<!-------------------------- HEADER --------------------------->
	<header>
		<?php
		require SITE_ROOT . 'partials/header.php';
		?>
	</header>
	<!------------------------------------------------------------->

</body>