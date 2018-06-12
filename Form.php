
    <div class='card bg-light' style="max-width: 50rem;">
    <div class="card-header"><h4>FORMULAIRE DE CONTACT</h4></div>
        <div class='card-body'>
            <p><?php if (isset($_SESSION['msg'])) {echo $_SESSION['msg'];} ?></p>
            <form action='index.php' method='post'>

                <div class='form-group'>
                    <label for='first_name'>Prénom :</label>
                    <input class='form-control' type='text' id='first_name' name='first_name' 
                    value="<?php if ($first_name) {echo $first_name;} ?>">
                    <?php if ($first_name_err): ?>
                        <span class="form-error">* <?php echo $first_name_err; ?></span>
                    <?php endif; ?>

                </div>

                <div class='form-group'>
                    <label for='last_name'>Nom :</label>
                    <input class='form-control' type='text' id='last_name' name='last_name' 
                    value="<?php if ($last_name) {echo $last_name;} ?>">
                    <?php if ($last_name_err === "Champ requis"): ?>
                        <span class="form-error">* Champ requis</span>
                    <?php endif; ?>
                </div>

                <div class='form-group'>
                    <label for='birth_year'>Année de naissance :</label>
                    <input class='form-control' type='number' min='1900' id='birth_year' name='birth_year' 
                    value="<?php if ($birth_year) {echo $birth_year;} ?>">
                    <?php if ($birth_year_err === "Champ requis"): ?>
                        <span class="form-error">* Champ requis</span>
                    <?php endif; ?>
                </div>

                <div class='form-group'>
                    <textarea rows="4" cols="70" id='comments' name='comments' placeholder='Commentaires'>
                   <?php if ($comments) {echo $comments;} ?>
                    </textarea>
                </div>

                <button type="submit" class="btn btn-primary">Valider</button>
            </form>
        </div>

    </div>


