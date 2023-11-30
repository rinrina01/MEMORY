<?php
$page = "chat";
require 'utils/common.php';
require_once SITE_ROOT . 'utils/database.php';

$id = -1;

if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
} else {
    $id = -1;
}


$pdo = connectToDbAndGetPdo();

if ($id != -1 && isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    if (isset($_POST['message'])) {
        $pdoSendMessage = $pdo->prepare('INSERT INTO message (id_jeu, id_expediteur, message, date_message)
                                        VALUES (1, :id, :message, NOW())');

        $pdoSendMessage->bindParam(':id', $id, PDO::PARAM_INT);
        $pdoSendMessage->bindParam(':message', $_POST['message'], PDO::PARAM_STR);

        $pdoSendMessage->execute();
    }
}


$pdoStatement = $pdo->prepare('SELECT M.message, U.pseudo, M.date_message, M.id_expediteur = "' . $id . '" AS isSender
                                FROM message AS M
                                INNER JOIN utilisateur AS U
                                ON M.id_expediteur = U.id_utilisateur
                                WHERE M.date_message >= NOW() - INTERVAL 1 DAY
                                ORDER BY M.date_message ASC;');
$pdoStatement->execute();
$infos = $pdoStatement->fetchAll();


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="<?php echo PROJECT_FOLDER; ?>ASSETS/styles/chat.css" />
    <?php
    require SITE_ROOT . 'partials/head.php';
    ?>
    <title>Chat</title>
</head>

<body>

    <!-------------------------- BANNER --------------------------->
    <div class="top-banner-container">
        <img src="ASSETS/IMAGES/2814.jpg" style="width:100%;height:300px;object-fit: cover;opacity: 0.3;">
        <div class="top-banner-centered"> CHAT </div>
    </div>
    <!------------------------------------------------------------->


    <div class="messageColumns">
        <div class="messageColumn">
            <?php
            foreach ($infos as $messageInfo) :
                $messageClass = ($messageInfo->isSender == 1) ? 'sender' : 'receiver';
            ?>
                <div class="messageContainer">
                    <p class="messageInfo"><?php echo $messageInfo->pseudo; ?></p>
                    <div class="messageBubble <?php echo $messageClass; ?>">
                        <p class="messageText"><?php echo $messageInfo->message; ?></p>
                    </div>
                    <p class="messageDate"><?php echo $messageInfo->date_message; ?></p>
                </div>
            <?php endforeach; ?>

            <?php if ($id != -1) : ?>
                <form method="post">
                    <input type="text" name="message" placeholder="Saisissez votre message" required>
                    <button type="submit">Envoyer</button>
                </form>
            <?php else : ?>
                <p style="color:red">Veuillez vous connecter pour pouvoir envoyer des messages</p>
            <?php endif ?>
        </div>
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

</body>