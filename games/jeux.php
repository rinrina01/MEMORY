<?php
$page = "jeux";
require '../utils/common.php';
require_once SITE_ROOT . 'utils/database.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<link rel="stylesheet" href="<?php echo PROJECT_FOLDER; ?>assets/styles/jeux.css" />
	<?php
	require SITE_ROOT . 'partials/head.php';
	?>
	<title>Memory</title>
</head>




<body>
	<!-------------------------- BANNER --------------------------->
	<div class="top-banner-container">
		<img src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/2814.jpg" style="width:100%;height:300px;object-fit: cover;opacity: 0.3;">
		<div class="top-banner-centered"> JEUX </div>
	</div>
	<!------------------------------------------------------------->


	<div class="box">
		<h2>A QUOI VOULEZ-VOUS JOUER ?</h2>
		<form action="">
			<button type="submit" formaction="#memory">Mémory</button>
		</form>
		<form action="">
			<button type="submit" formaction="#demineur">Démineur</button>
		</form>
		<marquee behavior="" direction="right">*A la limite des stocks disponibles !</marquee>
	</div>

	<br>
	<br>
	<br>

	<div class="box">
		<h1 class="titleGame" id="memory">Mémory</h1>
		<h2>COMMENT JOUER ?</h2>
		<p id="description"><span class="point"> • </span>Le jeu se compose de paires de cartes portant des illustrations identiques. <br>
			<span class="point"> • </span>L'ensemble des cartes est mélangé, puis étalé face contre table. <br>
			<span class="point"> • </span>À son tour, chaque joueur retourne deux cartes de son choix. <br>
			<span class="point"> • </span>S'il découvre deux cartes identiques, il les ramasse et les conserve, ce qui lui permet de rejouer. <br>
			<span class="point"> • </span>Si les cartes ne sont pas identiques, il les retourne faces cachées à leur emplacement de départ. <br>
			<span class="point"> • </span>Le jeu se termine quand toutes les paires de cartes ont été découvertes et ramassées. Le gagnant est le joueur qui possède le plus de paires.
		</p>

		<h2>Prêt ?</h2>
		<form>
			<button type="submit" formaction="<?php echo PROJECT_FOLDER; ?>games/memory/memory_game.php">Jouer au Mémory</button>
		</form>
	</div>

	<div class="box">
		<h1 class="titleGame" id="demineur">Démineur</h1>
		<h2>COMMENT JOUER ?</h2>
		<p id="description"><span class="point"> • </span>Le but du jeu est de découvrir toutes les cases libres sans faire exploser les mines (sans cliquer sur les cases qui les dissimulent) <br>
			<span class="point"> • </span>Lorsque le joueur clique sur une case libre comportant au moins une mine dans l'une de ses cases avoisinantes, un chiffre apparaît, indiquant ce nombre de mines. <br>
		</p>

		<h2>Prêt ?</h2>
		<form>
			<button type="submit" formaction="<?php echo PROJECT_FOLDER; ?>games/demineur/demineur_game.php">Jouer au Démineur</button>
		</form>
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