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

    <div class='card bg-light' style="max-width: 50rem;">
    <div class="card-header"><h4>FORMULAIRE DE CONTACT</h4></div>
        <div class='card-body'>
            <form action='index.php' method='post'>

                <div class='form-group'>
                    <label for='first_name'>Prénom :</label>
                    <input class='form-control' type='text' id='first_name' name='first_name'>
                    <?php if ($first_name_err === "Champ requis"): ?>
                        <span class="form-error">* Champ requis</span>
                    <?php endif; ?>

                </div>

                <div class='form-group'>
                    <label for='last_name'>Nom :</label>
                    <input class='form-control' type='text' id='last_name' name='last_name'>
                    <?php if ($last_name_err === "Champ requis"): ?>
                        <span class="form-error">* Champ requis</span>
                    <?php endif; ?>
                </div>

                <div class='form-group'>
                    <label for='birth_year'>Année de naissance :</label>
                    <input class='form-control' type='number' min='1900' id='birth_year' name='birth_year'>
                    <?php if ($birth_year_err === "Champ requis"): ?>
                        <span class="form-error">* Champ requis</span>
                    <?php endif; ?>
                </div>

                <div class='form-group'>
                    <textarea rows="4" cols="70" id='comments' name='comments' placeholder='Commentaires'></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Valider</button>
            </form>
        </div>

    </div>

    <script src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q'
        crossorigin='anonymous'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl'
        crossorigin='anonymous'></script>
    <script src='JS/main.js'></script>
</body>

</html>
