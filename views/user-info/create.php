<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UserInfo */

$this->title = 'Actualizar mi perfil';
$this->params['breadcrumbs'][] = ['label' => 'User Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
