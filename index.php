<?php
phpinfo();
session_start();
include_once('Model.php');
include_once('Controller.php');
//include_once('View.php');


// $_SESSION['view'] = "form";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo bonnes pratiques</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm'
        crossorigin='anonymous'>
    <link rel='stylesheet' href='CSS/main.css'>
</head>

<body>

    <!-- Views injected here -->
    <?php
    // switch($_SESSION['view']) {
    //     case "form":
    //         include_once('Form.php');
    //         break;
    //     case "msg":
    //         include_once('Msg.php');
    //         break;
    //     case "displaylist":
    //         include_once('List.php');
    //         break;
    //     default:
    //         include_once('Form.php');
    //         break;

    // }
    include_once('Form.php');
    ?>
    <!--                     -->

    <script src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q'
        crossorigin='anonymous'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl'
        crossorigin='anonymous'></script>
    <script src='JS/main.js'></script>
</body>

</html>



