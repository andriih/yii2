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
			// ['name','string','min'=>2,'tooShort'=>'Too short...'],
			// ['name','string','max'=>5,'tooLong' => 'Too long....']
			[ 'name', 'string','length'=>[2,5] ],
			['name','myRule'],
			['text','safe'],
		];
	}

	public function myRule($attr)
	{
		if(!in_array($this->$attr, ['hello','world']))
		{
			$this->addError($attr," no hello world");
		}
	}
}