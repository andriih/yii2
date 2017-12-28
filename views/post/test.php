<?php 
	use yii\widgets\ActiveForm;
	use yii\helpers\Html;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h1>Test Action</h1>
	
	<?php if (Yii::$app->session->hasFlash('success') ): ?>
		<div class="alert alert-success alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<?php echo Yii::$app->session->getFlash('success'); ?>
		</div>
		
	<?php endif; ?>

	<?php if (Yii::$app->session->hasFlash('error') ): ?>
		<div class="alert alert-danger alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<?php echo Yii::$app->session->getFlash('error'); ?>
		</div>
	<?php endif; ?>

	<?php $form = ActiveForm::begin(['options'=>['id' => 'testForm']]) ?>
		<?= $form->field($model, 'name')->label('Імя') ?>
		<?= $form->field($model, 'email') ?>
		<?= $form->field($model, 'text')->label('Текст повідомлення')->textarea(['rows'=>5]) ?>
		<?= Html::submitButton('Send',['class'=>'btn btn-success']) ?>
	<?php $form = ActiveForm::end() ?>
</body>
</html>

