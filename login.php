<?php
$page = "login";
require 'utils/common.php';
require_once SITE_ROOT . 'utils/database.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<?php
	require SITE_ROOT . 'partials/head.php';
	?>
	<title> Login </title>
</head>




<body>

	<!-------------------------- BANNER --------------------------->
	<div class="top-banner-container">
		<img src="ASSETS/IMAGES/2814.jpg" style="width:100%;height:300px;object-fit: cover;opacity: 0.3;">
		<div class="top-banner-centered"> SE CONNECTER </div>
	</div>
	<!------------------------------------------------------------->



	<div class="account-box">
		<div class="contact-password-form">
			<input type="email" name="Email" placeholder="Email" id="email">
			<input type="password" name="MotDePasse" placeholder="Mot de passe" id="password">
			<br>
			<div class="contact-form-button">
				<button class="button"> Connexion </button>
			</div>
		</div>
		<p style="font-size:10px;"> Pas de compte ? <a id="connexion" href="<?php echo PROJECT_FOLDER; ?>register.php"?>> <span style="color:#EA9033;">S'inscrire </a></p>
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
	<?php
	require SITE_ROOT . 'partials/header.php';
	?>
	<!------------------------------------------------------------->



</body>

</html>