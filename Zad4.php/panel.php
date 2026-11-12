
<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<h1>Witaj, admin!</h1>

<a href="logout.php">Wyloguj się</a>
