<?php
    session_start();
    $title= "Jeu du Hasard";
    $nav = "jeuDuHasard";
    if (!isset($_SESSION['numGagnant'])){
        $_SESSION['numGagnant'] = rand(0,10);
    }
    require "header.php";
    if (isset($_POST['nombre'])):
        if (($_POST['nombre'] >= 0) && ($_POST['nombre'] <= 10)):
            if ($_POST['nombre'] > $_SESSION['numGagnant']): 
                echo "Votre nombres " .$_POST['nombre']. "  est trop grand !";
            elseif ($_POST['nombre'] < $_SESSION['numGagnant']): 
                echo "Votre nombres " .$_POST['nombre']. " est trop petit !";
            else: 
                echo "Vous avez bien trouvé le bon nombres ". $_SESSION['numGagnant'];
                unset($_SESSION['numGagnant']); 
            endif;
        else:
            echo "Veuillez introduir un nombre entre 0 et 10 compris !!";
        endif;
    endif;?>
    <main role="main" class="container">
        <h2>Le jeu du Hasard</h2>
        <br>
        <form action="/coursphp/jeuDuHasard.php" method = "POST">
            <input type="number" name="nombre" placeholder="Entre 0 et 10">
            <button type="submit">Deviner</button> 
        </form>
    </main>
      
<?php
    require "footer.php";
?>