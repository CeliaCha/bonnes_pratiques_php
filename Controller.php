<?php

require_once('UTILS/security.php');
Database::connect();

// CONTACT FORM VALIDATION
$first_name_err = $last_name_err = $birth_year_err = "";
$first_name = $last_name = $birth_year = $comment = ""; 


if (!empty($_POST)) {

    if (empty($_POST["first_name"])) {
        $first_name_err = "Champ requis";
      } else {
        $first_name = custom_secure_input($_POST["first_name"]);
      }
    
      if (empty($_POST["last_name"])) {
        $last_name_err = "Champ requis";
      } else {
        $last_name_err = custom_secure_input($_POST["last_name_"]);
      }
    
      if (empty($_POST["birth_year"])) {
        $birth_year_err = "Champ requis";
      } else {
        $birth_year = custom_secure_input($_POST["$birth_year"]);
      }

    // Create new user
    // $first_name = custom_secure_input($_POST['first_name']);
    // $last_name = custom_secure_input($_POST['last_name']);
    // $birth_year = custom_secure_input($_POST['birth_year']);
    // $comments = custom_secure_input($_POST['comments']);
}


// if (!empty($_POST)) {

//     // Create new user
//     // $first_name = custom_secure_input($_POST['first_name']);
//     // $last_name = custom_secure_input($_POST['last_name']);
//     // $birth_year = custom_secure_input($_POST['birth_year']);
//     // $comments = custom_secure_input($_POST['comments']);
//     // $newUser = new User($first_name, $last_name, $birth_year, $comments);

//     // $newUser = new User($first_name, $last_name, $birth_year, $comments);
//     // try {
//     //     $newUser->create();
//     //     echo "{$newUser->__get('first_name')} {$newUser->__get('last_name')} a bien été ajouté(e).";
//     // } catch (Exception $e) {
//     //     error_log($e->getMessage()); //In production
//     //     exit("En raison d'un problème temporaire, l'utilisateur n'a pas pu être ajouté.");
//     // }

// }

  

