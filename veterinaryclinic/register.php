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
    <title>Реєстрація</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body id="auth">

    <!-- Форма -->
    <form action="vendor/signup.php" id="form" method="post" enctype="multipart/form-data">
        <label>Логін</label>
        <input type="text" name="login" placeholder="Введіть свій логін">
        <label>Електронна пошта</label>
        <input type="email" id="email" name="email" placeholder="Введіть адрес своєї пошти">
        <span id="text"></span>
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введіть пароль">
        <label>Підтвердження пароля</label>
        <input type="password" name="password_confirm" placeholder="Підтвердіть пароль">
        <button type="submit">Зареєструватися</button>
        <p>У вас вже є обліковий запис? - <a id="text1" href="login.php">авторизуйтесь</a>!
        </p>
        <a href="/" style="align-self: center; " id="text1"><p>Повернутись в головне меню</p></a>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
<script type="text/javascript">
    $('input').on('input invalid', function() {
    this.setCustomValidity('')
    if (this.validity.typeMismatch) {
      this.setCustomValidity("Адреса електронної пошти має містити символ '@'")
    }
})
</script>
</body>
</html>