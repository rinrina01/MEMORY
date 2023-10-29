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
	    <img src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/2814.jpg"  style="width:100%;height:300px;object-fit: cover;opacity: 0.3;">
		<div class="top-banner-centered"> MEMORY </div>
	</div>
	<!------------------------------------------------------------->

	<div class="choices">
		<select id="difficulties">
			<option value="easy">Facile</option>
			<option value="mediul">Moyen</option>
			<option value="hard">Difficile</option>
		</select>
	</div>

	<div class="box">
		<h2>Difficulté : facile (6x5)</h2>
	</div>

	<div class="textsbox">
		<h3>Paires trouvés : 0 </h3>
		<h3>| <span id="temps">0:00</span></h3>
	</div>

	<br>
	<div class="box">
		<div class="grid">
			<table>
				<tr>
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/CARDS/CLASSIC/2.png">
				</tr>
				<tr>
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
				</tr>
				<tr>
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/CARDS/CLASSIC/2.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
				</tr>
				<tr>
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
				</tr>
				<tr>
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
				</tr>
			</table>
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