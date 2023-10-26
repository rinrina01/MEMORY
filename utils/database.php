<?php
function connectToDbAndGetPdo(): PDO
{
    $dbname = 'KLN';
    $host = 'localhost';

    $dsn = "mysql:dbname=$dbname;host=$host;charset=utf8";
    $user = 'root';
    $pass = '';

    $driver_options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ];
    try {
        $pdo = new PDO($dsn, $user, $pass, $driver_options);
        //echo 'La connexion à la base de données marche';
        return $pdo;
    } catch (PDOException $e) {
        echo 'La connexion à la base de données a échouée.';
    }
}

function registerWithSQL($pdo, $emailForm, $passwordForm, $pseudoForm): void
{
    try {
        $passwordForm = password_hash($passwordForm, CRYPT_SHA256);
        $pdoStatement2 = $pdo->prepare('INSERT INTO utilisateur (email, mot_de_passe, pseudo, date_inscription, derniere_connexion) 
		VALUES ( "' . $emailForm . '", "' . $passwordForm . '",  "' . $pseudoForm . '", NOW(), NOW() );
		');
        $pdoStatement2->execute();
        echo " Félicitations " . $pseudoForm . " vous êtes bien inscrits !";
    } catch (PDOException $e) {
        throw new Exception("L'inscription à échouée dans la abse de donnée.");
    }
}

function isEmailUnique($pdo, $emailForm, $passwordForm, $pseudoForm, $infos): bool
{
    try {
        if (isset($_POST['email'])) {
            $emailForm = $_POST['email'];
            foreach ($infos as $id) {
                if ($id->email == $_POST['email']) {
                    throw new Exception("l'email est déja pris ,veuillez changez d'email");
                    return false;
                }
            }
            // SI L'EMAIL EST UNIQUE
            return true;
        } else {
            return false;
        }
    } catch (PDOException $e) {
        throw new Exception("L'email n'est pas unique et déja présente dans la base de donnée");
        return false;
    }
}

function isPseudoUnique($pdo, $emailForm, $passwordForm, $pseudoForm, $infos): bool
{
    try {
        if (isset($_POST['pseudo'])) {
            $pseudoForm = $_POST['pseudo'];
            foreach ($infos as $id) {
                if ($id->pseudo == $_POST['pseudo']) {
                    throw new Exception(" le pseudo est déja pris veuiller changer de pseudo  ");
                    return false;
                }
            }


            // SI LE PSEUDO EST UNIQUE 
            return true;
        } else {
            return false;
        }
    } catch (PDOException $e) {
        throw new Exception("Le pseudo n'est pas unique et déja présente dans la base de donnée");
        return false;
    }
}

function isPasswordsMatches($passwordForm, $passwordConfirmForm): bool
{
    try {
        if (isset($passwordForm)) {

            if (isset($passwordConfirmForm)) {

                if ($passwordForm == $passwordConfirmForm) {
                    $passwordForm = password_hash($passwordForm, CRYPT_SHA256);

                    $passwordForm = $passwordForm;
                    $passwordPattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!()@#$%^&*]).{8,}$/';
                    $regex = preg_match($passwordPattern, $passwordForm);

                    if (!$regex) {
                        echo " 	Veuillez mettre 1 majuscule, 1 caractère spécial et 1 chiffre dans votre mot de passe. ";
                        return false;
                    } else { // SI LE MOT DE PASSE EST BON
                        $passwordForm = password_hash($passwordForm, PASSWORD_DEFAULT);
                        return true;
                    }
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    } catch (PDOException $e) {
        throw new Exception("Le mot de passe et la confirmation du mot de passe ne sont pas identiques");
        return false;
    }
}

function register($pdo, $emailForm, $passwordForm, $passwordConfirmForm, $pseudoForm, $infos): void
{
    if (isPasswordsMatches($passwordForm, $passwordConfirmForm) == true) {
        if (isPseudoUnique($pdo, $emailForm, $passwordForm, $pseudoForm, $infos) == true) {
            if (isEmailUnique($pdo, $emailForm, $passwordForm, $pseudoForm, $infos) == true) {
                registerWithSQL($pdo, $emailForm, $passwordForm, $pseudoForm, $infos);
            }
        }
    }
}

function checkPassword($password, $id): bool
{
    return true;
}
