<!doctype html>
<html>
	<head>
		<title>Sport Galaxy</title>
		<link href="bs/styles/bootstrap.min.css" rel="stylesheet">
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
							<a class="navbar-brand active" href="index.php">Sport Galaxy</a>
						</div>
						
						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="trainers.php">Персонал</a></li>
								<li><a href="gym.php">Фотогалерея</a></li>
								<li><a href="price.php">Ціни</a></li>
								<li><a href="contacts.php">Контакти</a></li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
			
			<div id="carousel" class="carousel slide hidden-xs" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel" data-slide-to="0" class="active"></li>
					<li data-target="#carousel" data-slide-to="1"></li>
					<li data-target="#carousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img alt="First slide" src="img/carousel2.jpg">
						<div class="carousel-caption">
							<a href="trainers.php"><button type="button" class="btn btn-lg pull-left">Професійні тренери</button></a>
						</div>
					</div>
					<div class="item">
						<img alt="Second slide" src="img/carousel1.jpg">
						<div class="carousel-caption">
							<a href="gym.php"><button type="button" class="btn btn-lg pull-left">Сучасне обладнання</button></a>
						</div>
					</div>
					<div class="item">
						<img alt="Third slide" src="img/carousel3.jpg">
						<div class="carousel-caption">
							<a href="price.php"><button type="button" class="btn btn-lg pull-left">Приємні ціни</button></a>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#carousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
			
			<div id="news" class="container">
				<div class="row">
					
					<?php
						include_once("db.php");
						$news=mysql_query("SELECT id, title, date, text FROM news ORDER BY date DESC LIMIT 3");
						mysql_close();
						
						while($row=mysql_fetch_assoc($news))
						{
							$id=$row['id'];
						?>
						<section>
							<div>
								<a data-toggle="modal" data-target="#modal-news-<?php echo $id; ?>" href="#modal-news-<?php echo $id; ?>"><div class="head"><?php echo $row['title']; ?></div></a>
								<article>
									<p> <span class="date"><?php echo $row['date']; ?></span><br>
									<?php echo $row['text']; ?></p>
								</article>
							</div>
						</section>
						<?php 
							include("modal-news.php");
						} 
					?>
				</div>	
				<a href="allnews.php"><button type="button" class="btn btn-primary btn-lg btn-block"></button></a>
				
			</div>
			
			<div id="content" class="container">
				<div class="row">
					<div class="col-md-8">
						<h2 class="text-uppercase">Ми пропонуємо:<hr></h2>
						<a class="h3" href="gym.php#gym" target="_blank"><h3 class="link">Тренажерна зала</h3></a>
						<p>Кращі інвестиції - це вклад в самого себе. Саморозвиток і зовнішній вигляд - це, мабуть, ті індикатори, які говорять про Ваше бажання самостійно управляти своїм життям. Якщо Ви вже зважилися привести своє тіло в відмінну спортивну форму, то напевно зіткнулися з проблемою вибору гідного фітнес-клубу.
						</p><hr>
						<a href="gym.php#swim" target="_blank"><h3 class="link">Басейн</h3></a>
						<p>У наших басейнах вода проходить 5 етапів очищення, знезараження озоном та ультрафіолетом. У наших басейнах на доріжках немає товкучки - максимум 4 чоловік в годину пік. У наших аквазоні передбачені зони для розминки і спеціальні тренажери. Весь акваінвентарь завжди у вашому розпорядженні: дошки, Нудл, гантелі, м'ячі.
						</p><hr>
						<a href="gym.php#massage" target="_blank"><h3 class="link">Масажний кабінет</h3></a>
						<p>Масаж виник поряд з іншими видами народної медицини в незапам'ятні часи. Є відомості про застосування масажу народами, що мешкали на островах Тихого океану, а це свідчить про те, що масаж був знаком первісним народам. Широко був поширений масаж і серед населення Індонезії. Він застосовувався у вигляді загального або місцевого впливу і включав розминку, продавлювання, розтирання і погладжування.
						</p>
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
			<?php include_once("footer.php"); ?>
			
		</div>
		
		<?php include_once("modal-message.php"); ?>
		<?php include_once("modal-sub.php"); ?>
		
		<script src="js/jquery-2.2.0.min.js"></script>
		<script src="less/less-1.4.1.js"></script>
		<script src="bs/js/bootstrap.min.js"></script>
	
		</body>
	</html>									