<?php

$first_name_err = $last_name_err = $birth_year_err = NULL;
$first_name = $last_name = $birth_year = $comments = NULL; 


// TRAITEMENT DES DONNÉES
if (!empty($_POST)) { 

    $_SESSION['msg'] = NULL;

    // Validation des données :
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $birth_year = $_POST["birth_year"];
    $comments = $_POST['comments'];

    $validated = false;

    if (empty($_POST["first_name"])) {
        $first_name_err = "Champ requis";
    } 
    else  if (!preg_match("/^[a-zA-Z -éèùëâä]*$/", $first_name)) {
        $first_name_err = "Seuls les lettres et les espaces vides sont autorisés";
    }
    
    if (empty($_POST["last_name"])) {
        $last_name_err = "Champ requis";
    } 
    else  if (!preg_match("/^[a-zA-Z -éèùëâä]*$/", $last_name)) {
        $last_name_err = "Seuls les lettres et les espaces vides sont autorisés";
    }
    
    if (empty($_POST["birth_year"])) {
        $birth_year_err = "Champ requis";
    } 
    else if ($birth_year < 1900 || $birth_year > 2010) {
        $birth_year_err = "Veuillez entrer une date entre 1900 et 2010";
    }


    // Test de validation globale
    if (!$first_name_err && !$last_name_err && !$birth_year_err) {
        $validated = true;
    }


    if ($validated) {
        // insertion dans bdd
        // message de confirmation
        // redirection

        Database::connect();
    
        $newUser = new User($first_name, $last_name, $birth_year, $comments);
        echo $newUser->__get('ID');
        try {
            $newUser->create();
            $_SESSION['msg'] = "L'utilisateur {$newUser->__get('first_name')} {$newUser->__get('last_name')} a bien été ajouté(e).";
            header("refresh:5;index.php");
        } catch (Exception $e) {
            error_log($e->getMessage());
            if ($e->errorInfo[1] == 1062) {
                echo "Ce nom d'utilisateur existe déjà.";
                header("refresh:5;index.php");
            }
            else exit("En raison d'un problème, l'utilisateur n'a pas pu être ajouté.");
        }
    }
}


