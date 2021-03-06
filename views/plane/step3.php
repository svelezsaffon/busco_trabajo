<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use lo\widgets\modal\ModalAjax;

?>

<style type="text/css">
	.list-group-item {
background-color: transparent;
border: 0px solid #ddd;
}
</style>

<div class="container">

	<h3 class="text-center">Seleciona la direccion donde el servicio sera realizado</h3>

	<?php	
	$dires=array();
	$index=0;
	foreach ($direcciones as $servicioe){
		$dires[$index]=$servicioe;
		$index=$index+1;
	}

	if($index > 0){
		echo '<ul class="media-list">';
		echo $form->field($model, 'direccion')->radioList(
			$dires	,
			['item' => function ($index, $label, $name, $checked, $value) {
				return
				'
				<div class="row well">
					<div class="col-md-10">
					
					<li class="media">
    					<div class="media-left">
      						<a>
        						<img class="media-object" src="https://maps.googleapis.com/maps/api/staticmap?center='.$label->puntos_referencia.'&markers=color:green|label:S|'.$label->puntos_referencia.'&zoom=18&size=250x130&maptype=roadmap&key=AIzaSyD5BJZw2s9kaHkVsAoODp5i1xkfet2-wsI">	
      						</a>
    					</div>
    					<div class="media-body">
      						<h4 class="media-heading">'.$label->nombre.'</h4>
      						<ul class="list-group">
  								<li class="list-group-item" > <strong>Direccion:</strong> '.$label->direccion.'</li>
  								<li class="list-group-item"><strong>Recibe:</strong> '.$label->quien_recibe.'</li>
							</ul>
    					</div>
  					</li>
  					</div>

  					<div class="col-md-2">
  					'.\yii\bootstrap\Html::radio($name, $checked,['value' => $label->id,'onclick'=>"verify_all_step3_planes()",'label' => 'Seleccionar',]).'
  					</div>

				</div>	
				';
			}]
			)->label(false);
		echo '</ul>';
		}else{ ?>
		<div class="jumbotron">
			<div class="alert alert-danger" role="alert">
				<div class="row">
					<div class="col-md-12">
						<h2> aun no tienes direcciones creadas, porfavor crea una </h2>
					</div>
				</div>
				<div class="row">
				 	<div class="col-md-12">
						<?=Html::a('Crear direccion', ['/direccion/create'], ['class'=>' btn btn-danger'])?>
					</div>					
				</div>
			</div> 
		</div>

		<?php
		}	
		?>

</div>


<div class="alert alert-danger" id="meserv3" role="alert">
  <h3>Debes selecionar una direccion</h3>
</div>