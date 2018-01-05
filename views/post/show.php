<?php 
	use app\components\MyWidget;
?>

<?php $this->beginBlock('block1'); ?>
	<h1>Заголовок сторінки</h1>
<?php $this->endBlock(); ?>

<h1>Show  Action</h1>

<?php MyWidget::begin() ?>
	<h1>Привіт світ!</h1>
<?php MyWidget::end() ?>


<?php 
	// foreach($cats as $cat)
	// {
	// 	echo '<ul>';
	// 		echo '<li>'. $cat->title .'</li>';
	// 		$products = $cat->products;
	// 		foreach ($products as $product) {
	// 			echo '<ul>';
	// 				echo '<li>'. $product->title .'</li>';
	// 			echo '</ul>';
	// 		}
	// 	echo '</ul>';
	// }
?>

<button class="btn btn-success" id="btn">Click me...</button>

<?php 

	//$this->registerJsFile('@web/js/script.js',['depends' => 'yii\web\YiiAsset']);
	//$this->registerCss('.container{background: #ccc;}');
?>

<?php 
	$js = <<<JS

	$('#btn').on('click',function(){
		$.ajax({
			url: 'index.php?r=post/index',
			data: {test: '123'},
			type: 'POST',
			success: function(res){
				console.log(res);
			},
			error: function(){
				alert('Error');
			}
		});
	});
JS;

$this->registerJs($js);
?>