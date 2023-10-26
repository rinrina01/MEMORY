<?php
$page = "register";
require 'utils/common.php';
require_once SITE_ROOT . 'utils/database.php';

$pdo = connectToDbAndGetPdo();
$pdoStatement = $pdo->prepare('SELECT * FROM utilisateur AS U ');
$pdoStatement->execute();
$infos = $pdoStatement->fetchAll();

$emailForm = "";
$pseudoForm = "";
$passwordForm = "";
$passwordConfirmForm = "";


if (isset($_POST['email'])) {

	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		throw new Exception(" format email non valide " . var_dump($_POST['email']));
	}
}



if (isset($_POST['email'])) {
	if (isset($_POST['password'])) {
		if (isset($_POST['passwordconfirm'])) {
			if (isset($_POST['pseudo'])) {
				echo "email: " . $_POST['email'] . " pseudo:" . $_POST['pseudo'] . " password:" . $_POST['password'] . " confirmpassword:" . $_POST['passwordconfirm'];
				register($pdo, $_POST['email'], $_POST['password'], $_POST['passwordconfirm'], $_POST['pseudo'], $infos);
			}
		}
	}
}




?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<?php
	require SITE_ROOT . 'partials/head.php';
	?>
	<title>S'inscrire</title>
</head>

<body>


	<!-------------------------- BANNER --------------------------->
	<div class="top-banner-container">
		<img src="ASSETS/IMAGES/2814.jpg" style="width:100%;height:300px;object-fit: cover;opacity: 0.3;">
		<div class="top-banner-centered"> S'INSCRIRE </div>
	</div>
	<!------------------------------------------------------------->

	<main>
		<div class="register-form">
			<form method="post">
				<input type="email" id="email" name="email" placeholder="Email">
				<input type="text" id="pseudo" name="pseudo" placeholder="Pseudo" minlength="4"><!--minlenght permet de minimiser a 4 caractere--->
				<input type="password" id="password" name="password" placeholder="Mot de passe" minlength="8">
				<input type="password" id="passwordconfirm" name="passwordconfirm" placeholder="Confirmez votre mot de passe" minlength="8">

				<button class="register-button" type="submit"> Inscription </button>
			</form>
		</div>
		<p style="font-size:10px;"> Déjà inscrit ? <a id="connexion" href="<?php echo PROJECT_FOLDER; ?>login.php" ?>> <span style="color:#EA9033;">Se connecter </a></p>
	</main>


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


</body>

</html>