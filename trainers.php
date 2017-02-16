<!doctype html>
<html>
	<head>
		<title>Персонал Sport Galaxy</title>
		<link href="bs/styles/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />
		<!--<link href="style/style.less" rel="stylesheet/less" type="text/css">-->
		<link href="style/style.css" rel="stylesheet">
		<link href="bs/font-awesome.min.css" rel="stylesheet">
	</head>
	
	<body>
		<div id="container">
			
			<?php
				include_once("db.php");
				$gym=mysql_query("SELECT name, kind, experience, text, link FROM staff ORDER BY experience DESC");
				$news=mysql_query("SELECT id, title, date, text FROM news ORDER BY date DESC LIMIT 3");
				$i=0;
				mysql_close();
			?>
			
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
								<li class="active"><a href="trainers.php">Персонал</a></li>
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
						<h1 id="b">Тренери, інструктори з плавання, масажисти<hr></h1>
						
						<?php while($row=mysql_fetch_assoc($gym))
							{
							?>
							<div class="row">
								<div class="<?php echo $i%2==0 ? 'pull-left' : 'pull-right'; ?>">
									<a class="highslide" href="<?php echo $row['link']; ?>" onclick="return hs.expand(this)">
										<img class="personal" src="<?php echo $row['link']; ?>" alt="">
									</a>
								</div>
								<div>
									<h3><?php echo $row['name']; ?></h3>
									<p class="job">
										<?php
											if ($row['kind']=='gym') echo 'Тренер';
											else if ($row['kind']=='swimming pool') echo 'Інструктор з плавання';
											else if ($row['kind']=='massage') echo 'Масажист';
										?>
									</p>
									<p class="exp">У спорті: 
										<?php 
											$exp=$row['experience'];
											echo $exp;
											if ($exp==1) echo ' рік.';
											else if ($exp>1 && $exp<5) echo ' роки.';
											else echo ' років.';
										?>
									</p>
									<p><?php echo $row['text']; ?></p>
								</div>
							</div>
							<hr>
							<?php 
								$i++;
							} 
						?>
						
					</div>
					
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-11 col-md-push-1">
								<?php
									while($row=mysql_fetch_assoc($news))
									{
										$id=$row['id'];
										
									?>
									<a id="a" data-toggle="modal" data-target="#modal-news-<?php echo $id; ?>" href="#modal-news-<?php echo $id; ?>">
										<div class="block">
											<p>
												<?php echo $row['title']; ?><br>
												<span class="details"><?php echo $row['date']; ?>. Детальніше</span>
												
											</p>
										</div>
									</a>
									<?php
										include("modal-news.php");
									}
								?>
								<a data-toggle="modal" data-target="#modal2" href="#modal2">
									<button type="button" class="btn btn-primary btn-lg btn-block">Замовити абонемент</button>
								</a>
								<a data-toggle="modal" data-target="#modal1" href="#modal1">
									<button type="button" class="btn btn-primary btn-lg btn-block my-big-button">Написати нам</button>
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