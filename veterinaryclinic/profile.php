<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Профіль</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/profil.css">
    <style>
body{margin:0px;}
.header, .content, .fotter{width:100%;}
.header, .content, .fotter{border:none;display:block;}
.header{height:53px;position:fixed;}
.content{height:100%;position:fixed;top: 50px;}
</style>
</head>
<body>
    <header style="min-height: 53px;"><iframe class="header" src="header.php" name="HEADER"></iframe></header>
<div class="container1">
    <div class="row">
        <form action="vendor/profil-visit.php" method="post">
            <h2 style="margin: 5px;"><?= $_SESSION['user']['login'] ?></h2>
            <a id="text1"><?= $_SESSION['user']['email'] ?></a>
            
        <a href="vendor/logout.php" class="logout">Вихід</a>
        </form>
    </div>
        <div id="desc_visit">
             <?php
             if($_SESSION['user']['login']==$_SESSION['visit']['acc']){
            '<ol>';
                    echo '<a id="text2" style="padding-top: 10px; font-size: 22px;">У вас є запланований візит:</a>';
                    echo '<li> Імя:<a>'.$_SESSION['visit']['name'].'</a></li>';
                    echo '<li> По-батькові:<a>'.$_SESSION['visit']['surname'].'</a></li>';
                    echo '<li> Причина візиту:<a>'. $_SESSION['visit']['reason'].'</a></li>';
                    echo '<li> Ваш номер телефону:<a>'.$_SESSION['visit']['phone'].'</a></li>';
                    echo '<li> Додаткова інформація:<a>'.$_SESSION['visit']['message'].'</a></li>';
                    // print_r($_SESSION['visit']);
                }
                else{
                    echo '<a id="text2" style="padding-top: 10px; font-size: 22px;">У вас поки що немає запланованого візиту.</a>';
                    unset($_SESSION['visit']);
                }
            '</ol>'?>
        </div>
</div>
    

</body>
</html>
