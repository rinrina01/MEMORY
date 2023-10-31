<?php
$page = "myAccount";
require 'utils/common.php';
require_once SITE_ROOT . 'utils/database.php';

$pdo = connectToDbAndGetPdo();
$id = $_SESSION['id'];

if (isset($_POST['logout'])) {
	session_destroy();
	header("Location: login.php"); // Rediriger vers la page de connexion après déconnexion
	exit();
}

$email = "";
$newemail = "";
$password = "";

$emailChangeMessage = "";
$passwordChangeMessage = "";

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
if (isPasswordsMatches($password2, $newpassword)) {
	if (checkPassword($oldpassword, $id) == true) {
		// Préparer la requête de changement de mot de passe
		$newpassword = password_hash($newpassword, CRYPT_SHA256);
		$pdoStatementChangePassword = $pdo->prepare('UPDATE utilisateur SET mot_de_passe = :newPassword
            WHERE id_utilisateur = :id;');
		$pdoStatementChangePassword->execute([
			':newPassword' => $newpassword,
			':id' => $id,
		]);
		$passwordChangeMessage = "Mot de passe modifié";
	} else {
		$passwordChangeMessage = "Mot de passe incorrect";
	}
} else {
	$passwordChangeMessage = "Mot de passe ne correspond pas ou ne contient pas 1 majuscule, 1 chiffre et 1 caractère spécial";
}

// CHANGER L'EMAIL
$currentEmail = "";
$pdoStatementCurrentEmail = $pdo->prepare('SELECT email FROM utilisateur WHERE id_utilisateur = "' . $id . '"');
$currentEmail = $pdoStatementCurrentEmail->execute();

if (isset($_POST['email'])) {
	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		if (isset($_POST['newemail'])) {
			if (filter_var($_POST['newemail'], FILTER_VALIDATE_EMAIL)) {
				if (isset($_POST['password'])) {
					$password = password_hash($password, CRYPT_SHA256);
					if (checkPassword($password, $id) == true) {
						$pdoStatementChangeEmail = $pdo->prepare('UPDATE utilisateur SET email = :newEmail
                        WHERE id_utilisateur = :id');
						$pdoStatementChangeEmail->execute([
							':newEmail' => $newemail,
							':id' => $id,
						]);
						$emailChangeMessage = "Email changé";
					} else {
						$emailChangeMessage = "Mot de passe incorrect";
					}
				} else {
					$emailChangeMessage = "Mot de passe non existant";
				}
			} else {
				$emailChangeMessage = "Nouvel email non valide";
			}
		} else {
			$emailChangeMessage = "Nouvel email non existant";
		}
	} else {
		$emailChangeMessage = "Email non valide";
	}
} else {
	$emailChangeMessage = "Email non existant";
}

// Gérer la mise à jour de la photo de profil
if (isset($_POST['upload_profile_picture'])) {
	$profilePictureDirectory = 'userFiles/' . $id . '/';

	if (!is_dir($profilePictureDirectory)) {
		mkdir($profilePictureDirectory, 0777, true);
	}

	if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] === UPLOAD_ERR_OK) {
		$profilePictureName = 'profile_picture.jpg';
		move_uploaded_file($_FILES['profile_picture']['tmp_name'], $profilePictureDirectory . $profilePictureName);
		$uploadSuccessMessage = "Photo de profil mise à jour avec succès.";
	} else {
		$uploadErrorMessage = "Erreur lors du téléchargement de la photo de profil.";
	}
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<link rel="stylesheet" href="<?php echo PROJECT_FOLDER; ?>assets/styles/myAccount.css" />
	<?php require SITE_ROOT . 'partials/head.php'; ?>
	<title>My Account</title>
</head>

<body>

	<div class="top-banner-container">
		<img src="ASSETS/IMAGES/2814.jpg" style="width:100%;height:300px;object-fit: cover;opacity: 0.3;">
		<div class="top-banner-centered">MON COMPTE</div>
	</div>

	<div class="account-box">
		<h2 style="margin-bottom:15px">Photo de profil</h2>
		<div class="profile-picture-container">
			<?php
			$profilePicturePath = 'userFiles/' . $id . '/profile_picture.jpg';
			if (file_exists($profilePicturePath)) {
				echo '<img src="' . $profilePicturePath . '" alt="Photo de profil">';
			} else {
				echo '<p>Aucune photo de profil disponible</p>';
			}
			?>
		</div>
		<div class="contact-password-form">
			<form action="myAccount.php" method="post" enctype="multipart/form-data">
				<input type="file" name="profile_picture" accept="image/*">
				<div class="contact-form-button">
					<button class="button" type="submit" name="upload_profile_picture">Changer de photo de profil</button>
				</div>
			</form>
			<?php
			if (isset($uploadSuccessMessage)) {
				echo '<p class="success-message">' . $uploadSuccessMessage . '</p>';
			}
			if (isset($uploadErrorMessage)) {
				echo '<p class="error-message">' . $uploadErrorMessage . '</p>';
			}
			?>
		</div>
	</div>

	<div class="account-box">
		<h2 style="margin-bottom:15px">Changer votre email</h2>
		<div class="contact-password-form">
			<form action="" method="post">
				<input type="email" name="email" placeholder="Email actuel" id="email">
				<input type="email" name="newemail" placeholder="Nouvel email" id="newemail">
				<input type="password" name="password" placeholder="Mot de passe" id="password">
				<div class="contact-form-button">
					<button class="button">Changer l'email</button>
				</div>
			</form>
			<p><?php echo $emailChangeMessage; ?></p> <!-- Afficher le message d'email ici -->
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
					<button class="button">Changer le mot de passe</button>
				</div>
			</form>
			<p><?php echo $passwordChangeMessage; ?></p> <!-- Afficher le message du changement de mot de passe ici -->
		</div>
	</div>

	<div class="account-box">
		<form action="" method="post">
			<button type="submit" name="logout" class="button">Se déconnecter</button>
		</form>
	</div>

	<main>
		<footer>
			<?php require SITE_ROOT . 'partials/footer.php'; ?>
		</footer>
	</main>

	<header>
		<?php require SITE_ROOT . 'partials/header.php'; ?>
	</header>

</body>
</html>
