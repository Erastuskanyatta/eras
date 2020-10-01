<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Tel */

$this->title = 'Create Tel';
$this->params['breadcrumbs'][] = ['label' => 'Tels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
