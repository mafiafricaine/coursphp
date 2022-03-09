<?php
    $title= "Jeu du Hasard";
    $nav = "jeuDuHasard";
    $numéroGagnant = rand(0,100);
    require "header.php";
?>
<?php if(isset($_GET['nombre'])): ?>
    <?php if ($_GET['nombre'] > $numéroGagnant): ?>
        Votre nombres est trop grand !
    <?php elseif ($_GET['nombre'] < $numéroGagnant): ?>
        Votre nombres est trop petit !
    <?php else: ?>
        Vous avez bien trouver le bon nombres <?php echo $numéroGagnant; ?>
    <?php endif;?>
<?php endif; ?>

<form action="/coursphp/jeuDuHasard.php" method = "GET">
    <input type="number" name="nombre" placeholder="Entre 0 et 100">
    <button type="submit">Deviner</button> 
</form>

        
<?php
    require "footer.php";
?>