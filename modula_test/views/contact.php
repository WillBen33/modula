<?php $title = 'Contact'  //Titre de la page ?>

<?php $contactStatus = 'active' //Surbrillance du menu ?>

<?php ob_start() ?>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Formulaire de contact</h1>
        </div>
    </div>

    <div class="container col-md-4">
        <div class="row">
            <form class="form-signin" id="contactForm" action="" method="POST">
                <div class="text-center mb-4">

                    <?php include 'alerts.php'; ?>

                    <h1 class="h3 mb-3 font-weight-normal">Nous contacter</h1>
                    <p>Vous souhaitez nous écrire ? Envoyez-nous un message à l'aide de notre formulaire de contact.</p>
                </div>

                <div class="form-label-group mb-4">
                    <label for="inputLastName">Nom</label>
                    <input type="text" id="inputLastName" name="inputLastName" class="form-control" placeholder="Votre nom" value="<?php if(isset($_POST['inputLastName'])) { echo $_POST['inputLastName']; } ?>" required autofocus>
                </div>

                <div class="form-label-group mb-4">
                    <label for="inputFirstName">Prénom</label>
                    <input type="text" id="inputFirstName" name="inputFirstName" class="form-control" placeholder="Votre prénom" value="<?php if(isset($_POST['inputFirstName'])) { echo $_POST['inputFirstName']; } ?>" required autofocus>
                </div>

                <div class="form-label-group mb-4">
                    <label for="inputEmail">Email</label>
                    <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Votre email" value="<?php if(isset($_POST['inputEmail'])) { echo $_POST['inputEmail']; } ?>" required autofocus>
                </div>

                <div class="form-label-group mb-4">
                    <label for="inputMessage">Message</label>
                    <textarea type="text" id="inputMessage" name="inputMessage" class="form-control" placeholder="Votre message" value="<?php if(isset($_POST['inputMessage'])) { echo $_POST['inputMessage']; } ?>" required autofocus></textarea>
                </div>

                <div class="form-label-group mb-4" hidden="hidden">
                    <label for="inputIpAddr">Ip</label>
                    <input type="text" id="inputIpAddr" name="inputIpAddr" class="form-control" value="<?php if(isset($_SERVER['REMOTE_ADDR'])) { echo $_SERVER['REMOTE_ADDR']; } ?>" required autofocus></input>
                </div>

                <div class="checkbox mb-4">
                    <label class="" for="rgpd">
                        <input class="" type="checkbox" value="rgpd" id="rgpd" name="rgpd" required autofocus>
                        En soumettant ce formulaire, j'accepte que les informations saisies soient utilisées, exploitées, traitées pour permettre de me recontacter, dans le cadre stricte de la relation qui découle de cette demande.
                    </label>
                </div>
                    
                <div class="checkbox mb-4">
                    <label class="" for="recaptcha">
                        <div class="g-recaptcha mb-4" id="recaptcha" data-sitekey="6Lch-toUAAAAAOJdVA-MYqVHjgLe0qPxn-JdXZ-6"></div>
                    </label>
                </div>

                <div class="form-label-group text-center">
                    <button class="btn btn-lg btn-primary" type="submit">Envoyer</button>
                </div>
                
                <p class="mt-5 mb-5 text-muted text-center"></p>
            </form>
        </div>
    </div>


<?php $content = ob_get_clean() ?>

<?php require ('template.php'); //Template de page ?>