<?php
$page = "memory_game";
require '../../utils/common.php';
require_once SITE_ROOT . 'utils/database.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<link rel="stylesheet" href="<?php echo PROJECT_FOLDER; ?>assets/styles/memorylvl1.css" />
	<?php
	require SITE_ROOT . 'partials/head.php';
	?>
	<title> Memory (5x5) </title>
</head>

<body>

	<!-------------------------- BANNER --------------------------->
	<div class="top-banner-container">
		<img src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/2814.jpg" style="width:100%;height:300px;object-fit: cover;opacity: 0.3;">
		<div class="top-banner-centered"> MEMORY </div>
	</div>
	<!------------------------------------------------------------->

	<div class="choices">

		<select id="difficulties">
			<option value="easy">Facile</option>
			<option value="medium">Moyen</option>
			<option value="hard">Difficile</option>
		</select>

		<select id="themes">
			<option value="classic">Classique</option>
			<option value="numbers">Nombres</option>
			<option value="theme3">Theme3</option>
		</select>

		<button onclick="generateGrid()">Lancer la game</button>
	</div>

	<div class="box">
		<h2>Difficulté <span id="textDifficulty">...</span></h2>
	</div>

	<div class="textsbox">
		<h3>Paires trouvés : <span id="score">0</span></h3>
		<h3><span id="time">00:00:00</span></h3>
	</div>

	<br>

	<div id="grid">

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

	<script src="<?php echo PROJECT_FOLDER; ?>assets/scripts/memory_game.js"></script>

</body>