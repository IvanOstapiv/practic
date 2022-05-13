<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</head>
<body>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
<div class="container-fluid" style="background-color: silver;">
  <div class="row">
  <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-1 mb-1">  
      <ul class="nav">
        <li><a href="/" class="nav-link px-2 link-dark" id="main" target="_top">Головна</a></li>
        <li><a href="/poslugi.php" class="nav-link px-2 link-dark" target="_top" id="pos">Послуги</a></li>
        <li><a href="/visit.php" class="nav-link px-2 link-dark" id="desc" target="_top">Запланувати візит</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <?php
            if(!$_SESSION['user']){
              echo '<a href="login.php" class="btn btn-primary" target="_top">Вхід</a> ';
              echo '<a href="register.php" class="btn btn-warning" target="_top">Реєстрація</a>';
            }
            if ($_SESSION['user']) {
              echo '<a href="vendor/profil-visit.php" id="nick" target="_top">' . $_SESSION['user']['login'] . '</a>';
              echo '<a href="vendor/logout.php" class="logout btn btn-dark" target="_top">Вихід</a>';
            }
          ?>
      </div>
    </header>
  </div>
</div>
<script src="https://cdn.jsdelivr.n
<div>
</div>et/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

