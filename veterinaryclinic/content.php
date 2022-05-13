<?php
	session_start();
	require_once 'vendor/connect.php';
	$check_clinic = mysqli_query($connect, "SELECT * FROM `clinic` WHERE `number_house`= 9");
	$clinic = mysqli_fetch_assoc($check_clinic);
	
	$_SESSION['clinic'] = [
		"clinicID" => $clinic['clinicID'],
        "city" => $clinic['city'],
        "street" => $clinic['street'],
        "email" => $clinic['email'],
        "number_house" =>$clinic['number_house'],
        "number_phone" =>$clinic['number_phone']
    ];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">
	<title></title>
	<style>
		.fon{
			background: url(images/kit.jpg) no-repeat;
	background-size:100% 100%;
	min-height:800px;		
}
</style>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</head>
<body>
	<div class="fon">
		<div class="str">
				<h3 class="text1">Ветеринарна клініка</h3>
		</div>		
	</div>
	
	<div class="div-height">
		<div class="fon-visit">
			<div class="visit-button">
				<a href="/visit.php"class="btn btn-primary" id="visit" align="centre" target="_top">Запланувати візит</a>
			</div>
		</div>
	</div>
	
		
		
		
	
<div id="fea" class="pos">
			<div class="container">
				<div class="pos-img text-center" id="img">
					<div class="col-md-3 pos">
						<img class="head-img" id="img_1" src="images/lapa.jpg">
						<h3><a>Профілактика</a></h3>
						<p>Профілактика - це краще ніж лікування</p>
					</div>
					<div class="col-md-3 pos">
						<img class="head-img" id="img_1" src="images/lapa.jpg">
						<h3><a>Фахівці</a></h3>
						<p>У нас працюють працівники, які люблять свою справу</p>
					</div>
					<div class="col-md-3 pos">
						<img class="head-img" id="img_1" src="images/lapa.jpg">
						<h3><a>Акції</a></h3>
						<p>Акції та пропозиції для кожного</p>
					</div>
				</div>
			</div>
		</div>
<div class="row" id="row_backgr" name="row">
	<div class="container">
		<div class="items">
			<div class="item1">
				<h4><a id="pro-nas">Ветеринарна клініка</a></h4>
			<p id="veter_desc">Вітаємо вас на сайті нашої клініки!</p>
		</div>
		<div class="location">
			<div class="str-house">
				<?php echo '<a><img src="images/city.png" style="width: 25px">м. '   . $_SESSION['clinic']['city'] .'<br></a>'?>
			</div>
			<div class="str-house">
				<?php echo '<a><img src="images/email.png" style="width: 25px;">'   . $_SESSION['clinic']['email'] .'</a>'?>
			</div>
			<div class="str-house">
				<?php echo '<a><img src="images/icon-house1.png" style="width: 25px;">вул. '   .$_SESSION['clinic']['street'].' '.$_SESSION['clinic']['number_house'].'</a>'?>
			</div>
		</div>
		</div>
	</div>
</div>
<div class="pre-footer">
	<div class="container">
		<div class="container-inner">
			<div class="row" id="rowq">
				<div id=rw class="col-sm-col-sm-6 col-lg-3">
					<div class="sp-column">
						<div class="sp-module">
							<div class="custom">
	<p>
		<?php echo '<span style="font-size: 16pt;">
		<strong>м. '.$_SESSION['clinic']['city'].'<br><br></strong>
		</span>'?>
		 <span style="font-size: 14pt;">вул. <?= $_SESSION['clinic']['street'] .' '. $_SESSION['clinic']['number_house']?> <br></span>
		 <span style="font-size: 14pt;">тел. <?= $_SESSION['clinic']['number_phone'] ?></span>
	</p>
<div>
	<span style="font-size: 14pt;">Пн - Пт:&nbsp; &nbsp; 7:00 - 20:00</span><br>
	<span style="font-size: 14pt;">Сб:&nbsp; &nbsp;8:00 - 16:00</span><br>
	<span style="font-size: 14pt;">Нд:&nbsp; &nbsp;вихідний</span>
</div>
<p>&nbsp;</p></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<script src="https://cdn.jsdelivr.n
	<div>
</div>et/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
 