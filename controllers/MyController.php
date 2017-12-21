<?php

namespace app\controllers;

class MyController extends AppController
{
    public function actionIndex($id=null)
    {
    	if(!$id){ $id = "test";}
        $names = ['Ivanov','Petrov','Sidorov'];
        $hi = 'Hello World';
        //return $this->render('index',['hello'=>$hi,'names' => $names]);
        return $this->render('index',compact('hi','names','id'));
    }

    public function actionBlogPost()
	{
		return "blog";
	}
}
