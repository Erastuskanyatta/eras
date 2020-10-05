<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="center">
    <h1><?= Html::encode($this->title) ?></h1>


    
<div class="card">
    <h3 class="panel-title" style="text-align: center; color: black;">Please fill the detais below to login.  </h3>

<div class="container" id="login=wrapper">
  <div class="col-md-12 col-md-offset-4">
  <div class="row">
    <div class="col-lg-5">
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox() ?>

            <div class="container">
              <div class="col-md-4" style="color: red;">
              Forgot password?? <?= Html::a('reset it', ['site/request-password-reset']) ?>
              </div > 
              <div class="col-md-4"   style="color: maroon; font-weight: bold;">
              Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
              </div>
              
                <br>
                
            </div>

            <div class="form-group">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
</div>
  </div>
   </div>



</div>

    <!--start style-->
<style>
html, body {
    background: wordwrap;
    -webkit-box-shadow: inset 0 0 100px rgba(0,0,0,.5);
    box-shadow: inset 0 0 100px rgba(0,0,0,.5);
    height: 100%;
    min-height: 100%;
    position: relative;
}

</style>

<!--end styles -->

   


  <!--  <p>Please fill out the following fields to login:</p>

    <div class="row">
        <div class="col-md-5-left">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                    <br>
                    Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
    
</div>
