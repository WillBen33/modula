<?php $title = 'Oops !'  //Titre de la page ?>

<?php ob_start() ?>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Oops ! Erreur 404</h1>
        </div>
    </div>

<?php $content = ob_get_clean() ?>

<?php require ('template.php'); //Template de page ?>