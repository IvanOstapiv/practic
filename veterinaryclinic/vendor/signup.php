<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    
        $check_login = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
        $check_email = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email'");

    if ($password != $password_confirm) {

        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');

    }
    elseif ($login == "") {
        
        $_SESSION['message'] = 'Поле логін не має бути пустим';
        header('Location: ../register.php');
    }
    elseif ($email == "") {
        
        $_SESSION['message'] = 'Поле електронна пошта не має бути пустим';
        header('Location: ../register.php');
    }
    elseif (mysqli_num_rows($check_login) > 0) {
        
        $_SESSION['message'] = 'Такий нік уже існує!';
        header('Location: ../register.php');
    }
    elseif (mysqli_num_rows($check_email) > 0) {
        $_SESSION['message'] = 'Ця пошта уже існує!';
        header('Location: ../register.php');
    }elseif (strlen($password) < 3){
        $_SESSION['message'] = 'Пароль надто малий. Мінімум 4 символа!';
        header('Location: ../register.php');
    }
     else {
        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users`(`login`, `email`, `password`, `role`) VALUES ('$login','$email','$password','user')");

        $_SESSION['message'] = 'Реєстрація пройшла успішно!';
        header('Location: ../login.php');
        
    }
?>

