<?php

namespace app\models\cabinet;

use Yii;
use yii\base\Model;
use app\models\cabinet\Tasks;

class CreateForm extends Model{
    
    public $title;
    public $desc;
    public $project_id;
    public $creator_id;
    public $priority;
    public $category;
    public $creating_time;
    public $updating_time;
    public $deadline;
    public $file;
    
    
    public function rules(){
        return[
            [['title','desc','project_id','priority','category','deadline'],'required'],
            ['title','required','message'=>'Заполните это поле']
            //['title','required','message'=>'Звполните это поле']
                

        ];
    }
    
    
    
    
    public function create($creator_id){
        $task=new Tasks();
        $task->task_title=$this->title;
        $task->task_description=$this->desc;
        $task->creator_user_id=$creator_id;
        $task->project_id=$this->project_id;
        $task->priority=$this->priority;
        $task->category=$this->category;
        $task->creating_time=date("Y-m-d H:i:s");   
        $task->updating_time=date("Y-m-d H:i:s");   
        $task->deadline_time=$this->deadline;
        $task->task_status='Новая';
        
        

                
        return $task->save(true);
    }
    
}

