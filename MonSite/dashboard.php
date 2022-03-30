<?php
    $nav = "DashBoard";
    $title = "Dashboard";
    require "header.php";
    
    
    if (!is_connected()){
        header('Location: login');
        exit();
    }
    
    
    ?>
    <main role="main" class="container">
        <h2>Bienvenue <?php echo $_SESSION['pseudo']; ?> dans votre DashBoard</h2>
        <p>Votre profil...</p>
    </main>
    <?php
        require "footer.php";
?>