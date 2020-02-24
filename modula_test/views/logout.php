<?php $title = "Déconnexion"; // Titre de la page ?>

<?php $logoutStatus = 'active' //Surbrillance du menu ?>

<?php ob_start() // Contenu de la page ?>

<?php
    $_SESSION = array();
    session_destroy();
    header("Refresh: 0, url=?c=index");
?>

<?php $content = ob_get_clean() ?>

<?php require("template.php"); // Template ?>