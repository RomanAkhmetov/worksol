<?php
namespace app\models\cabinet;

use yii\base\Model;
use yii\web\UploadedFile;
use app\models\cabinet\Files;

class Uploadform extends Model{
    public $fileToUpload;
    public $fileModel;
    
  public function __construct(){
      $this->fileToUpload=[];
  }
    
    
    
    
    
    
//      public function rules()
//    {
//        return [
//            [['imageFiles'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, doc, txt', 'maxFiles' => 4],
//        ];
//    }
//    
    
    
    
   public function upload($file){
       
       if($this->validate()){
       
//      $this->fileModel=new Files();
//      $this->fileToUpload=$file;
//      $this->fileModel->task=2;
//      $this->fileModel->file_title= uniqid("file_").'.'.$this->fileToUpload->extension;
//      $this->fileModel->file_desc=$this->fileToUpload->name;
//      
//      if($this->fileToUpload->saveAs('../source/'.$this->fileModel->file_title)){
//          return $this->fileModel->save();
//      }
           
           
//          $this->fileToUpload=$file; 
//       foreach($this->fileToUpload as $file){
//           $file->saveAs('../source/'.$this->fileModel->file_title);
//       }    
           
           
               
    }
    return false;
   }
   
}