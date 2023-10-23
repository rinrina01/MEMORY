<?php 
	require '../../utils/common.php';
	require_once SITE_ROOT.'utils/database.php'; 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<?php 
		require SITE_ROOT.'partials/head.php';
		require SITE_ROOT.'partials/header.php';
	?>
	<title> Scores </title>
</head>
	<body>

		<!-------------------------- BANNER --------------------------->
		<div class="top-banner-container">
			<img src="ASSETS/IMAGES/2814.jpg" style="width:100%;height:300px;object-fit: cover;opacity: 0.3;">
			<div class="top-banner-centered"> SCORES </div>
		</div>
		<!------------------------------------------------------------->
		
		

		<main id="table">
			<table>
				<tr>
					<th>Jeu</th>
					<th>Pseudo</th>
					<th>Difficulté</th>
					<th>Score</th>
					<th>Date</th>
				</tr>
				<tr>
					<td>Memory</td>
					<td>NonoIce_</td>
					<td>Impossible</td>
					<td>2</td>
					<td>10/10/2023 13:08</td>
				</tr>
				<tr>
					<td>Memory</td>
					<td>NonoIce_</td>
					<td>Impossible</td>
					<td>2</td>
					<td>10/10/2023 13:08</td>
				</tr>
			</table>
		</main>


		<!-------------------------- FOOTER --------------------------->
	<main>
		<footer>
		<?php 
				require SITE_ROOT.'partials/footer.php';
				?>
		</footer>
	</main>
	<!------------------------------------------------------------->


	<!-------------------------- HEADER --------------------------->
	   <?php 
				require SITE_ROOT.'partials/header.php';
				?>
	<!------------------------------------------------------------->

		
	</body>
</html>