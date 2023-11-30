<?php
$page = "login";
require 'utils/common.php';
require_once SITE_ROOT . 'utils/database.php';

$userEmail = '';
$userPassword = '';
$userId = null;
$userPseudo = '';


$ConnexionSuccessOrFailMessage = null;
if (isset($_POST['email']) && isset($_POST['password'])) {
	$userPassword = $_POST['password'];
	$userEmail = $_POST['email'];
	$ConnexionSuccessOrFailMessage = connexionUtilisateur($userEmail, $userPassword, $userId, $userPseudo);
} ?>



<!DOCTYPE html>
<html lang="fr">

<head>
	<link rel="stylesheet" href="<?php echo PROJECT_FOLDER; ?>ASSETS/styles/login.css" />
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
		<form class="contact-password-form" action="" method="post">
			<input type="email" name="email" placeholder="Entrez votre email" id="email">
			<input type="password" name="password" placeholder="Entrez votre mot de passe" id="password">
			<br>
			<div class="contact-form-button">
				<button class="button"> Connexion </button>
			</div>
		</form>
		<p style="font-size:10px;"> Pas de compte ? <a id="connexion" href="<?php echo PROJECT_FOLDER; ?>register.php" ?>> <span style="color:#EA9033;">S'inscrire </a></p>
		<label> <?php echo $ConnexionSuccessOrFailMessage ?> </label>
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