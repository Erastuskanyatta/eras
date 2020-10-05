<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Team */

$this->title = 'Create Team';
$this->params['breadcrumbs'][] = ['label' => 'Teams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- <div class="team-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div> -->


<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Teams board</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">



</head>

<body>
    <section1 id="team" class="" >
  <div class="container" style="padding-left: 420px">
    <h5 class="section-title h1" style="padding-left: 40px">OUR TEAM </h5>
    <div class="heading"> 
      <!-- Heading -->
             <div class="panel-body">
             <div class="row">
             <div class=" col-md-12">
             <div class="flip-card" >
          <div class="flip-card-inner">
        <div class="flip-card-front">
            <div class="card-body text-center">
                 <h4 class="card-title" style="color: blue"><b>Erastus Muriithi</b></h4>
                 <img class=" img-circle" style="height:200px; width: 200px"  src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/12.png"?>" alt="image description" width="40" height="40" style="border: top: 134px;">    <br>        
            </div>
            <h4 class="card-title" style="color: blue"><b>Erastus <br> CEO $ director </b></h4> <br>
            <h4 class="card-title" style="color:#fff"><a href="mailto:allan.eras.co.ke">erastusmuriithi45@sudo.co.ke</a></h4>
          
       </div>
        <div class="flip-card-back">
      <strong>
                                <h4  style="color: white;>Info about Erastus</h4>
                                <p  style="color: blue;>
                                    Iam Erastus Muriithi<br> A software Engineer with 10 years experience. <br> Iam the Mananger oa sudo coders 
                                </p> </strong>
                                <div>
                                    <span>Status of current project:</span>
                                    <div class="stat-percent">48%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 48%;" class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="row  m-t-sm">
                                    <div class="col-sm-4">
                                        <div class="font-bold">PROJECTS</div>
                                        12
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="font-bold">RANKING</div>
                                        1st
                                    </div> <br>
                                    <h4 class="card-title" style="color:#fff"><a href="erastusmuriithi146@gmail.com">erastusmuriithi146@sudo.co.ke</a></h4>
          
                                    
                                </div> 

    </div>
  </div>
</div>
            </div>
                      

             </div>
      </div>
    </div>
  </div> <br>

    <div class="service-block col-md-4">
             <div class="flip-card">
           <div class="flip-card-inner">
        <div class="flip-card-front">
        <div class="card-body text-center">
                 <h4 class="card-title" style="color: blue"><b>Caroline Twish</b></h4>
                 <img class=" img-circle" style="height:200px; width: 200px"  src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/1.jpg"?>" alt="image description" width="40" height="40" style="border: top: 134px;">    <br>        
            </div>
            <h4 class="card-title" style="color: blue"><b>Twish <br>  Marketer </b></h4> <br>
            <h4 class="card-title" style="color:#fff"><a href="mailto:allan.eras.co.ke">twishgatwili@sudo.co.ke</a></h4>
       </div>
        <div class="flip-card-back">
       <strong>
                                <h4  style="color: white;>Info about Twish</h4>
                                <p  style="color: blue;>
                                    
                                    Twish is our market,she is very talented and also very hardworking. <br> She is one of the best girl in theSudo coders
                                
                                </p> </strong>
                                <div>
                                    <span>Status of current project:</span>
                                    <div class="stat-percent">80%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 80%;" class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="row  m-t-sm">
                                    <div class="col-sm-4">
                                        <div class="font-bold">PROJECTS</div>
                                        25
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="font-bold">RANKING</div>
                                        3st
                                    </div> <br>
                                     <h4 class="card-title" style="color:#fff"><a href="mailto:allan.eras.co.ke">twishgatwili@sudo.co.ke</a></h4>
                                    
                                </div>
    </div>
  </div>
</div>

      </div>
        <div class="service-block col-md-4">
             <div class="flip-card">
           <div class="flip-card-inner">
        <div class="flip-card-front">
        <div class="card-body text-center">
                 <h4 class="card-title" style="color: blue"><b>Geoffery Mwangi</b></h4>
                 <img class=" img-circle" style="height:200px; width: 200px"  src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/14.jpg"?>" alt="image description" width="40" height="40" style="border: top: 134px;">    <br>        
            </div>
            <h4 class="card-title" style="color: blue"><b>Geoffery <br> Cyber Security expert </b></h4> <br>
            <h4 class="card-title" style="color:#fff"><a href="mailto:allan.eras.co.ke">mwangijeff@sudo.co.ke</a></h4>
       </div>
        <div class="flip-card-back">
       <strong>
                                <h4  style="color: white;>Info about Geoffery Mwangi</h4>
                                <p  style="color: blue;>
                                    
                                    With Jeff we all feel secure from black hackers as strong firewalls have been well enhanced to protect us from being hacked <br>"Other Hackers call himm Hacker"
                                
                                </p> </strong>
                                <div>
                                    <span>Status of current project:</span>
                                    <div class="stat-percent">66%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 66%;" class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="row  m-t-sm">
                                    <div class="col-sm-4">
                                        <div class="font-bold">PROJECTS</div>
                                        20
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="font-bold">RANKING</div>
                                        4st
                                    </div> <br>
                                     <h4 class="card-title" style="color:#fff"><a href="mailto:allan.eras.co.ke">mwangijeff@sudo.co.ke</a></h4>
                                    
                                </div>

    </div>
  </div>
</div>


      </div>
       <div class="service-block col-md-4">
             <div class="flip-card">
           <div class="flip-card-inner">
        <div class="flip-card-front">
        <div class="card-body text-center">
                 <h4 class="card-title" style="color: blue"><b>Geoffery Mungai</b></h4>
                 <img class=" img-circle" style="height:200px; width: 200px"  src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/jeff.jpg"?>" alt="image description" width="40" height="40" style="border: top: 134px;">    <br>        
            </div>
            <h4 class="card-title" style="color: blue"><b>Geoffery <br> Web designer </b></h4> <br>
            <h4 class="card-title" style="color:#fff"><a href="mailto:allan.eras.co.ke">jeffmungai@sudo.co.ke</a></h4>
       </div>
        <div class="flip-card-back">
       <strong>
                                <h4  style="color: white;>Info about Geoffery Mungai</h4>
                                <p  style="color: blue;>
                                    
                                    Jeff Mungai is oue web developer,he is a genious when it come to web desighning..<br> He is a great Puncher
                                
                                
                                </p> </strong>
                                <div>
                                    <span>Status of current project:</span>
                                    <div class="stat-percent">66%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 66%;" class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="row  m-t-sm">
                                    <div class="col-sm-4">
                                        <div class="font-bold">PROJECTS</div>
                                        20
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="font-bold">RANKING</div>
                                        4st
                                    </div> <br>
                                     <h4 class="card-title" style="color:#fff"><a href="mailto:allan.eras.co.ke">mwangijeff@sudo.co.ke</a></h4>
                                    
                                </div>

             </div>



</section 1>





<section1 id="team" class="page-section section appear clearfix secPad">
  <div class="container">
  <div class="heading"> 
      <!-- Heading -->
       
         <!--  <h3 class="sec-title text-center">Team</h3>
        
             <div class="panel-body">
             <div class="row">
             <div class="service-block col-xs-12 col-sm-6 col-md-4">
             <div class="flip-card">
        

    </div> -->
  </div>
</div>
           <!-- </div>
            <div class="service-block col-lg-6">
             <div class="flip-card">
           <div class="flip-card-inner">
        <div class="flip-card-front">
        <div class="card-body text-center">
                 <h4 class="card-title" style="color: blue"><b>Caroline Twish</b></h4>
                 <img class=" img-circle" style="height:200px; width: 200px"  src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/1.jpg"?>" alt="image description" width="40" height="40" style="border: top: 134px;">    <br>        
            </div>
            <h4 class="card-title" style="color: blue"><b>Twish <br>  Marketer </b></h4> <br>
            <h4 class="card-title" style="color:#fff"><a href="mailto:allan.eras.co.ke">twishgatwili@sudo.co.ke</a></h4>
       </div>
        <div class="flip-card-back">
       <strong>
                                <h4  style="color: white;>Info about Twish</h4>
                                <p  style="color: blue;>
                                    
                                    Twish is our market,she is very talented and also very hardworking. <br> She is one of the best girl in theSudo coders
                                
                                </p> </strong>
                                <div>
                                    <span>Status of current project:</span>
                                    <div class="stat-percent">80%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 80%;" class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="row  m-t-sm">
                                    <div class="col-sm-4">
                                        <div class="font-bold">PROJECTS</div>
                                        25
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="font-bold">RANKING</div>
                                        3st
                                    </div> <br>
                                     <h4 class="card-title" style="color:#fff"><a href="mailto:allan.eras.co.ke">twishgatwili@sudo.co.ke</a></h4>
                                    
                                </div>
    </div>
  </div>
</div>

      </div>
        <div class="service-block col-md-6">
             <div class="flip-card">
           <div class="flip-card-inner">
        <div class="flip-card-front">
        <div class="card-body text-center">
                 <h4 class="card-title" style="color: blue"><b>Geoffery Mwangi</b></h4>
                 <img class=" img-circle" style="height:200px; width: 200px"  src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/14.jpg"?>" alt="image description" width="40" height="40" style="border: top: 134px;">    <br>        
            </div>
            <h4 class="card-title" style="color: blue"><b>Geoffery <br> Cyber Security expert </b></h4> <br>
            <h4 class="card-title" style="color:#fff"><a href="mailto:allan.eras.co.ke">mwangijeff@sudo.co.ke</a></h4>
       </div>
        <div class="flip-card-back">
       <strong>
                                <h4  style="color: white;>Info about Geoffery Mwangi</h4>
                                <p  style="color: blue;>
                                    
                                    With Jeff we all feel secure from black hackers as strong firewalls have been well enhanced to protect us from being hacked <br>"Other Hackers call himm Hacker"
                                
                                </p> </strong>
                                <div>
                                    <span>Status of current project:</span>
                                    <div class="stat-percent">66%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 66%;" class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="row  m-t-sm">
                                    <div class="col-sm-4">
                                        <div class="font-bold">PROJECTS</div>
                                        20
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="font-bold">RANKING</div>
                                        4st
                                    </div> <br>
                                     <h4 class="card-title" style="color:#fff"><a href="mailto:allan.eras.co.ke">mwangijeff@sudo.co.ke</a></h4>
                                    
                                </div>

    </div>
  </div>
</div>


      </div>
       <div class="service-block col-md-4">
             <div class="flip-card">
           <div class="flip-card-inner">
        <div class="flip-card-front">
        <div class="card-body text-center">
                 <h4 class="card-title" style="color: blue"><b>Geoffery Mungai</b></h4>
                 <img class=" img-circle" style="height:200px; width: 200px"  src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/jeff.jpg"?>" alt="image description" width="40" height="40" style="border: top: 134px;">    <br>        
            </div>
            <h4 class="card-title" style="color: blue"><b>Geoffery <br> Web designer </b></h4> <br>
            <h4 class="card-title" style="color:#fff"><a href="mailto:allan.eras.co.ke">jeffmungai@sudo.co.ke</a></h4>
       </div>
        <div class="flip-card-back">
       <strong>
                                <h4  style="color: white;>Info about Geoffery Mungai</h4>
                                <p  style="color: blue;>
                                    
                                    Jeff Mungai is oue web developer,he is a genious when it come to web desighning..<br> He is a great Puncher
                                
                                
                                </p> </strong>
                                <div>
                                    <span>Status of current project:</span>
                                    <div class="stat-percent">66%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 66%;" class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="row  m-t-sm">
                                    <div class="col-sm-4">
                                        <div class="font-bold">PROJECTS</div>
                                        20
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="font-bold">RANKING</div>
                                        4st
                                    </div> <br>
                                     <h4 class="card-title" style="color:#fff"><a href="mailto:allan.eras.co.ke">mwangijeff@sudo.co.ke</a></h4>
                                    
                                </div>

             </div>
      </div>
    </div>
  </div>
</section 1> -->


<style>
    .flip-card{
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}
#team {
    background: #eee !important;
}               
    

</style>





<!--

    <div class="service-block col-md-4">
             <div class="flip-card">
           <div class="flip-card-inner">
        <div class="flip-card-front">
                 Erastus Muriithi

             <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/12.png"?>" alt="image description" style="width:300px;height:300px;"> 
       </div>
        <div class="flip-card-back">
      <strong>
                                <h4  style="color: white;>Info about Erastus</h4>
                                <p  style="color: blue;>
                                    Erastus Muriithi is an is an IT expert.<br> He has been working with me for more than 5 years now meaning he has got a 5 years experience..
                                </p> </strong>
                                <div>
                                    <span>Status of current project:</span>
                                    <div class="stat-percent">48%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 48%;" class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="row  m-t-sm">
                                    <div class="col-sm-4">
                                        <div class="font-bold">PROJECTS</div>
                                        12
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="font-bold">RANKING</div>
                                        4th
                                    </div>
                                    <div class="col-sm-4 text-right">
                                        <div class="font-bold">BUDGET</div>
                                        $200,913 <i class="fa fa-level-up text-navy"></i>
                                    </div>
                                </div>
    </div>
  </div>
</div>

      </div>



   <!--  <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Teams board</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php"  style="color: blue;>Home</a>
                        </li>
                        <li>
                            <a  style="color: blue;>App views</a>
                        </li>
                        <li class="active" style="color: blue;">
                            <strong>Teams board</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>

            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ibox">
                            <div class="ibox-title">
                               <!-- <span class="label label-primary pull-right">NEW</span>
                                <h5>IT- Consultance--Erastus</h5> -->
                        <!--    </div>
                            <div class="ibox-content">
                                <div class="team-members">
                                  <!--  <div class="chip">
                                       <a href="#"><img alt="member"  alt="image description"   src="/eras/as/image/12.png"></a>
                                    </div>
                                        
                                       <img src="/eras/as/image/12.png" class="img-circle" alt=" image description " style="width:60px;height:60px;"> -->
                                        
                                  <!--     <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/12.png"?>" alt="image description" width="40" height="40">     -->   
    
                                    <!--   <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/12.png"?>" alt="image description" width="40" height="40">        
                                       <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/12.png"?>" alt="image description" width="40" height="40">        
                                       <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/12.png"?>" alt="image description" width="40" height="40">    -->    
                                </div>


   <!-- <div class="service-block col-md-4">
             <div class="flip-card">
           <div class="flip-card-inner">
        <div class="flip-card-front">
                 Erastus Muriithi

             <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/12.png"?>" alt="image description" style="width:300px;height:300px;"> 
       </div>
        <div class="flip-card-back">
      <strong>
                                <h4  style="color: white;>Info about Erastus</h4>
                                <p  style="color: blue;>
                                    Erastus Muriithi is an is an IT expert.<br> He has been working with me for more than 5 years now meaning he has got a 5 years experience..
                                </p> </strong>
                                <div>
                                    <span>Status of current project:</span>
                                    <div class="stat-percent">48%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 48%;" class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="row  m-t-sm">
                                    <div class="col-sm-4">
                                        <div class="font-bold">PROJECTS</div>
                                        12
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="font-bold">RANKING</div>
                                        4th
                                    </div>
                                    <div class="col-sm-4 text-right">
                                        <div class="font-bold">BUDGET</div>
                                        $200,913 <i class="fa fa-level-up text-navy"></i>
                                    </div>
                                </div>
    </div>
  </div>
</div>

      </div> <br> <br>



    <div class="service-block col-md-4">
             <div class="flip-card">
           <div class="flip-card-inner">
        <div class="flip-card-front">
                 Erastus Muriithi

             <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/12.png"?>" alt="image description" style="width:300px;height:300px;"> 
       </div>
        <div class="flip-card-back">
      <strong>
                                <h4  style="color: white;>Info about Erastus</h4>
                                <p  style="color: blue;>
                                    Erastus Muriithi is an is an IT expert.<br> He has been working with me for more than 5 years now meaning he has got a 5 years experience..
                                </p> </strong>
                                <div>
                                    <span>Status of current project:</span>
                                    <div class="stat-percent">48%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 48%;" class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="row  m-t-sm">
                                    <div class="col-sm-4">
                                        <div class="font-bold">PROJECTS</div>
                                        12
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="font-bold">RANKING</div>
                                        4th
                                    </div>
                                    <div class="col-sm-4 text-right">
                                        <div class="font-bold">BUDGET</div>
                                        $200,913 <i class="fa fa-level-up text-navy"></i>
                                    </div>
                                </div>
    </div>
  </div>
</div>

      </div> <br> <br>   
                               
                                
                               
                                



                             <!--   <div class="row  m-t-sm">
                                    
                                    
                                </div>

                            </div>
                        </div>
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5 style="color: blue;">Hacker-Jeff Mwangi</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="team-members">
                                <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/15.JPG"?>" alt="image description" width="40" height="40">        
                                 <!--   <a href="#"><img alt="member" class="img-circle" src="img/a5.jpg"></a>
                                    <a href="#"><img alt="member" class="img-circle" src="img/a6.jpg"></a>
                                    <a href="#"><img alt="member" class="img-circle" src="img/a8.jpg"></a>
                                    <a href="#"><img alt="member" class="img-circle" src="img/a7.jpg"></a>
                                -->
                             <!--   </div>
                                <h4 style="color: blue;">Info about Jeff</h4>
                                <p>
                                    Jeff Mwangi is one of our best hacker,he always make sure that our hosted website are save from intruders.
                                </p>
                                <div>
                                    <span>Status of current project:</span>
                                    <div class="stat-percent">32%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 32%;" class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="row  m-t-sm">
                                    <div class="col-sm-4">
                                        <div class="font-bold">PROJECTS</div>
                                        24
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="font-bold">RANKING</div>
                                        3th
                                    </div>
                                    <div class="col-sm-4 text-right">
                                        <div class="font-bold">BUDGET</div>
                                        $190,325 <i class="fa fa-level-up text-navy"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="ibox">
                           <!-- <div class="ibox-title">
                                <h5>IT-07 - Finance Team</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="team-members">
                                    <a href="#"><img alt="member" class="img-circle" src="img/a4.jpg"></a>
                                    <a href="#"><img alt="member" class="img-circle" src="img/a8.jpg"></a>
                                    <a href="#"><img alt="member" class="img-circle" src="img/a7.jpg"></a>
                                </div>
                                <h4>Info about Design Team</h4>
                                <p>
                                    Uncover many web sites still in their infancy. Various versions have evolved over
                                    the years, sometimes by accident, sometimes on purpose (injected humour and the
                                    like).
                                </p>
                                <div>
                                    <span>Status of current project:</span>
                                    <div class="stat-percent">73%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 73%;" class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="row  m-t-sm">
                                    <div class="col-sm-4">
                                        <div class="font-bold">PROJECTS</div>
                                        11
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="font-bold">RANKING</div>
                                        6th
                                    </div>
                                    <div class="col-sm-4 text-right">
                                        <div class="font-bold">BUDGET</div>
                                        $560,105 <i class="fa fa-level-up text-navy"></i>
                                    </div>
                                </div>

                    <!--        </div> -->
                        </div>
                    </div> 
                   <!-- <div class="col-lg-4">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Marketer-Carol Twish</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="team-members">
                                    <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/1.jpg"?>" alt="image description" width="40" height="40">

                                 <!--   <a href="#"><img alt="member" class="img-circle" src="img/a8.jpg"></a>
                                    <a href="#"><img alt="member" class="img-circle" src="img/a4.jpg"></a>
                                    <a href="#"><img alt="member" class="img-circle" src="img/a1.jpg"></a>
                                -->
                               <!-- </div>
                                <h4>Info about Carol</h4>
                                <p>
                                    Twish is our market,she is very talented and also very hardworking. <br> She is one of the best girl in theSudo coders
                                </p>
                                <div>
                                    <span>Project Marketed:</span>
                                    <div class="stat-percent">61%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 61%;" class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="row  m-t-sm">
                                    <div class="col-sm-4">
                                        <div class="font-bold">PROJECTS</div>
                                        43
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="font-bold">RANKING</div>
                                        1th
                                    </div>
                                    <div class="col-sm-4 text-right">
                                        <div class="font-bold">BUDGET</div>
                                        $705,913 <i class="fa fa-level-up text-navy"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="ibox">
                            <div class="ibox-title">
                                <span class="label label-warning pull-right">DEADLINE</span>
                                <h5>Jeff Mungai-WEb desighner</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="team-members">
                                     <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/6.jpg"?>" alt="image description" width="40" height="40">
                                   <!-- <a href="#"><img alt="member" class="img-circle" src="img/a2.jpg"></a>
                                    <a href="#"><img alt="member" class="img-circle" src="img/a6.jpg"></a>
                                    <a href="#"><img alt="member" class="img-circle" src="img/a3.jpg"></a>
                                    <a href="#"><img alt="member" class="img-circle" src="img/a4.jpg"></a>
                                    <a href="#"><img alt="member" class="img-circle" src="img/a7.jpg"></a>
                                -->
                            <!--    </div>
                                <h4>Info about Jeff Mungai</h4>
                                <p>
                                    Jeff Mungai is oue web developer,he is a genious when it come to web desighning..<br> He is a graet Puncher
                                </p>
                                <div>
                                    <span>Status of current project:</span>
                                    <div class="stat-percent">14%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 14%;" class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="row  m-t-sm">
                                    <div class="col-sm-4">
                                        <div class="font-bold">PROJECTS</div>
                                        8
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="font-bold">RANKING</div>
                                        7th
                                    </div>
                                    <div class="col-sm-4 text-right">
                                        <div class="font-bold">BUDGET</div>
                                        $40,200 <i class="fa fa-level-up text-navy"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="ibox"> -->
                           <!-- <div class="ibox-title">
                                <h5>IT-08 - Lorem ipsum Team</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="team-members">
                                    <a href="#"><img alt="member" class="img-circle" src="img/a1.jpg"></a>
                                    <a href="#"><img alt="member" class="img-circle" src="img/a8.jpg"></a>
                                    <a href="#"><img alt="member" class="img-circle" src="img/a3.jpg"></a>
                                    <a href="#"><img alt="member" class="img-circle" src="img/a7.jpg"></a>
                                </div>
                                <h4>Info about Design Team</h4>
                                <p>
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their.
                                    ometimes by accident, sometimes on purpose (injected humour and the like).
                                </p>
                                <div>
                                    <span>Status of current project:</span>
                                    <div class="stat-percent">25%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 25%;" class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="row  m-t-sm">
                                    <div class="col-sm-4">
                                        <div class="font-bold">PROJECTS</div>
                                        25
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="font-bold">RANKING</div>
                                        4th
                                    </div>
                                    <div class="col-sm-4 text-right">
                                        <div class="font-bold">BUDGET</div>
                                        $140,105 <i class="fa fa-level-up text-navy"></i>
                                    </div>
                                </div>

                            </div> -->
                    <!--    </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox">
                            <div class="ibox-title">

                                <h5>Android Master-Gachoki</h5>
                            </div>
                            <div class="ibox-con">
                                <div class="team-members">
                                  <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/e.jpg"?>" alt="image description" width="40" height="40">
                                   <!-- <a href="#"><img alt="member" class="img-circle" src="img/a4.jpg"></a>
                                    <a href="#"><img alt="member" class="img-circle" src="img/a7.jpg"></a>
                                    <a href="#"><img alt="member" class="img-circle" src="img/a2.jpg"></a>
                                -->
                           <!--     </div>
                                <h4>Info about Gachoki</h4>
                                <p>
                                    Very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum
                                    dolor sit amet..", comes from a line in section 1.10.32.
                                </p>
                                <div>
                                    <span>Status of current project:</span>
                                    <div class="stat-percent">82%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 82%;" class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="row  m-t-sm">
                                    <div class="col-sm-4">
                                        <div class="font-bold">PROJECTS</div>
                                        68
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="font-bold">RANKING</div>
                                        2th
                                    </div>
                                    <div class="col-sm-4 text-right">
                                        <div class="font-bold">BUDGET</div>
                                        $701,400 <i class="fa fa-level-up text-navy"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Android Master-Gachoki</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="team-members">
                                     <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/e.jpg"?>" alt="image description" width="40" height="40">
                                   <!-- <a href="#"><img alt="member" class="img-circle" src="img/a2.jpg"></a>
                                    <a href="#"><img alt="member" class="img-circle" src="img/a4.jpg"></a>
                                    <a href="#"><img alt="member" class="img-circle" src="img/a7.jpg"></a>
                                    <a href="#"><img alt="member" class="img-circle" src="img/a8.jpg"></a>
                                -->
                            <!--    </div>
                                <h4>Info about Design Team</h4>
                                <p>
                                    Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also
                                    reproduced in their exact original form, accompanied by English versions from the
                                    1914 translation by H. Rackham.
                                </p>
                                <div>
                                    <span>Status of current project:</span>
                                    <div class="stat-percent">26%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 26%;" class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="row  m-t-sm">
                                    <div class="col-sm-4">
                                        <div class="font-bold">PROJECTS</div>
                                        16
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="font-bold">RANKING</div>
                                        8th
                                    </div>
                                    <div class="col-sm-4 text-right">
                                        <div class="font-bold">BUDGET</div>
                                        $160,100 <i class="fa fa-level-up text-navy"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="ibox">
                           <!-- <div class="ibox-title">
                                <h5>IT-09 - Modern Team</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="team-members">
                                    <a href="#"><img alt="member" class="img-circle" src="img/a2.jpg"></a>
                                    <a href="#"><img alt="member" class="img-circle" src="img/a3.jpg"></a>
                                    <a href="#"><img alt="member" class="img-circle" src="img/a8.jpg"></a>
                                    <a href="#"><img alt="member" class="img-circle" src="img/a6.jpg"></a>
                                    <a href="#"><img alt="member" class="img-circle" src="img/a7.jpg"></a>
                                </div>
                                <h4>Info about Design Team</h4>
                                <p>
                                    Words which don't look even slightly believable. If you are going to use a passage
                                    of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in.
                                </p>
                                <div>
                                    <span>Status of current project:</span>
                                    <div class="stat-percent">18%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 18%;" class="progress-bar"></div>
                                    </div>
                                </div>
                                <div class="row  m-t-sm">
                                    <div class="col-sm-4">
                                        <div class="font-bold">PROJECTS</div>
                                        53
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="font-bold">RANKING</div>
                                        9th
                                    </div>
                                    <div class="col-sm-4 text-right">
                                        <div class="font-bold">BUDGET</div>
                                        $60,140 <i class="fa fa-level-up text-navy"></i>
                                    </div>
                                </div>

                            </div> -->
                      <!--  </div>
                    </div>
                </div> -->


         


    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>








  <!--  <div id="wrapper">

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                                <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David
                                            Williams</strong>
                                    </span> <span class="text-muted text-xs block">Art Director <b
                                            class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>
                                <li><a href="login.html">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span>
                            <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="index.html">Dashboard v.1</a></li>
                            <li><a href="dashboard_2.html">Dashboard v.2</a></li>
                            <li><a href="dashboard_3.html">Dashboard v.3</a></li>
                            <li><a href="dashboard_4_1.html">Dashboard v.4</a></li>
                            <li><a href="dashboard_5.html">Dashboard v.5 </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="layouts.html"><i class="fa fa-diamond"></i> <span class="nav-label">Layouts</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Graphs</span><span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="graph_flot.html">Flot Charts</a></li>
                            <li><a href="graph_morris.html">Morris.js Charts</a></li>
                            <li><a href="graph_rickshaw.html">Rickshaw Charts</a></li>
                            <li><a href="graph_chartjs.html">Chart.js</a></li>
                            <li><a href="graph_chartist.html">Chartist</a></li>
                            <li><a href="c3.html">c3 charts</a></li>
                            <li><a href="graph_peity.html">Peity Charts</a></li>
                            <li><a href="graph_sparkline.html">Sparkline Charts</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Mailbox
                            </span><span class="label label-warning pull-right">16/24</span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="mailbox.html">Inbox</a></li>
                            <li><a href="mail_detail.html">Email view</a></li>
                            <li><a href="mail_compose.html">Compose email</a></li>
                            <li><a href="email_template.html">Email templates</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="metrics.html"><i class="fa fa-pie-chart"></i> <span class="nav-label">Metrics</span>
                        </a>
                    </li>
                    <li>
                        <a href="widgets.html"><i class="fa fa-flask"></i> <span class="nav-label">Widgets</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Forms</span><span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="form_basic.html">Basic form</a></li>
                            <li><a href="form_advanced.html">Advanced Plugins</a></li>
                            <li><a href="form_wizard.html">Wizard</a></li>
                            <li><a href="form_file_upload.html">File Upload</a></li>
                            <li><a href="form_editors.html">Text Editor</a></li>
                            <li><a href="form_autocomplete.html">Autocomplete</a></li>
                            <li><a href="form_markdown.html">Markdown</a></li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">App Views</span> <span
                                class="pull-right label label-primary">SPECIAL</span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="profile_2.html">Profile v.2</a></li>
                            <li><a href="contacts_2.html">Contacts v.2</a></li>
                            <li><a href="projects.html">Projects</a></li>
                            <li><a href="project_detail.html">Project detail</a></li>
                            <li class="active"><a href="teams_board.html">Teams board</a></li>
                            <li><a href="social_feed.html">Social feed</a></li>
                            <li><a href="clients.html">Clients</a></li>
                            <li><a href="full_height.html">Outlook view</a></li>
                            <li><a href="vote_list.html">Vote list</a></li>
                            <li><a href="file_manager.html">File manager</a></li>
                            <li><a href="calendar.html">Calendar</a></li>
                            <li><a href="issue_tracker.html">Issue tracker</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="article.html">Article</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="timeline.html">Timeline</a></li>
                            <li><a href="pin_board.html">Pin board</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span><span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="search_results.html">Search results</a></li>
                            <li><a href="lockscreen.html">Lockscreen</a></li>
                            <li><a href="invoice.html">Invoice</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="login_two_columns.html">Login v.2</a></li>
                            <li><a href="forgot_password.html">Forget password</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="404.html">404 Page</a></li>
                            <li><a href="500.html">500 Page</a></li>
                            <li><a href="empty_page.html">Empty page</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-globe"></i> <span class="nav-label">Miscellaneous</span><span
                                class="label label-info pull-right">NEW</span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="toastr_notifications.html">Notification</a></li>
                            <li><a href="nestable_list.html">Nestable list</a></li>
                            <li><a href="agile_board.html">Agile board</a></li>
                            <li><a href="timeline_2.html">Timeline v.2</a></li>
                            <li><a href="diff.html">Diff</a></li>
                            <li><a href="pdf_viewer.html">PDF viewer</a></li>
                            <li><a href="i18support.html">i18 support</a></li>
                            <li><a href="sweetalert.html">Sweet alert</a></li>
                            <li><a href="idle_timer.html">Idle timer</a></li>
                            <li><a href="truncate.html">Truncate</a></li>
                            <li><a href="spinners.html">Spinners</a></li>
                            <li><a href="tinycon.html">Live favicon</a></li>
                            <li><a href="google_maps.html">Google maps</a></li>
                            <li><a href="datamaps.html">Datamaps</a></li>
                            <li><a href="social_buttons.html">Social buttons</a></li>
                            <li><a href="code_editor.html">Code editor</a></li>
                            <li><a href="modal_window.html">Modal window</a></li>
                            <li><a href="clipboard.html">Clipboard</a></li>
                            <li><a href="forum_main.html">Forum view</a></li>
                            <li><a href="validation.html">Validation</a></li>
                            <li><a href="tree_view.html">Tree view</a></li>
                            <li><a href="loading_buttons.html">Loading buttons</a></li>
                            <li><a href="chat_view.html">Chat view</a></li>
                            <li><a href="masonry.html">Masonry</a></li>
                            <li><a href="tour.html">Tour</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">UI Elements</span><span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="icons.html">Icons</a></li>
                            <li><a href="draggable_panels.html">Draggable Panels</a></li>
                            <li><a href="resizeable_panels.html">Resizeable Panels</a></li>
                            <li><a href="buttons.html">Buttons</a></li>
                            <li><a href="video.html">Video</a></li>
                            <li><a href="tabs_panels.html">Panels</a></li>
                            <li><a href="tabs.html">Tabs</a></li>
                            <li><a href="notifications.html">Notifications & Tooltips</a></li>
                            <li><a href="helper_classes.html">Helper css classes</a></li>
                            <li><a href="badges_labels.html">Badges, Labels, Progress</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="grid_options.html"><i class="fa fa-laptop"></i> <span class="nav-label">Grid
                                options</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Tables</span><span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="table_basic.html">Static Tables</a></li>
                            <li><a href="table_data_tables.html">Data Tables</a></li>
                            <li><a href="table_foo_table.html">Foo Tables</a></li>
                            <li><a href="jq_grid.html">jqGrid</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">E-commerce</span><span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="ecommerce_products_grid.html">Products grid</a></li>
                            <li><a href="ecommerce_product_list.html">Products list</a></li>
                            <li><a href="ecommerce_product.html">Product edit</a></li>
                            <li><a href="ecommerce_product_detail.html">Product detail</a></li>
                            <li><a href="ecommerce-cart.html">Cart</a></li>
                            <li><a href="ecommerce-orders.html">Orders</a></li>
                            <li><a href="ecommerce_payments.html">Credit Card form</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">Gallery</span><span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="basic_gallery.html">Lightbox Gallery</a></li>
                            <li><a href="slick_carousel.html">Slick Carousel</a></li>
                            <li><a href="carousel.html">Bootstrap Carousel</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Menu Levels </span><span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>

                                </ul>
                            </li>
                            <li><a href="#">Second Level Item</a></li>
                            <li>
                                <a href="#">Second Level Item</a></li>
                            <li>
                                <a href="#">Second Level Item</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="css_animation.html"><i class="fa fa-magic"></i> <span class="nav-label">CSS Animations
                            </span><span class="label label-info pull-right">62</span></a>
                    </li>
                    <li class="landing_link">
                        <a target="_blank" href="landing.html"><i class="fa fa-star"></i> <span
                                class="nav-label">Landing Page</span> <span
                                class="label label-warning pull-right">NEW</span></a>
                    </li>
                    <li class="special_link">
                        <a href="package.html"><i class="fa fa-database"></i> <span class="nav-label">Package</span></a>
                    </li>
                </ul>

            </div>
        </nav> -->

       <!-- <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i
                                class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" action="search_results.html">
                            <div class="form-group">
                                <input type="text" placeholder="Search for something..." class="form-control"
                                    name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-envelope"></i> <span class="label label-warning">16</span>
                            </a>
                            <ul class="dropdown-menu dropdown-messages">
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/a7.jpg">
                                        </a>
                                        <div class="media-body">
                                            <small class="pull-right">46h ago</small>
                                            <strong>Mike Loreipsum</strong> started following <strong>Monica
                                                Smith</strong>. <br>
                                            <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/a4.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy">5h ago</small>
                                            <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica
                                                Smith</strong>. <br>
                                            <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/profile.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">23h ago</small>
                                            <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                            <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a href="mailbox.html">
                                            <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-bell"></i> <span class="label label-primary">8</span>
                            </a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <li>
                                    <a href="mailbox.html">
                                        <div>
                                            <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                            <span class="pull-right text-muted small">4 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="profile.html">
                                        <div>
                                            <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                            <span class="pull-right text-muted small">12 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="grid_options.html">
                                        <div>
                                            <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                            <span class="pull-right text-muted small">4 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a href="notifications.html">
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a href="login.html">
                                <i class="fa fa-sign-out"></i> Log out
                            </a>
                        </li>
                    </ul>

                </nav>
            </div> -->
            <style>

 #team {
    background: #eee !important;
}               
.panel-body:after {
  content: "";
  display: table;
  clear: both;
}
section1 {

  
  backgroundcolor: red;
  
}
p2{
  color: white;
}

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}


</style>
           

</body>

</html>
