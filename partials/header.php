<div class="header-alignment">
    <p class="header-left-element"> The Power Of Memory </p>

    <nav class="header-nav">

        <a  href="<?php echo PROJECT_FOLDER; ?>index.php" class="<?php if ($page == "index") {
                                                                    echo "active";
                                                                } else { echo "header-a";}?>"> ACCUEIL </a>
        <a href="<?php echo PROJECT_FOLDER; ?>games/memory/memory.php" class="<?php if ($page == "memory") {
                                                                                    echo "active";
                                                                                } else { echo "header-a";} ?>"> JEU </a>
        <a href="<?php echo PROJECT_FOLDER; ?>games/memory/scores.php" class="<?php if ($page == "scores") {
                                                                                    echo "active";
                                                                                }  else { echo "header-a";}?>"> SCORES </a>
        <a href="<?php echo PROJECT_FOLDER; ?>contact.php" class="<?php if ($page == "contact") {
                                                                        echo "active";
                                                                    }  else { echo "header-a";}?>"> NOUS CONTACTER </a>
        <a href="<?php echo PROJECT_FOLDER; ?>login.php" class="<?php if ($page == "login") {
                                                                    echo "active";
                                                                } else { echo "header-a";} ?>"> SE CONNECTER </a>
        <a href="<?php echo PROJECT_FOLDER; ?>myAccount.php" class="<?php if ($page == "myAccount") {
                                                                        echo "active";
                                                                    } else { echo "header-a";} ?>"> <?php if ($_SESSION != null) {
                                                                                    echo $_SESSION['pseudo'];
                                                                                } ?>
        </a>
    </nav>
</div>