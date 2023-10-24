<?php
$page = "memory";
require '../../utils/common.php';
require_once SITE_ROOT . 'utils/database.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<?php
	require SITE_ROOT . 'partials/head.php';
	?>
	<title>Memory</title>
</head>




<body>
	<!-------------------------- BANNER --------------------------->
	<div class="top-banner-container">
		<img src="ASSETS/IMAGES/2814.jpg" style="width:100%;height:300px;object-fit: cover;opacity: 0.3;">
		<div class="top-banner-centered"> MEMORY </div>
	</div>
	<!------------------------------------------------------------->

	<div class="box">
		<h2>COMMENT JOUER ?</h2>
		<p id="description"><span class="point"> • </span>Le jeu se compose de paires de cartes portant des illustrations identiques. <br>
			<span class="point"> • </span>L'ensemble des cartes est mélangé, puis étalé face contre table. <br>
			<span class="point"> • </span>À son tour, chaque joueur retourne deux cartes de son choix. <br>
			<span class="point"> • </span>S'il découvre deux cartes identiques, il les ramasse et les conserve, ce qui lui permet de rejouer. <br>
			<span class="point"> • </span>Si les cartes ne sont pas identiques, il les retourne faces cachées à leur emplacement de départ. <br>
			<span class="point"> • </span>Le jeu se termine quand toutes les paires de cartes ont été découvertes et ramassées. Le gagnant est le joueur qui possède le plus de paires.
		</p>

		<h2>Choississez votre difficulté</h2>
		<form>
			<button type="submit" formaction="memory_lvl1.html">Facile (5x5)</button>
			<button type="submit" formaction="memory_lvl2.html">Moyenne (10x10)</button>
			<button type="submit" formaction="memory_lvl3.html">Difficile (20x20)</button>
		</form>

		<h2>Choississez votre thème</h2>
		<form>
			<button>Classique</button>
			<button>Gens de la classe</button>
			<button>Politique</button>
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
	<?php
	require SITE_ROOT . 'partials/header.php';
	?>
	<!------------------------------------------------------------->

</body>

</html>