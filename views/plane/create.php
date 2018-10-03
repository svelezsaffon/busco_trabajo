<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Plane */

$this->title = 'Create Plane';
$this->params['breadcrumbs'][] = ['label' => 'Planes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plane-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,'allServicios'=>$allServicios,'direccionesModel'=>$direccionesModel,'trabajadorModel'=>$trabajadorModel
    ]) ?>

</div>
