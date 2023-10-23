<?php 
	require SITE_ROOT.'utils/common.php';
	require_once SITE_ROOT.'utils/database.php'; 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
		<?php 
			require SITE_ROOT.'partials/head.php';
			require SITE_ROOT.'partials/header.php';
		?>
	<title>S'inscrire</title>
</head>
<body>


	<!-------------------------- BANNER --------------------------->
	<div class="top-banner-container">
	  <img src="ASSETS/IMAGES/2814.jpg" style="width:100%;height:300px;object-fit: cover;opacity: 0.3;">
	  <div class="top-banner-centered"> S'INSCRIRE </div>
	</div>
	<!------------------------------------------------------------->
	
	<main>
		<div class="register-form">
		  <form>
		    <input type="text" id="email" name="email" placeholder="Email">
		    <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo">
		    <input type="text" id="password" name="password" placeholder="Mot de passe">
		    <input type="text" id="passwordconfirm" name="passwordconfirm" placeholder="Confirmez votre mot de passe">
		  
		    <button class="register-button"> Inscription </button>
		  </form>
		</div>
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


</body>
</html>