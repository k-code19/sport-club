<!doctype html>
<html>
	<head>
		<title>Новини та пропозиції</title>
		<link href="bs/styles/bootstrap.min.css" rel="stylesheet">     <!-- CSS-стили Bootstrap -->
		<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />
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
								<li><a href="contacts.php">Контакти</a></li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
			
			<div id="content" class="container">
				<div class="row">
					<div class="col-md-8">
						<h1>Новини та пропозиції<hr></h1>
						<?php
							include_once("db.php");
							$news=mysql_query("SELECT id, title, date, text FROM news ORDER BY date DESC LIMIT 10");
							mysql_close();
							
							while($row=mysql_fetch_assoc($news))
							{
								$id=$row['id'];
							?>
							<div class="row">
								<div>
									<h3><?php echo $row['title']; ?></h3>
									<p class="exp"> <?php echo $row['date']; ?></p>
									<p><?php echo $row['text']; ?></p>
									<a data-toggle="modal" data-target="#modal-news-<?php echo $id; ?>" href="#modal-news-<?php echo $id; ?>"><button type="button" class="btn btn-primary btn-lg btn-block">Читати</button></a>
								</div>
							</div>
							<hr>
							<?php 
								include("modal-news.php");
							} 
						?>
						
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
		<script type="text/javascript" src="highslide/highslide-full.js"></script>
	</body>
</html>					