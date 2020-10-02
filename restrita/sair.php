<?php
    session_start();
    unset(
        $_SESSION['id'],
        $_SESSION['usuario'],
        $_SESSION['email'],
        $_SESSION['senha'],
        $_SESSION['nivel']
    );
    header('Location: ../index.html');
?>