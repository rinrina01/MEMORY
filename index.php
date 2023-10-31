<?php
$page = "index";
require 'utils/common.php';
require_once SITE_ROOT . 'utils/database.php';

$pdo = connectToDbAndGetPdo();
$pdoStatement = $pdo->prepare('SELECT count(DISTINCT U.id_utilisateur) as numberOfInscriptions, count(S.id) as numberOfGames, min(recordTime) as recordTime FROM utilisateur AS U 
INNER JOIN score AS S ON U.id_utilisateur = S.id_joueur;');
$pdoStatement->execute();
$infos = $pdoStatement->fetchAll();

?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="<?php echo PROJECT_FOLDER; ?>assets/styles/index.css" />
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo PROJECT_FOLDER; ?>assets/styles/footer.css" />
	<link rel="icon" type="image/x-icon" href="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/favicon.ico">
	<title>The Memory</title>
</head>

<body>

	<img src="ASSETS/IMAGES/accueil.jpg" style="width:200vh;height:110vh;opacity:0.40;">

	<div class="centered"> BIENVENUE DANS <br> NOTRE STUDIO !

		<div class="undertitle">
			<p> Venez challenger les cerveaux les plus agiles ! </p>
		</div>

		<div class="button">
			<form>
				<button type="submit" formaction="games/memory/memory.php">Jouer !</button>
			</form>
		</div>

	</div>

	<div class="bondsheader">
		<div class="bounds">
			<img class="image" src="assets/images/easteregg/boo-mario.gif" height="100px"> </img>
		</div>
	</div>

	<audio autoplay="true" id="audioboo">
		<source src="assets/images/easteregg/boo_effect.mp3" type="audio/mpeg" />
		Your browser does not support the audio element.
	</audio>

	<script>
		function jouerSon() {
			var audio = document.getElementById("audioboo");
			audio.play();
		}
		setInterval(jouerSon, 10000);
	</script>



	<!---image -->
	<div class="touteslesimage">
		<img src="assets/IMAGES/pc.png" alt="PC INCROYABLE" height="300" width="400">
		<img src="assets/IMAGES/trottinette.png" alt="SOYEZ AGDILE" height="300" width="190">
		<img src="assets/IMAGES/poker.png" alt="AYEZ DE LA CHANCE" height="300" width="190">
	</div>

	<div class="tout_les_texte">

		<div class="pc_incroyable">
			<div class="zero_un">
				<p id="zero"> 01</p>
				<p id="a_gauche">La mémoire</p>
			</div>
			<div class="incroyable">

				<h6 class="description">La mémoire est la pierre angulaire de Memory, un jeu où l'agilité mentale est à l'honneur. Dans ce jeu classique, chaque carte est une fenêtre ouverte sur le passé, et chaque paire correspondante révèle la force de votre mémoire visuelle. C'est un défi captivant qui teste et améliore vos compétences de mémorisation, tout en favorisant l'attention et la concentration. Memory est bien plus qu'un simple jeu de société. C'est un voyage qui met en lumière le pouvoir de la mémoire et sa capacité à façonner notre expérience et notre compréhension du monde.</h6>
			</div>
		</div>
		<div class="pc_incroyable">
			<div class="zero_un">
				<p id="zero"> 02</p>
				<p id="a_gauche">L'agilité</p>
			</div>
			<div class="incroyable">
				<h6 class="description">L'agilité dans le jeu de Memory se traduit par une capacité à réagir rapidement et avec précision. Les joueurs doivent faire preuve d'une concentration constante pour mémoriser la position des cartes retournées, tout en étant capables de prendre des décisions éclairées en un instant. Cette réactivité visuelle et mentale est cruciale pour identifier et associer les paires de cartes identiques. La rapidité de prise de décision est un facteur clé pour gagner, car les cartes sont constamment révélées et cachées, créant un défi constant pour les joueurs. À travers la pratique, les joueurs peuvent développer leur agilité mentale et améliorer leurs compétences cognitives, ce qui les rend plus compétents dans ce jeu classique de mémoire.</h6>
			</div>
		</div>

		<div class="pc_incroyable">
			<div class="zero_un">
				<p id="zero"> 03</p>
				<p id="a_gauche">La chance</p>
			</div>
			<div class="incroyable">

				<h6 class="description">La chance dans le jeu Memory est un atout inattendu. Retourner les cartes peut parfois réserver des surprises agréables, lorsque les paires s'alignent parfaitement, facilitant la victoire. Cependant, la chance est fugace, et la stratégie et la mémoire restent essentielles. Cette part d'incertitude ajoute du suspense et du plaisir à chaque partie, rappelant que dans Memory, comme dans la vie, un soupçon de chance peut tout changer.</h6>
			</div>
		</div>
	</div>


	<!--partie avec les carré bien chiant-->
	<div class="partie3">
		<div class="image_watch_dogs">
			<img src="assets/IMAGES/watch_dogs.png" alt="watch_dogs" class="wd">
		</div>
		<div class="gbop">

			<div class="bleuetviolet">

				<div class="carrebleu">
					<p>
						<strong>
							<?php foreach ($infos as $info) {
								echo $info->numberOfGames;
							} ?>

						</strong><br> Parties joués
					</p>
				</div>
				<div class="carreviolet">
					<p>
						<strong> <?php foreach ($infos as $info) {
										echo $info->recordTime;
									} ?> </strong> <br> Temps Record
					</p>
				</div>
			</div>
		</div>
		<div class="orangevert">

			<div class="carrevert">
				<p>
					<strong>
						<?php $number_of_users = count(glob(session_save_path() . '/*')); /// Compte uniquement les refresh car les sessions ne sont pas supprimés
						echo $number_of_users; ?>

					</strong> <br> Joueurs Connectés
				</p>
			</div>
			<div class="carreorange">
				<p>
					<strong>
						<?php
						foreach ($infos as $info) {
							echo $info->numberOfInscriptions;
						}
						?>
					</strong> <br> Joueurs Inscrits
				</p>
			</div>
		</div>
	</div>
	</div>
	</div>


	<!--partie avec nous-->
	<h1 class="equipe" style="margin-top:100px">Gang de Nolan</h1>
	<p class="equipe">Salut bonsoir c'est POLO </p>
	<div class="delimiter">

		<img src="assets/IMAGES/letrait.png" alt="Pour delimiter" class="delimiter">
	</div>
	<div class="kln" style="margin-bottom:100px">

		<div class="khalid">
			<img class="photo" src="assets/IMAGES/khalid.jpg" alt="khalid" width="128" height="128">
			<div class="info">
				<p>Khalid</p>
				<p class="fonction">Boulot</p>
				<div class="boutonx">
					<a href="https://www.facebook.com/"><img src="ASSETS/IMAGES/facedebook.png"> </a>
					<a href="https://www.twitter.com"><img src="ASSETS/IMAGES/X.png"></a>
					<a href="https://www.pinterest.fr/"><img src="ASSETS/IMAGES/pintere.png"></a>
				</div>
			</div>
		</div>

		<div class="khalid">
			<img class="photo" src="assets/IMAGES/Lina.png" alt="Lina alias(Lopotitchat)" width="128" height="128">
			<div class="info">
				<p>Lina</p>
				<p class="fonction">Team member</p>
				<div class="boutonx">
					<a href="https://www.facebook.com/"><img src="ASSETS/IMAGES/facedebook.png"> </a>
					<a href="https://www.twitter.com"><img src="ASSETS/IMAGES/X.png"></a>
					<a href="https://www.pinterest.fr/"><img src="ASSETS/IMAGES/pintere.png"></a>
				</div>
			</div>
		</div>

		<div class="khalid">
			<img class="photo" src="assets/IMAGES/nolan.png" alt="Nolan alias (le mafieu de la Hess)" width="128" height="128">
			<div class="info">
				<p>Nolan</p>
				<p class="fonction">Scrum Master</p>
				<div class="boutonx">
					<a href="https://www.facebook.com/"><img src="ASSETS/IMAGES/facedebook.png"> </a>
					<a href="https://www.twitter.com"><img src="ASSETS/IMAGES/X.png"></a>
					<a href="https://www.pinterest.fr/"><img src="ASSETS/IMAGES/pintere.png"></a>
				</div>
			</div>
		</div>
	</div>


	<div class="chat-box resizable">
		<div class="chat-header">
			<h3 class="chat">Chat</h3>
			<button id="close-chat">X</button>
		</div>
		<div class="chat-messages">
			<div id="message-container" class="message-container">
				Les messages seront ajoutés ici
				<button class="bouttonc">t'est trop EZ</button>
				<P></P>
				<button class="bouttoncc">je te prend 1 vs 1 quand tu veux</button>
				<P>K</P>
				<button class="bouttonccc">Message de la France NON !</button>
				<p>K</p>

				<button class="bouttoncccc">on va détruire la concurence</button>
			</div>
		</div>
		<input type="text" id="message-input" placeholder="Entrez votre message">
		<button id="send-message">Envoyer</button>
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

	<header>
		<?php
		require SITE_ROOT . 'partials/header.php';
		?>
	</header>
</body>