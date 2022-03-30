<?php
    $nav = "login";
    $title = "Login";
    $erreur = null;
    require "header.php";
    if (is_connected()){
        header('Location: dashboard');
        exit();
    }
    if (!empty($_POST['pseudo']) || !empty($_POST['password'])){
        if ($_POST['pseudo'] === "Julien" && $_POST['password'] === "12345"){
            session_start();
            $_SESSION['connected'] = 1;
            $_SESSION['pseudo'] = $_POST['pseudo'];
            header("Location: dashboard.php");
            exit();
        }else {
            $erreur = "Identifiants incorrects !";
        }
    }
    
    if ($erreur) : ?>
    <div class="alert alert-danger">
        <?php echo $erreur ?>
    </div>
    <?php endif; 
?>
    <main role="main" class="container">
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <div class="form-group">
            <input type="text" name="pseudo" placeholder="Votre login">
        </div>
        <div class="form-group"> 
            <input type="text" name="password" placeholder="Votre mot de passe">
        </div>
        <button type="submit" class= "btn btn-primary">Se connecter</button>
    </form>
    </main>
<?php
    require "footer.php";
?>