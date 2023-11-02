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
    <link rel="stylesheet" href="<?php echo PROJECT_FOLDER; ?>assets/styles/demineur_game.css" />
</head>

<body>

    <!-------------------------- BANNER --------------------------->
    <div class="top-banner-container">
        <img src="<?php echo PROJECT_FOLDER; ?>ASSETS/IMAGES/2814.jpg" style="width:100%;height:300px;object-fit: cover;opacity: 0.3;">
        <div class="top-banner-centered"> DEMINEUR DU FLOP </div>
    </div>
    <!------------------------------------------------------------->


    <div id="board-container">
        <div id="board"></div>
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

    <script src="<?php echo PROJECT_FOLDER; ?>assets/scripts/demineur_game.js"></script>
</body>

</html>