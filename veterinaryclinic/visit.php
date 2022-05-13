<?php
    session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Запланувати візит</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
body{margin:0px;}
.header, .content, .fotter{width:100%;}
.header, .content, .fotter{border:none;display:block;}
.header{height:15%;position:fixed;}
.content{height:100%;position:fixed;top: 50px;}
</style>
</head>
<body>
<iframe class="header" src="header.php" name="HEADER"></iframe>
<div class="container">
        <form id="visit_form" action="vendor/visitup.php" method="post" enctype="multipart/form-data">
        <h4 id="veter1"><a id="veter1">Ветеринарна клініка</a></h4>
        <?php
            if ($_SESSION['error1']) {
                echo '<label id="err"> ' . $_SESSION['error1'] . ' </label>';
            }
             unset($_SESSION['error1']);
        ?>
        <input type="text" name="name" placeholder="Ваше ім'я">
        
        <?php
            if ($_SESSION['error2']) {
                echo '<label id="err"> ' . $_SESSION['error2'] . ' </label>';
            }
            unset($_SESSION['error2']);
        ?>
        <input type="text" name="surname" placeholder="По-Батькові">
        
        <?php
            if ($_SESSION['error3']) {
                echo '<label id="err"> ' . $_SESSION['error3'] . ' </label>';
            }
            unset($_SESSION['error3']);
        ?>
        <div class="select">
                <select id="select193" name="spec_an" required="">
                        <option disabled="" selected="">Вид тварини:</option>
                        <option value="Вакцинація">Собака</option>
                        <option value="Огляд">Кіт</option>
                        <option value="Косметичні процедури">Інше</option>
                </select>
        </div>
        
        <?php
            if ($_SESSION['error3']) {
                echo '<label id="err"> ' . $_SESSION['error3'] . ' </label>';
            }
            unset($_SESSION['error3']);
        ?>
        
         <input type="text" name="name_an" placeholder="Кличка вихованця">
        
        <?php
            if ($_SESSION['error3']) {
                echo '<label id="err"> ' . $_SESSION['error3'] . ' </label>';
            }
            unset($_SESSION['error3']);
        ?>
        
        <div class="select">
                <select id="select193" name="select" required="">
                        <option disabled="" selected="">Причина візиту:</option>
                        <option value="Вакцинація">Вакцинація</option>
                        <option value="Огляд">Огляд</option>
                        <option value="Косметичні процедури">Косметичні процедури</option>
                        <option value="Лікування">Лікування</option>
                </select>
        </div>
        
        <?php
            if ($_SESSION['error4']) {
                echo '<label id="err"> ' . $_SESSION['error4'] . ' </label>';
            }
            unset($_SESSION['error4']);
        ?>
        <input type="text" name="phone" placeholder="Контактний номер телефону">
        
        <input type="text" name="info" maxlength="300" placeholder="Додаткова інформація">
        <button type="submit">Відправити дані</button>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
</div>


</body>
</html>
