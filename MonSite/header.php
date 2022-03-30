<?php 
 require_once "functions/authentification.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title><?php 
            if(isset($title)):
              echo $title;
            else:
              echo "Mon superbe site";
            endif
    ?></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="/coursphp/index">Mon Site</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?php if ($nav === "index"): ?> active <?php endif ?>">
            <a class="nav-link" href="index">Acceuil</a>
          </li>
          <li class="nav-item <?php if ($nav === "contact"): ?> active <?php endif ?>">
            <a class="nav-link" href="contact">Contact</a>
          </li>
          <li class="nav-item <?php if ($nav === "aPropos"): ?> active <?php endif ?>">
            <a class="nav-link" href="aPropos">A propos</a>
          </li>
          <li class="nav-item <?php if ($nav === "jeuDuHasard"): ?> active <?php endif ?>">
            <a class="nav-link" href="jeuDuHasard">Jeu du Hasard</a>
          </li>
          <li class="nav-item <?php if ($nav === "DashBoard"): ?> active <?php endif ?>">
            <a class="nav-link" href="dashboard">Dashboard</a>
          </li> 
        </ul>
        <ul class="navbar-nav">
          <?php if (!is_connected()):?>
            <li class="nav-item <?php if ($nav === "login"): ?> active <?php endif ?>">
              <a class="nav-link" href="login">Login</a>
            </li>
          <?php else : ?>
            <li class="nav-item">
              <a class="nav-link" href="dashboard"><?php echo $_SESSION['pseudo'];?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout">Logout</a>
            </li>
          <?php endif; ?>
        </ul>
        
      </div>
    </nav>