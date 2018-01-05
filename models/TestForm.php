<?php

namespace app\models;
use yii\db\ActiveRecord;

class TestForm extends ActiveRecord 
{
	public static function tableName()
	{
		return 'posts';
	}
	
	public function attributeLabels()
	{
		return [
			'name' => 'Імя',
			'email' => 'E-mail',
			'name' => 'Текст повідомлення',
		];
	}

	public function rules()
	{
		return[
			[ ['name','text'],'required' ],
			['email','email'],
		];
	}

	
}