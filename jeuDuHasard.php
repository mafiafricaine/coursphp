<?php
    $title= "Jeu du Hasard";
    $nav = "jeuDuHasard";
    $numéroGagnant = rand(0,100);
    require "header.php";

    if(isset($_GET['nombre'])):
        if (is_numeric($_GET['nombre'])):
            if (($_GET['nombre'] >= 0) && ($_GET['nombre'] <= 100)):
                if ($_GET['nombre'] > $numéroGagnant): ?>
                    Votre nombres est trop grand !
                <?php elseif ($_GET['nombre'] < $numéroGagnant): ?>
                    Votre nombres est trop petit !
                <?php else: ?>
                    Vous avez bien trouver le bon nombres <?php echo $numéroGagnant; ?>
                <?php endif;
            else:?>
                Veuillez introduir un nombre entre 0 et 100 compris !!
            <?php endif;
        else:?>
            Veuillez introduire un nombre !!!
        <?php endif; 
    endif;?>


<form action="/coursphp/jeuDuHasard.php" method = "GET">
    <input type="number" name="nombre" placeholder="Entre 0 et 100">
    <button type="submit">Deviner</button> 
</form>

        
<?php
    require "footer.php";
?>