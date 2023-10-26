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
	<?php
	require SITE_ROOT . 'partials/head.php';
	?>
	<title>The Memory</title>
</head>

<body>
	<header>
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

		<div id="top_image">
			<div class="top-left">
				<p style="font-size:16px;"> The Power Of Memory </p>
			</div>

		</div>

		<div id="top-header">
			<header>
				<?php
				require SITE_ROOT . 'partials/header.php';
				?>
			</header>
		</div>




		</div>
	</header>

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
			</div>
			<div class="incroyable">
				<p id="a_gauche">Pc incroyable</p>

				<h6 class="description">communique H24, tu dis <br>
					qu'j'fais pas d'efforts<br>
					Donc à quoi ça sert ? On <br>
					communique H24 même si <BR>
					j't'en demande encore<br>
					C'est qu'à moi ça sert<br>
					On communique dans <br>
					le SKEU SKEU<br>
					Trop d'méchants, <br>
					ils veulent nous SKEU SKEU<br>
					Moi j'sais pas comment faire ça<br>
					SKEU SKEU <br>
				</h6>
			</div>
		</div>
		<div class="pc_incroyable">
			<div class="zero_un">
				<p id="zero"> 02</p>
			</div>
			<div class="incroyable">
				<p id="a_gauche">Soyez agile</p>

				<h6 class="description">Ah doudou, c'est toi la seule-seule<br>
					Depuis le début, j'te balade<br>
					Au point où on en est, c'est pas grave<br>
					Depuis le début, j'te balade<br>
					Au point où on en est, c'est pas grave<br>
					Dans ma tête, j'suis paro'<br>
					Faut qu'j't'explique, si tu <BR>
					veux, assieds-toi que j'te briefe<br>
					J'me mets dans des états pas possible<br>
				</h6>
			</div>
		</div>

		<div class="pc_incroyable">
			<div class="zero_un">
				<p id="zero"> 03</p>
			</div>
			<div class="incroyable">
				<p id="a_gauche">Ayez de la chance</p>

				<h6 class="description">Babe t'attends quoi pour agir ?<br>
					Ah mama, faut ralentir (Annn)<br>
					Ralentir (Ann)<br>
					Ah mama, faut ralentir (Annn), ralentir<br>
					Les pieds dans la calle, bébé fais-moi changer<br>
					Dis-moi c'que tu veux, pour toi j'donnerai tout mon bébé<br>
					Les pieds dans la calle, bébé fais-moi changer<br>
				</h6>
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

</body>