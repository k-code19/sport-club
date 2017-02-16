<!doctype html>
<html>
	<head>
		<title>Ціни Sport Galaxy</title>
		<link href="bs/styles/bootstrap.min.css" rel="stylesheet">     <!-- CSS-стили Bootstrap -->
		<!--<link href="style/style.less" rel="stylesheet/less" type="text/css">-->
		<link href="style/style.css" rel="stylesheet">
		<link href="bs/font-awesome.min.css" rel="stylesheet">
	</head>
	
	<body>
		<div id="container">
			
			<div id="nav">
				<div class="navbar navbar-inverse navbar-fixed-top text-uppercase">
					<div class="container">
						
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="index.php">Sport Galaxy</a>
						</div>
						
						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="trainers.php">Персонал</a></li>
								<li><a href="gym.php">Фотогалерея</a></li>
								<li class="active"><a href="price.php">Ціни</a></li>
								<li><a href="contacts.php">Контакти</a></li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
			
			<div id="content"><div class="container">
				<div class="row">
				<h1>Ціни на основні послуги<hr></h1>
				</div>
				<div class="row">
					<div class="col-md-4"> 
						<table class="table table-hover table-bordered">
							<caption>Тренажерна зала</caption>
							<th>Період</th>
							<th>Вартість, грн</th>
							<tr>
								<td>Разове відвідування</td>
								<td>35</td>
							</tr>
							<tr>
							<td>1 місяць</td>
							<td>300</td>
							<tr>
							<td>3 місяці</td>
							<td>700</td>
							</tr>
							<tr>
							<td>6 місяців</td>
							<td>1500</td>
							</tr>
							
							<tr>
								<td colspan="2">Тренажерна зала + басейн</td>
							</tr>
							<tr>
							<td>1 місяць</td>
							<td>500</td>
							<tr>
							<td>3 місяці</td>
							<td>1300</td>
							</tr>
							<tr>
							<td>6 місяців</td>
							<td>2500</td>
							</tr>
							
							<tr>
								<td colspan="2">Послуги тренера</td>
							</tr>
							<tr>
								<td>Разове відвідування</td>
								<td>50</td>
							</tr>
							<tr>
							<td>1 місяць</td>
							<td>200</td>
							<tr>
							<td>3 місяці</td>
							<td>500</td>
							</tr>
							<tr>
							<td>6 місяців</td>
							<td>1000</td>
							</tr>
							
						</table>
							</div>
							
							<div class="col-md-4">
						<table class="table table-hover table-bordered">
							<caption>Басейн</caption>
							<th>Період</th>
							<th>Вартість, грн</th>
							<tr>
								<td>Разове відвідування</td>
								<td>30</td>
							</tr>
							<tr>
							<td>1 місяць</td>
							<td>200</td>
							<tr>
							<td>3 місяці</td>
							<td>500</td>
							</tr>
							<tr>
							<td>6 місяців</td>
							<td>1000</td>
							</tr>
							
							<tr>
								<td colspan="2">Тренажерна зала + басейн</td>
							</tr>
							<tr>
							<td>1 місяць</td>
							<td>500</td>
							<tr>
							<td>3 місяці</td>
							<td>1300</td>
							</tr>
							<tr>
							<td>6 місяців</td>
							<td>2500</td>
							</tr>
							
							<tr>
								<td colspan="2">Послуги інструктора</td>
							</tr>
							<tr>
								<td>Разове відвідування</td>
								<td>50</td>
							</tr>
							<tr>
							<td>1 місяць</td>
							<td>200</td>
							<tr>
							<td>3 місяці</td>
							<td>500</td>
							</tr>
							<tr>
							<td>6 місяців</td>
							<td>1000</td>
							</tr>
						</table>
							</div>
							
							<div class="col-md-4">
						<table class="table table-hover table-bordered">
							<caption>Масажний кабінет</caption>
							<th>Вид масажу</th>
							<th>Вартість, грн</th>
							
							<tr>
							<td>Антицелюлітний</td>
							<td>200</td>
							<tr>
							<td>Мануальний</td>
							<td>250</td>
							</tr>
							<tr>
							<td>Лікульвальний масаж спини</td>
							<td>200</td>
							</tr>
							<tr>
							<td>Масаж-релакс</td>
							<td>400</td>
							</tr>
							
						</table>
							</div>
							
							</div>
							<div class="row">
							<a data-toggle="modal" data-target="#modal2" href="#modal2">
								<button type="button" class="btn btn-primary btn-lg btn-block">Замовити абонемент</button>
							</a>
							</div>
							</div>
							</div>				
					
					<?php include("footer.php"); ?>
					
					</div>
					
					<?php include_once("modal-sub.php"); ?>
					<script src="js/jquery-2.2.0.min.js"></script>
					<script src="less/less-1.4.1.js"></script>
					<script src="bs/js/bootstrap.min.js"></script>
					</body>
					</html>															