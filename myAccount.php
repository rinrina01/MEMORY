<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Mon compte</title>
	<link rel="stylesheet" href="ASSETS/myAccount.css">
	<link rel="icon" type="image/x-icon" href="ASSETS/IMAGES/favicon.ico">
</head>



<body>

	<!-------------------------- BANNER --------------------------->
	<div class="top-banner-container">
	  <img src="ASSETS/IMAGES/2814.jpg" style="width:100%;height:300px;object-fit: cover;opacity: 0.3;">
	  <div class="top-banner-centered"> MON COMPTE </div>
	</div>
	<!------------------------------------------------------------->




	<div class="account-box">
		<h2 style="margin-bottom:15px"> Changer votre email </h2>
		<div class="contact-password-form">
			<input type="email" name="Email" placeholder="Email actuel" id="email">
			<input type="email" name="NewEmail" placeholder="Nouvel email" id="newemail">
			<input type="password" name="MotDePasse" placeholder="Mot de passe" id="password">
			<div class="contact-form-button">
				<button class="button"> Changer l'email </button>
			</div>
		</div>
	</div>


	<div class="account-box">
		<h2 style="margin-bottom:15px">Changer votre mot de passe</h2>
		<div class="contact-password-form">
			<input type="password" name="AncienMotDePasse" placeholder="Ancien mot de passe" id="olgpassword">
			<input type="password" name="MotDePasse" placeholder="Nouveau mot de passe" id="password">
			<input type="password" name="NewMotDePasse" placeholder="Confirmez le mot de passe" id="newpassword">
			<div class="contact-form-button">
				<button class="button"> Changer le mot de passe </button>
			</div>
		</div>
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