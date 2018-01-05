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
<html lang=" <?= Yii::$app->language ?>">
<head>
	<meta charset="UTF-8">
	
	<title><?= $this->title ?></title>
	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
	<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'Articles', 'url' => ['/post/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>
	<div class="wrap">
		<div class="container">
			<ul class="nav nav-pills">
			  <li role="presentation" class="active" ><?= Html::a('Головна',"/") ?></li>
			  <li role="presentation"><?= Html::a('Статті',['post/index']) ?></li>
			  <li role="presentation"><?= Html::a('Стаття',['post/show']) ?></li>
			</ul>
			
			<?php if (isset($this->blocks['block1'])): ?>
					<?php echo $this->blocks['block1'] ?>
			<?php endif ?>
			
			<?= $content; ?>
		</div>
	</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>