<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/portfolio.css" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/imagefade.js"></script>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
	<div class="container">
		<div id="admin"><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/user/login"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/admin.png"></a></div>
		<div id="header">
			<div id="logo"><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/index"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png"></a></div>
		</div><!-- header -->

		<div id="mainmenu">
			<?php $this->widget('zii.widgets.CMenu',array(
				'items'=>array(
					array('label'=>'Illustrations', 'url'=>array('/site/illustrations')),
					array('label'=>'Graphic Design', 'url'=>array('/site/graphics')),
					array('label'=>'Mixed', 'url'=>array('/site/mixed')),
				),
			)); ?>
		</div><!-- mainmenu -->
		<?php if(Yii::app()->user->isGuest){
			?> <div id="portfolio"> <?php
		}
		else{
			?> <div id="admin"> <?php
		}?>
		<?php echo $content; ?>
		</div>
	</div><!-- container -->
</body>
</html>