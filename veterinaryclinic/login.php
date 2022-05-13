<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизація</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body id="auth">

    <form action="vendor/signin.php" method="post">
        <label>Логін</label>
        <input type="text" name="login" placeholder="Введіть свій логін" style="margin-bottom: 9px;">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введіть пароль">
        <button type="submit">Ввійти</button>
        <p>
У вас немає облікового запису? - <a id="text1" href="/register.php">зареєструйтесь</a>!
        </p>
        <a id="text1" href="/" style="align-self: center;"><p>Повернутись в головне меню</p></a>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>