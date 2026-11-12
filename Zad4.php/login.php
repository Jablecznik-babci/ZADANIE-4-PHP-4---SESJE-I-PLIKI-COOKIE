
<?php
session_start();

$login = $_COOKIE['login'] ?? '';

if (isset($_POST['zaloguj'])) {

    if ($_POST['login'] == "admin" && $_POST['haslo'] == "1234") {

        $_SESSION['user'] = "admin";

        if (isset($_POST['zapamietaj'])) {
            setcookie("login", "admin", time() + 604800);
        }

        header("Location: panel.php");
        exit();

    } else {
        echo "Błędny login lub hasło!";
    }
}
?>

<form method="POST">
    Login:<br>
    <input type="text" name="login"
           value="<?php echo $login; ?>"><br><br>

    Hasło:<br>
    <input type="password" name="haslo"><br><br>

    <input type="checkbox" name="zapamietaj">
    Zapamiętaj mnie<br><br>

    <input type="submit" name="zaloguj" value="Zaloguj">
</form>
