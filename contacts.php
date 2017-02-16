<!doctype html>
<html>
	<head>
		<title>Контакти Sport Galaxy</title>
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
								<li><a href="price.php">Ціни</a></li>
								<li class="active"><a href="contacts.php">Контакти</a></li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
			
			<div id="content" class="container">
				<div class="row">
					<div class="col-md-8">
						<h1>Контакти Sport Galaxy<hr></h1>
						<p><span class="adress">Приходьте до нас у будь-який день з 7:00 до 22:00 або зв'яжіться з нами найбільш зручним для Вас способом!</span></p>
						<p><span class="adress">Наша адреса: </span>м. Київ, вул. Ніжинська, 29Д.</p>
						<p><span class="adress">Телефони: </span>+38 (095) 123-43-21, +38 (067) 123-43-21, +38 (063) 123-43-21.</p>
						<p><span class="adress">Електронна адреса: </span><a href="mailto:sportgalaxy@sg.com">sportgalaxy@sg.com</a></p>
						<p><span class="adress">Режим роботи: </span>7:00-22:00, без віхидних.</p>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4527.764081153464!2d30.44035833418981!3d50.43880821535346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cc1e7e478a59%3A0x9b11b305a65704a2!2z0LLRg9C7LiDQndGW0LbQuNC90YHRjNC60LAsIDI50JQsIDI5RCwg0JrQuNGX0LI!5e0!3m2!1sru!2sua!4v1455465172630" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-11 col-md-push-1">
								<a data-toggle="modal" data-target="#modal2" href="#modal2">
									<button type="button" class="btn btn-primary btn-lg btn-block">Замовити абонемент</button>
								</a>
								<a data-toggle="modal" data-target="#modal1" href="#modal1">
									<button type="button" class="btn btn-primary btn-lg btn-block">Написати нам</button>
								</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<?php include("modal-message.php"); ?>
			<?php include("footer.php"); ?>
			
		</div>
		
		<?php include_once("modal-sub.php"); ?>
		<script src="js/jquery-2.2.0.min.js"></script>
		<script src="less/less-1.4.1.js"></script>
		<script src="bs/js/bootstrap.min.js"></script>
	</body>
</html>					