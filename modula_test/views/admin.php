<?php $title = 'Admin'  //Titre de la page ?>

<?php $adminStatus = 'active' //Surbrillance du menu ?>

<?php ob_start() ?>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Connexion</h1>
        </div>
    </div>

    <div class="container col-md-4">
        <div class="row">
            <form class="form-signin" action="" method="POST">
                <div class="text-center mb-4">

                    <?php include 'alerts.php'; ?>

                    <h1 class="h3 mb-3 font-weight-normal">Connexion</h1>
                    <p>Connectez-vous à la partie administration du site.</p>
                    <p> Attention, vous devez être enregistré pour accéder à cette zone.</p>
                </div>

                <div class="form-label-group mb-4">
                    <label for="inputLogin">Identifiant</label>
                    <input type="text" id="inputLogin" name="inputLogin" class="form-control" placeholder="Votre identifiant"  autofocus>
                </div>

                <div class="form-label-group mb-4">
                    <label for="inputPassword">Mot de passe</label>
                    <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Votre mot de passe"  autofocus>
                </div>

                <div class="text-center">
                    <button class="btn btn-lg btn-primary" type="submit">Se connecter</button>
                </div>

                <p class="mt-5 mb-5 text-muted text-center"></p>
            </form>
        </div>
    </div>

<?php $content = ob_get_clean() ?>

<?php require ('template.php'); //Template de page ?>