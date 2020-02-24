<?php $title = 'Admin - Message'  //Titre de la page ?>

<?php $adminStatus = 'active' //Surbrillance du menu ?>

<?php ob_start() ?>

    <?php if (isset($_SESSION) && !empty($_SESSION)) { ?>

        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Message <?php echo $showMessage->getId(); ?></h1>
            </div>
        </div>
   
        <div class="container col-md-8">
            <table class="table">
                <tr>
                    <td><strong>ID</strong></td>
                    <td><?= $showMessage->getId(); ?></td>
                </tr>
                <tr>
                    <td><strong>FIRSTNAME</strong></td>
                    <td><?= $showMessage->getFirstName(); ?></td>
                </tr>
                <tr>
                    <td><strong>LASTNAME</strong></td>
                    <td><?= $showMessage->getLastName(); ?></td>
                </tr>
                <tr>
                    <td><strong>EMAIL</strong></td>
                    <td><?= $showMessage->getEmail(); ?></td>
                </tr>
                <tr>
                    <td><strong>MESSAGE</strong></td>
                    <td><?= $showMessage->getMessage(); ?></td>
                </tr>
                <tr>
                    <td><strong>DATE</strong></td>
                    <td><?= $showMessage->getDate(); ?></td>
                </tr>
                <tr>
                    <td><strong>IP</strong></td>
                    <td><?= $showMessage->getIp(); ?></td>
                </tr>
            </table>
        </div>
    <?php } ?>

<?php $content = ob_get_clean() ?>

<?php require ('template.php'); //Template de page ?>