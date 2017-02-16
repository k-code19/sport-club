<!doctype html>
<html>
	<head>
		<title>Фотогалерея Sport Galaxy</title>
		<link href="bs/styles/bootstrap.min.css" rel="stylesheet">
		<!--<link href="style/style.less" rel="stylesheet/less" type="text/css">-->
		<link href="style/style.css" rel="stylesheet">
		<link href="bs/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />
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
								<li class="active"><a href="gym.php">Фотогалерея</a></li>
								<li><a href="price.php">Ціни</a></li>
								<li><a href="contacts.php">Контакти</a></li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
			
			<?php
				include_once("db.php");
				$gyms=mysql_query("SELECT link FROM gallery WHERE kind='gym'");
				$pools=mysql_query("SELECT link FROM gallery WHERE kind='swimming pool'");
				$massage=mysql_query("SELECT link FROM gallery WHERE kind='massage'");
				mysql_close();
			?>
			
			<div id="content" class="container">
				<div class="row">
					<h1>Світлини Sport Galaxy<hr></h1>
				</div>
				<a name="gym"></a>
				<div class="row">
					<h3>Тренажерна зала</h3>
					<div class="parent">
						
						<?php while($row=mysql_fetch_assoc($gyms))
							{
							?>
							
							<div class="child">
								<a class="highslide" href="<?php echo $row['link']; ?>" onclick="return hs.expand(this)">
									<img class="gym" src="<?php echo $row['link']; ?>" alt="">
								</a>
							</div>
							<?php
							}
						?>
						
					</div>
					<hr>
				</div>
				
				<a name="swim"></a>
				<div class="row">
					<h3>Басейн</h3>
					<div class="parent">
						
						<?php while($row=mysql_fetch_assoc($pools))
							{
							?>
							
							<div class="child">
								<a class="highslide" href="<?php echo $row['link']; ?>" onclick="return hs.expand(this)">
									<img class="gym" src="<?php echo $row['link']; ?>" alt="">
								</a>
							</div>
							<?php
							}
						?>
						
					</div>	
					<hr>
				</div>
				
				<a name="massage"></a>
				<div class="row">
					<h3>Масажний кабінет</h3>
					<div class="parent">
						
						<?php while($row=mysql_fetch_assoc($massage))
							{
							?>
							<div class="child">
								<a class="highslide" href="<?php echo $row['link']; ?>" onclick="return hs.expand(this)">
									<img class="gym" src="<?php echo $row['link']; ?>" alt="">
								</a>
							</div>
							<?php
							}
						?>
						
					</div>				
				</div>
				
				<div class="row">
					<a data-toggle="modal" data-target="#modal2" href="#modal2">
						<button type="button" class="btn btn-primary btn-lg btn-block">Замовити абонемент</button>
					</a>
				</div>
				
			</div>
			
			<?php include("footer.php"); ?>
			
		</div>
		
		<?php include_once("modal-sub.php"); ?>
		<script src="js/jquery-2.2.0.min.js"></script>
		<script src="less/less-1.4.1.js"></script>
		<script src="bs/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="highslide/highslide-full.js"></script>
		<script type="text/javascript" src="js/photos.js"></script>
	</body>
</html>								