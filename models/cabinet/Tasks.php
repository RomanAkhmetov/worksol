<?php
namespace app\models\cabinet;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yii\web\UploadedFile;

class Tasks extends \yii\db\ActiveRecord
{

	public static function tableName()
	{
		return 'tasks'; //Возвращает название таблицы в БД
	}
	public static function getAll()
	{
		$data = self::find()->all(); //Возвращает результат выборки всех задач
		return $data;
	}
        
        
        /**
         * Возвращает связанную инфурмацию о задаче для загрузки по её id
         * 
         * @param type $id
         * @return array
         */
        public function getTaskInfo($id){
            
            $data=Yii::$app->db->createCommand("SELECT task_title,task_description,category,deadline_time,task_status,priority FROM `tasks`  where tasks.id=$id")->queryOne();
            $manager=Yii::$app->db->createCommand("SELECT fullname,position,email,skype FROM workers INNER JOIN Tasks ON workers.id=tasks.manager_teamuser_id where tasks.id=$id")->queryAll();
            $priority=Yii::$app->db->createCommand("SELECT priority_title from tasks inner join priorities ON priorities.id=priority where tasks.id=$id")->queryOne()   ; 
            $category=Yii::$app->db->createCommand("SELECT category_title from tasks inner join categories ON categories.id=category where tasks.id=$id")->queryOne();
            $data['category']=$category['category_title'];
            $data['priority']=$priority['priority_title'];
            $data['manager']=$manager[0];
            
            
          
            
            
            //Преобразование даты
            $date =  Yii::$app->formatter->asDatetime($data['deadline_time'],"php:d.m.Y");

            
            
//            $d1=date('d-m-Y');
//            $SelectDate = date('d/m/Y', strtotime($d1));
           $data['deadline_time']=$date;
            
            
            
            
             
                return $data;
        }
}