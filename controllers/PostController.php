<?php 
namespace app\controllers;
use Yii;
class PostController extends AppController
{
	 public function actionTest()
	 {
	 	$names = ['Ivanov','Petrov','Sidorov'];
	 
	 	//$this->debug(Yii::$app);
	 	//var_dump(Yii::$app);die;
	 	return $this->render('test');
	 }
}