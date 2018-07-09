<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use dosamigos\datetimepicker\DateTimePicker;
use nex\datepicker\DatePicker;
use kartik\file\FileInput;



$this->title = 'Новая задача';
?>



<?php $form = ActiveForm::begin([
	'id' => 'create-form',
	'layout' => 'horizontal',
	'fieldConfig' => [
		'template' => "{input}",
		'options' => [
			//'tag'=>'span'
                    'enctype' => 'multipart/form-data','tag'=>'span'
		]
]
]); 


?>


    <div class='container'>

 
        <div class="form-group">
       
                    <?= $form->field($model, 'title')->textInput(['placeholder'=>'Заголовок'])->label(""); ?>    
          
        </div>

             <div class="form-group">
             
                    <?= $form->field($model, 'desc')->textInput(['placeholder'=>'Описание'])->label(""); ?>    
            
        </div>


             <div class="form-group">
           
                <?= $form->field($model, 'project_id')->dropDownList(ArrayHelper::map($projects,'id','name'),['prompt' => 'Выберите проект']);?>
           
        </div>

         <div class="form-group">
            
                <?=$form->field($model, 'priority')->dropDownList(ArrayHelper::map($priorities,'id','priority_title'),['prompt' => 'Выберите приоритет']); ?>
            
        </div>

    <div class="form-group">
            
                <?=$form->field($model, 'category')->dropDownList([
                    '1'=>'Доработка',
                    '2'=>'Баг',
                    '3'=>'Консультация',
                    '4'=>'Оценка',
                    '5'=>'Не применимо'
                ],['prompt' => 'Выберите категорию']); ?>
            
        </div>




             <div class="form-group">
<?= $form->field($model, 'deadline')->widget(
    'trntv\yii\datetime\DateTimeWidget',
    [
        'phpDatetimeFormat' => 'yyyy-MM-dd\'T\'HH:mm:ssZZZZZ',
        'clientOptions' => [
            'minDate' => new \yii\web\JsExpression('new Date("2015-01-01")'),
            'allowInputToggle' => false,
            'sideBySide' => true,
            'locale' => 'zh-cn',
            'widgetPositioning' => [
               'horizontal' => 'auto',
               'vertical' => 'auto'
            ]
        ]
    ]
) ?>

            </div>
        



        <div class="form-group">
              <?=$form->field($uploadModel, 'fileToUpload')->fileInput(['multiple' => true, 'accept' => 'doc/*'])?>
        </div>
        
        
        
        
        
        
        
        
        
        
        
       


            <div class="form-group">
                    <div class="col-lg-offset-1 col-lg-11">
                            <?= Html::submitButton('Создать', ['class' => 'button button-primary', 'name' => 'login-button']) ?>
                    </div>

            </div>
        
    

<?php ActiveForm::end(); ?>
   </div>
    
    
    





