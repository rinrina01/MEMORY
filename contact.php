<?php
$page = "contact";
require 'utils/common.php';
require_once SITE_ROOT . 'utils/database.php';

$to = '';
$subject = '';
$message = "";
$headers = "From: azpicsaw@gmail.com";

if (isset($_POST['email'])) {
	$to = $_POST['email'];
}


if (isset($_POST['message'])) {
	$message = $_POST['message'];
}


if (isset($_POST['sujet'])) {
	$subject = $_POST['sujet'];
}
mail($to, $subject, $message, $headers);

?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="<?php echo PROJECT_FOLDER; ?>ASSETS/styles/contact.css" />
	<?php
	require SITE_ROOT . 'partials/head.php';
	?>
	<title> Nous Contacter </title>
</head>



<body>
	<!-------------------------- BANNER --------------------------->
	<div class="top-banner-container">
		<img src="ASSETS/IMAGES/2814.jpg" style="width:100%;height:300px;object-fit: cover;opacity: 0.3;">
		<div class="top-banner-centered"> NOUS CONTACTER </div>
	</div>
	<!------------------------------------------------------------->

	<main>
		<!-------------------------- CARRÉS INFORMATION --------------------------->

		<div class="contact-squares-alignment">

			<div class="contact-square">
				<img src="ASSETS/IMAGES/phone.png" style="scale:70%;border-radius:50%;margin:15px;">
				<p class="contact-square-element"> 06 05 04 03 02 </p>
			</div>

			<div class="contact-square">
				<img src="ASSETS/IMAGES/mail.png" style="scale:70%;border-radius:50%;margin:15px;">
				<p class="contact-square-element"> support@powerofmemory.com </p>
			</div>

			<div class="contact-square">
				<img src="ASSETS/IMAGES/pointer.png" style="scale:70%;border-radius:50%;margin:15px;">
				<p class="contact-square-element"> Paris </p>
			</div>
		</div>

		<!------------------------------------------------------------------------->
		<!-------------------------- FORMULAIRE ----------------------------------->
		<form class="contact-form" method="post">
			<div class="contact-form-first-row">
				<input type="text" id="fname" name="nom" placeholder="Nom">
				<input type="text" id="lname" name="email" placeholder="Email">
			</div>
			<input type="text" id="lname" name="sujet" placeholder="Sujet" class="contact-form">
			<input type="text" id="lname" name="message" placeholder="Message" class="contact-form" style="height:100px;">
			<button> Envoyer </button>
		</form>
		<!------------------------------------------------------------------------->
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