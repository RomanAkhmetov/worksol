<?php
namespace app\models\cabinet;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class Priorities extends \yii\db\ActiveRecord
{

	public static function tableName()
	{
		return 'priorities'; 
	}
	public static function getAll()
	{
		$data = self::find()->all();
		return $data;
	}
}