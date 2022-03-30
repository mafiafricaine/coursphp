<?php 
    session_start();

    unset($_SESSION['connected']);
    unset($_SESSION['pseudo']);
    header('Location: index');
    exit();
?>
