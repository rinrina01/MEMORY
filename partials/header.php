<link rel="stylesheet" href="<?php echo PROJECT_FOLDER; ?>assets/styles/header.css" />
<div class="header-alignment">
    <p class="header-left-element"> The Power Of Memory </p>

    <nav class="header-nav">
        <a href="<?php echo PROJECT_FOLDER; ?>index.php" class="<?php if ($page == "index") {
                                                                    echo "active";
                                                                } else {
                                                                    echo "header-a";
                                                                } ?>"> ACCUEIL </a>
        <a href="<?php echo PROJECT_FOLDER; ?>games/memory/memory.php" class="<?php if ($page == "memory") {
                                                                                    echo "active";
                                                                                } else {
                                                                                    echo "header-a";
                                                                                } ?>"> JEU </a>
        <a href="<?php echo PROJECT_FOLDER; ?>games/memory/scores.php" class="<?php if ($page == "scores") {
                                                                                    echo "active";
                                                                                } else {
                                                                                    echo "header-a";
                                                                                } ?>"> SCORES </a>
        <a href="<?php echo PROJECT_FOLDER; ?>contact.php" class="<?php if ($page == "contact") {
                                                                        echo "active";
                                                                    } else {
                                                                        echo "header-a";
                                                                    } ?>"> NOUS CONTACTER </a>

        <?php
        if ($_SESSION != null) {
            $profilePictureUrl = PROJECT_FOLDER . 'userFiles/' . $_SESSION['id'] . '/profile_picture.jpg';
        
            echo '<a href="' . PROJECT_FOLDER . 'myAccount.php" class="' . ($page == "myAccount" ? "active" : "header-a") . '">';
            echo '<div class="profile-info">';
            echo '<img src="' . $profilePictureUrl . '" alt="Photo de profil" width="30" height="30">';
            echo ' ' . $_SESSION['pseudo'];
            echo '</div>';
            echo '</a>';
        } else {
            echo '<a href="' . PROJECT_FOLDER . 'login.php" class="' . ($page == "login" ? "active" : "header-a") . '"> SE CONNECTER </a>';
        }
        

        ?>
    </nav>
</div>