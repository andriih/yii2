<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Document</title>
	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
	<div class="wrap">
		<div class="container">
			<ul class="nav nav-pills">
			  <li role="presentation" class="active" ><?= Html::a('Головна',"/") ?></li>
			  <li role="presentation"><?= Html::a('Статті',['post/index']) ?></li>
			  <li role="presentation"><?= Html::a('Стаття',['post/show']) ?></li>
			</ul>

			<?= $content; ?>
		</div>
	</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>