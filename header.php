
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
              echo "Mon site";
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
            <a class="nav-link" href="/coursphp/index">Acceuil</a>
          </li>
          <li class="nav-item <?php if ($nav === "contact"): ?> active <?php endif ?>">
            <a class="nav-link" href="/coursphp/contact">Contact</a>
          </li>
          <li class="nav-item <?php if ($nav === "aPropos"): ?> active <?php endif ?>">
            <a class="nav-link" href="/coursphp/aPropos">A propos</a>
          </li>
          
        </ul>
       
      </div>
    </nav>