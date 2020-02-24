<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">

    <title><?= $title //Titre de la page ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    
    <!-- Custom styles for this template -->
    <link href="public/css/carousel.css" rel="stylesheet">
    <link href="public/css/sticky-footer.css" rel="stylesheet">
    
    <!-- Google ReCaptcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Ajax -->
    <script type="text/javascript" src="public/js/ajax.js"></script>

  </head>
  <body class="d-flex flex-column h-100">
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="?c=index">MonSuperSite</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if (isset($homeStatus)) { echo $homeStatus; } ?>">
              <a class="nav-link" href="?c=index">Accueil</a>
            </li>
            <li class="nav-item <?php if (isset($contactStatus)) { echo $contactStatus; } ?>">
              <a class="nav-link" href="?c=contact">Contact</a>
            </li>
            <?php if (isset($_SESSION) && !empty($_SESSION)) { ?>
              <li class="nav-item <?php if (isset($adminStatus)) { echo $adminStatus; } ?>">
                <a class="nav-link" href="?c=admin">Admin</a>
              </li>
            <?php } ?>
            <?php if (isset($_SESSION) && !empty($_SESSION)) { ?>
              <li class="nav-item <?php if (isset($adminStatus)) { echo $adminStatus; } ?>">
                <a class="nav-link" aria-disabled="true" href="#">Connecté</a>
              </li>
            <?php } ?>
            <?php if (isset($_SESSION) && empty($_SESSION)) { ?>
            <li class="nav-item <?php if (isset($adminStatus)) { echo $adminStatus; } ?>">
              <a class="nav-link" href="?c=admin">Connexion</a>
            </li>
            <?php } ?>
            <li class="nav-item <?php if (isset($logoutStatus)) { echo $logoutStatus; } ?>">
              <a class="nav-link" href="?c=index&t=logout">Déconnexion</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <main role="main">

      <!-- Contenu -->
      <?= $content ?>

    </main>

    <footer class="footer mt-auto py-3">
      <div class="container">
        <span class="text-muted"><p>&copy; 2017-2019 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p></span>
      </div>
    </footer>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="public/js/ajax.js"></script>
  </body>
</html>
