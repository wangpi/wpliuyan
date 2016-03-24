<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

class UserForm extends ActiveRecord
{
	public static function tableName(){
		return 'message';
	}
}