<?php
$page = "scores";
require '../../utils/common.php';
require_once SITE_ROOT . 'utils/database.php';

$searchDifficulty = isset($_POST['difficulties']) ? $_POST['difficulties'] : "";
$searchGameName = isset($_POST['gameName']) ? $_POST['gameName'] : "";
$searchNickname = isset($_POST['nickname']) ? $_POST['nickname'] : "";

if ($_SESSION != null) {
	$id = $_SESSION['id'];
} else {
	$id = -1;
}

$pdo = connectToDbAndGetPdo();
$pdoStatement = $pdo->prepare("SELECT U.id_utilisateur, U.pseudo, J.nom_jeu, S.difficulte_partie, S.score_partie, S.date_partie, S.recordTime FROM utilisateur AS U
INNER JOIN score AS S 
    ON U.id_utilisateur = S.id_joueur
INNER JOIN jeu AS J 
    ON S.id_jeu = J.id
WHERE (S.difficulte_partie LIKE :difficulty OR :difficulty = '')
    AND (J.nom_jeu LIKE :gameName OR :gameName = '')
    AND (U.pseudo LIKE :nickName OR :nickName = '')
ORDER BY J.nom_jeu ASC, S.score_partie DESC;");
$pdoStatement->execute([
	':difficulty' => '%' . $searchDifficulty . '%',
	':gameName' => '%' . $searchGameName . '%',
	':nickName' => '%' . $searchNickname . '%',
]);
$infos = $pdoStatement->fetchAll();
?>


<!DOCTYPE html>
<html lang="fr">

<head>
	<link rel="stylesheet" href="<?php echo PROJECT_FOLDER; ?>assets/styles/scores.css" />
	<?php
	require SITE_ROOT . 'partials/head.php';
	?>
	<title> Scores </title>
</head>

<body>

	<!-------------------------- BANNER --------------------------->
	<div class="top-banner-container">
		<img src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/2814.jpg" style="width:100%;height:300px;object-fit: cover;opacity: 0.3;">
		<div class="top-banner-centered"> SCORES </div>
	</div>
	<!------------------------------------------------------------->


	<form action="" method="post">
		<input type="search" name="gameName" id="gameName" placeholder="Nom du jeu">
		<input type="search" name="nickname" id="nickname" placeholder="Pseudo">
		<input type="search" name="difficulties" id="difficulties" placeholder="Difficulté">
		<button type="submit">Filtrer</button>
	</form>

	<form action="" method="post">
		<button type="submit">Reset</button>
	</form>


	<main id="table">
		<table>
			<tr>
				<th>Jeu</th>
				<th>Pseudo</th>
				<th>Difficulté</th>
				<th>Score</th>
				<th>Date</th>
				<th>Temps de jeu</th>
			</tr>

			<?php foreach ($infos as $score) : ?>
				<?php if ($id == $score->id_utilisateur) : ?>
					<tr style="color: orange">
					<?php else : ?>
					<tr style="color: white">
					<?php endif; ?>
					<td><?php echo $score->nom_jeu ?></td>
					<td><?php echo $score->pseudo ?></td>
					<td><?php echo $score->difficulte_partie ?></td>
					<td><?php echo $score->score_partie ?></td>
					<td><?php echo $score->date_partie ?></td>
					<td><?php echo $score->recordTime ?></td>
					</tr>
				<?php endforeach; ?>
		</table>
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
	<header>
		<?php
		require SITE_ROOT . 'partials/header.php';
		?>
	</header>
	<!------------------------------------------------------------->

</body>