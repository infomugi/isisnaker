<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo CHtml::encode($this->pageTitle); ?> - <?php echo CHtml::encode(Yii::app()->name); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Mugi Rachmat">

	<?php
	$baseUrl = Yii::app()->theme->baseUrl; 
	$cs = Yii::app()->getClientScript();
	Yii::app()->clientScript->registerCoreScript('jquery');
	?>

	<link href="<?php echo $baseUrl;?>/assets/css/custom.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $baseUrl;?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $baseUrl;?>/assets/css/color.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $baseUrl;?>/assets/css/responsive.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $baseUrl;?>/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="icon" href="./images/logo.png" type="image/x-icon">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,500,700,900' rel='stylesheet' type='text/css'>

</head>

<body class="theme-style-1">

	<div id="wrapper">
		<header id="header">
			<div class="container">
				<div class="navigation-col">
					<nav class="navbar navbar-inverse">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
							<strong class="logo"><a href="#"><img width="60%" src="images/logo.png" alt="logo"></a></strong> 
						</div>
						<div id="navbar" class="collapse navbar-collapse">
							<ul class="nav navbar-nav" id="nav">
								<?php require_once('tpl_navigation.php');?>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</header>

		<!-- Judul File -->
		<section id="inner-banner">
			<div class="container">
				<h1><?php echo CHtml::encode($this->pageTitle); ?></h1>
			</div>
		</section>	

		<div id="main">
			<section class="recent-row job-detail">

				<div class="col-md-12 col-sm-12">
					<div id="content-area">
						<div class="box">
							<?php echo $content; ?>
						</div>
						
					</div>
				</div>
			</section>
		</div>


	</div>

	<script>
		var resizefunc = [];
		jQuery(document).ready(function(){

		//Momen JS
		if($('.format-date').length > 0){
			$('.format-date').each(function(){
				var ini = $(this);
				var tgl = ini.text();
				moment.locale('id');
				if(moment(tgl,'YYYY-MM-DD',true).isValid() || moment(tgl,'YYYY-MM-DD HH:mm:ss',true).isValid()){
					var formatTgl = moment(tgl, "YYYY-MM-DD HH:mm:ss").fromNow();
					ini.html(formatTgl);
				}
			});
		}                           

	});</script>  

	<script src="<?php echo $baseUrl;?>/assets/js/momenjs.js"></script>
	<script src="<?php echo $baseUrl;?>/assets/js/jquery.placepicker.min.js"></script>
	<script src="<?php echo $baseUrl;?>/assets/js/bootstrap.min.js"></script>
	

</body>
</html>
