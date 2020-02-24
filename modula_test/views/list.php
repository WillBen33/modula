<?php $title = 'Admin - Liste des messages reçus'  //Titre de la page ?>

<?php $adminStatus = 'active' //Surbrillance du menu ?>

<?php ob_start() ?>

    <?php if (isset($_SESSION) && !empty($_SESSION)) { ?>

        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Liste des messages reçus</h1>
            </div>
        </div>

        <div class="container col-md-8">
            <?php
            if (isset($messages) && !empty($messages)) {
            ?>
                <table class="table">
                    <td><strong>ID</strong></td>
                    <td><strong>FIRSTNAME</strong></td>
                    <td><strong>LASTNAME</strong></td>
                    <td><strong>EMAIL</strong></td>
                    <td><strong>MESSAGE</strong></td>
                    <td><strong>DATE</strong></td>
                    <td><strong>IP</strong></td>
                    <?php
                    foreach ($messages as $message) {
                        ?>
                        <tr>
                            <td>
                                <?= $message->getId(); ?>
                            </td>
                            <td>
                                <?= $message->getFirstName(); ?>
                            </td>
                            <td>
                                <?= $message->getLastName(); ?>
                            </td>
                            <td>
                                <?= $message->getEmail(); ?>
                            </td>
                            <td>
                                <?= $message->getMessage(); ?>
                            </td>
                            <td>
                                <?= $message->getDate(); ?>
                            </td>
                            <td>
                                <?= $message->getIp(); ?>
                            </td>
                            <td>
                                <a href="?c=admin&t=message&id=<?= $message->getId();?>">Lire le message</a>
                            </td>
                        </tr>
                        <?php
                    } ?>
                </table>
            <?php
            } else {
                ?>
                <p>Vous n'avez reçu aucun message</p>
                <?php
            } ?>
        </div>

    <?php } ?>

<?php $content = ob_get_clean() ?>

<?php require ('template.php'); //Template de page ?>