<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>




<!-- banner -->
<!-- header -->
<div class="header">
			<div class="container">		
				<div class="logo">
					<h1><a href="<?= Yii::$app->urlManager->createUrl(['site/index'])?>">Classic CV</a></h1>
			
				
				</div> 
				
					<li style="text-align: right"; style="color: red">
					<a style="padding-right: 20px" href="<?= Yii::$app->urlManager->createUrl(['site/index'])?>">Home</a>
						<a style="padding-right: 20px" href="<?= Yii::$app->urlManager->createUrl(['site/about'])?>">About</a>
						<a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['skills/create'])?>">Skills</a>
						<a style="padding-right: 20px" href="<?= Yii::$app->urlManager->createUrl(['site/servicesview'])?>">Services</a>
						<a style="padding-right: 20px" href="<?= Yii::$app->urlManager->createUrl(['tel/create'])?>">Interest</a>
						<a style="padding-right: 20px" href="<?= Yii::$app->urlManager->createUrl(['tel/create'])?>">Education</a>
						<a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['projects/create'])?>">Project</a>
						<a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/contact'])?>">Contact Me</a>
						<a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/signup'])?>">Sighup</a>
						<a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/login'])?>">Login</a>
					
						<style>a{font-size: 15px;color: white; list-style-type: none;}</style>
					</li>
					
			
				
				<div class="clearfix"> </div>
			</div>
		</div>

	
		<!-- //header -->
    </div>
</div>	<!-- //header -->
		
<!-- //banner -->




   <!-- content -->

   <?=$content ?>

   <!-- footer -->
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <div class="footer w3ls">
	<div class="container">
		<div class="w3ls-social-icons-2">
		<i class="fa fa-desktop" aria-hidden="true"></i>
		
			
		</div>
	</div>
</div>
<div class="copyrights">
	<p>&copy; 2017 Classic CV. All rights reserved | Design by <a href="index.php">Sudo coders</a></p>
</div>
<!-- //footer -->






<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
