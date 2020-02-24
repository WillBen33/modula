<?php
    if (isset($captchaIsNotOk) && !empty($captchaIsNotOk)) {
?>
    <div class="row">
        <div class="alert alert-danger col-md-12" role="alert">
            <?php   
                echo $captchaIsNotOk;
            ?>
        </div>
    </div> 
<?php
    } elseif (isset($isMailGone) && !empty($isMailGone)) {
?>
    <div class="row">
        <div class="alert alert-info col-md-12" role="alert">
            <?php   
                echo $isMailGone;
            ?>
        </div>
    </div>
<?php
    } elseif (isset($captchaIsOk) && !empty($captchaIsOk)) {
?>
    <div class="row">
        <div class="alert alert-success col-md-12" role="alert">
            <?php   
                echo $captchaIsOk;
            ?>
        </div>
    </div>
<?php
    } elseif (isset($isLoginExist) && !empty($isLoginExist)) {
?>
    <div class="row">
        <div class="alert alert-success col-md-12" role="alert">
            <?php   
                echo $isLoginExist;
            ?>
        </div>
    </div>
<?php
    } elseif (isset($userNotExist) && !empty($userNotExist)) {
?>
    <div class="row">
        <div class="alert alert-danger col-md-12" role="alert">
            <?php   
                echo $userNotExist;
            ?>
        </div>
    </div>
<?php
    } elseif (isset($incorrectPassword) && !empty($incorrectPassword)) {
?>
    <div class="row">
        <div class="alert alert-danger col-md-12" role="alert">
            <?php   
                echo $incorrectPassword;
            ?>
        </div>
    </div>
<?php
    }
?>