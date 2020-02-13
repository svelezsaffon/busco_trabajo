<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ciudades */

$this->title = 'Create Ciudades';
$this->params['breadcrumbs'][] = ['label' => 'Ciudades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ciudades-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
