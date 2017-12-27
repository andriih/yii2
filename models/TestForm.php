<?php

namespace app\models;
use yii\base\Model;

class TestForm extends Model 
{
	public $name;
	public $email;
	public $text;

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
			[ ['name','email'],'required' ],
			['email','email'],
			['name','string','min'=>2]
		];
	}
}