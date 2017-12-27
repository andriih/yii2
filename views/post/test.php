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
	<?php $form = ActiveForm::begin(['options'=>['id' => 'testForm']]) ?>
		<?= $form->field($model, 'name')->label('Імя') ?>
		<?= $form->field($model, 'email') ?>
		<?= $form->field($model, 'text')->label('Текст повідомлення')->textarea(['rows'=>5]) ?>
		<?= Html::submitButton('Send',['class'=>'btn btn-success']) ?>
	<?php $form = ActiveForm::end() ?>
</body>
</html>

