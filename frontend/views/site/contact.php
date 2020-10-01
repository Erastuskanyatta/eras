<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- contact -->
<div class="address" id="contact">
	<div class="container">
		<h3 class="w3l-title">Contact Me</h3>
		<div class="address-row">
			<div class="col-md-4 address-left wow agile fadeInLeft animated" data-wow-delay=".5s">
				<div class="address-grid">
					<h4 class="wow fadeIndown animated" data-wow-delay=".5s">Get In Touch</h4>
					<form action="#" method="post">
						<input type="text" placeholder="Name" name="name" required="">
						<input type="email" placeholder="Email" name="email" required="">
						<input type="text" placeholder="Subject" name="subject" required="">
						<textarea placeholder="Message" required=""></textarea>
						<input type="submit" value="SEND">
					</form>
				</div>
			</div>
			<div class="col-md-4 address-right">
				<div class="address-info wow fadeInRight animated" data-wow-delay=".5s">
					<h4>Address</h4>
					<p>654, meru town</p>
				</div>
				<div class="address-info address-mdl wow fadeInRight animated" data-wow-delay=".7s">
					<h4>Phone </h4>
					<p>+254 729096005</p>
					<p>+254 706460492</p>
				</div>
				<div class="address-info agileits-info wow fadeInRight animated" data-wow-delay=".6s">
					<h4>Mail</h4>
					<p><a href="mailto:example@mail.com"> mail@example.com</a></p>
					<p><a href="mailto:example@mail.com"> mail2@example.com</a></p>
				</div>
			</div>
			<div class="col-md-4 next_of_kin-right">
			    <div class="address-info wow fadeInRight animated" data-wow-delay=".5s">

				<form action="">

				</form>
						
				</div>
				 
			</div>
		</div>	
	</div>	
</div>
<!--//contact-->