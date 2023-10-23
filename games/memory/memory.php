<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Memory</title>
	<link rel="stylesheet" href="ASSETS/memory.css">
	<link rel="icon" type="image/x-icon" href="ASSETS/IMAGES/favicon.ico">
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
			<span class="point"> • </span>Le jeu se termine quand toutes les paires de cartes ont été découvertes et ramassées. Le gagnant est le joueur qui possède le plus de paires.</p>
	
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
		        <div class="footer-wrapper">
		            <div>
		                <h3 style="margin-top: 30px;">Information</h3>
		                <p class="footer-description"> Notre équipe reste à votre disposition en cas de pépin ! </p>
		                <p class="footer-description"> <span style="color:rgba(236,145,35);margin-right:5px;font-weight:bold;"> TEL • </span> 06 05 04 03 02 </p>
		                <p class="footer-description"> <span style="color:rgba(236,145,35);margin-right:5px;font-weight:bold;"> EMAIL • </span> support@powerofmemory.com </p>
		                <p class="footer-description"> <span style="color:rgba(236,145,35);margin-right:5px;font-weight:bold;"> EMPLACEMENT • </span> Paris </p>		          

		                <section class="footer-logos" style="margin-top:10px">
				            <div>
				            	<a href="https://www.facebook.com/">
				            		<img src="assets/IMAGES/facebook-orange.png" alt="Facebook">
				            	</a>
				            </div>

				            <div>
				            	<a href="https://twitter.com/">
				            		<img src="assets/IMAGES/twitter-orange.png" alt="Twitter">
				            	</a>
				            </div>

				            <div>
				            	<a href="https://www.google.com/">
				            		<img src="assets/IMAGES/google-orange.png" alt="Google">
				            	</a>
				            </div>

				            <div>
				            	<a href="https://www.pinterest.fr/">
				            		<img src="assets/IMAGES/pinterest-orange.png" alt="Pinterest">
				            	</a>
				            </div>

				            <div>
				            	<a href="https://www.instagram.com/h_khalid__h/">
				            		<img src="assets/IMAGES/instagram-orange.png" alt="Instagram (de Khalid)">
				            	</a>
				            </div>
					</div>

		            <div>
		                <h3 style="margin-top: 30px;"> Power Of Memory </h3>
		                <ul class="footer_list">
		                    <a class="footer-description" href="memory.html"> <span style="color:rgba(236,145,35);margin-right:5px;font-weight:bold;"> • </span> Jouer ! </a>
		                    <a class="footer-description" href="scores.html"> <span style="color:rgba(236,145,35);margin-right:5px;font-weight:bold;"> • </span> Scores </a>
		                    <a class="footer-description" href="contact.html"> <span style="color:rgba(236,145,35);margin-right:5px;font-weight:bold;"> • </span> Nous contacter </a>
		                </ul>
		            </div>
		        </div>
		        <p class="copyright">Copyright © 2022 Tous droits réservés</p>
			</footer>
		</main>
		<!------------------------------------------------------------->


		<!-------------------------- HEADER --------------------------->
       	<header>
       		<div class="header-alignment">
       			<p class="header-left-element"> The Power Of Memory </p>

				<nav class="header-nav">
			      <a href="index.html" class="header-a"> ACCUEIL </a>
			      <a href="memory.html" class="header-a"> JEU </a>
			      <a href="scores.html" class="header-a"> SCORES </a>
			      <a href="contact.html" class="header-a"> NOUS CONTACTER </a>
			      <a href="login.html" class="header-a"> SE CONNECTER </a>
			      <a href="myAccount.html" class="header-a"> <img src="ASSETS/IMAGES/myAccount.png" style="border-radius:4%;scale:80%"> </a>
			    </nav>
			</div>
		</header>
		<!------------------------------------------------------------->
	  
</body>
</html>