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

function registerWithSQL($pdo, $emailForm, $passwordForm, $pseudoForm): void
{
	try {
		$pdoStatement2 = $pdo->prepare('INSERT INTO utilisateur (email, mot_de_passe, pseudo, date_inscription, derniere_connexion) 
		VALUES ( "' . $emailForm . '", "' . $passwordForm . '",  "' . $pseudoForm . '", NOW(), NOW() );
		');
		$pdoStatement2->execute();
		echo " Félicitations vous êtes bien inscrits !";
	} catch (PDOException $e) {
		throw new Exception("L'inscription à échouée dans la abse de donnée.");
	}
}

function isEmailUnique($pdo, $emailForm, $passwordForm, $pseudoForm, $infos): void
{
	try {
		if (isset($_POST['email'])) {
			$emailForm = $_POST['email'];
			foreach ($infos as $id) {
				if ($id->email == $_POST['email']) {
					throw new Exception("l'email est déja pris ,veuillez changez d'email");
				}
			}
			// SI L'EMAIL EST UNIQUE
			echo " passage email unique ";
			registerWithSQL($pdo, $emailForm, $passwordForm, $pseudoForm);
		}
	} catch (PDOException $e) {
		throw new Exception("L'email n'est pas unique et déja présente dans la base de donnée");
	}
}

function isPseudoUnique($pdo, $emailForm, $passwordForm, $pseudoForm, $infos): void
{
	try {
		if (isset($_POST['pseudo'])) {
			$pseudoForm = $_POST['pseudo'];
			foreach ($infos as $id) {
				if ($id->pseudo == $_POST['pseudo']) {
					throw new Exception(" le pseudo est déja pris veuiller changer de pseudo  ");
				}
			}


			// SI LE PSEUDO EST UNIQUE 
			echo " passage pseudo unique ";
			isEmailUnique($pdo, $emailForm, $passwordForm, $pseudoForm, $infos);
		}
	} catch (PDOException $e) {
		throw new Exception("Le pseudo n'est pas unique et déja présente dans la base de donnée");
	}
}

function isPasswordsMatches($pdo, $emailForm, $passwordForm, $pseudoForm, $infos): void
{
	try {
		if (isset($_POST['password'])) {
			
			if (isset($_POST['passwordconfirm'])) {
				
				if ($_POST['password'] == $_POST['passwordconfirm']) {
					echo " passage mdp et mdpc identiques ";
					$_POST['password'] = password_hash($_POST['password'], CRYPT_SHA256);
					
					$passwordForm = $_POST['password'];
					$passwordPattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!()@#$%^&*]).{8,}$/';
					$regex = preg_match($passwordPattern, $_POST['password']);
					
					if (!$regex) {
						echo " 	Veuillez mettre 1 majuscule, 1 caractère spécial et 1 chiffre dans votre mot de passe. ";
					} else { // SI LE MOT DE PASSE EST BON
						echo " passage mdp ok ";
						$_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
						isPseudoUnique($pdo, $emailForm, $passwordForm, $pseudoForm, $infos);
					}
				}
			}
		}
	} catch (PDOException $e) {
		throw new Exception("Le mot de passe et la confirmation du mot de passe ne sont pas identiques");
	}
}

function register($pdo, $emailForm, $passwordForm, $pseudoForm, $infos): void
{
	isPasswordsMatches($pdo, $emailForm, $passwordForm, $pseudoForm, $infos);
}


if (isset($_POST['email'])) {

	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		throw new Exception(" format email non valide " . var_dump($_POST['email']));
	}
}

register($pdo, $emailForm, $passwordForm, $pseudoForm, $infos);



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
		<p style="font-size:10px;"> Déjà inscrit ? <a id="connexion" href="<?php echo PROJECT_FOLDER; ?>login.php"?>> <span style="color:#EA9033;">Se connecter </a></p>
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