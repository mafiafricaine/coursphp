<?php 
    //$title = "A propos";
    session_start();
    $nav = "aPropos";
    session_unset();
    require "header.php";
?>
<main role="main" class="container">
    <h2>A Propos de nous</h2>
    </br>
    <h5>Qui sommes Nous ?</h5>
    <p>Nous sommes un organisme de solidarité.</p>
</main>
<?php 
    require "footer.php";
?>