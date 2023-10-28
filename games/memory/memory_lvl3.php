<?php
$page = "memory_lvl3";
require '../../utils/common.php';
require_once SITE_ROOT . 'utils/database.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<link rel="stylesheet" href="<?php echo PROJECT_FOLDER; ?>assets/styles/memorylvl3.css" />
	<?php
	require SITE_ROOT . 'partials/head.php';
	?>
	<title>Memory (20x20)</title>
</head>

<body>

	<!-------------------------- BANNER --------------------------->
	<div class="top-banner-container">
	    <img src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/2814.jpg"  style="width:100%;height:300px;object-fit: cover;opacity: 0.3;">
		<div class="top-banner-centered"> NOUS CONTACTER </div>
	</div>
	<!------------------------------------------------------------->

	<div class="box">
		<h2>Difficulté: difficile (20x20)</h2>
	</div>

	<div class="textsbox">
		<h3>Score: 0</h3>
		<h3>| Cartes disponibles: 0 (normal)</h3>
		<h3>| 00:00</h3>
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
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
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
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
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
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
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
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
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
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
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
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
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
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
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
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
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
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
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
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
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
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
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
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
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
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
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
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
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
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
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
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
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
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
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
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
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
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
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
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
					<img class="card" src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/dos_cartes.png">
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