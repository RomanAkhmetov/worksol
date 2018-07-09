<?php
namespace app\models\cabinet;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yii\web\UploadedFile;

class Files extends \yii\db\ActiveRecord
{

	public static function tableName()
	{
		return 'files'; //Возвращает название таблицы в БД
	}
	public static function getAll()
	{
		$data = self::find()->all(); //Возвращает результат выборки всех задач
		return $data;
	}
        
        
}
        