<?php
$page = "myAccount";
require 'utils/common.php';
require_once SITE_ROOT . 'utils/database.php';

$pdo = connectToDbAndGetPdo();
$id = $_SESSION['id'];

var_dump($_SESSION);
if (isset($_SESSION['id'])) {
	session_destroy();
	echo 'session has been destroyed'; // FAIRE UNE PAGE DE DÉCONNEXION
}




$email = "";
$newemail = "";
$password = "";

$oldpassword = "";
$password2 = "";
$newpassword = "";

if (isset($_POST['email'])) {
	$email = $_POST['email'];
}
if (isset($_POST['newemail'])) {
	$newemail = $_POST['newemail'];
}
if (isset($_POST['password'])) {
	$password = $_POST['password'];
}

if (isset($_POST['oldpassword'])) {
	$oldpassword = $_POST['oldpassword'];
}
if (isset($_POST['password2'])) {
	$password2 = $_POST['password2'];
}
if (isset($_POST['newpassword'])) {
	$newpassword = $_POST['newpassword'];
}

// CHANGER LE MOT DE PASSE
if (isPasswordsMatches($password2, $newpassword)) { // regarde si le nouveau mot de passe est bien confirmé
	if (checkPassword($oldpassword, $id) == true) { // regarde si le mot de passe actuel est le bon
		echo "mot de passe bon ";
		// préparer la requête de changement de mot de passe
		$newpassword = password_hash($newpassword, CRYPT_SHA256);
		$pdoStatementChangePassword = $pdo->prepare('UPDATE utilisateur SET mot_de_passe = "' . $newpassword . '"
			WHERE id_utilisateur = "' . $id . '";');
		$pdoStatementChangePassword->execute(); // executer la requete de changement de mot de passe
		echo " mot de passe modifié ";
	} else {
		echo "mot de passe pas bon";
	}
} else {
	echo "mot de passe ne matche pas ou ne contiens pas 1 majuscule, 1 chiffre et 1 caractère spécial";
}

// CHANGER L'EMAIL
$currentEmail = "";
$pdoStatementCurrentEmail = $pdo->prepare('SELECT email FROM utilisateur
							WHERE id_utilisateur = "' . $id . '"');
$currentEmail = $pdoStatementCurrentEmail->execute();


if (isset($_POST['email'])) { // CHECK SI LES MAILS SONT EXISTANTS
	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		if (isset($_POST['newemail'])) {
			if (filter_var($_POST['newemail'], FILTER_VALIDATE_EMAIL)) {

				if (isset($_POST['password'])) {
					$password = password_hash($password, CRYPT_SHA256);
					if (checkPassword($password, $id) == true) {

						$pdoStatementChangeEmail = $pdo->prepare('UPDATE utilisateur SET email = "' . $newemail . '"
						WHERE id_utilisateur = "' . $id . '"');
						$pdoStatementChangeEmail->execute();
						echo " email changé";
					} else {
						echo "mot de passe non valide";
					}
				} else {
					echo "mot de passe non existant";
				}
			} else {
				echo "nouvel email non valide";
			}
		} else {
			echo "nouvel email non existant";
		}
	} else {
		echo "email non valide";
	}
} else {
	echo "email non existant";
}


?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<link rel="stylesheet" href="<?php echo PROJECT_FOLDER; ?>assets/styles/myAccount.css" />
	<?php
	require SITE_ROOT . 'partials/head.php';
	?>
	<title> My Account </title>
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
			<form action="" method="post">
				<input type="email" name="email" placeholder="Email actuel" id="email">
				<input type="email" name="newemail" placeholder="Nouvel email" id="newemail">
				<input type="password" name="password" placeholder="Mot de passe" id="password">
				<div class="contact-form-button">
					<button class="button"> Changer l'email </button>
				</div>
			</form>
		</div>
	</div>


	<div class="account-box">
		<h2 style="margin-bottom:15px">Changer votre mot de passe</h2>
		<div class="contact-password-form">
			<form action="" method="post">
				<input type="password" name="oldpassword" placeholder="Ancien mot de passe" id="oldpassword">
				<input type="password" name="password2" placeholder="Nouveau mot de passe" id="password2">
				<input type="password" name="newpassword" placeholder="Confirmez le mot de passe" id="newpassword">
				<div class="contact-form-button">
					<button class="button"> Changer le mot de passe </button>
				</div>

			</form>
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