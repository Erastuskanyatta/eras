<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tel-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'email:email',
            'subject',
            'message',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
