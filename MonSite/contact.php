<?php 
    session_start();
    $title = "Contact";
    $nav = "contact";
    require "header.php";
?>
<h1>Debug</h1>
<p><?php var_dump($_SESSION)?></p>
<main role="main" class="container">
    <h2>Nous contacter</h2>
    </br>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum eligendi nam, deserunt, nobis amet rerum sequi fugit, aperiam ea iusto voluptatum soluta explicabo dignissimos. Fugiat quod id quasi nam numquam!</p>
</main>
<?php 
    require "footer.php";
?>