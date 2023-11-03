<?php
$page = "memory_game";
require '../../utils/common.php';
require_once SITE_ROOT . 'utils/database.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <?php
    require SITE_ROOT . 'partials/head.php';
    ?>
    <title> Démineur </title>
    <link rel="stylesheet" href="<?php echo PROJECT_FOLDER; ?>assets/styles/pendu_game.css" />
</head>

<body>

    <!-------------------------- BANNER --------------------------->
    <div class="top-banner-container">
        <img src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/2814.jpg" style="width:100%;height:300px;object-fit: cover;opacity: 0.3;">
        <div class="top-banner-centered"> PENDU DE L'EXTREME </div>
    </div>
    <!------------------------------------------------------------->


    <div id="pendu-container">
        <div id="word-display" class="white-text"></div>
        <p id="guesses-remaining">Nombre de tentatives restantes : <span id="attempts"></span></p>
        <input type="text" id="letter-input" maxlength="1">
        <button id="guess-button">Deviner</button>
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

    <script src="<?php echo PROJECT_FOLDER; ?>assets/scripts/pendu_game.js"></script>
</body>

</html>